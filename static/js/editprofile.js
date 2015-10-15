var memberLineCount = 1;

$(document).ready(function() {
    setupInstrumentData(setupMemberList);
    setupGenreData(setupGenres);
});

function setupMemberList() {
    var memberList = $("#member_list");
    
    // for exisiting remove member links
    $(".remove_member").on("click", function() {
        var thisId = $(this).attr("id");
        if(thisId != "") {
            var num = thisId.replace("remove_member_", "");
            removeMemberLine(num);
        }
    });
    
    
    var existingCount = memberList.find(".member_line").length;
    if(existingCount > 0) {
        memberLineCount = existingCount;
    }
    
    for(var i = memberLineCount; i <= memberLineCount; i++) {
        addMemberLine(i);
    }
    
    
    $("#member_list_add").click(function() {
        memberLineCount = memberLineCount + 1;
        addMemberLine(memberLineCount);
    });
}

function addMemberLine(num)
{
    var template = $('#member_tmpl').html();
    Mustache.parse(template);   // optional, speeds up future uses

    var rendered = Mustache.render(template, {num: num});
    $('#member_list').append(rendered);
    
    $("#member_" + num + " .instrument").typeahead({
        minLength: 1,
        highlight: true
    },
    {
        name: 'instruments',
        source: instruments,
        display: 'name',
        limit: 30
    });
    
    $("#remove_member_" + num).click(function() {
        removeMemberLine(num);
    });
    resetMemberLineAlts();
}

function removeMemberLine(num)
{
    $("#member_" + num).remove();
    resetMemberLineAlts();
}

function resetMemberLineAlts() {
    var memberList = $("#member_list");
    memberList.find(".member_line").removeClass("alt");
    memberList.find(".member_line").each(function(i, v) {
        if(i % 2 == 1) {
            $(this).addClass("alt");
        }
    });
}

function setupGenres() {
    var genresElem = $('#genres');
        genresElem.tagsinput({
            typeaheadjs: {
                name: 'genres',
                displayKey: 'name',
                valueKey: 'name',
                source: genres.ttAdapter(),
                limit: 60
            },
            freeInput: false
        });
    
    var genresOrdered = [];
    var allGenres = genres.all();
    for(var i = 0; i < allGenres.length; i++) {
        if(!allGenres[i].parent) {
            if(!genresOrdered[allGenres[i].name]) {
                genresOrdered[allGenres[i].name] = [];
            }
        }
        else {
            if(!genresOrdered[allGenres[i].parent]) {
                genresOrdered[allGenres[i].parent] = [];
            }
            
            genresOrdered[allGenres[i].parent].push({"subcat_name": allGenres[i].name, "subcat_num": genresOrdered[allGenres[i].parent].length});
        }
    }
    
    var template = $('#genre_tmpl').html();
    Mustache.parse(template);   // optional, speeds up future uses
    
    var catCount = 0;
    for(var i in genresOrdered) {
        if(typeof i === "string") {
            var rendered = Mustache.render(template, {num: catCount, cat_name: i, subcats: genresOrdered[i]});
            $('#genre_list').append(rendered);
            catCount++;
        }
    }
    
    $("#genresModal").on('show.bs.modal', function(e) {
        $("#genre_list input[type='checkbox']").prop("checked", false);
        var selectedGenres = $("#genres").tagsinput('items');
        for(var i = 0; i < selectedGenres.length; i++) {
            $("#genre_list").find("input[value='" + selectedGenres[i] + "']").prop("checked", "checked");
        }
    });
    
    $("#save_genres").on("click", function(e) {
        $("#genres").tagsinput('removeAll');
        $("#genre_list input[type='checkbox']:checked").each(function(item) {
            $("#genres").tagsinput('add', $(this).val());
        });
        $('#genresModal').modal('hide');
    });
}
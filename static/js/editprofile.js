var memberLineCount = 1;

$(document).ready(function() {
    setupMemberList();
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
    
    for(var i = memberLineCount; i <= (memberLineCount + 1); i++) {
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
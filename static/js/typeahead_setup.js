var instrumentJsonPath = basepath + "/static/js/json/instruments.json";

var genresJsonPath = basepath + "/static/js/json/genres.json";
var flatGenreArray = [];

var eventJsonPath = basepath + "/static/js/json/events.json";

var instruments = null;
var genres = null;
var events = null;

function setupInstrumentData(callback) {
    instruments = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
      queryTokenizer: Bloodhound.tokenizers.whitespace,
    });
    $.getJSON(instrumentJsonPath, function(json) {

        var instArray = [];
        if(json) {
            for(var i in json) {
                instArray.push({"name": json[i]});
            }
        }
        instruments.add(instArray);
        instruments.initialize();
        
        callback();
    });
}


function setupGenreData(callback) {
    $.getJSON(genresJsonPath, function(json) {
        if(json.genres) {
            for(var i in json.genres) {
                flatGenreArray.push({"name": json.genres[i].title});
                
                if(json.genres[i].children) {
                    for(var j in json.genres[i].children) {
                        flatGenreArray.push({"name": json.genres[i].children[j], "parent": json.genres[i].title});
                    }
                }
            }
        }
        
        genres = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
        });
        
        genres.add(flatGenreArray);
        
        genres.initialize();
        
        callback();
    });
}

function setupEventData(callback) {
    events = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
      queryTokenizer: Bloodhound.tokenizers.whitespace,
    });
    $.getJSON(eventJsonPath, function(json) {

        var eventArray = [];
        if(json) {
            for(var i in json) {
                eventArray.push({"name": json[i]});
            }
        }
        events.add(eventArray);
        events.initialize();
        
        callback();
    });
}

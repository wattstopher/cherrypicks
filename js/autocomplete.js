$(document).ready(function(){
// SEARCH
  $.getJSON("./categories.json", function(data){
    /********** Auto complete **********/
    var sourceArr = [];
    var ids = {};
    for (var i=0; i<data.length; i++) {
      sourceArr.push(data[i].name);
      ids[data[i].name] = data[i].id;
    }
    // https://gist.github.com/jharding/9458744#file-the-basics-js
    var substringMatcher = function(strs) {
      return function findMatches(q, cb) {
        var matches, substrRegex;
        matches = [];
        substrRegex = new RegExp(q, 'i');
        $.each(strs, function(i, str) {
          if (substrRegex.test(str)) {
            matches.push({ value: str });
          }
        });
        cb(matches);
      };
    };
    $('#cat-name').typeahead({
      highlight: true,
      minLength: 1
    },{
      name: "name",
      source: substringMatcher(sourceArr)
    }).on('typeahead:selected', function(event, data){
      $('#cat-id').val(ids[data.value]);        
    });
  });
});
$(document).ready(function() {

  var autoCompleteData = data.map(function(wrestler){
    return {
      label: wrestler.first_name ? wrestler.first_name + ' ' + wrestler.last_name : wrestler.last_name,
      game_name: wrestler.game.game_name,
      overall: wrestler.overall,
      id: wrestler.id
    }
  });

  $("input[name=wrestler-search]").autocomplete({
    source: autoCompleteData
  }).data("ui-autocomplete")._renderItem = function(ul, item) {
      return $("<li class='autocomplete-item'>").data("item.autocomplete", item).append("<a href='/wgdb/wrestlers/view/"  + item.id + "' >" + item.overall + ' <span class="autocomplete-wrestler">' + item.label  + '</span><span class="autocomplete-game right">' +  item.game_name + "</span></a>").appendTo(ul);
  };

  console.log(autoCompleteData);

  });

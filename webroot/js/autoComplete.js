$(document).ready(function() {

  $(".search").on('keyup', function(){
    var query = $(this).val();
    $('.search-results').empty();

    if(query.length == 0) {
      return;
    }

    $.get({
        url: "/wgdb/wrestlers/search.json",
        data: { query: query },
        success: function(data) {
          console.log(data);
          $('.search-results').empty();
          $.each(data.wrestlers, function(index, wrestler) {
             $('.search-results').append("<li><a href='/wgdb/wrestlers/view/" +wrestler.id+"'><span class='label-search attribute'>"+wrestler.overall+"</span> <span class='wrestler-name'>"+wrestler.wrestler_name+"</span><span class='game-name right'>"+wrestler.game.game_name+ "</span></a></li>");
          });
        }
      });
    });
  });

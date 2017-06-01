$(document).ready(function() {

  $("#search").on('keyup', function(){
    var query = $(this).val();
    $('#search-results').empty();

    if(query.length == 0) {
      return;
    }

    $.get({
        url: "/wgdb/wrestlers/search.json",
        data: { query: query },
        success: function(data) {
          console.log(data);
          $('#search-results').empty();
          $.each(data.wrestlers, function(index, wrestler) {
             $('#search-results').append("<p><span class='label overall'>"+wrestler.overall+"</span><span class='wrestler-name'>"+wrestler.wrestler_name+"</span><span class='game-name'>"+wrestler.game.game_name+ "</span><p>");
            // $('#search-results').append("<p>" +wrestler.first_name+ ' ' +wrestler.last_name+ ' ' +wrestler.game_id+ ' ' +wrestler.overall+ "</p>");
          });
        }
      });
    });
  });


// $('#search-results').append("<a href='/wgdb/wrestlers/view/" +wrestler.id+"'><span>"+wrestler.overall+ "</span> <span>" +wrestler.wrestler_name+ '</span><span"> ' +wrestler.game.game_name+ "</span></a>");

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
          $('#search-results').empty();
          $.each(data.wrestlers, function(index, wrestler) {
            // console.log(wrestler.first_name);
            $('#search-results').append("<p>" +wrestler.first_name+ ' ' +wrestler.last_name+ ' ' +wrestler.game_id+ ' ' +wrestler.overall+ "</p>");
          });
        }
      });
    });
  });

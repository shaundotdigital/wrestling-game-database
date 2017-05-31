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
            console.log(wrestler.first_name);
            $('#search-results').append('<p>'+wrestler.overall+ ' ' +wrestler.first_name+ ' ' +wrestler.last_name+ ' ' +wrestler.game +'<p>');
          });


          }
        });
    });

// append("<a href='/wgdb/wrestlers/view/"  + item.id + "' ><span class='label overall'>" + item.overall + "</span> <span class='autocomplete-wrestler'>" + item.label  + '</span><span class="autocomplete-game right">' +  item.game_name + "</span></a>")



});

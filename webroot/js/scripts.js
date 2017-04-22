// window.onload = function() {
//     if (window.jQuery) {
//         // jQuery is loaded
//         alert("Yeah!");
//     } else {
//         // jQuery is not loaded
//         alert("Doesn't Work");
//     }
// }

$(document).ready(function() {

  $('#get').click(function() {
    demo();
  })

});

function demo() {

  $.ajax({
    url: '/wgdb/games/test',
    type: 'post',
    data : {
      id : 5
    },
    beforeSend: function() {

    },
    success: function(data) {
      $('#next').html(data);
    }
  });

}

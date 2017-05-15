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

  $('.label.attribute').each(function(){
      var attributeValue = $(this).text();

      var className = 'red';
      if (attributeValue > 60) {
        className = 'orange';
      }
      if (attributeValue > 70) {
        className = 'yellow'
      }
      if (attributeValue > 80) {
        className = 'green'
      }
      if (attributeValue > 90) {
        className = 'lightgreen'
      }

      $(this).addClass(className);

  });

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

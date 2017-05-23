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

      var className = 'poor-attribute';
      if (attributeValue > 59) {
        className = 'low-attribute';
      }
      if (attributeValue > 69) {
        className = 'average-attribute'
      }
      if (attributeValue > 79) {
        className = 'good-attribute'
      }
      if (attributeValue > 89) {
        className = 'excellent-attribute'
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

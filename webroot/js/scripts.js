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

      var className = 'poorAttribute';
      if (attributeValue > 59) {
        className = 'lowAttribute';
      }
      if (attributeValue > 69) {
        className = 'averageAttribute'
      }
      if (attributeValue > 79) {
        className = 'goodAttribute'
      }
      if (attributeValue > 89) {
        className = 'excellentAttribute'
      }

      $(this).addClass(className);

  });

  // var rangeSlider = function(){
  //   var slider = $('.range-slider'),
  //       range = $('.range-slider__range'),
  //       value = $('.range-slider__value');
  //
  //   slider.each(function(){
  //
  //     value.each(function(){
  //       var value = $(this).prev().attr('value');
  //       $(this).html(value);
  //     });
  //
  //     range.on('input', function(){
  //       $(this).next(value).html(this.value);
  //     });
  //   });
  // };
  //
  // rangeSlider();



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

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

  $('input.hp-range-slider-range[type=range]').on('input.hp-range-slider-range', function(e){
    var min = e.target.min,
    max = e.target.max,
    val = e.target.value;

    $(e.target).css({
      'backgroundSize': (val - min) * 100 / (max - min) + '% 100%'
    });
  }).trigger('input.hp-range-slider-range');

});

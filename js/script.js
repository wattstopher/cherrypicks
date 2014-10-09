$(document).ready(function(){
  /** On start up **/
  $('.description').hide();
  $('.cherry-arrow').hide().fadeIn('slow');
  $('.product').hide().fadeIn('slow');
  $('.collapse').collapse();

function toggleChevron(e) {
  $(e.target)
    .prev('.panel-heading')
    .find("i.indicator")
    .toggleClass('glyphicon-chevron-up glyphicon-chevron-down');
}

$('.accordion').on('hidden.bs.collapse', toggleChevron);
$('.accordion').on('shown.bs.collapse', toggleChevron);

  // $('.product').click(function() {
  //   $('.product').each(function() {
  //     if ($(this).offset().left < 0) {
  //       $(this).css("left", "150%");
  //   } else if ($(this).offset().left > $('#container').width()) {
  //       $(this).animate({
  //           left: '50%',
  //       }, 500 );
  //   } else {
  //       $(this).animate({
  //           left: '-150%',
  //       }, 500 );
  //     }
  //   });
  // });
});



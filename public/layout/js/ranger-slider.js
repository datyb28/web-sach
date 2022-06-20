$(function() {
  $( "#slider-range" ).slider({
    range: true,
    min: 10000,
    max: 500000,
    values: [ 10000, 500000 ],
    slide: function( event, ui ) {
      $( "#amount" ).val( ui.values[ 0 ] + "đ" + " - đ" + ui.values[ 1 ] + " đ" );
    }
  });
  $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + " đ" +
    " - " + $( "#slider-range" ).slider( "values", 1 ) + " đ");
});
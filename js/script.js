jQuery(document).ready( function($){
  $( function() {
    $( "#tabs" ).tabs();
  } );
  $( function() {
    $( ".menu-top-menu-container ul li").hover( function() {
      $(this).find("ul").fadeToggle(400);
    })
  })
});


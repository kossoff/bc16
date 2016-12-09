jQuery(document).ready(function($){
  $cover_height = $( window ).height() - $('.top-bar').height () - $('.magellan-container').height ();

  $('.frontpage-slideshow li').height ( $cover_height );
  $('.frontpage-slideshow .slide-text-wrapper').height ( $cover_height );
  // $('.slide-text-wrapper').height ( $cover_height );

  $(document.body).on("closed.fndtn.clearing", function(event) {
    $('.grid-masonry').masonry();
  });

  $(window).on("load", function() {
    $('.grid-masonry').masonry({
      itemSelector: '.grid-masonry-item',
      columnWidth: 385
    });
  });
});

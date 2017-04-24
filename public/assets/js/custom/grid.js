// external js: masonry.pkgd.js

var $grid = $('.grid').masonry({
  columnWidth: 210,
  itemSelector: '.grid-item'
});

$grid.on( 'click', '.grid-item-content', function( event ) {
  $( event.currentTarget ).parent('.grid-item').toggleClass('is-expanded');
  $grid.masonry();
});

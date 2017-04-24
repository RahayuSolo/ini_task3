$(document).ready(function(){
 //class dimana semua loop konten anda berada didalamnya
 var $container = $('.sort');
 //untuk menentukan padding rightnya atau rongga batas kolom
 var gutter = 20;
 //lebar kolom yang otomatis akan menentukan jumlah kolom yang akan di tampilkan
 var min_width = 200;
 $container.imagesLoaded( function(){
 $container.masonry({
 //class untuk bagian dimana konten anda di tempatkan biasanya dibuat dengan class post
 itemSelector : '.post',
 gutterWidth: gutter,
 isAnimated: true,
 columnWidth: function( containerWidth ) {
 var num_of_boxes = (containerWidth/min_width | 0);
 var box_width = (((containerWidth - (num_of_boxes-1)*gutter)/num_of_boxes) | 0) ;
 if (containerWidth < min_width) {
 box_width = containerWidth;
 }
 $('.post').width(box_width);
 return box_width
 
 $('.grid').masonry({
  columnWidth: 200,
  itemSelector: '.grid-item'
});
 }
 });
 });
});
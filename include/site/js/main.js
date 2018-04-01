$(document).ready(function() {
function Bounce(ele, times, distance, speed) {
 for(i=0; i<times; i++) {
     ele.animate({
       marginTop: '-=' + distance
     }, speed).animate({
       marginTop: '+=' + distance
     }, speed);
 }
}
Bounce($("#target"), 200, '20px', 400);

$('a[href*=#]').bind("click", function(e){
var anchor = $(this);
$('html, body').stop().animate({
scrollTop: $(anchor.attr('href')).offset().top
}, 1000);
e.preventDefault();
});
return false;
});

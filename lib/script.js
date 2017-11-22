/* --- Menu Bar --- */
var first_scroll_position = 0;

window.addEventListener('scroll', function(e) {

	var after_scroll_position = window.scrollY;
	
	if(after_scroll_position > first_scroll_position)
		$('.menu').fadeOut(300);
	else
		$('.menu').fadeIn(300);
	// update first position
	first_scroll_position = after_scroll_position;
});

/* --- littel menu --- */
function changeShapeOfThis(x) {
    x.classList.toggle("change");
    $(".barCircle").toggle(400);
    $(".hiddenmenu").toggle(1000);
}
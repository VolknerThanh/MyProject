/* --- button pre/next --- */
$(document).ready(function() {
	$(".pre, .next").css("opacity", "0.3");

	$(".pre, .next").hover(function() {
		$(this).css("opacity", "1");
	}, function() {
		$(this).css("opacity", "0.3");
	});
});

/* --- slide show image --- */
var slideIndex = 1;
showSlides(slideIndex);

function nextSlide(n) {
	slideIndex += n;
  	showSlides(slideIndex);
}

function currentSlide(n) {
	slideIndex = n;
  	showSlides(slideIndex);
}

function showSlides(n) {
	// array
	var slides = document.getElementsByClassName("image");
	var dots = document.getElementsByClassName("imageDot");
	if (n > slides.length)
		slideIndex = 1;
	if (n < 1)
		slideIndex = slides.length;
	for (var i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	  	dots[i].style.backgroundColor = "#bbb";
	}
	slides[slideIndex-1].style.display = "block"; 
	dots[slideIndex-1].style.backgroundColor = "#555";
}


/* --- Column image --- */
function hoverEffect(index){
	document.getElementById(index).addEventListener("mouseover", MouseOVER);
	document.getElementById(index).addEventListener("mouseout", MouseOUT);
	function MouseOVER(){
		document.getElementById(index).style.width = '46%';
		document.getElementById(index).style.transition = '0.7s ease-in';
		for(var i = 1; i <=4 ; i++){
			if(i != index){
				document.getElementById(i).style.width = '18%';
				document.getElementById(i).style.transition = '0.7s ease-in';
			}
		}
	}
	function MouseOUT(){
		for(var i = 1; i <=4 ; i++){
			document.getElementById(i).style.transition = '0.7s ease-out';
			document.getElementById(i).style.width = '25%';
		}
	}

}
// action
for(var i = 1; i <= 4; i++){
	hoverEffect(i);
}


/* --- mousemove effect --- */
var locationX = 0;
$(document).ready(function(){
    $("#imageWrapper2").mousemove(function(event){
        locationX = event.pageX;
        var a = locationX + "px";
		$("#imageWrapper1").css("width", a);
    });
    $("#imageWrapper1").mousemove(function(event){
        locationX = event.pageX;
        //locationPage = event.screenX;
        var a = locationX;
		$("#imageWrapper1").css("width", a);
    });

});


/* --- scroll to change dot of slide menu --- */
/* --- slide menu bar --- */
var menuDot_index = 1;
ThisDot(menuDot_index);

function ChangeView(n)
{
	var arrayDots = document.getElementsByClassName('menuDot');
	for(var i = 0; i < arrayDots.length; i++){
		//arrayDots[i].style.backgroundColor = 'orange';
		arrayDots[i].style.borderColor = '#ddd';
	}
	//arrayDots[menuDot_index - 1].style.backgroundColor = 'red';
	arrayDots[menuDot_index - 1].style.backgroundColor = 'orange';
}
function ThisDot(n){
	menuDot_index = n;
	ChangeView(menuDot_index);
	var id = '#show' + menuDot_index;
	window.location.hash = id;
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	var arrayDots = document.getElementsByClassName('menuDot');
	//alert(document.documentElement.scrollTop);
	var index;
	var scrollLocation = document.documentElement.scrollTop;
    if (scrollLocation < 450) {
        arrayDots[0].style.backgroundColor = 'orange';
        index = 0;
    }
    else if(scrollLocation > 480 && scrollLocation < 1600){
        arrayDots[1].style.backgroundColor = 'orange';
        index = 1;
    }
    else if(scrollLocation > 1450 && scrollLocation < 1960){
        arrayDots[2].style.backgroundColor = 'orange';
        index = 2;
    }
    else{
    	arrayDots[3].style.backgroundColor = 'orange';
        index = 3;
    }
    
    for(var i in arrayDots){
    	if(i != index){
     		arrayDots[i].style.borderColor = '#ddd';
    		arrayDots[i].style.backgroundColor = 'transparent';
    	}
    }
}
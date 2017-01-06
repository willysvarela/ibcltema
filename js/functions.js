function setNavBackground(){
	    var y = $('nav').offset().top;
	   	if(parseInt(y) > 50){
			$('nav').addClass('navbar-bg');
		}else{
			$('nav').removeClass('navbar-bg');
		}
}

$( document ).ready(function() {

    $(".header--slogan").fadeIn("slow");

	$(".popover-ministerio").popover({
	    html: true, 
		content: function() {
			var c = $(this).data('value');
			return $(c).html();
	    }
	});

	/*$("[data-toggle=popover]").popover({
	    html: true, 
		content: function() {
	          return $('#popover-content').html();
	        }
	});*/
    var iScrollPos = 0;

        $(window).scroll(function () {
            var iCurScrollPos = $(this).scrollTop();
            if (iCurScrollPos > iScrollPos) {
                $('nav').fadeOut();
            } else {
                $('nav').fadeIn();
            }
            iScrollPos = iCurScrollPos;
        });    
});

/*

$(function(){

        $(".typed").typed({
            //strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 20,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $(".typed").typed('reset');
        });

    });

        function newTyped(){ }

    function foo(){ console.log("Callback"); }



$(function(){

        $(".typed-subtitle").typed({
            strings: ["^2500 Muito Mais que Amigos"],
            typeSpeed: 10,
            backDelay: 600,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            showCursor: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $(".typed-subtitle").typed('reset');
        });

    });

        function newTyped(){  }

    function foo(){ console.log("Callback"); }
    */
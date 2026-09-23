(function($){

    let inFocus = true;
    $(window).focus(function () {inFocus = true;});
    $(window).blur(function () {inFocus = false;});

    function initAllSlideShows(){
        $(".slide-show").each(function(){
           initASlideShow(this);
        });
    }
    function initASlideShow(slideshow){
        slideshow = $(slideshow);
        var list = $("ul", slideshow);
        if(list.length) {
            var slides = $("li", list);
            var slideWidth = $(slides[0]).css("width").replace("px", "") - 0;
            var next = 1;
            var speed = parseInt(slideshow.data("pause")) + 2;
            var transition = slideshow.data("transition");

            function loadImage(nextSlide, action){
                var nextImg = $("img", $(nextSlide));
                var src = nextImg.attr("data-slide-img");
                if (src) {
                    nextImg.load(action);
                    nextImg.attr({src: src});
                    nextImg.removeAttr("data-slide-img");
                    return true;
                }else{
                    return false;
                }
            }

            if($("img", slides).css("cursor") === "zoom-in"){
                $("img", slides).click(function(e){
                    var fadeSpeed = 500;
                    var popup = $("#modal");
                    $(".large", popup).attr("src", $(this).attr("src"));

                    var posY = window.scrollY;
                    if (!posY) { //fix for IE
                        var iebody = (document.compatMode && document.compatMode !== "BackCompat") ? document.documentElement : document.body;
                        posY = document.all ? iebody.scrollTop : pageYOffset;
                    }
                    var topPlacement = ($(window).height() / 2) + posY - (popup.outerHeight() / 2);
                    if (topPlacement < 0) {
                        topPlacement = 0;
                    }
                    popup.css(
                        {position: "absolute",
                            left: ( ($(window).width() / 2) - (popup.outerWidth() / 2) ) + "px",
                            top: topPlacement + "px"
                        });

                    popup.fadeIn(fadeSpeed);
                    var closeMask = $("<div id='closeMask'></div>");

                    function close() {
                        closeMask.fadeOut(fadeSpeed);
                        popup.fadeOut(fadeSpeed, function() {
                            closeMask.remove();
                            popup.hide();
                        });
                    }

                    $("body").append(closeMask);
                    closeMask.fadeIn(fadeSpeed);
                    closeMask.click(function() {
                        close();
                    });

                    var closeSelectors = [".close"];
                    //its important to keep the .first so child popups dont close the parent
                    $(closeSelectors).each(function(i, val) {
                        popup.find(val).first().click(function(e) {
                            e.preventDefault();
                            close();
                        });
                    });
                    return popup;

                });
            }

            if (transition === "fade") {
                list.css({ width: slideWidth});
                slides.css({ position: "absolute", top:0, left:0});
                $("img", slides).css({transition: "opacity  3.5s"});
                var first = true;
                $("img", slides).each(function(){if(!first){ $(this).css({opacity: 0});} first = false;} );

                function fade() {
                    var nextSlide = slides[next];
                    if (nextSlide) {
                        var nextImg = $("img", $(nextSlide));
                        var src = nextImg.attr("data-slide-img");
                        if (src) {
                            nextImg.load(fade);
                            nextImg.attr({src: src});
                            nextImg.removeAttr("data-slide-img");
                        } else {
                            $("img", slides[next -1]).css("opacity", 0);
                            $("img", nextSlide).css("opacity", 1);
                            next++;
                            setTimeout(fade, speed * 1000);
                        }
                    } else {
                        $("img", slides[next -1]).css("opacity", 0);
                        $("img", slides[0]).css("opacity", 1);
                        next = 1;
                        setTimeout(fade, speed * 1000);
                    }
                }

                setTimeout(fade, speed * 1000);

            } else {
                var toId;
                list.css({transition: "left 2.5s"});
                $(slides[0]).clone().appendTo(list);
                slides = $("li", list);
                list.css({width: slides.length * slideWidth});
                var hasPager = $(".pager", slideshow).length > 0;
                if(hasPager){
                    loadImage(slides[next]);
                }


                function slide() {
                    var nextSlide = slides[next];
                    if (nextSlide) {
                        if (!loadImage(nextSlide, slide)) {
                            if(inFocus) {
                                list.css("left", (-slideWidth * next));
                                next++;
                            }
                            if(!hasPager){
                                toId = setTimeout(slide, speed * 1000);
                            }

                        }
                    } else {
                        next = 1;
                        list.addClass("notransition");
                        list.css("left", 0);
                        var h = list[0].offsetHeight;
                        list.removeClass("notransition");
                        if(!hasPager){
                            slide();
                        }
                    }
                }

                if(!hasPager){
                    setTimeout(slide, speed * 1000);
                }
                $(".pager", slideshow).click(function(){
                    //clearTimeout(toId)
                    slide();
                    loadImage(slides[next], function(){});
                });
            }
        }
    }

    function patientCenter() {
        $(".faq .answers h4").click(function(){
            $("span", this).toggleClass("open");
            $(this).next().toggleClass("open");
        });
    }

    function subTabs() {

        function showImages(container){
            var container = $(container);
            if(container.length > 0){
                var windowHeight = container.css("height").replace("px", "");
                $("[data-hidden-src]", container).each(function(){
                    var ele = $(this);
                    var top = ele.closest("li").position().top;
                    if(top > -200 && windowHeight > top){
                        ele.attr("src", ele.data("hidden-src"));
                        ele.removeAttr("data-hidden-src");
                    }
                });
            }
        }

        var window = $(".window");
        showImages(window);

        var sub = $(".sub-tabs li");
        sub.click(function(){
            sub.removeClass("selected");
            var tab = $(this);
            tab.addClass("selected");
            var ele = $("." + tab.data('tab'));
            var topAt = $(".window li").position().top;
            var spot = ele.position().top;
            spot = spot - topAt;
            $(".window").animate({
                scrollTop: spot
            }, 1000);
        });

        window.scroll($.debounce( 300, function () {
            var classes = [];
            $(".sub-tabs li").each(function(){
                classes.push($(this).data("tab"));
            });
            for(var n in  classes) {
                $("." + classes[n] + " h3").each(function(){
                    var top = $(this).position().top;
                    if(top > -200 && top < 200){
                        sub.removeClass("selected");
                        $("li[data-tab='"+classes[n]+"']").addClass("selected");
                    }
                });
            }
            showImages(this);
        }));
    }

    function initMap(){
        var mapCanvas = document.getElementById('map-canvas');
        if(mapCanvas){
            var latLng = new google.maps.LatLng(37.503620, -122.265594);

            var mapOptions = {
                scrollwheel: false,
                center: latLng,
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                draggable: false
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var marker = new google.maps.Marker({
                position: latLng,
                map: map
            });
        }

    }

    function initSocial(){
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/platform.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);

        /*var js, fjs = d.getElementsByTagName("script")[0];
        if (document.getElementById('facebook-jssdk')) return;
        js = document.createElement("script"); js.id = 'facebook-jssdk';
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);*/
    }

    var sending = false;
    function sendMesssage() {
        $(".message-module form").submit(function(e){
            e.preventDefault();
            if(sending == false){
                var name = $("[name='name']", this).val();
                var email = $("[name='email']", this).val();
                var phone = $("[name='phone']", this).val();
                var message = $("textarea", this).val();
                if(name.length && email.length && phone.length && message.length){
                    sending = true;
                    $(".message-module .message").text("Sending message...");
                    $.ajax({
                        url:"/email/send.php",
                        method: "POST",
                        data: {name: name, email: email, phone: phone, message: message},
                        success: function(){
                            sending = false;
                            $(".message-module .message").text("Thank you for sending us a message!");
                        }
                    });
                } else {
                    $(".message-module .message").html("Please fill out all fields before sending the message.");
                }

            }
        });
    }

    $(document).ready(function(){
        sendMesssage();
        initAllSlideShows();
        subTabs();
        patientCenter();
        initMap();
        initSocial();
    });

})(jQuery);
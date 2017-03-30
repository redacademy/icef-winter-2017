(function($){

    $('.fa-bars').on('click', function(event){
        event.preventDefault();
        $('.menu').toggleClass('show-menu');
    })

    $('.team-member').on('click', function(event){
        event.preventDefault();
        var $classNameArray;
        var $className;
        $classNameArray = $(this).attr('class').split(' ');
        $className = $classNameArray[1];

        $('.' + $className).css('display', 'block');

        $('.x-close').on('click', function(){
            $('.popup').css('display', 'none');
        })
    })

    $('.map-arrow').on('click', function(){

        $('.map').toggleClass('showMap');

        if($('.openMap p').text() === 'close map'){
            $('.map-arrow').css('transform', 'rotate(180deg)');
            $('.openMap p').text('open map');
        } else {
            $('.map-arrow').css('transform', 'rotate(0deg)');            
            $('.openMap p').text('close map');
        }
    })

    var $windowsize = $(window).width();

    //WHEN SUB MENU OR DROP PINS ARE CLICKED --
    $('.our-work, .tekera-primary-school, .co-operative-and-demonstration-farm, .sustainability-projects, .tekera-medical-clinic, .womens-socio-economic-empowerment-group, .community-work-program, .trades-school, .drinking-water').on('click', function(){

        var $clickedThingClasses = $(this).attr('class').split(' ');
        var $clickedSlug = $clickedThingClasses[0];
        window.location.href=  $clickedSlug;

        $(window).load(function(){
            $('.' + $clickedSlug).css('display', 'none');
            $('span .' + $clickedSlug).css('display', 'inline-block');
        });
    })

    $('.why-read').on('click',function(event){
        event.preventDefault();
         $('.read-why').slideToggle('slow', function(){
        })
    })
    $('.story-read').on('click',function(event){
        event.preventDefault();
        $('.read-story').slideToggle('slow', function(){
        })
    })
    $('.impact-read').on('click', function(event){
        event.preventDefault();
        $('.read-impact').slideToggle('slow', function(){
        })
    })
    $('.close-why-button').on('click', function(event){
        event.preventDefault();
        $('.read-why').slideToggle('slow', function(){
        })
    })
    $('.close-story-button').on('click', function(event){
        event.preventDefault();
        $('.read-story').slideToggle('slow', function(){
        })
    })
    $('.close-impact-button').on('click', function(event){
        event.preventDefault();
        $('.read-impact').slideToggle('slow', function(){
        })
    })

    function ourWorkPageCheck(){
        var $slug = window.location.pathname;

        if($slug.includes('/icef/project/')){

            $slug = $slug.slice(14);
            $('.' + $slug).css('display', 'none');

            //shows purple pin only on desktop
            if($windowsize > 720){
                $('span .' + $slug).css('display', 'inline-block');
            }
        }
    }

    ourWorkPageCheck();

})(jQuery);
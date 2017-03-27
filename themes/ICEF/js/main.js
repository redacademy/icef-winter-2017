(function($){
    $('.fa-bars').on('click', function(event){
        event.preventDefault();
        $('.menu, .yellow-dot-filler').toggleClass('show-menu');
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

        $('.map-arrow').css('transform', 'rotate(180deg)');

        if($('.openMap p').text() === 'open map'){
            $('.openMap p').text('close map');
        } else {
            $('.openMap p').text('open map');
        }
    })

    //WHEN SUB MENU OR DROP PINS ARE CLICKED --
    $('.water, .vocational, .communitywork, .empowerment, .medical, .sustainability, .farm, .primary, .trc').on('click', function(){
        var $pathname = window.location.pathname; 
        console.log($pathname);
        if($pathname == '/project' ){
            event.preventDefault();
        }

        var $clickedThingClasses = $(this).attr('class').split(' ');
        var $clickedThing = $clickedThingClasses[0];
        $('.map .yellow-pin').css('display', 'inline-block');
        $('.our-work-wrapper .purple-pin').css('display', 'none');
        $('.our-work-content').css('display', 'none');
        $('.map .' + $clickedThing).css('display', 'none');
        $('.our-work-wrapper .' + $clickedThing).css('display', 'inline-block');
        
    })
})(jQuery);
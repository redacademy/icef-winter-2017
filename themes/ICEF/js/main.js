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
        console.log($className);

        $('.' + $className).css('display', 'block');

        $('.x-close').on('click', function(){
            $('.popup').css('display', 'none');
        })
    })

    $('.map-arrow').on('click', function(){

        $('.map').toggleClass('showMap');

        $('.map-arrow').css('transform', 'rotate(180deg)');

        if($('.openMap p').text() == 'open map'){
            $('.openMap p').text('close map');
        } else {
            $('.openMap p').text('open map');
        }
    })

    var $clickedThing;

    function mapPinClick(){
        $('.our-work-none').css('display', 'none')
        console.log($clickedThing);
        $('.' + $clickedThing).css('display', 'inline-block');
    }

    $('.water, .vocational, .communitywork, .empowerment, .medical, .sustainability, .farm, .primary, .trc').on('click', function(){
        $clickedThing = $(this).attr('class');
        mapPinClick();
    })
})(jQuery);
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

        $('.' + $className).css('display', 'flex');

        $('.x-close').on('click', function(){
            $('.popup').css('display', 'none');
        })
    })

    

})(jQuery);

$(document).ready(function() {
    $('.slick').slick({
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: false,
        dots: true,
        pauseOnHover: false,
        pauseOnFocus: false
    });

    $('.second').css({'animation': 'visible 0.5s  linear ','animation-fill-mode': 'forwards'})
    $('.second2').css({'animation': 'visible 0.5s  linear 0.5s','animation-fill-mode': 'forwards'})
    $('.second3').css({'animation': 'visible 0.5s  linear 1s','animation-fill-mode': 'forwards'})

$('.menu__pie__open').click(function(){
    $('.pie').toggleClass('active');
});
$('.pie__close__click').click(function(){
    $('.pie').toggleClass('active');
});
$('.a-hover').hover(
    function(){
        let self = $(this);
        $(this).find('path').attr('stroke','#3D454D');
        $(this).next().find('.health__block__title').css('color','#3D454D');
        $('.diagre').each(function(){
            if ($(this).attr('stick') != self.attr('stick')){
                $(this).attr('fill','#E5E5E5');
            }
        });
    },
    function(){
        let color = $(this).find('path').attr('fill');
        $(this).find('path').attr('stroke',color);
        $(this).next().find('.health__block__title').css('color','#707E8C');
        $('.diagre').each(function(){
            let fill = $(this).attr('color');
            $(this).attr('fill',fill);

        });        
    }
);
$('.diagre').hover(
    function(){
        $('.diagre').each(function(){
                $(this).attr('fill','#E5E5E5');
        });
        let color = $(this).attr('color');
        $(this).attr('fill',color)

    }    
)
$('.top__stat').hover(function(){
    $('.diagre').each(function(){
        let color = $(this).attr('color');
        $(this).attr('fill',color);
    });
})

$('.event__month_block').each(function(){
    let a = $(this).attr('data').split(' ');
    $(this).text(a[0]);
});


});

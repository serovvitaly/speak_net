

$(document).ready(function(){
    $('.sn-button-group .sn-arrow-scroller').height( $('.sn-button-group ul').height() );
    
    $('.sn-button-group .sn-arrow-left').offset({top: $('.sn-button-group ul li.active i').offset().top + 40 - 12 });
    
    $('.sn-button-group ul li i').click(function(){
        
        $('.sn-button-group ul li.active').removeClass('active');
        
        $(this).parent('li').addClass('active');
        
        $('.sn-button-group .sn-arrow-left').offset({top: $('.sn-button-group ul li.active i').offset().top + 40 - 12 });
        
        return false;
    });
    
    //$('.sn-button-group .sn-arrow-left').css('margin-top', $('.sn-button-group ul li.active a'));
    
});

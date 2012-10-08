
function moveArrow(){
    $('.sn-button-group .sn-arrow-left').offset({top: $('.sn-button-group ul li.active a').offset().top + 40 - 12 });
}

$(document).ready(function(){
    $('.sn-button-group .sn-arrow-scroller').height( $('.sn-button-group ul').height() );
    moveArrow();
    
    $('.sn-button-group ul li a').click(function(){  
        $('.sn-button-group ul li.active').removeClass('active');
        $(this).parent('li').addClass('active');
        
        moveArrow();
        
        history.pushState({foo: 'bar'}, $(this).attr('href'), $(this).attr('href'));
        
        SNV.call({
            method: 'content.get',
            params: {
                url: $(this).attr('href'),
                els: '#sn-receiver-content,.sn-nav-bar'
            }
        });
        
        /*
        SNV.call([{
            method: 'content.goto',
            params: {
                page: 12
            }
        },{
            method: 'content.get',
            params: {
                url: $(this).attr('href'),
                els: '#sn-receiver-content,.sn-nav-bar'
            }
        }]); */
        
        return false;
    });
    
});

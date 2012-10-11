
function moveArrow(){
    $('.sn-button-group .sn-arrow-left').offset({top: $('.sn-button-group ul li.active a').offset().top + 40 - 12 });
}

$(document).ready(function(){
    
    $('.nav-collapse.subnav-collapse ul li a').click(function(){  
        $('.nav-collapse.subnav-collapse ul li.active').removeClass('active');
        $(this).parent('li').addClass('active');
        
        //moveArrow();
        
        history.pushState({foo: 'bar'}, $(this).attr('href'), $(this).attr('href'));
        
        SNV.call([{
            method: 'content.get',
            params: {
                url: $(this).attr('href'),
                els: '#sn-receiver-content,.sn-nav-bar'
            },
            callback: function(result){
                $('#sn-receiver-content').html(result.content);
            }
        },{
            method: 'content.hello',
            params: {
                els: 123
            },
            callback: function(result){
                console.log(result.text);
            }
        }]);
        
        return false;
    });
    
    
    $('#sn-topnavbar-search').focus(function(){
        //alert('goo');
    });
    
});

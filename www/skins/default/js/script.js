
function moveArrow(){
    $('.sn-button-group .sn-arrow-left').offset({top: $('.sn-button-group ul li.active a').offset().top + 40 - 12 });
}

function animateSearcher(){
    var me = this;
    me.searcher = $('#sn-topnavbar-search input');
    me.width = me.searcher.width();
    
    me.searcher.focus(function(){
        $(this).animate({
            width: '260px'
        }, 200);
    });
    me.searcher.focusout(function(){
        $(this).animate({
            width: me.width + 'px'
        }, 200);
    });
}


function lockConteiner(el){
    this.locker = $('<div class="sn-locker"></div>');
    this.locker.height( $(el).height() );
    this.locker.width( $(el).width() );
    $(el).prepend(this.locker);
}
function unlockConteiner(el){
    $(el + ' .sn-locker:first-child').remove();
}


$(document).ready(function(){
    
    animateSearcher();
    
    $('.nav-collapse.subnav-collapse ul li a').click(function(){  
        $('.nav-collapse.subnav-collapse ul li.active').removeClass('active');
        $(this).parent('li').addClass('active');
        
        history.pushState({foo: 'bar'}, $(this).attr('href'), $(this).attr('href'));
        
        lockConteiner('#sn-receiver-content');
        lockConteiner('.sn-nav-bar');
        SNV.call([{
            method: 'content.get',
            params: {
                url: $(this).attr('href'),
                els: '#sn-receiver-content,.sn-nav-bar'
            },
            callback: function(result){
                unlockConteiner('#sn-receiver-content');
                unlockConteiner('.sn-nav-bar');
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

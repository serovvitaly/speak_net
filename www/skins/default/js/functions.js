

var fixEncode = function(loc) {
    var l = loc.split('?');
    return l[0] + (l[1] ? ('?' + ajx2q(q2ajx(l[1]))) : '');
}

var vk = {
    al : 2,
    navPrefix : 'foobar'
}

var _ua = navigator.userAgent.toLowerCase();

var browser = {
    version: (_ua.match( /.+(?:me|ox|on|rv|it|ra|ie)[\/: ]([\d.]+)/ ) || [0,'0'])[1],
    opera: /opera/i.test(_ua),
    msie: (/msie/i.test(_ua) && !/opera/i.test(_ua)),
    msie6: (/msie 6/i.test(_ua) && !/opera/i.test(_ua)),
    msie7: (/msie 7/i.test(_ua) && !/opera/i.test(_ua)),
    msie8: (/msie 8/i.test(_ua) && !/opera/i.test(_ua)),
    msie9: (/msie 9/i.test(_ua) && !/opera/i.test(_ua)),
    mozilla: /firefox/i.test(_ua),
    chrome: /chrome/i.test(_ua),
    safari: (!(/chrome/i.test(_ua)) && /webkit|safari|khtml/i.test(_ua)),
    iphone: /iphone/i.test(_ua),
    ipod: /ipod/i.test(_ua),
    iphone4: /iphone.*OS 4/i.test(_ua),
    ipod4: /ipod.*OS 4/i.test(_ua),
    ipad: /ipad/i.test(_ua),
    safari_mobile: /iphone|ipod|ipad/i.test(_ua),
    opera_mobile: /opera mini|opera mobi/i.test(_ua),
    mobile: /iphone|ipod|ipad|opera mini|opera mobi/i.test(_ua)
};

var frame = null, withFrame = browser.msie6 || browser.msie7;

var setLoc = function(loc) {
    //curLoc = fixEncode(loc.replace(/#(\/|!)?/, ''));
    curLoc = fixEncode(loc);
    var l = (location.toString().match(/#(.*)/) || {})[1] || '';
    if (!l && vk.al > 1) {
        l = (location.pathname || '') + (location.search || '');
    }
    l = fixEncode(l);
    if (l.replace(/^(\/|!)/, '') != curLoc) {
        if (vk.al == 3) {
            try {
                history.pushState({}, '', '/' + curLoc);
                return;
            } catch(e) {}
        }
        window.chHashFlag = true;
        location.hash = '#' + vk.navPrefix + curLoc;
        if (withFrame && getLoc() != curLoc) {
            setFrameContent(curLoc);
        }
    }
} 

var fixEncode = function(loc) {
    var l = loc.split('?');
    return l[0] + (l[1] ? ('?' + ajx2q(q2ajx(l[1]))) : '');
}

var vk = {
    al : 2,
    navPrefix : 'foobar'
}

var frame = null, withFrame = browser.msie6 || browser.msie7;

var setLoc = function(loc) {
    //curLoc = fixEncode(loc.replace(/#(\/|!)?/, ''));
    curLoc = fixEncode(loc);
    var l = (location.toString().match(/#(.*)/) || {})[1] || '';
    if (!l && vk.al > 1) {
        l = (location.pathname || '') + (location.search || '');
    }
    l = fixEncode(l);
    if (l.replace(/^(\/|!)/, '') != curLoc) {
        if (vk.al == 3) {
            try {
                history.pushState({}, '', '/' + curLoc);
                return;
            } catch(e) {}
        }
        window.chHashFlag = true;
        location.hash = '#' + vk.navPrefix + curLoc;
        if (withFrame && getLoc() != curLoc) {
            setFrameContent(curLoc);
        }
    }
} 
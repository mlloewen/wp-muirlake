jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});

function simulatedClick(target, options) {

    var event = target.ownerDocument.createEvent('MouseEvents'),
        options = options || {};

    //Set your default options to the right of ||
    var opts = {
        type: options.type                   || 'click',
        canBubble:options.canBubble          || true,
        cancelable:options.cancelable        || true,
        view:options.view                    || target.ownerDocument.defaultView,
        detail:options.detail                || 1,
        screenX:options.screenX              || 0, //The coordinates within the entire page
        screenY:options.screenY              || 0,
        clientX:options.clientX              || 0, //The coordinates within the viewport
        clientY:options.clientY              || 0,
        ctrlKey:options.ctrlKey              || false,
        altKey:options.altKey                || false,
        shiftKey:options.shiftKey            || false,
        metaKey:options.metaKey              || false, //I *think* 'meta' is 'Cmd/Apple' on Mac, and 'Windows key' on Win. Not sure, though!
        button:options.button                || 0, //0 = left, 1 = middle, 2 = right
        relatedTarget:options.relatedTarget  || null,
    }

    //Pass in the options
    event.initMouseEvent(
        opts.type,
        opts.canBubble,
        opts.cancelable,
        opts.view,
        opts.detail,
        opts.screenX,
        opts.screenY,
        opts.clientX,
        opts.clientY,
        opts.ctrlKey,
        opts.altKey,
        opts.shiftKey,
        opts.metaKey,
        opts.button,
        opts.relatedTarget
    );

    //Fire the event
    target.dispatchEvent(event);
}

// setInterval(flip-slider,2000);
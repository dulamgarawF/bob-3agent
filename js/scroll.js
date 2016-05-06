$('#triangle-up').click(function(){    
    $('.field').animate({ //animate element that has scroll
        scrollTop: 0 //for scrolling
    }, 1000);
});
$('#triangle-down').click(function(){    
    $('.field').animate({ //animate element that has scroll
        scrollTop: 340 //for scrolling
    }, 1000);
});
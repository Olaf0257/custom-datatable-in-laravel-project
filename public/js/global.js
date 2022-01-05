var app = $(document);



app.on('click', '#toggle_sidebar', () => {
    $('#sidebar, #toggle_sidebar').toggleClass('collapsed');
});
app.on('click', '#sidebar_toggler', () => {
    showModal(true);
    $('#sidebar').toggleClass('menu_on');
});
app.on('click', ".close-sidebar", function() {
    showModal(false);
    $('#sidebar').removeClass('menu_on');
});
app.on('click', '#sidebar>ul>li>a', function(e) {    
    $('#sidebar>ul>li>a').attr('aria-expanded', 'false');
    $('#sidebar>ul>li>ul').removeClass('show');
});
app.on('click', '.show-modal', (e) => {
    if($(e.target).hasClass('show-modal')) {
        showModal(false);
        $('#sidebar').removeClass('menu_on');
    }
});

$(window).resize(function() {
    $('.video-bg').height($('.video-bg').width() * 9 / 16);
})


/**
 * Define functions from here 
 */

 /**
  * Convert days, hours, minutes, seconds from total seconds number.
  * 
  * @param {int} totalseconds
  * @return {object}  
  */
 function getDateTimeAttrFromSeconds(totalseconds) {    
    let days = Math.floor(totalseconds / 86400);
    totalseconds = totalseconds % 86400;    
    let hours = Math.floor(totalseconds / 3600);
    totalseconds = totalseconds % 3600;
    let minutes = Math.floor(totalseconds / 60);
    let seconds = totalseconds % 60;

    return {
        days: getNumberFormat2String(days),
        hours: getNumberFormat2String(hours),
        minutes: getNumberFormat2String(minutes),
        seconds: getNumberFormat2String(seconds),   
    }
}

/**
 * Get 2 digital string from number
 * 
 * @param {number} number 
 * @return {string}
 */
function getNumberFormat2String(number) {
    
    // return number.toString();
    number = Number(number);
    if(number == 0) {
        return String('00');
    }
    if(number.toString().length > 1 ) {
        return String(number);
    }
    let str_num = String(number * 0.1).replace(".", "");
    return str_num[0] + str_num[1];
}

function showModal(is_opened) {
    if(is_opened) {
        $('.content-wrapper').addClass('show-modal');
    } else {
        $('.content-wrapper').removeClass('show-modal');
    }
}
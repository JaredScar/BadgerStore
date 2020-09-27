if ($(window).width() >= 1056) {
    // Their window is big enough, take them to main site
    window.location.href = "https://jaredscarito.com";
}

function updateTime() {
    $('#currentTime').text(formatAMPM(new Date()));
}
function formatAMPM(date) {
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'
    minutes = minutes < 10 ? '0'+minutes : minutes;
    var strTime = hours + ':' + minutes + ' ' + ampm;
    return strTime;
}
updateTime();
var task = setInterval(updateTime, (1000 * 10)); // Update every 10 seconds
function visitSite(link) {
    if (!appsBeingMoved) {
        $('<a href="' + link + '" target="_blank"></a>')[0].click();
    }
}
function appMovesOff() {
    // Apps are being moved, stop them
    $('.iphone-icon').each(function(ind) {
        $(this).css("animation-delay", "0s");
        $(this).css("animation-duration", "0s");
        if (appsBeingMoved) {
            $(this).removeClass("moveable");
        }
    });
    appsBeingMoved = false;
}
function appMovesOn() {
    // Apps are not being moved, move them
    $('.iphone-icon').each(function(ind) {
        $(this).css("animation-delay", "-.75s");
        $(this).css("animation-duration", ".25s");
        if (!appsBeingMoved) {
            $(this).addClass("moveable");
        }
    });
    appsBeingMoved = true;
}
var appsBeingMoved = false;
var openedApp = null;
function closeApp() {
    if (openedApp !== null) {
        $(openedApp).hide();
        $('#apps').fadeIn();
        $('#footer').fadeIn();
        $('#header').css("background-color", "transparent");
        openedApp = null;
    }
}
function openApp(appID) {
    $('#apps').hide();
    $('#footer').hide();
    $(appID).fadeIn();
    $('#header').css("background-color", "black");
    openedApp = appID;
}

// Sorting apps
new Sortable(document.getElementById('apps'), {
    animation: 150,
    handle: '.moveable'
});
new Sortable(document.getElementById('footer'), {
    animation: 150,
    handle: '.moveable'
});

// PREVENT links:
$(function() {
    $('.external-link').each(function(ind) {
        $(this).on("click", function(e) {
            if (appsBeingMoved) {
                e.preventDefault();
            }
        });
    });
});


// TOUCH TRACKER:
var onlongtouch;
var timer;
var touchduration = 800; //length of time we want the user to touch before we do something

function touchstart(e) {
    if (!timer) {
        timer = setTimeout(onlongtouch, touchduration);
    }
}

function touchend() {
    //stops short touches from firing the event
    if (timer) {
        clearTimeout(timer);
        timer = null;
    }
}

onlongtouch = function() {
    timer = null;
    appMovesOn();
};

document.addEventListener("DOMContentLoaded", function(event) {
    window.addEventListener("touchstart", touchstart, false);
    window.addEventListener("touchend", touchend, false);
});

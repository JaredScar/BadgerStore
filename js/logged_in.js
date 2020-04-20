var hidden = true;
function toggleNav() {
    $('#navigation').children('a').each(function() {
        // Hide them
        console.log($(this).attr("class"));
        if ($(this).attr("class") === undefined || !$(this).attr("class").includes("skip")) {
            // Hide it or show it
            if (hidden) {
                // Show it
                $(this).fadeIn("slow");
            } else {
                // Hide it
                $(this).fadeOut("slow");
            }
        }
    });
    if (hidden) {
        hidden = false;
    } else {
        hidden = true;
    }
}
var windows = ['#sublime-window', '#github-window', '#discord-window', '#fivem-window'];
function minimizeWindow(id, tabID) {
    $(id).hide( "transfer", { to: $(tabID) }, 300 );
    $(tabID).attr('onclick', 'maximizeWindow("' + id + '", "' + tabID + '");');
}
function maximizeWindow(id, tabID) {
    $(tabID).attr('onclick', 'minimizeWindow("' + id + '", "' + tabID + '");');
    $(tabID).effect("transfer", {
        to: $(id)
    }, 300, function() {$(id).show();});
    if (!$(tabID).hasClass('active')) {
        $(tabID).addClass('active');
    }
    $(id).css("z-index", "1337");
    for (var i=0; i < windows.length; i++) {
        if (!windows[i].includes(id)) {
            $(windows[i]).css("z-index", "1");
        }
    }
}
function toggleWindow(id) {
    if ($(id).hasClass('half-window')) {
        // Maximize it
        $(id).removeClass('half-window');
        $(id).height('84%');
        $(id).width('100%');
        $(id).css('top', '0px');
        $(id).css('left', '0px');
    } else {
        $(id).addClass('half-window');
        $(id).height('50%');
        $(id).width('50%');
        $(id).css('top', '0px');
        $(id).css('left', '0px');
    }
}
function closeWindow(id, tabID) {
    //$(id).hide("slide", {direction: "down"}, 500);
    $(id).fadeOut(100);
    if ($(tabID).hasClass('active')) {
        $(tabID).removeClass('active');
    }
    $(tabID).attr('onclick', 'maximizeWindow("' + id + '", "' + tabID + '");');
    $(id).css('top', '0px');
    $(id).css('left', '0px');
}
var currentFivemActive = '#home-tab';
var currentFivemTab = '#fivem-home';
function changeFivemTab(id, tabID) {
    $(currentFivemActive).fadeOut();
    if (!$(tabID).hasClass('active')) {
        $(tabID).addClass('active');
        $(currentFivemTab).removeClass('active');
        currentFivemTab = tabID;
    }
    setTimeout(function() {
    $(id).fadeIn();
    currentFivemActive = id;
    currentFivemTab = tabID;
    }, 800);
}

function openResource(resourceURL) {
    $(currentFivemActive).fadeOut();
    currentFivemActive = '#fivem-script-frame';
    $('#fivem-frame').attr('src', resourceURL);
    setTimeout(function() {
        $(currentFivemActive).fadeIn();
    }, 800);
}
function showElementsByTag(type, tag) {
    var children = $('#scripts-list .script-boxes').children().children();
    for (var i=0; i < children.length; i++) {
        var child = children[i];
        var tags = child.getAttribute("tags");
        var tagList = tags.split(" ");
        for (var j=0; j < tagList.length; j++) {
            if (tagList[j] === tag) {
                child.style.display = 'block';
            }
        }
    }
    $(type).attr('onclick', 'hideElementsByTag(this, "' + tag + '");');
}
function hideElementsByTag(type, tag) {
    var children = $('#scripts-list .script-boxes').children().children();
    for (var i=0; i < children.length; i++) {
        var child = children[i];
        var tags = child.getAttribute("tags");
        var tagList = tags.split(" ");
        for (var j=0; j < tagList.length; j++) {
            if (tagList[j] === tag) {
                child.style.display = 'none';
            }
        }
    }
    $(type).attr('onclick', 'showElementsByTag(this, "' + tag + '");');
}
$('.window').draggable({ containment: '#body', scroll: false });
$('#sublime-window').resizable();
$('#discord-window').resizable();
$('#docs-window').resizable();
setTimeout(function() {$('#fivem-window').hide();
}, 900);
setTimeout(function() {$('#github-window').hide();}, 900);
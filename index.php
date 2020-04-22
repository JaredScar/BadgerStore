<?php
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="og:title" content="Badger's PC">
    <meta name="og:description" content="The official website of Badger">
    <meta name="theme-color" content="#000">
    <meta name="og:image" content="https://i.gyazo.com/a17db9d1cef1e217be9a81fabe1ea750.png">
    <meta name="twitter:card" content="summary_large">
    <title>Badger's PC</title>
    <link rel="stylesheet" type="text/css" href="css/webReset.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>
    <div class="overlay-tutorial" id="tutorial">
        <!-- Overlay Tutorial -->
        <div class="overlay-container">
            <div class="overlay-info">
                <h1>Tutorial</h1>

                <h3>What is it?</h3>
                <p>What is <span>Badger's PC</span>? Well, <span>Badger's PC</span> is basically just a replica of my actual
                real life computer screen. Yes, I actually have dancing badgers as the background of my computer screen.
                I'll be honest, I had no real idea for what I should make my website look like and/or function. So I chose
                something that was familiar to me. What is more familiar to me than the Windows operating system?... I'm
                    sure you as well are familiar with it too. I hope you enjoy <span>Badger's PC</span>. <br /><br />
                <span><b>NOTE:</b></span> Sadly, <span>Badger's PC</span> will not function as well on mobile devices. A mobile
                site is planned for the near future.</p>

                <h3>Functionality</h3>
                <p><span>Badger's PC</span> functions just like a real Windows computer does. Programs can be opened and
                closed. Program windows can be moved and resized (for the most part). Program windows can be minimized and maximized.
                Programs can be opened by clicking the icons located along the black bar at the bottom of the screen. You can
                take a look at the following images provided below to better understand the website's functionality.
                    To get past the <span>Login Screen</span>, just enter a fake PIN and press the <span>Enter</span> key.
                    Alternatively, you can click <span>I forgot my PIN</span> or <span>Sign-in offline</span> to also
                    proceed to the computer.<br /><br />
                    <span><b>NOTE:</b></span> Sadly, <span>Badger's PC</span> will not function as well on mobile devices. A mobile
                    site is planned for the near future.
                </p>
                <div class="image">
                    <h2>Halving program windows and moving them around</h2>
                    <img src="css/img/movingWindows.gif" />
                </div>
                <div class="image">
                    <h2>Minimizing and maximizing program windows</h2>
                    <img src="css/img/minimizeMaximize.gif" />
                </div>
                <div class="image">
                    <h2>Opening programs</h2>
                    <img src="css/img/openingPrograms.gif" />
                </div>
                <h3>Can I make my own?</h3>
                <p>Of course you can make your own. I am a firm believer of keeping things open source and
                really don't intend on changing that any time soon. Most software and/or scripts I develop are open source.
                They can be found on my GitHub which will be provided below (which will link you to the source code of this website).
                    Make sure to give it a <span>star</span> and to pop me a <span>follow</span> over there too of course! <br /><br />
                    <b>Make your own:</b> <a href="https://github.com/TheWolfBadger/BadgerStore" target="_blank">https://github.com/TheWolfBadger/BadgerStore</a>
                    <br /><br />
                    <span><b>NOTE:</b></span> Sadly, <span>Badger's PC</span> will not function as well on mobile devices. A mobile
                    site is planned for the near future.</p>
                <div class="button-continue">
                    <button onclick="$('#tutorial').hide();">Continue</button>
                </div>
            </div>
        </div>
    </div>
<div class="overlay">
    <div class="login-box">
        <img src="css/img/badger-stationary.png" />
        <h1>Badger's PC</h1>
        <input id="pin" type="password" placeholder="PIN" />
        <a href="logged_in.php">I forgot my PIN</a>
        <a href="logged_in.php">Sign-in offline</a>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
    $("#pin").on('keyup', function (e) {
        if (e.keyCode === 13) {
            window.location.href = 'logged_in.php'
        }
    });
</script>
</html>

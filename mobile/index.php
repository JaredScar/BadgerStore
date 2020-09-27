<?php

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta name="og:title" content="Badger's iPhone">
    <meta name="og:description" content="The official website of Badger">
    <meta name="theme-color" content="#000">
    <meta name="og:image" content="https://i.gyazo.com/a17db9d1cef1e217be9a81fabe1ea750.png">
    <meta name="twitter:card" content="summary_large">
    <title>Badger's iPhone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../css/webReset.css"/>
    <link rel="stylesheet" type="text/css" href="../css/mobile/mobile.css"/>
    <link rel="icon" href="../css/img/avatar.gif" type="image/png">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="bg">
        <div class="iphone-header" id="header">
            <div class="provider"><i class="fa fa-signal" aria-hidden="true"></i> Verizon <i class="fa fa-wifi" aria-hidden="true"></i></div>
            <div class="time"><label id="currentTime">9:02 PM</label></div>
            <div class="battery">100% <i class="fa fa-battery-full" aria-hidden="true"></i></div>
        </div>
        <div id="programs-container">
            <div class="program" id="note-program">
                <div class="para">Hello, I'm Jared! <br /> <br />
                    Well, at least that's what most of my friends call me...<br /><br />
                    You can just call me Badger! <br /><br />I am currently studying Computer Information Technologies. <br /><br />I am from <a href="https://www.google.com/maps/place/Long+Island/@40.8466789,-74.0702086,8z/data=!3m1!4b%20%20%20%201!4m5!3m4!1s0x89e84454e1eea5cb:0x1df7f96186940d18!8m2!3d40.789142!4d-73.134961" target="_blank">Long Island, NY</a>. <br /><br />I'm a Java, Python, Lua, PHP, SQL Developer, HTML/CSS Designer, and JavaScript Coder. <br /><br /> I might have left out a few languages, but please forgive me, it's hard to keep track of everything! <br /><br />You can find my twitter <a href="http://twitter.com/JaredScaritoo" target="_blank">here</a>. <br /><br />You can find my LinkedIn <a href="https://www.linkedin.com/in/jared-scarito-51b545130" target="_blank">here</a>. <br /><br />You can always email me <a href="mailto:me@jaredscarito.com">here</a> if you just want to say hi!
                <br /><br />
                    Sadly, this iPhone is still on iOS 13, so no widgets... 😢
                </div>
            </div>

            <div class="program" id="mail-program">
                <div class="email-div">
                    <form id="mail-form" method="POST" action="/non-page/emailMobile.php">
                        <h1>Contact Me ✉️</h1>
                        <div class="mail-row"><label for="sender-name">Your Name</label><input name="sender-name" id="sender-name" type="text" placeholder="John Appleseed" /></div>
                        <div class="mail-row"><label for="sender-email">Your Email</label><input name="sender-email" id="sender-email" type="email" placeholder="me@jaredscarito.com" /></div>
                        <div class="mail-row" style="height: 180px"><label for="email-data">Your Message</label><textarea name="email-data" id="email-data" placeholder="Hey there!"></textarea></div>
                        <div class="mail-row" id="form-button"><button class="g-recaptcha"
                                                                       data-sitekey="6LdzmM4ZAAAAALPZOMt6auK4pcc7CtGQkjX3K1Ei"
                                                                       data-callback='onSubmit'
                                                                       data-action='submit'>Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="iphone-icon-row" id="apps">
            <!-- <a href="https://github.com/JaredScar" target="_blank" class="external-link"> -->
                <div class="iphone-icon" onclick="visitSite('https://github.com/JaredScar')"><img src="../css/mobile/img/apple-github-icon.png" /><label>GitHub</label></div>
            <!-- </a> -->
            <!-- <a href="https://docs.google.com/document/d/1D_RPXORKbzngVl0B8q4tksbhQMKdYZXnj-laXzN8aJ8/edit?usp=sharing" target="_blank" class="external-link"> -->
                <div class="iphone-icon" onclick="visitSite('https://docs.google.com/document/d/1D_RPXORKbzngVl0B8q4tksbhQMKdYZXnj-laXzN8aJ8/edit?usp=sharing')"><img src="../css/mobile/img/apple-evernote-icon.jpg" /><label>Resume</label></div>
            <!-- </a> -->
           <!-- <a href="https://discord.com/invite/BdgEbVj" target="_blank" class="external-link"> -->
                <div class="iphone-icon" onclick="visitSite('https://discord.com/invite/BdgEbVj');"><img src="../css/mobile/img/discord-logo.png" /><label>Discord</label></div>
           <!-- </a> -->
           <!-- <a href="https://www.instagram.com/jared_scar/?hl=en" target="_blank" class="external-link"> -->
                <div class="iphone-icon" onclick="visitSite('https://www.instagram.com/jared_scar/?hl=en');"><img src="../css/mobile/img/apple-instagram-icon.png" /><label>Instagram</label></div>
           <!-- </a> -->
           <!-- <a href="https://www.facebook.com/people/Jared-Scarito/100000283269304" target="_blank" class="external-link"> -->
                <div class="iphone-icon" onclick="visitSite('https://www.facebook.com/people/Jared-Scarito/100000283269304');"><img src="../css/mobile/img/apple-facebook-icon.png" /><label>Facebook</label></div>
           <!-- </a> -->
            <!-- <a href="https://www.linkedin.com/in/jared-scarito-51b545130/" target="_blank" class="external-link"> -->
                <div class="iphone-icon" onclick="visitSite('https://www.linkedin.com/in/jared-scarito-51b545130/');"><img src="../css/mobile/img/apple-linkedin-icon.png" /><label>LinkedIn</label></div>
            <!-- </a> -->
            <!-- <a href="https://docs.badger.store" target="_blank" class="external-link"> -->
                <div class="iphone-icon" onclick="visitSite('https://docs.badger.store');"><img src="../css/mobile/img/apple-gitbook-icon.jpg" /><label>Documentation</label></div>
            <!-- </a> -->
        </div>
        <div class="iphone-footer" id="footer">
            <!-- START Apps that require programs -->
            <div class="iphone-icon" onclick="openApp('#note-program');"><img src="../css/mobile/img/apple-notes.png" /><label>About Me</label></div>
            <div class="iphone-icon" onclick="openApp('#mail-program');"><img src="../css/mobile/img/apple-mail-icon.png" /><label>Contact Me</label></div>
            <!-- END Apps that require programs -->
        </div>
        <div class="iphone-button">
            <button onclick="appMovesOff(); closeApp();"></button>
        </div>
    </div>
</div>
</body>
<script>
    function onSubmit(token) {
        document.getElementById("mail-form").submit();
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.11.2-alpha.4/dist/sortable.umd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="../js/mobile.js"></script>
</html>

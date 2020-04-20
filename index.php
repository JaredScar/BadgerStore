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

<?php
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Badger</title>
    <link rel="stylesheet" type="text/css" href="css/webReset.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/universal.css" />
    <link rel="stylesheet" type="text/css" href="css/logged_in.css" />
</head>
<body>
<!-- Start Docs Program -->
<div class="docs-program window" id="docs-window">
    <div class="program-header">
        <span><img src="css/img/gitbook-logo.png" height="20px" width="20px" style="vertical-align: text-bottom;" /></span>
        <span>Documentation</span>
        <div class="buttons">
            <button onclick="minimizeWindow('#docs-window', '#docs-tab');"><i class="fas fa-window-minimize"></i></button>
            <button onclick="toggleWindow('#docs-window');"><i class="far fa-window-restore"></i></button>
            <button onclick="closeWindow('#docs-window', '#docs-tab');"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <div id="docs">
        <iframe src="https://docs.badger.store" height="100%" width="100%"></iframe>
    </div>
</div>
<!-- End Docs Program -->
<!-- Start FiveM Program -->
<div class="fivem-program window" id="fivem-window">
    <div class="program-header">
        <span><img src="css/img/fivem-logo.png" height="20px" width="20px" style="vertical-align: text-bottom;" /></span>
        <span>FiveM</span>
        <div class="buttons">
            <button onclick="minimizeWindow('#fivem-window', '#fivem-tab');"><i class="fas fa-window-minimize"></i></button>
            <button onclick="closeWindow('#fivem-window', '#fivem-tab');"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="fivem">
        <ul class="fivem-nav">
            <li onclick="changeFivemTab('#home-tab', '#fivem-home')" class="active" id="fivem-home">Home</li>
            <li onclick="changeFivemTab('#scripts-list', '#fivem-scripts')" id="fivem-scripts">Scripts</li>
            <li onclick="alert('Coming Soon');">Supporters</li>
            <li onclick="alert('Coming Soon');">Favorites</li>
        </ul>
        <div class="fivem-content">
            <!-- FiveM Script iFrame -->
            <div id="fivem-script-frame">
                <iframe id="fivem-frame" src="https://docs.badger.store" referrerpolicy="no-referrer"></iframe>
            </div>
            <!-- End FiveM Script iFrame -->
            <!-- Home Page -->
            <div id="home-tab">
                <a class="twitter-timeline" data-chrome="" data-height="500"
                   href="https://twitter.com/JaredScaritoo?ref_src=twsrc%5Etfw">Tweets by JaredScaritoo</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <!-- End Twitter Feed -->
            <!-- Start Scripts List -->
            <div id="scripts-list">
                    <div class="script-tags">
                        <div class="tags-title">Types</div>
                        <div class="content">
                            <label class="container">Discord (10)
                                <input type="checkbox" checked="checked">
                                <span class="checkmark" onclick="hideElementsByTag(this, 'discord');"></span>
                            </label>
                            <label class="container">Misc. (8)
                                <input type="checkbox" checked="checked">
                                <span class="checkmark" onclick="hideElementsByTag(this, 'misc');"></span>
                            </label>
                            <label class="container">Anticheat (1)
                                <input type="checkbox" checked="checked">
                                <span class="checkmark" onclick="hideElementsByTag(this, 'anticheat');"></span>
                            </label>
                            <label class="container">Animations (2)
                                <input type="checkbox" checked="checked">
                                <span class="checkmark" onclick="hideElementsByTag(this, 'animation');"></span>
                            </label>
                            <label class="container">Chat (4)
                                <input type="checkbox" checked="checked">
                                <span class="checkmark" onclick="hideElementsByTag(this, 'chat');"></span>
                            </label>
                            <label class="container">Permission (3)
                                <input type="checkbox" checked="checked">
                                <span class="checkmark" onclick="hideElementsByTag(this, 'permission');"></span>
                            </label>
                        </div>
                    </div>
                    <div class="script-boxes">
                        <div class="script-boxes-title">Script</div>
                        <div class="content">
                            <div class="server-box" tags="discord chat" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/discordchatroles');">
                                <img src="css/img/discord-transparent-logo.png" class="server-icon" /> DiscordChatRoles</div>
                            <div class="server-box" tags="discord permission" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/discordweaponperms');"><img src="css/img/discord-transparent-logo.png" class="server-icon" /> DiscordWeaponPerms</div>
                            <div class="server-box" tags="discord" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/discorddonatorperks');"><img src="css/img/discord-transparent-logo.png" class="server-icon" /> DiscordDonatorPerks</div>
                            <div class="server-box" tags="discord permission" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/discordaceperms');"><img src="css/img/discord-transparent-logo.png" class="server-icon" /> DiscordAcePerms</div>
                            <div class="server-box" tags="discord" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/badgertools');"><img src="css/img/badgers-badgers-badgers.gif" class="server-icon" /> BadgerTools</div>
                            <div class="server-box" tags="discord permission" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/discordpedperms');"><img src="css/img/discord-transparent-logo.png" class="server-icon" /> DiscordPedPerms</div>
                            <div class="server-box" tags="discord" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/discordvehiclesrestrict');"><img src="css/img/discord-transparent-logo.png" class="server-icon" /> DiscordVehiclesRestrict</div>
                            <div class="server-box" tags="discord" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/discordtagids');"><img src="css/img/discord-transparent-logo.png" class="server-icon" /> DiscordTagIDs</div>
                            <div class="server-box" tags="discord" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/policeemsactivity');"><img src="css/img/police-transparent-logo.png" class="server-icon" /> PoliceEMSActivity</div>
                            <div class="server-box" tags="discord chat" onclick="openResource('https://docs.badger.store/fivem-discord-scripts/badgercopchat');"><img src="css/img/badgers-badgers-badgers.gif" class="server-icon" /> BadgerCopChat</div>
                            <div class="server-box" tags="animation misc" onclick="openResource('https://docs.badger.store/fivem-misc.-scripts/badgeranims');"><img src="css/img/badgers-badgers-badgers.gif" class="server-icon" /> BadgerAnims</div>
                            <div class="server-box" tags="animation misc" onclick="openResource('https://docs.badger.store/fivem-misc.-scripts/badgerbankrobbery');"><img src="css/img/badgers-badgers-badgers.gif" class="server-icon" /> BadgerBankRobbery</div>
                            <div class="server-box" tags="misc" onclick="openResource('https://docs.badger.store/fivem-misc.-scripts/vehicletrustsystem');"><img src="css/img/vehicletrust-image.png" class="server-icon" /> VehicleTrustSystem</div>
                            <div class="server-box" tags="misc" onclick="openResource('https://docs.badger.store/fivem-misc.-scripts/pedtrustsystem');"><img src="css/img/pedtrust-image.png" class="server-icon" /> PedTrustSystem</div>
                            <div class="server-box" tags="chat misc" onclick="openResource('https://docs.badger.store/fivem-misc.-scripts/badgervoting');"><img src="css/img/badgers-badgers-badgers.gif" class="server-icon" /> BadgerVoting</div>
                            <div class="server-box" tags="chat misc" onclick="openResource('https://docs.badger.store/fivem-misc.-scripts/badgertracer');"><img src="css/img/badgers-badgers-badgers.gif" class="server-icon" /> BadgerTracer</div>
                            <div class="server-box" tags="anticheat misc" onclick="openResource('https://docs.badger.store/fivem-misc.-scripts/fivem-keybase-anticheat');"><img src="css/img/anticheat-image.png" class="server-icon" /> Fivem Keybase Anticheat</div>
                            <div class="server-box" tags="chat misc" onclick="openResource('https://docs.badger.store/fivem-misc.-scripts/discordreports');"><img src="css/img/discord-transparent-logo.png" class="server-icon" /> DiscordReports</div>
                        </div>
                    </div>
            </div>
            <!-- End Scripts List -->
        </div>
    </div>
</div>
<!-- End FiveM Program -->
<!-- Start Discord Program -->
    <div class="discord-program window" id="discord-window">
        <div class="program-header">
            <span><img src="css/img/discord-transparent-logo.png" height="20px" width="20px" style="vertical-align: text-bottom;" /></span>
            <span>Discord</span>
            <div class="buttons">
                <button onclick="minimizeWindow('#discord-window', '#discord-tab');"><i class="fas fa-window-minimize"></i></button>
                <button onclick="toggleWindow('#discord-window');"><i class="far fa-window-restore"></i></button>
                <button onclick="closeWindow('#discord-window', '#discord-tab');"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div id="discord">
            <div class="row">
                <a class="discord-widget" href="https://discord.gg/Hx3sesg" title="Discord Link - Prime Network" target="_blank">
                    <img src="https://discordapp.com/api/guilds/506209831061946415/embed.png?style=banner4" alt="NO DISCORD FOR YOU :(" />
                </a>
                <a class="discord-widget" href="https://discord.gg/BdgEbVj" title="Discord Link - Dev Community" target="_blank">
                    <img src="https://discordapp.com/api/guilds/597445834153525298/embed.png?style=banner4" alt="NO DISCORD FOR YOU :(" />
                </a>
            </div>
            <div class="row">
                <a class="discord-widget" href="https://discord.gg/T7AN88W" title="Discord Link - BadgerCAD" target="_blank">
                    <img src="https://discordapp.com/api/guilds/651481929253781524/embed.png?style=banner4" alt="NO DISCORD FOR YOU :(" />
                </a>
                <a class="discord-widget" href="https://discord.gg/QQ5ckhS" title="Discord Link - BadgerTrustSystem" target="_blank">
                    <img src="https://discordapp.com/api/guilds/666696112496705546/embed.png?style=banner4" alt="NO DISCORD FOR YOU :(" />
                </a>
            </div>
        </div>
    </div>
<!-- End GitHub Program -->
<!-- Start GitHub Program -->
    <div class="github-program window" id="github-window">
        <div class="program-header">
            <span><img src="css/img/github-transparent-logo.png" height="20px" width="20px" style="vertical-align: text-bottom;" /></span>
            <span>Badger's GitHub</span>
            <div class="buttons">
                <button onclick="minimizeWindow('#github-window', '#github-tab');"><i class="fas fa-window-minimize"></i></button>
                <button onclick="closeWindow('#github-window', '#github-tab');"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="github-card" data-github="thewolfbadger" data-width="100%" data-height="100%" data-theme="default"></div>
    </div>
<!-- End GitHub Program -->
<!-- Start Sublime Program -->
    <div class="sublime-program window" id="sublime-window">
        <div class="program-header">
            <span><img src="css/img/sublime-logo.png" height="20px" width="20px" style="vertical-align: text-bottom;" /></span>
            <span>Sublime Text</span>
            <div class="buttons">
                <button onclick="minimizeWindow('#sublime-window', '#sublime-tab');"><i class="fas fa-window-minimize"></i></button>
                <button onclick="toggleWindow('#sublime-window');"><i class="far fa-window-restore"></i></button>
                <button onclick="closeWindow('#sublime-window', '#sublime-tab');"><i class="fas fa-times"></i></button>
            </div>
        </div>
        <div id="sublime" ondblclick="$('#sublime').attr('contentEditable', 'true'); $('#sublime').focus();" onfocusout="$(this).attr('contenteditable', 'false');">
            <div class="h1">Hello, I'm Badger!</div>
            <br /><br />
            <div class="para">Well, at least that's what most of my friends call me... <br /><br />I am currently studying Computer Information Technologies. <br /><br />I am from <a href="https://www.google.com/maps/place/Long+Island/@40.8466789,-74.0702086,8z/data=!3m1!4b%20%20%20%201!4m5!3m4!1s0x89e84454e1eea5cb:0x1df7f96186940d18!8m2!3d40.789142!4d-73.134961" target="_blank">Long Island, NY</a>. <br /><br />I'm a Java Developer, Python Developer, Lua Developer, PHP Developer, SQL Developer, HTML/CSS Designer, JavaScript Coder. <br /><br /> I may of left out a few languages, but please forgive me, it's hard to keep track of everything! <br /><br />You can find my twitter <a href="http://twitter.com/JaredScaritoo" target="_blank">here</a>. <br /><br />You can find my LinkedIn <a href="https://www.linkedin.com/in/jared-scarito-51b545130" target="_blank">here</a>. <br /><br />You can always email me <a href="mailto:me@jaredscarito.com">here</a> if you just want to say hi!</div>
        </div>
    </div>
<!-- End Sublime Program -->
<!-- Start Windows Footer -->
<div class="windows-footer">
    <div class="windows-logo icon" onclick="window.location.href = 'index.php'">
        <img src="css/img/windows-logo-white.png" />
    </div>
    <div class="search-bar">
        <i class="fas fa-search" style="-webkit-transform: scaleX(-1); transform: scaleX(-1); font-size: 32px;"></i>
        <input type="text" placeholder="Type here to search" />
    </div>
    <div class="icon" onclick="alert('Much like the real cortana, utterly useless :)');">
        <img src="css/img/cortana-white-logo.png" />
    </div>
    <div class="icon">
        <img src="css/img/windows-store-logo.jpeg" onclick="alert('Coming Soon');"/>
    </div>
    <div class="icon active" id="sublime-tab" onclick="minimizeWindow('#sublime-window', '#sublime-tab');">
        <img src="css/img/sublime-logo.png" />
    </div>
    <div class="icon" id="fivem-tab" onclick="maximizeWindow('#fivem-window', '#fivem-tab');">
        <img src="css/img/fivem-logo.png" />
    </div>
    <!--
    <div class="icon">
        <img src="css/img/mamp-logo.png" />
    </div>
    -->
    <div class="icon" id="github-tab" onclick="maximizeWindow('#github-window', '#github-tab')">
        <img src="css/img/github-transparent-logo.png" />
    </div>
    <div class="icon" id="discord-tab" onclick="maximizeWindow('#discord-window', '#discord-tab')">
        <img src="css/img/discord-transparent-logo.png" />
        <span class="notifications">
            4+
        </span>
    </div>
    <div class="icon" id="docs-tab" onclick="maximizeWindow('#docs-window', '#docs-tab')">
        <img src="css/img/gitbook-logo.png" />
    </div>
</div>
<!-- End Windows Footer -->
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
<script src="js/logged_in.js"></script>
</html>
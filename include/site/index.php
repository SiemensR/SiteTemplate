<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('The contents are available only after <a href="../login.php">login</a>');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Anton's projects</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116509036-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-116509036-1');
  </script>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PZRPBLZ');</script>
<!-- End Google Tag Manager -->
    <script src="js/jquery-2.2.1.min.js"></script>
    <script src="js/go_top.js"></script>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="css/mediaelementplayer.min.css" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZRPBLZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="static/images/logo.png" id="logo"/></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#music">Music</a></li>
        <li><a href="#vidos">Videos</a></li>
        <li><a href="#more">More</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#music">Music</a></li>
        <li><a href="#vidos">Videos</a></li>
        <li><a href="#more">More</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
      <!--  <h1 class="header center teal-text text-lighten-2"></h1> -->
        <div class="row center">
          <!-- <h5 class="header col s12 light">Did you see Anton playing guitar?</h5> -->
        </div>
        <div class="row center">
           <i class="hauptIcon large material-icons dp48" id="target">arrow_downward</i>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="static/images/img1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
      </div>
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text "></i></h3>
        <h1 id="music">Anton's Music</h1>
        <p class="left-align light">Some tracks recorded at home in different times before moving to Germany</p><br/>
          <div class="playerList">
          <ul class="collapsible">
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 1</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track1.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 2</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track2.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 3</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track3.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 4</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track4.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 5</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track5.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 6</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track6.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 7</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track7.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 8</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track8.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 9</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track9.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 10</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track10.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
              <li class="left-align light">
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Track 11</div>
                  <div class="collapsible-body">
                      <audio class="mejs__player"  src="static/media/mp3/track11.mp3" type="audio/mp3"></audio>
                  </div>
              </li>
          </ul>
          </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Everybody likes PHP</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="static/images/img2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 id="vidos">Videos with Anton</h4>
          <p class="left-align light">I began to learn guitar when I was only 13. After some years I could some really cool feature. Today, I forgot of course everything but I still like guitar music.</p><br/>
<div class="container">
          <div class="row center">
          <video class="mejs__player responsive-video" style="width:100%;height:100%;" src="static/videos/video1.mp4" width="720" height="560" type="video/mp4"></video><br/>
          <video class="mejs__player responsive-video" style="width:100%;height:100%;" src="static/videos/video2.mp4" width="720" height="560" type="video/mp4"></video><br/>
          <video class="mejs__player responsive-video" style="width:100%;height:100%;" src="static/videos/video3.mp4" width="720" height="560" type="video/mp4"></video><br/>
          <video class="mejs__player responsive-video" style="width:100%;height:100%;" src="static/videos/video4.mp4" width="720" height="560" type="video/mp4"></video><br/>
    </div>
        </div>
      </div>

    </div>
  </div>

</div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot" id="more">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Opel Corsa is so snowy</h5>
        </div>
      </div>
        <div class="parallax"><img src="static/images/img3.jpg" alt="Unsplashed background img 3"></div>
    </div>

  </div>

  <footer class="page-footer teal">
<!-- start of possible content
     <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4"></p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div> -->
    <div class="footer-copyright">
      <div class="container">
      Made by Anton with <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize framework</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script type = "text/javascript" language = "javascript" src="js/main.js"></script>
  </body>
</html>

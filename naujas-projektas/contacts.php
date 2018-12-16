
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <title></title>
    <style media="screen">
      main {
        flex: 1 0 auto;
      }
      * {
        box-sizing: border-box;
    }
      body {
          background-color: #f1f1f1;
          padding: 20px;
          font-family: Arial;
      }
      .row {
          margin: 10px -16px;
      }
      /* Add padding BETWEEN each column */
      .row,
      .row > .column {
          padding: 8px;
      }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <nav class="black">
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo"> <img src="images/logo1.jpg"> </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.html">Pagrindinis</a></li>
          <li><a href="pregallery.html">Galerija</a></li>
          <li><a href="contacts.php">Kontaktai</a></li>
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="index.html">Pagrindinis</a></li>
      <li><a href="pregallery.html">Galerija</a></li>
      <li><a href="contacts.php">Kontaktai</a></li>
    </ul>
    <main>
      <div class="">
        <h1>Susisiekite!</h1>
        <form class="col s12" id="contact" action="app.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <input type="text" name="vardas" required autofocus>
              <label for="text">Jūsų vardas</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <textarea class="materialize-textarea" name="message" required></textarea>
              <label for="textarea">Jūsų žinutė</label>
            </div>
            <div class="input-field col s6">
              <input type="email" name="email" required>
              <label for="email">Jūsų el.pašto adresas</label>
            </div>
          </div>
          <button name="submit" type="submit" id="contact-submit">Siųsti</button>
        </form>
      </div>
      <br>
      <br>
      <br>
      <h2>Mus rasite:</h2>
      <div class="col l6 s12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2306.8316923914103!2d25.26490095135387!3d54.677390680182654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd947262fe60f1%3A0x1a482114edd75007!2sT.+%C5%A0ev%C4%8Denkos+g.+16%2C+Vilnius+03223!5e0!3m2!1slt!2slt!4v1542652440264" width="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </main>
    <footer class="page-footer black">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Kontaktai</h5>
              <address class="">
                <dl class="">
                  <dl>Tel.:<a href="Tel:+37062249979" style="color: white">+37062249979</a></dl>
                  <dl>El.paštas: <a href="mailto:4fostudio@gmail.com" style="color: white">4fostudio@gmail.com</a></dl>
                  <dl>Adresas: T.Ševčenkos 16, Vilnius</dl>
                </dl>
              </address>
            </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Sekite mus čia:</h5>
            <ul>
              <a href="https://www.instagram.com/explore/locations/1145785008787760/4fo-studio"><img src="images/insta.jpg"></a>
              <a href="https://www.facebook.com/4FOstudio/"><img src="images/facebook.jpg"></a>
              <a href="http://4fostudio.tumblr.com"><img src="images/tumblr.jpg"></a>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2018 Visos teisės saugomos.
        <a class="grey-text text-lighten-4 right" href="#!"></a>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
  </body>
</html>

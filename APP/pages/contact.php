<!-- Includes the contact form -->

<p>De push waar je om vroeg.<p>

<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="P. Gholamhossein, J. Houwaart, L. Meijles">
  <meta name="description" content="Mentaal-Unique">
  <meta name="keywords" content="HTML, CSS, PHP">
  <meta name="viewport" content="width=device-width, initial-scale=1,0">
  <title>Mentaal Unique</title>
  <link href="../scss/contact.min.css" rel="stylesheet" type="text/css">
  <!--Deze link kan ook worden gebruikt inplaats van de bovenste: <link href="../scss/wiezijnwij.min.css" rel="stylesheet" type="text/css">-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
  <body>

  <!--TEMPORARY NAVIGATION JULIAN WILL CHANGE THIS IF NESSESARY-->
  <!-- NAVIGATION -->
  <div class="nav">
        <label for="toggle"><i class="fas fa-bars"></i></label>
          <input type="checkbox" id="toggle"/>
          <div class="menu">
            <a href="home.html">Home</a>
            <a href="wiebenik.html">Wie ben ik</a>
            <a href="contact.php">Contact</a>
            <a href="">Info</a>
          </div>
        </div>


        <!--FORM, DESIGN WILL LATER BE IMPLEMENTED-->
        <!--DO NOT CHANGE THE NAME ID'S OR TYPES-->
        <br>
          <form  method="post" action="contact.php">
          Voornaam:
          <br>
          <input type="text" name="voornaam" id="voornaam" placeholder="voornaam" autocomplete="off"><!--PLACEHOLDER CAN BE CHANGED-->
          <br>
          Achternaam:
          <br>
          <input type="text" name="achternaam" id="achternaam" placeholder="achternaam" autocomplete="off"><!--autocomplete prevents examples being given-->
          <br>
          Uw Email:
          <br>
          <input type="text" name="email" id="email" placeholder="email" autocomplete="off">
          <br>
          Onderwerp:
          <br>
          <input type="text" name="onderwerp" id="email" placeholder="Onderwerp" autocomplete="off">
          <br>
          Uw bericht:
          <br>
          <textarea name="bericht" id="bericht" cols="30" rows="10"></textarea>
          <br>
          <br>
          <input type="submit" name="submit" id="submit" value="verzend!">
        </form>
      </body>
</html>

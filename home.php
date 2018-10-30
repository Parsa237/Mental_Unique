<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="J. Houwaart">
    <meta name="description" content="danial-website"><!--Website name will be differend soon-->
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1,0">
    <title>Mentaal Unique</title>
    <link href="scss/styles.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
  </head>
  <body>

    <!-- HEADER -->
    <header class="header">
      <div class="div">
        <h1 class="h1">Mentaal Unique</h1>
        <p class="p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut labore et.</p>
        <a class="button" href="#whatwedo">Wat wij doen</a>
      </div>
    </header>

    <!-- NAVIGATION -->
    <nav class="nav">
      <article class="article">
        <a class="hamburger" href="pages/nav.php">&#9776;</a>
      </article>
      <article>
        <!-- <a href="#home">Mentaal Unique</a> -->
      </article>
    </nav>

    <main class="main">
      <section id="whatwedo" class="whatwedo">
        <h2 class="h2">Wat wij doen</h2>
        <article class="articlewhatwedo">
          <i class="fas fa-cogs"></i>
          <h3>lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <button type="button" name="button">Read more</button>
        </article>
        <article class="articlewhatwedo">
          <i class="fas fa-cogs"></i>
          <h3>lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <button type="button" name="button">Read more</button>
        </article>
        <article class="articlewhatwedo">
          <i class="fas fa-cogs"></i>
          <h3>lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
          <button type="button" name="button">Read more</button>
        </article>
      </section>
    </main>

    <footer>
      <p>copyright &copy; PJL Developers 2018</p>
    </footer>

    <script type="text/javascript">
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
              e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
          });
        });
    </script>

  </body>
</html>

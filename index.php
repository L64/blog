<?php
if(isset($_GET['p'])) {
  /* $id = $_GET['p'];
  function purifier() {
    $includer = include $_GET['p'].".php";
    $purifier_one = str_replace("\n", "<br>", $includer);
    return 
  } */
  include "data/posts/".$_GET['p'].".php";
?>
<!DOCTYPE html>
<html id="top">
  <head>
      <meta charset="utf-8">
      <title><?php echo $title; ?> by <?php echo $author; ?></title>
      <meta charset="utf-8">
      <link rel="icon" href="core/img/favicon.png">
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="core/style.css" />
  </head>
  <body>
    <div class="content">
      <div class="art_content">
        <div style="display: flex;">
          <h3 class="pubBack" style="margin: 10;"><a href="index.php"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></a></h3>
          <div style="display: block;">
            <article>
              <h1 id="title"><?php echo $title; ?></h1>
              <p>by <a href="<?php echo $author_webpage; ?>"><?php echo $author ?></a> <date><?php echo $date ?></date></p>
              <hr />
              <p><?php echo $story ?></p>
            </article>
          </div>
        </div>
        <footer>
          <article class="post_footer">
            <p>Coded by <a href="https://lucas64.tk">Lucas</a>. Based on <a href="https://repl.it/@templates/Personal-Blog-Site">Personal Blog Site</a>.</p>
            <p>Pwd by <a href="https://forkaweso.me"><i class="fa fa-fork-awesome" aria-hidden="true"></i></a> - <a href="https://github.com/L64/blog">Source code</a></p>
          </article>
        </footer>
      </div>
    </div>
    <a href="#top"><button class="downtoup_arrow"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i></button></a>
  </body>
    <!-- Based on Change-the-Text -->
    <!-- Created by Lucas M.T. in 2020 -->
</html>
<?php } else { ?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Thanks to @Vandesm14 and Repl.it for the original template (@templates/Personal-Blog-Site) -->
    <!-- Feed created using Feedlang -->
    <!-- Feedlang was created by Lucas M.T. in 2020 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="core/style.css" />
    <link rel="icon" href="core/img/favicon.png" type="image/x-icon" />
  </head>
  <body>
    <div class="content">
      <div>
        <main>
          <?php include "data/feed.fwf"; ?>
        </main>
        <footer>
          <article>
            <p>Coded by <a href="https://lucas64.tk">Lucas</a>. Based on <a href="https://repl.it/@templates/Personal-Blog-Site">Personal Blog Site</a>.</p>
            <p>Pwd by <a href="https://forkaweso.me"><i class="fa fa-fork-awesome" aria-hidden="true"></i></a> - <a href="https://github.com/L64/blog">Source code</a></p>
          </article>
      </div>
    </div>
  </body>
</html>
<?php } ?>
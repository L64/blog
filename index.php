<!DOCTYPE html>
<html id="top">
  <head>
      <!-- Thanks to @Vandesm14 and Repl.it for the original template (@templates/Personal-Blog-Site) -->
      <!-- Feed created using Feedlang -->
      <!-- Feedlang was created by Lucas M.T. in 2020 -->
      <meta charset="utf-8">
      <link rel="icon" href="core/favicon.png">
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="core/style.css" />
  </head>
  <body>
    <div class="content">
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
      <title><?php echo $title; ?> by <?php echo $author; ?></title>
      <div class="art_content">
        <div style="display: flex;">
          <h3 class="pubBack" style="margin: 10;"><a href="index.php"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></a></h3>
          <div style="display: block;">
            <article>
              <h1 id="title"><?php echo $title; ?></h1>
              <p>by <a href="<?php echo $author_webpage; ?>"><?php echo $author ?></a> <date><?php echo $date ?></date></p>
              <hr>
              <div><?php echo $story ?></div>
            </article>
          </div>
        </div>
<?php } else { ?>
      <title>Blog</title>
      <div>
        <main>
          <?php include "data/feed.fwf"; ?>
        </main>
<?php } ?>
        <footer>
          <article class="post_footer">
            <p>Coded by <a href="https://lucas64.tk">Lucas</a>. Based on <a href="https://repl.it/@templates/Personal-Blog-Site">Personal Blog Site</a>.</p>
            <p>Pwd by <a href="https://forkaweso.me"><i class="fa fa-fork-awesome" aria-hidden="true"></i></a> & hosted by <a href="https://repl.it"><img width="15px" height="15px" src="https://repl.it/public/images/favicon.ico" alt="Repl.it"></a> - <a href="https://github.com/L64/blog">Source code</a></p>
          </article>
        </footer>
      </div>
      <a href="#top"><button class="downtoup_arrow"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i></button></a>
    </div>
    <!-- Blog posts based on Change-the-Text -->
    <!-- Coded by Lucas (lucas64.tk) -->
  </body>
</html>

<?php
include "data/settings.php";
session_start();
if(isset($_GET['theme'])) {
  if($_GET['theme'] == "") {
    die("<!DOCTYPE html>\n<html><body><h1>Error, no theme found, please, put a correct one: <a href=\"?theme=light\">Light</a> - <a href=\"?theme=dark\">Dark</a></h1></body></html>");
  } else {
    $_SESSION['theme'] = $_GET['theme'];
  }
}
if(isset($_SESSION['theme'])) {
  $theme = $_SESSION['theme'];
} else {
  $theme = "light";
  $_SESSION['theme'] = $theme;
}
?>
<!DOCTYPE html>
<html>
  <head>
      <!-- Thanks to @Vandesm14 and Repl.it for the original template (@templates/Personal-Blog-Site) -->
      <!-- Feed created using Feedlang -->
      <!-- Feedlang was created by Lucas M.T. in 2020 -->
      <meta charset="utf-8">
      <link rel="alternate" type="application/feedlang" title="Feedlang Feed" href="data/feed.html" />
      <link rel="icon" href="core/favicon.png">
      <meta name="viewport" content="width=device-width">
      <!-- PWA -->
      <link rel="manifest" href="manifest.json">
      <!-- Theme -->
      <link rel="stylesheet" href="core/themes/<?php if($theme=="light") { ?>light.css<?php } elseif($theme=="dark") { ?>dark.css<?php } elseif($theme=="halloween") { ?>halloween.css<?php } else { ?>light.css<?php } ?>" />
      <!-- Open Graph -->
      <!-- <meta property="og:url" content="<?php // echo $_SERVER['HTTP_REFERER']; ?>" />
      <meta property="og:image" content="<?php // echo $icon_final; ?>" />
      <meta property="og:type" content="webpage" /> -->
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
    <!-- <meta property="og:title" content="<?php echo $title; ?>" /> -->
    <title><?php echo $title." by ".$author." | "." ".$name; ?></title>
  </head>
  <body>
    <main>
      <div class="art_content">
        <div style="display: flex;">
          <h3 class="pubBack" style="margin: 10;"><a href="<?php echo $_SERVER['PHP_SELF']; ?>"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></a></h3>
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
    <!-- <meta property="og:title" content="<?php echo $name; ?>" /> -->
    <title><?php echo $name; ?></title>
  </head>
  <body>
    <main>
      <div>
<?php include "feed.html"; ?>

<?php } ?>
        <footer>
          <article class="post_footer">
            <p>Coded by <a href="https://lucas64.tk">Lucas</a>. Based on <a href="https://repl.it/@templates/Personal-Blog-Site">Personal Blog Site</a>.</p>
            <p>Pwd by <a href="https://forkaweso.me"><i class="fa fa-fork-awesome" aria-hidden="true"></i></a> & hosted by <a href="https://repl.it"><img class="replicon" width="15px" height="15px" src="https://repl.it/public/images/favicon.ico" alt="Repl.it"></a> - <a href="https://codeberg.org/lucas/blog">Source code</a></p>
          </article>
        </footer>
      </div>
      <a href="#"><button class="bp downtoup_arrow"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i></button></a>
      <?php
      if (isset($_GET['p'])) {
        if($theme == "light") { ?>
      <a href="?p=<?php echo $_GET['p']; ?>&theme=dark"><button class="bp theme"><i class="fa fa-moon fa-2x" aria-hidden="true"></i></button></a>
        <?php } elseif($theme == "dark") { ?>
      <a href="?p=<?php echo $_GET['p']; ?>&theme=light"><button class="bp theme"><i class="fa fa-sun fa-2x" aria-hidden="true"></i></button></a>
        <?php } else { ?>
      <a href="?p=<?php echo $_GET['p']; ?>&theme=dark"><button class="bp theme"><i class="fa fa-moon fa-2x" aria-hidden="true"></i></button></a>
        <?php
        }
       } else {
         if($theme == "light") { ?>
      <a href="?theme=dark"><button class="bp theme"><i class="fa fa-moon fa-2x" aria-hidden="true"></i></button></a>
        <?php } elseif($theme == "dark") { ?>
      <a href="?theme=light"><button class="bp theme"><i class="fa fa-sun fa-2x" aria-hidden="true"></i></button></a>
        <?php } else { ?>
      <a href="?theme=dark"><button class="bp theme"><i class="fa fa-moon fa-2x" aria-hidden="true"></i></button></a>
       <?php
        }
       } ?>
    </main>
    <!-- Blog posts based on Change-the-Text -->
    <!-- Coded by Lucas (lucas64.tk) -->
  </body>
</html>

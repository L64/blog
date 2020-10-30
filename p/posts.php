<!DOCTYPE html>
<html id="top">
  <head>
      <meta charset="utf-8">
      <title><?php echo $title ?> by <?php echo $author ?></title>
      <meta charset="utf-8">
      <link rel="icon" href="/img/favicon.png">
      <meta name="viewport" content="width=device-width">
      <link rel="stylesheet" href="/style.css" />
  </head>
  <body style="display: flex;">
    <h3 class="pubBack" style="margin: 10;"><a href="javascript:history.back()"><i class="fa fa-arrow-circle-left fa-2x" aria-hidden="true"></i></a></h3>
    <div style="display: block;">
      <article>
        <h1 id="title"><?php echo $title; ?></h1>
        <p>by <a href="<?php echo $author_webpage; ?>"><?php echo $author ?></a> <date><?php echo $date ?></date></p>
        <hr />
        <p><?php echo $story ?></p>
      </article>
      <footer>
        <article class="post_footer">
          Coded by <a href="https://lucas64.tk">Lucas</a>, created  with <a href="https://repl.it/@templates/Personal-Blog-Site">Personal Blog Site</a>.
          <hr>
          <a href="#top"><button class="downtoup_arrow">⬆</button></a>
       </article>
     </footer>
    </div>
  </body>
    <!-- Based on Change-the-Text -->
    <!-- Created by Lucas M.T. in 2020 -->
</html>

<?php
// header("Content-Type: application/json");
// include "data/settings.php";
?>
{
  "name": "<?php // echo $name; ?>",
  "short_name": "Lucas' Blog",
  "start_url": "index.php",
  "scope": "./",
  "icons": [
    {
      "src": "core/favicon.png",
      "sizes": "768x768",
      "type": "image/png"
    }
  ],
  "theme_color": "#e7e7ff",
  "background_color": "#e7e7ff",
  "display": "standalone"
}
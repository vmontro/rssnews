<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $rss = simplexml_load_string(file_get_contents('https://www.andriaviva.it/rss/'));
  foreach($rss->xpath('channel/item') as $rss)
  {
    echo "<br/>titolo =" .$rss->title;
    echo "<br/>link = " .$rss->link;
    echo "<br/>IMG = <img src='".$rss->enclosure[@url]."'>";
  }
  print_r($rss);
  ?>
  
</body>
</html>
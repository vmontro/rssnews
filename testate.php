<?php
$news = simplexml_load_file('news.xml');
$giornale = [];
foreach($news->testata as $testata)
{
  array_push($giornale,strval($testata['nomeTestata']),strval($testata['id']));
}

echo (json_encode($giornale));
?>
<?php
$news = simplexml_load_file('news.xml');
$id = $_POST['id'];
$categorie = [];
foreach($news->testata as $testata)
{
  if(strval($testata['id']) == $id) {
    foreach($testata->categoria as $categoria)
    {
      array_push($categorie,strval($categoria['nomeCategoria']));
      array_push($categorie,strval($categoria));
    }
  }
}

echo (json_encode($categorie));
?>
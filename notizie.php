<?php
$rss = simplexml_load_string(file_get_contents($_POST['url']));
echo '
<section id="more-services" class="more-services">
  <div class="container">
    <div class="section-title" data-aos="fade-up">
      <h2>Notizie</h2>
    </div>
  </div>
  <div class="row">
';
foreach($rss->channel as $channel)
{
foreach($channel->item as $item)
{
  echo '
  <div class="col-md-6 d-flex align-items-stretch mt-md-0">
      <div class="card" data-aos="fade-up" data-aos-delay="100">
      <div class="card-body">
      <div class="col text-center">
        <img src="'.$item->enclosure[@url].'" class="figure-img img-fluid rounded" width="400" height="400">
      </div><hr/>

        <h5 class="card-title"><a href="'.$item->link.'">'.$item->title.'</a></h5>
        <p class="card-text" href="'.$item->link.'">'.$item->description.'</p>
        <div class="read-more"><a href="'.$item->link.'"><i class="icofont-arrow-right"></i> Leggi più</a></div>
      </div>
    </div>
  </div>';  
}
}
echo '</div></section>';
?>
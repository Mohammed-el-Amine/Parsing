<?php
$nom = '<h2 class="14">
  <a href="/movie/139038-a-haunted-house">Ghost Bastards</a>
   <span class="tag release_date">(2013)</span>
</h2>';
preg_match('/<h2 class="14">(.*?)<\/h2>/s', $nom, $result);

// echo $result[0] . "\n";
// echo $result[1] . "\n";

var_dump($result);



$url = '<h2><a href="/tv/90802" title="Sandman">Sandman</a></h2>';

preg_match('/<h2>(.*?)<\/h2>/s', $url, $resulta);
echo $resulta[0]."\n";
echo $resulta[1]."\n";
?>
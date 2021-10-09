<?php

$carouselItemArray = array(

array("id"=> "2", "text" => "burger" ),
array("id"=> "3", "text" => "burger" ),
array("id"=> "4", "text" => "burger" ),
array("id"=> "5", "text" => "burger" ),


);

$loopmeter = 2;
foreach($carouselItemArray as $carouselItemData ){
  echo "<div class='carousel-item'>";
    echo "<img src='image/changeable/h{$loopmeter}.png' height='900' width='100%' >";
  echo "</div>";
  $loopmeter += 1;
}





?>
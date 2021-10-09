<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
<?php
for($i=4; $i<5; $i++){
    $slidenumber = $i + 1;
    echo "<button type='button' data-bs-target='#myCarousel' data-bs-slide-to='{$i}' aria-label='Slide {$slidenumber}'></button>";
}
?>

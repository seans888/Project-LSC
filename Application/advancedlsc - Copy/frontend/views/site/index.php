<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>

<br>

<div class="site-index">

<!--end of slideshow-->
<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/img.jpg') ?>" />
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/img1.jpg') ?>" />
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/img2.jpg') ?>" />
    <div class="text">Caption Three</div>
  </div>

</div>
<br>

<script type="text/javascript">
  
  var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 7000); // Change image every 2 seconds
}


</script>
<!--end of slideshow-->
<br><br><br>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
            <img src="images/image.png"> 
                <h2 class="headline2index">QUALITY EDUCATION</h2>

                <p class="textindex">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>

                <p><a class="btn btn-default-index" href="http://localhost/advanced/frontend/web/index.php?r=site%2Fabout">READ MORE &raquo;</a></p>
            </div>
            <div class="col-lg-4">
            <img src="images/image1.png">
                <h2 class="headline2index">SYSTEMATIC APPROACH</h2>

                <p class="textindex">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>

                <p><a class="btn btn-default-index" href="http://localhost/advanced/frontend/web/index.php?r=site%2Ftutorials">READ MORE &raquo;</a></p>
            </div>
            <div class="col-lg-4">
            <img src="images/image2.png">
                <h2 class="headline2index">ONE TO ONE STUDY</h2>

                <p class="textindex">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.</p>

                <p><a class="btn btn-default-index" href="http://localhost/advanced/frontend/web/index.php?r=site%2Freviews">READ MORE &raquo;</a></p>
            </div>
        </div>

    </div>
</div>

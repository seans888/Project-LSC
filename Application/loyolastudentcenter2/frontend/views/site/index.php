<?php

/* @var $this yii\web\View */

$this->title = 'Loyola Student Center';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Free Education Template</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="theme/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="theme/assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="theme/assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="theme/assets/css/style.css" rel="stylesheet" />    
  <!-- Google   Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/style1.css">

        <!-- Bootstrap Core CSS -->
    <link href="slideshow/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="slideshow/css/half-slider.css" rel="stylesheet">

</head>
<body > <br><br>


<!--===============================================================================================================
  SLIDESHOW STYLES 
  =============================================================================================================-->
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1150px;
  position: relative;
  margin: auto;
  display: block;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 7s;
  animation-name: fade;
  animation-duration: 7s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


<!--===============================================================================================================
  SLIDESHOW 

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

<script>
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
    setTimeout(showSlides, 7000); // Change image every 7 seconds
}
</script> 

  =============================================================================================================-->

    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill">
                <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/img.jpg') ?>" />
 </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill">
                  <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/img1.jpg') ?>" />

                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill">
                  <img class ="slideshow" src="<?= yii\helpers\Url::to('@web/images/img2.jpg') ?>" />

                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>








<!--===============================================================================================================
  TAG LINE
  =============================================================================================================-->
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> WELCOME TO LOYOLA STUDENT CENTER <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>   
    </div>

<!--===============================================================================================================
  OFFER SECTION 
  =============================================================================================================-->    
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">WHAT WE OFFER </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.</p>
                 </div>
             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                     <i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i>
                   <h3 >Quality Education</h3>
                 <hr />
                  <hr />
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo .    
                   </p>
               <a href="index.php?r=site%2Fabout" class="btn btn-info btn-set"  >READ MORE</a>
                </div>
                   </div>
                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="about-div">
                     <i class="fa fa-bolt fa-4x icon-round-border" ></i>
                   <h3 >Tutorial <br>Classes</h3>
                 <hr />
                       <hr />
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                   </p>
               <a href="index.php?r=site%2Findex#tutorial-sec" class="btn btn-info btn-set"  >READ MORE</a>
                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                     <i class="fa fa-magic fa-4x icon-round-border" ></i>
                   <h3 >Review<br> Programs</h3>
                 <hr />
                       <hr />
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                       
                   </p>
               <a href="index.php?r=site%2Freviews" class="btn btn-info btn-set"  >READ MORE</a>
                </div>
                   </div>
               </div>
             </div>
<!--===============================================================================================================
  TUTORIAL SECTION
  =============================================================================================================-->
    <div id="tutorial-sec" ><br><br><br>
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">TUTORIAL CLASSES</h1>
                   <p data-scroll-reveal="enter from the bottom after 0.3s">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo. </p>
                 </div>
             </div>
             <!--/.HEADER LINE END-->  
                       <div class="row set-row-pad" >

               <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                  <strong>KINDER & PRE-SCHOOL</strong>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                  <ul>
                                  <li>Reading </li>
                                  <li>Math</li>
                                  <li>Writing </li>
                                  <li>Speech</li>
                                  <li>Phoenics</li>                  
                                  </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                      <strong>GRADE SCHOOL </strong> 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                  <ul>
                                  <li>English</li>
                                  <li>Filipino</li>
                                  <li>CLE </li>
                                  <li>Science</li>
                                  <li>Reading</li>
                                  <li>Araling Panlipunan</li>             
                                  </ul>                                
                                  </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                        <strong>HIGH SCHOOL</strong>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse"  style="height: 0px;">
                                <div class="panel-body">
                                  <ul>
                                  <li>Elementary Algebra</li>
                                  <li>Advanced Algebra</li>
                                  <li>Geometry</li>
                                  <li>Trigonometry</li>
                                  <li>Calculus</li>
                                  <li>Filipino</li> 
                                  <li>Biology</li> 
                                  <li>Chemistry</li>             
                                  <li>Physics</li> 
                                  <li>English</li>
                                  <li>Araling Panlipunan</li>  
                                  </ul>
                                </div>
                            </div>
                        </div>
                            <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">
                                        <strong>COLLEGE</strong>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse"  style="height: 0px;">
                                <div class="panel-body">
                                  <ul>
                                  <li>Math</li>
                                  <li>Science</li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    </div>
           <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
                 <img src="theme/assets/img/building.jpg" class="img-thumbnail" />
           </div>
                    </div>


                    </div>
                    </div>

 
    </div>
             </div>

<!--===============================================================================================================
  REVIEW SECTION 
  =============================================================================================================-->
      <div id="review-sec" class="container set-pad"> <br><br><br>
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">REVIEW PROGRAMS</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         </p>
                 </div>
             </div>
             <!--/.HEADER LINE END-->

           <div class="row set-row-pad" >
           <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
                 <img src="theme/assets/img/building.jpg" class="img-thumbnail" />
           </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="collapsed">
                                  <strong>REVIEW PROGRAMS</strong>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>• Comprehensive College Entrance Test Review <br>
                                    • High School Entrance Test Review <br>
                                    • Civil Service Examination (CSE) Review <br>
                                    • National Medical Admission Test (NMAT) Review.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="collapsed">
                                      <strong>ENGLISH PROFICIENCY </strong> 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>• International English Language Testing System (IELTS) <br>
                                    • Test of English as a Foreign Language (TOEFL)<br>
                                    • Test of English for International Communication (TOEIC).</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="collapsed">
                                        <strong>OTHERS</strong>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse"  style="height: 0px;">
                                <div class="panel-body">
                                    <p>• Career Service Examination (CSE) <br>
                                    • SAT Reasoning Test 
                                       Graduate Management Admission Test (GMAT) <br>
                                    • Graduate Record Examination (GRE)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s" >
                       <span style="font-size:40px;">
                          <strong> 2500 + </strong> 
                           <hr />
                           STUDENTS
                       </span>
                   </div>
           </div>
               </div>
             </div>
      <!-- COURSES SECTION END-->
<!--===============================================================================================================
  CONTACT SECTIOn
  =============================================================================================================-->
    <div id="contact-sec"   >
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >CONTACT US  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control "  required="required" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control " required="required"  placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <textarea name="message" required="required" class="form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
                        </div>

                    </form>
                </div>
                
               </div>
                </div>
          </div> 
       </div>
     <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                     <h2 ><strong>Contact Person </strong></h2>
        <hr />
                    <div>
                        <h4>Ms. Joan Limos</h4>
                        <h4>LSC,Katipunan</h4>
                        <h4><strong>Call:</strong>  + 67-098-907-1269 / 70 / 71 </h4>
                        <h4><strong>Email: </strong>lsc1986@yahoo.com</h4>
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Social Connectivity </strong></h2>
        <hr />
                    <div >
                        <a href="https://www.facebook.com/19LSC86" target="_blank">  <img src="assets/img/Social/facebook.png" alt="" /> </a>
                     <a href="#"> <img src="assets/img/Social/google-plus.png" alt="" /></a>
                     <a href="http://www.twitter.com/lsckatipunan" target="_blank"> <img src="assets/img/Social/twitter.png" alt="" /></a>
                    </div>
                    </div>


                </div>
                 </div>
     <!-- CONTACT SECTION END-->
    <div id="footer">
          &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="theme/assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="theme/assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="theme/assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="theme/assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="theme/assets/js/custom.js"></script>
</body>
</html>

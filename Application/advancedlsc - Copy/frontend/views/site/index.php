<?php

/* @var $this yii\web\View */

$this->title = 'Home';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Loyola Student Center</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="
    css/style.css" rel="stylesheet" />    
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body >
<br><br>


       <!--start of slideshow-->
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
       
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >
           
               <div class="col-lg-12  col-md-12 col-sm-12">
               
        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> WELCOME TO THE LOYOLA STUDENT CENTER <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>
        
    </div>
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">FEATURE LIST </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         </p>
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
               <a href="#contact-sec" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
                </div>
                   </div>
                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="about-div">
                     <i class="fa fa-bolt fa-4x icon-round-border" ></i>
                   <h3 >SYSTEMATIC APPROACH</h3>
                 <hr />
                       <hr />
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                       
                   </p>
               <a href="#contact-sec" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="about-div">
                     <i class="fa fa-magic fa-4x icon-round-border" ></i>
                   <h3 >ONE TO ONE STUDY</h3>
                 <hr />
                       <hr />
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                       
                   </p>
               <a href="#contact-sec" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
                </div>
                   </div>
                 
                 
               </div>
             </div>
   <!-- FEATURES SECTION END-->
    <div id="faculty-sec" >
    <div class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR FACULTY </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                         </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <img src="assets/img/faculty/1.jpg"  class="img-rounded" />
                   <h3 >ROXI CHI LUENA </h3>
                 <hr />
                         <h4>Faculty <br /> Department</h4>
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                       
                   </p>
                </div>
                   </div>
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                     <div class="faculty-div">
                     <img src="assets/img/faculty/2.jpg"  class="img-rounded" />
                   <h3 >JANE DEO ALEX</h3>
                 <hr />
                         <h4>Faculty <br /> Department</h4>
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                       
                   </p>
                </div>
                   </div>
               <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="faculty-div">
                     <img src="assets/img/faculty/3.jpg" class="img-rounded" />
                   <h3 >RUBY DECORSA</h3>
                 <hr />
                         <h4>Faculty <br /> Department</h4>
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo . 
                       
                   </p>
                </div>
                   </div>
                 
               </div>
             </div>
        </div>
    <!-- FACULTY SECTION END--> 
      <div id="review-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line"><br><br>OUR REVIEW PROGRAMS </h1>
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
                 <img src="assets/img/building.jpg" class="img-thumbnail" />
           </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                  <strong>   </strong> REVIEW PROGRAMS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Loyola Student Center offers five review programs which are Comprehensive College Entrance Test Review, High School Entrance Test Review, Civil Service Examination (CSE) Review, and National Medical Admission Test (NMAT) Review.</p>
                                    <p class = "buttonreadmore"><a class="btn btn-default" href="http://localhost/advancedlsc2/frontend/web/index.php?r=site%2Freviews">Read more &raquo;</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                      <strong>   </strong> ENGLISH PROFICIENCY 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>
                                       Loyola Student Center offers three english proficiency programs which are International English Language Testing System (IELTS), Test of English as a Foreign Language (TOEFL), and Test of English for International Communication (TOEIC).
                                    </p>
                                    <p class = "buttonreadmore"><a class="btn btn-default" href="http://localhost/advancedlsc2/frontend/web/index.php?r=site%2Fenglish">Read more &raquo;</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                                        <strong>   </strong> OTHERS 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse"  style="height: 0px;">
                                <div class="panel-body">
                                    <p>
                                       Loyola Student Center offers other review programs such as Career Service Examination (CSE), 
                                       SAT Reasoning Test, 
                                       Graduate Management Admission Test (GMAT), and 
                                       Graduate Record Examination (GRE)
                                       <p class = "buttonreadmore"><a class="btn btn-default" href="http://localhost/advancedlsc2/frontend/web/index.php?r=site%2Fother">Read more &raquo;</a></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s" >
                       <span style="font-size:40px;">
                          <strong> 2500 + </strong> 
                           <hr />
                           Students
                       </span>
                   </div>
           </div>
             
                 
               </div>
             </div>
      <!-- REVIEW SECTION END-->
    <div id="tutorials-sec"   >
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.3s" class="header-line" ><br>TUTORIALS  </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                      <table align="center">
                        <tr bgcolor="">
                            <th>Kinder & Prep:</th>
                            <th>Reading <br>
                               Writing<br>
                               Speech<br></th>
                            <th>Math<br>
                               Phonics</th>
                        </tr>

                         <tr bgcolor="">
                            <td>Grade School:</td>
                            <td>English<br>
                              Filipino<br>
                              CLE<br></td>
                             <td>Science<br>
                                Reading<br>
                                 Araling Panlipunan<br></td>
                          </tr>

                        <tr bgcolor="">
                            <td>High School:</td>
                            <td>Elementary Algebra<br>
                                Advanced Algebra<br>
                                Geometry<br>
                                Trigonometry<br>
                                Calculus<br>
                                Filipino<br></td>
                            <td>General Science<br>
                                Biology<br>
                                Chemistry<br>
                                Physics<br>
                                English<br>
                                Araling Panlipunan<br></td>
                        </tr>

                        <tr bgcolor="">
                            <td>College:</td>
                            <td>Math </td>
                            <td>Science</td>
                        </tr>
                      </table>
                         </p>
                 </div>
             </div>
             <!--/.HEADER LINE END-->
           
          </div> 
       </div>
     <div class="container">
             <div class="row set-row-pad"  >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s"> <br>

                    <h2 ><strong>Our Location </strong></h2>
        <hr />
                    <div>
                        <h4>234/80 -UFG , New Street,</h4>
                        <h4>Switzerland.</h4>
                        <h4><strong>Call:</strong>  + 67-098-907-1269 / 70 / 71 </h4>
                        <h4><strong>Email: </strong>info@yourdomain.com</h4>
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s"><br>

                    <h2 ><strong>Social Conectivity </strong></h2>
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
          &copy 2016 Loyola Student Center
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="js/custom.js"></script>
</body>
</html>

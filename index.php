<?php 
    require_once 'admin/config.php'; 
    $newsletters = query("SELECT * FROM newsletters WHERE visible=1"); 
    $subscriptions = ''; 
    foreach($newsletters as $nl) { 
        $subscriptions .= ' 
        <input type="checkbox" name="newsletter['.$nl["id"].'][subscribe]" value="true" '.$checked.'/> 
        <label for="newsletter['.$nl["id"].']">'.$nl['name'].'</label> 
        <input type="hidden" name="newsletter['.$nl["id"].'][nlid]" value="'.$nl['id'].'" /><br /> 
        '.$nl["description"].'<br /> 
        '; 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CanSat [Under Construction]</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery.bxslider.min.js"></script> -->
    <link href="lib/jquery.bxslider.css" rel="stylesheet" />
    <script src="js/jquery.bxslider.js"></script>
    
    <link rel="stylesheet" href="css/config.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <script src="js/smooth-scroll.js"></script>
    <script src="js/acc-drop-w3-menu.js" ></script>
    <script src="js/open-close-nav.js"></script>
    <!-- closes menu when you are clicking outside of it -->
    <script src="js/close-menu-when-click.js"></script>

  </head>
<body>
  <!-- back to top button start -->
      <!-- <div>
      <a href="#backgrnd">
        <span class="glyphicon glyphicon-arrow-up" id="back-to-top-button"></span>
      </a>  
      </div> -->
  <!-- back to top button end -->

  <!-- jumbotron start -->
    <div class="jumbotron" id="top">
      <!-- side navigation overlay start -->
      <div class="pull-left">
        <a href="javascript:void(0)" id="closebtn" onclick="closeNav()">&times;</a>
        <div id="mySidenav" class="sidenav">
          <a href="index.php">Αρχική</a>
          <div class="w3-accordion"> <!-- w3-accordion start -->

            <div style="border-bottom:2px solid white; padding-bottom: 10px;">
            <a href="organization.html" style="display: inline; border: 0;">Η Διοργάνωση</a><i onclick="myAccFunc()" class="fa fa-caret-down" style="display: inline; font-size: 2em; color: white;"></i>
            </div>
            <div id="demoAcc" class="w3-accordion-content w3-white w3-card-4">
              <a href="organization.html#anchor-history">H Ιστορία</a>
              <a href="organization.html#color-id">Η Ιδέα</a>
              <a href="organization.html#">Ο Διαγωνισμός</a>
              <a href="organization.html#">Οι Υποστηρικτές</a>
              <a href="organization.html#">Ο Διοργανωτής</a>

            </div>
          </div>      <!-- w3-accordion end -->
          <a href="support.html">Υποστηρικτές</a>
          <a href="nea.html">Νέα</a>
          <a href="blog.html">Blog</a>
          <a href="communication.html">Επικοινωνία</a>
        </div>
        <span id="menu-button" onclick="openNav()" class="glyphicon glyphicon-menu-hamburger"></span>
        
      </div>
      <!-- side navigation overlay end -->
      <div class="center-block">
        <img class="center-block" src="images/cansat_logo_trans.png" alt="photo">
        <h3 class="text-center" id="competition-styling">Ο μεγαλύτερος διαγωνισμός διαστημικής <br>έρχεται στην Ελλάδα!</h3>
        <div class="text-center">
          <a href="pdf/guide.pdf" target="_blank"><span class="necessary" id="jumbotron-button">Μάθετε περισσότερα</span></a>
        </div>
        <div class="text-center" id="arrow-button">
          <a href="#news" id="smooth">
          <img src="images/arrow.png" alt="arrow-image">
          </a>
        </div>
      </div>
    </div>
  <!-- jumbotron end -->

 <!-- start of multiple image slider -->
  <div class="container" id="news">
  <p class="text-center"><span class="glyphicon glyphicon-time"></span>ΠΡΟΣΦΑΤΑ ΝΕΑ</p>
  <div class="slider4"> 
  <div class="slide">
    <img src="images/photos/desk1.JPG" alt="photo">
    <p class="text-center">Workshop στον Άλιμο</p>
    <p class="text-center date">23 Σεπτεμβρίου 2016</p>
    <p class="text-center info">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.</p>
    <div class="text-center">
      <a href="pdf/guidelines.pdf" target="_blank"><span class="necessary">Μάθετε περισσότερα</span></a>
    </div>
  </div>
  <div class="slide">
    <img src="images/photos/board1.JPG" alt="photo">
    <p class="text-center">Workshop στον Άλιμο</p>
    <p class="text-center date">23 Σεπτεμβρίου 2016</p>
    <p class="text-center info">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.</p>
    <div class="text-center">
      <a href="pdf/guidelines.pdf" target="_blank"><span class="necessary">Μάθετε περισσότερα</span></a>
    </div>
    </div>
  <div class="slide">
    <img src="images/photos/desk2.JPG" alt="photo">
    <p class="text-center">Workshop στον Άλιμο</p>
    <p class="text-center date">23 Σεπτεμβρίου 2016</p>
    <p class="text-center info">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.</p>
    <div class="text-center">
      <a href="pdf/guidelines.pdf" target="_blank"><span class="necessary">Μάθετε περισσότερα</span></a>
    </div>
    </div>
     <div class="slide">
    <img src="images/photos/computers.JPG" alt="photo">
    <p class="text-center">Workshop στον Άλιμο</p>
    <p class="text-center date">23 Σεπτεμβρίου 2016</p>
    <p class="text-center info">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.</p>
    <div class="text-center">
      <a href="pdf/guidelines.pdf" target="_blank"><span class="necessary">Μάθετε περισσότερα</span></a>
    </div>
    </div>
    <div class="slide">
    <img src="images/photos/board5.JPG" alt="photo">
    <p class="text-center">Workshop στον Άλιμο</p>
    <p class="text-center date">23 Σεπτεμβρίου 2016</p>
    <p class="text-center info">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας.</p>
    <div class="text-center">
      <a href="pdf/guidelines.pdf" target="_blank"><span class="necessary">Μάθετε περισσότερα</span></a>
    </div>
    </div>
  
</div>
  </div>
<br><br>

<script>
    $(document).ready(function() {
        

        var widthMatch = matchMedia("(max-width: 767px)"); 
        // all and

        if(widthMatch.matches){
          var slider = $('.slider4').bxSlider({
              minSlides: 1,
              maxSlides: 1,
              slideWidth: 200,
              slideMargin: 30
            });
        }
        else{
          var slider = $('.slider4').bxSlider({
              minSlides: 4,
              maxSlides: 4,
              slideWidth: 300,
              slideMargin: 30
            });
        }

        var widthHandler = function(matchList) {
          if (matchList.matches) {
            slider.reloadSlider({
              minSlides: 1,
              maxSlides: 1,
              slideWidth: 200,
              slideMargin: 30
            })
          }
          else {
            slider.reloadSlider({
              minSlides: 4,
              maxSlides: 4,
              slideWidth: 300,
              slideMargin: 30
            })
          }
        };
 
    widthMatch.addListener(widthHandler);
    widthHandler(widthMatch);
    });
</script>



<!-- <script>
  $(document).ready(function(){
    var slider = $('.slider4').bxSlider();

  });
</script> -->
<!-- end of multiple image slider -->

<!-- guidelines start -->
  <div class="container-fluid general">
    <div class="container">
      <div class="col-sm-4 col-xs-12 outside">
        <a class="inside" href="pdf/guide.pdf" target="_blank"><span class="necessary">ΕΝΗΜΕΡΩΤΙΚΟΣ ΟΔΗΓΟΣ</span></a>
      </div>
      <div class="col-sm-4 col-xs-12 outside">
        <a class="inside" href="pdf/guidelines.pdf" target="_blank"><span class="necessary">ΟΔΗΓΙΕΣ ΣΥΜΜΕΤΟΧΗΣ</span></a>
      </div>
      <div class="col-sm-4 col-xs-12 outside">
        <a class="inside" href="pdf/form.doc" target="_blank"><span class="necessary">ΑΙΤΗΣΗ ΣΥΜΜΕΤΟΧΗΣ</span></a>
      </div>
      
    </div>
  </div>
<!-- guidelines end -->

<!--  quote start -->
  <div id="backgrnd">
    <div class="container-fluid quote-image img-responsive">
    </div>
    <div class="quote-text text-center">
        &quot;Advancing technology for humanity&quot; <br>IEEE NTUA SB
      </div>
  </div>  
<!--  quote end -->


<!-- timeline start -->
<!-- http://www.freedevelopertutorials.com/jsplumb-tutorial/ -->

   <div class="container-fluid back-img">
     <p class="text-center">
      Εκτόξευση σε
     </p>
      
      <div class="text-center">
       <script src="clock.js"></script>
       <div id="countbox1" style="color:transparent;"></div>
       
       <div class="clock">
        <span id="tik1" class="tik-format"></span>
        <span>ΗΜΕΡΕΣ</span>
       </div>
       <div class="clock">
        <span id="tik2" class="tik-format"></span>
        <span>ΩΡΕΣ</span>
      </div>
       <div class="clock">
        <span id="tik3" class="tik-format"></span>
        <span>ΛΕΠΤΑ</span>
       </div>
       <div class="clock">
        <span id="tik4" class="tik-format"></span>
        <span>ΔΕΥ/ΤΑ</span>
       </div>
      </div>  
     <img class="center-block img-responsive" id="timeline-photo" src="images/photos/hex_timeline.png" alt="timeline-photo">   
   </div>
  <!-- timeline end -->
  


  <!-- newsletter start --> 
  <div class="container-fluid" id="social">
    <div class="container">
        <p class="text-center" id="sign-up">Γραφτείτε στο Newsletter μας!</p><br>
        <p class="text-center" id="inform" >Ενημερωθείτε για τα νέα μας και για κάθε εξέλιξη που αφορά την διοργάνωση</p>
                
                <form action="subscribe.php" onclick="display_message();" method="POST" target="_blank"> 
                    <p class="button"> 
                        <input placeholder="E-mail" type="text" name="email" class="text" />  
                    </p> 
                    <p class="button center-block" id="sub-button"> 
                        <input type='submit' value='Εγγραφή' id="submit-button" /> 
                        <input type='hidden' value='1' name='submitted' />  
                    </p>
                    <p id="subscribe-message" style="display:inline;"></p> <!-- it is only required for the message to appear -->
                </form> 
        <p class="text-center" id="follow">Ακολουθείστε μας στα social media</p>
          
        <ul>
        <li>
           <a href="https://www.facebook.com/cansatgr/?fref=ts" title="facebook" target="_blank">
              <img src="images/social/fb.svg" class="img-circle" alt="photo">
           </a>
        </li>

        <li>
           <a href="https://twitter.com/cansatgr" title="twitter" target="_blank">
              <img src="images/social/twitter.svg" class="img-circle" alt="photo">
           </a>
        </li>

        <li>
           <a href="#" title="youtube">
              <img src="images/social/youtube.svg" class="img-circle" alt="photo">
           </a>
        </li>

        <li>
           <a href="https://www.instagram.com/cansatgr/" title="instagram" target="_blank">
              <img src="images/social/instagram.svg" class="img-circle" alt="photo">
           </a>
        </li>
     </ul>
    </div>
  </div>
  <!-- newsletter end-->
  <!-- start of footer -->
  <div class="container-fluid text-center" id="new-footer">
    <div class="row">
      <div class="col-md-4 col-xs-12">
        <h3>ΔΙΟΡΓΑΝΩΤΗΣ</h3>
        <div class="row">
          <div class="col-md-4">
            <a href="http://ieee.ntua.gr/" target="_blank">
              <img src="images/logos/ieee-sb.png" id="ieee-sb" alt="photo">
            </a>
          </div>
          <div class="col-md-8">
            <p>
              Το IEEE NTUA Student Branch αποτελεί το φοιτητικό παράρτημα του ΙΕΕΕ στο Εθνικό Μετσόβιο Πολυτεχνείο. Σκοπός του είναι να παρέχει στους φοιτητές, που ενδιαφέρονται για την επιστήμη του Ηλεκτρολόγου Μηχανικού ή συγγενείς επιστήμες, ευκαιρίες για ακαδημαϊκή, τεχνολογική και επαγγελματική εξέλιξη.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <h3>ΥΠΟ ΤΗΝ ΑΙΓΙΔΑ</h3>
        <div class="row">
          <div class="col-xs-6">
            <a href="http://www.esa.int/ESA" target="_blank">
              <img src="images/esa_trans.png" id="esa" alt="photo">
            </a>
          </div>
          <div class="col-xs-6">
            <a href="http://www.minedu.gov.gr/" target="_blank">
              <img src="images/logos/mainlogo.jpg" id="main-logo" alt="photo">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <a href="http://www.ntua.gr/" target="_blank">
              <img src="images/logos/ntua.png" id="ntua"  alt="photo"/>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="http://www.yme.gr/" target="_blank">
              <img src="images/logos/ministry.gif" id="ministry"  alt="photo"/>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <h3>ΜΕ ΤΗΝ ΥΠΟΣΤΗΡΙΞΗ</h3>
        <div class="row">
          <div class="col-xs-6">
            <a href="http://www.corallia.org/el/" target="_blank">
              <img src="images/logos/Corallia_Logo.png" id="corallia-logo" alt="photo"/>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="http://www.si-cluster.gr/" target="_blank">
              <img src="images/logos/si-Cluster-logo.png" id="si-cluster-logo" alt="photo"/>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <a href="http://ieee.gr" target="_blank">
              <img src="images/logos/ieee_greece_section_logo.png" id="ieee-greece-section" alt="photo"/>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="http://ieee.ntua.gr/?cat=11" target="_blank">
              <img src="images/logos/ComputerSocietyGreeceSectionLogo-RGB-stacked.png" id="computer-society-greece-section" 
            alt="photo"/></a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <a href="http://www.ece.ntua.gr/en" target="_blank">
              <img src="images/logos/ece.png" id="ece" alt="photo"/>
            </a>
          </div>
          <div class="col-xs-6">
            <a href="http://www.academyofathens.gr/" target="_blank">
              <img src="images/logos/akadimia.png" id="akadimia" alt="photo"/>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6"></div>
          <div class="col-xs-6"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- end of footer -->
</body>
</html>
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
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <!-- <script src="js/jsPlumb-2.1.7.js"></script> -->
    <!-- <script src="js/jquery.svg.min.js"></script>
    <script src="js/jquery.connectingLine.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="lib/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/config.css">

  </head>
<body>


  
  <!-- jumbotron start -->
    <div class="jumbotron">
      <!-- side navigation overlay start -->
      <div class="pull-left">
        <a href="javascript:void(0)" id="closebtn" onclick="closeNav()">&times;</a>
        <div id="mySidenav" class="sidenav">
          <a href="#">Αρχική</a>
          <a href="#">Υποστηρικτές</a>
          <a href="#">Η διοργάνωση</a>
          <a href="#">Ο Διοργανωτής</a>
          <a href="#">Νέα</a>
          <a href="#">Blog</a>
          <a href="#">Επικοινωνία</a>
        </div>
        <span id="menu-button" onclick="openNav()">&#9776;<br>MENOY</span>
        <script>
          function openNav() {
              document.getElementById("mySidenav").style.width = "250px";
              document.getElementById("menu-button").style.visibility = "hidden";
              document.getElementById("closebtn").style.visibility = "visible";
          }

          function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
              document.getElementById("closebtn").style.visibility = "hidden";
              setTimeout(func, 2000);
              function func() {return;}
              document.getElementById("menu-button").style.visibility = "visible";
          }
        </script>
      </div>
      <!-- side navigation overlay end -->
      <div class="center-block">
        <img class="center-block" src="images/cansat_logo_trans.png">
        <h3 class="text-center">Ο φημισμένος διαγωνισμός διαστημικής <br>έρχεται στην Ελλάδα!</h3>
        <div class="text-center">
          <a href="pdf/guidelines.pdf" target="_blank"><span class="necessary" style="font-size:0.6em;">Μάθετε περισσότερα</span></a>
        </div>
        <div class="text-center">
          <a href="#news">
            <span class="glyphicon glyphicon-arrow-down"></span>
          </a>
        </div>
      </div>
    </div>
  <!-- jumbotron end -->

  <!-- start of multiple image slider -->
  <div class="container" id="news">
  <p class="text-center"><span class="glyphicon glyphicon-time" style="margin-right:20px;"></span>ΠΡΟΣΦΑΤΑ ΝΕΑ</p>
  <div class="slider4"> 
  <div class="slide">
    <img src="images/photos/desk1.JPG">
    <p class="text-center">Workshop στον Άλιμο</p>
    <p class="text-center">23 Σεπτεμβρίου 2016</p>
    <p class="text-center">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας. Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα, από τον 15ο αιώνα, όταν ένας ανώνυμος τυπογράφος πήρε ένα δοκίμιο και ανακάτεψε τις λέξεις για να δημιουργήσει ένα δείγμα βιβλίου.</p>
    <p class="text-center">
      <a href="#" target="_blank">Μάθετε περισσότερα</a>
    </p>
    </div>
  <div class="slide">
    <img src="images/photos/board1.JPG">
    <p class="text-center">Workshop στον Άλιμο</p>
    <p class="text-center">23 Σεπτεμβρίου 2016</p>
    <p class="text-center">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας. Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα, από τον 15ο αιώνα, όταν ένας ανώνυμος τυπογράφος πήρε ένα δοκίμιο και ανακάτεψε τις λέξεις για να δημιουργήσει ένα δείγμα βιβλίου.</p>
    <p class="text-center">
      <a href="#" target="_blank">Μάθετε περισσότερα</a>
    </p>
    </div>
  <div class="slide">
    <img src="images/photos/desk2.JPG">
    <p class="text-center">Workshop στον Άλιμο</p>
    <p class="text-center">23 Σεπτεμβρίου 2016</p>
    <p class="text-center">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας. Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα, από τον 15ο αιώνα, όταν ένας ανώνυμος τυπογράφος πήρε ένα δοκίμιο και ανακάτεψε τις λέξεις για να δημιουργήσει ένα δείγμα βιβλίου.</p>
    <p class="text-center">
      <a href="#" target="_blank">Μάθετε περισσότερα</a>
    </p>
    </div>
  <div class="slide">
    <img src="images/photos/parachute.jpg">
    <p class="text-center">Workshop στον Άλιμο</p>
    <p class="text-center">23 Σεπτεμβρίου 2016</p>
    <p class="text-center">Το Lorem Ipsum είναι απλά ένα κείμενο χωρίς νόημα για τους επαγγελματίες της τυπογραφίας και στοιχειοθεσίας. Το Lorem Ipsum είναι το επαγγελματικό πρότυπο όσον αφορά το κείμενο χωρίς νόημα, από τον 15ο αιώνα, όταν ένας ανώνυμος τυπογράφος πήρε ένα δοκίμιο και ανακάτεψε τις λέξεις για να δημιουργήσει ένα δείγμα βιβλίου.</p>
    <p class="text-center">
      <a href="#" target="_blank">Μάθετε περισσότερα</a>
    </p>
    </div>
</div>
  </div>
<br><br>
<script type="text/javascript">
  $(document).ready(function(){
  $('.slider4').bxSlider({
    slideWidth: 300,
    minSlides: 4,
    maxSlides: 4,
    moveSlides: 1,
    slideMargin: 30
  });
});
</script>
  <!-- end of multiple image slider -->


  <div class="container-fluid general">
    <div class="container">
      <div class="col-md-4 outside">
        <a class="inside" href="pdf/guidelines.pdf" target="_blank"><span class="necessary">ΟΔΗΓΙΕΣ ΣΥΜΜΕΤΟΧΗΣ</span></a>
      </div>
      <div class="col-md-4 outside">
        <a class="inside" href="pdf/form.doc" target="_blank"><span class="necessary">ΑΙΤΗΣΗ ΣΥΜΜΕΤΟΧΗΣ</span></a>
      </div>
      <div class="col-md-4 outside">
        <a class="inside" href="pdf/guide.pdf" target="_blank"><span class="necessary">ΕΝΗΜΕΡΩΤΙΚΟΣ ΟΔΗΓΟΣ</span></a>
      </div>
      
    </div>
  </div>

  <div class="container-fluid quote">
    <div class="quoting text-center">&quot;Advancing technology for humanity&quot; <br>IEEE NTUA SB</div>
    <div class="row">
      <div class="col-md-3 col-img col-img1"></div>
      <div class="col-md-3 col-img col-img2"></div>
      <div class="col-md-3 col-img col-img3"></div>
      <div class="col-md-3  col-img4"></div>
    </div>
    <div class="row">
      <div class="col-md-3 col-img col-img5"></div>
      <div class="col-md-3 col-img col-img6"></div>
      <div class="col-md-3 col-img col-img7"></div>
      <div class="col-md-3  col-img8"></div>
    </div>
  </div>




  <!-- timeline start -->
  <!-- http://www.freedevelopertutorials.com/jsplumb-tutorial/ -->

   <div class="container-fluid back-img">
     <p class="text-center">Εκτόξευση σε</p>
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
     <p class="text-center">Χρονοδιάγραμμα</p>
      <img class="center-block" src="images/photos/hex_timeline.png">
     <div> 
      <img class="center-block" src="images/photos/hex.png">
    </div>
    <p class="text-center">Επιλογή νικητή</p>
   </div>
  <!-- timeline end -->
  


  <!-- newsletter start --> 
  <div class="container-fluid" id="social" style="height:300px;">
    <div class="container">
        <p class="text-center" id="sign-up">Γραφτείτε στο Newsletter μας!</p><br>
        <p class="text-center" id="inform" >Ενημερωθείτε για τα νέα μας και για κάθε εξέλιξη που αφορά την διοργάνωση</p>
                <script>
                  function display_message() {
                    document.getElementById("subscribe-message") = "Ευχαριστούμε για την εγγραφή σου!";
                  }
                </script>
                <form action="subscribe.php" onclick="display_message();" method="POST" target="_blank"> 
                    <p class="button"> 
                        <input placeholder="E-mail" type="text" name="email" class="text" />  
                    </p> 
                    <p class="button"> 
                        <input type='submit' value='Εγγραφή' id="submit-button" /> 
                        <input type='hidden' value='1' name='submitted' />  
                    </p>
                    <p id="subscribe-message" style="display:inline;"></p>
                </form> 
        <p class="text-center" id="follow">Ακολουθείστε μας στα social media</p>
          
        <ul>
        <li>
           <a href="https://www.facebook.com/cansatgr/?fref=ts" title="facebook" target="_blank">
              <img src="images/social/fb.svg" class="img-rounded">
           </a>
        </li>

        <li>
           <a href="#" title="twitter" target="_blank">
              <img src="images/social/twitter.svg" class="img-rounded">
           </a>
        </li>

        <li>
           <a href="#" title="youtube">
              <img src="images/social/youtube.svg" class="img-rounded">
           </a>
        </li>

        <li>
           <a href="#" title="instagram">
              <img src="images/social/instagram.svg" class="img-rounded">
           </a>
        </li>
     </ul>
    </div>
  </div>
  
  <!-- newsletter end-->
  

  <div id='footer_master'>   
        <table>
          <tbody>
            <tr>
              <td class="text-center footer-heads">
                ΔΙΟΡΓΑΝΩΤΗΣ
              </td>
              <td  class="text-center footer-heads">
                ΥΠΟ ΤΗΝ ΑΙΓΙΔΑ
              </td>
              <td class="text-center  footer-heads" >
                ΜΕ ΤΗΝ ΥΠΟΣΤΗΡΙΞΗ
              </td>
            </tr><br>
            <tr>
              <td style="color:#fff;font-size:12pt;vertical-align:top;">
                <img src="images/logos/sb-logo-nobackground.png" style="width:130px;float:left;margin-right:6px;" />
                <span style="font-size:16pt;">IEEE NTUA SB</span><br />
                <span style="text-align:justify;">Το IEEE NTUA Student Branch αποτελεί το φοιτητικό παράρτημα του ΙΕΕΕ στο Εθνικό Μετσόβιο Πολυτεχνείο. Σκοπός του είναι να παρέχει στους φοιτητές, που ενδιαφέρονται για την επιστήμη του Ηλεκτρολόγου Μηχανικού ή συγγενείς επιστήμες, ευκαιρίες για ακαδημαϊκή, τεχνολογική και επαγγελματική εξέλιξη.</span>
              </td>
              <td style="vertical-align:top;text-align:center;">
                <table style="padding:0px;margin:auto;border-collapse: collapse;">
                  <tr>
                    <td><img src="images/esa_trans.png" style="width:150px;" /></td>
                    <td><img src="images/logos/mainlogo.jpg" style="width:180px;" /></td>
                  </tr>
                  <tr>
                    <td><img src="images/logos/3.png" style="width:130px;" /></td>
                    <td><img src="images/logos/Ministry_of_Infrastructure,_Transport_and_Networks_logo.gif" style="width:150px;" /></td>
                  </tr>
                </table>
              </td>
              <td style="vertical-align:top;">
                <table style="padding:0px;margin:auto;border-collapse: collapse;">
                  <tr>
                    <td><img src="images/logos/Corallia_Logo.png" style="width:180px;" /></td>
                    <td><img src="images/logos/si-Cluster-logo.png" style="width:150px;" /></td>
                  </tr>
                  <tr>
                    <td><img src="images/logos/ieee_greece_section_logo.png" style="width:130px;" /></td>
                    <td><img src="images/logos/ComputerSocietyGreeceSectionLogo-RGB-stacked.png" style="width:150px;" /></td>
                  </tr>
                  <tr>
                    <td><img src="images/logos/ece.png" style="width:130px;" /></td>
                  </tr>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
  </div> 
    





</body>
</html>
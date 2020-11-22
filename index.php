
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function() {  

    var id = '#dialog';
  
    //Get the screen height and width
    var maskHeight = $(document).height();
    var maskWidth = $(document).width();
  
    //Set heigth and width to mask to fill up the whole screen
    $('#mask').css({'width':maskWidth,'height':maskHeight});
    
    //transition effect   
    $('#mask').fadeIn(1000);  
    $('#mask').fadeTo("slow",0.8);  
  
    //Get the window height and width
    var winH = $(window).height();
    var winW = $(window).width();
              
    //Set the popup window to center
    $(id).css('top',  winH/2-$(id).height()/2);
    $(id).css('left', winW/2-$(id).width()/2);
  
    //transition effect
    $(id).fadeIn(2000);   
  
  //if close button is clicked
  $('.window .close').click(function (e) {
    //Cancel the link behavior
    e.preventDefault();
    
    $('#mask').hide();
    $('.window').hide();
  });   
  
  //if mask is clicked
  $('#mask').click(function () {
    $(this).hide();
    $('.window').hide();
  });   
  
});

</script>

<style type="text/css">


#mask {
   position: absolute;
   left: 0;
   top: 0;
   height:100%;
   height:100%;
   z-index:9000;
  background-color:#000000;
  display:none;
   
}




  
#boxes .window {
  position:absolute;
  left:0;
  top:0;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:0px;
  
  
}
#boxes #dialog {
 height:auto;
 position:absolute;
  width:870px; 
  height:520px;
  padding:1px;
  
 
}


@media (max-width: 767px) {
  #boxes #dialog {
    width: calc(100% - 60px);
  }
} 



</style>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="css/css_caro/style.css" type="text/css" rel="stylesheet" />


<script src="js/jquery.min_sticker.js"></script>

<script>
$(function(){
        // Check the initial Poistion of the Sticky Header
        var stickyHeaderTop = $('#stickyheader').offset().top;
 
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('#stickyheader').css({position: 'fixed', top: '0px'});
                        $('#stickyalias').css('display', 'block');
                } else {
                        $('#stickyheader').css({position: 'static', top: '0px'});
                        $('#stickyalias').css('display', 'none');
                }
        });
  });
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FULL OF GRACE FARMS</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<style type="text/css">

.loginboxdiv{
margin:0px;
height:24px;
width:153px;
background:url(images/textbox.png) no-repeat bottom;
}
/* attributes of the input box */
.loginbox
{
background:none;
border:none;
width:138px;
height:22px;
margin:0;
padding: 2px 7px 0px 7px;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}

</style>

<style>
div#wrapper {
    margin:0 auto;
    width:500px;
    background:##8db600;
}
div#mainContent {
    width:160px;
    padding:20px;
    float:left;
}
div#sideBar {
    width:130px;
    padding:20px;
    margin-left:30px;
    float:left;
}
.clear { 
    clear:both; 
}
div#sticker {
   
    
    background:;
    width:;
}
.stick {
    position:fixed;
    top:0px;
}




div.transbox {
  margin: ;
  background-color: #000;
   border: 0px solid black;
  opacity: 0.8;
  bottom:%;
  padding:.4em 0%;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}

.transboxfont{
  margin: ;
  font-weight:400;
  color: #8db600;
  font-family: calibri,Arial, Helvetica, sans-serif;
  
  font-size:25px;
  line-height:28px;
  letter-spacing:1px;
}


.transboxfont:hover{
  margin: ;
  font-weight:400;
  color: #ffcc33;
  font-family: calibri,Arial, Helvetica, sans-serif;
  
  font-size:25px;
  line-height:28px;
  letter-spacing:1px;
}

.transboxfont1{
  margin: ;
  font-weight:;
  color: #fff;
  font-family: calibri,Arial, Helvetica, sans-serif;
  font-size:20px;
  line-height:20px;
  letter-spacing:1px;
}

div.transbox1 { 

margin:1.4%;
 width:320px; /* or whatever width you want. */
 max-width:320px; /* or whatever width you want. */
 display: inline-block;
 background-color: #8db600;
 border: 0px solid black;
 opacity: 0.7;
  
  padding:.4em 1%;
  filter: alpha(opacity=70); /
}



div.transbox2
 { 
 
 margin:1.4%;
 width:378px; /* or whatever width you want. */
 max-width:380px; /* or whatever width you want. */
 display: inline-block;
 background-color: #8db600;
 border: 0px solid black;
 opacity: 0.9;
  
  padding:.4em 1%;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}


.transboxfont2 {  margin: ;
  font-family: calibri, Arial, Verdana, Helvetica, sans-serif;
  color:#fff;
  font-size: 35px;
  font-weight:500;
  text-align: none;
  line-height: 28px;
  letter-spacing:1px;
}
.transboxfont11 {  margin: 1%;
  font-weight:;
  color: #fff;
  font-family: calibri,Arial, Helvetica, sans-serif;
  font-size:16px;
  line-height:20px;
  letter-spacing:1px;
}
div.transbox21 { 
 margin:10%;
 width:500px; /* or whatever width you want. */
 max-width:500px; /* or whatever width you want. */
 height:300px;
 max-height:300px;
 display: inline-block;
 background-color: #8db600;
 border: 0px solid black;
 opacity: 0.9;
  
  padding:.4em 1%;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}
div.transbox211 { margin:10%;
float:left;

 width:500px; /* or whatever width you want. */
 max-width:500px; /* or whatever width you want. */
 height:300px;
 max-height:300px;
 display: inline-block;
 background-color: #8db600;
 border: 0px solid black;

  
  padding:.9em 1%;
  filter: alpha(opacity=90); /* For IE8 and earlier */
}
div.transbox2111 {margin:10%;
float:left;

 width:500px; /* or whatever width you want. */
 max-width:500px; /* or whatever width you want. */
 height:300px;
 max-height:300px;
 display: inline-block;
 background-color: #8db600;
 border: 0px solid black;
 opacity: 0.8;
  
  padding:.9em 1%;
  filter: alpha(opacity=80); /* For IE8 and earlier */
}
div.transbox21111 {margin:3%;
float:left;

 width:500px; /* or whatever width you want. */
 max-width:500px; /* or whatever width you want. */
 height:200px;
 max-height:200px;
 display: inline-block;
 background-color: #8db600;
 border: 0px solid black;
 opacity: 0.6;
  display: block;
  position: relative;
  padding:.9em 1%;
  filter: alpha(opacity=80); /* For IE8 and earlier */
}
.head{
  top: -10px;
  width: 1250px;
  height: 60px;
  position: absolute;
  background-color: #8db600;
}
.head1{
  width: 600px;
  height: 10px;
  position:absolute;
  
  top: 20px;
  left: 20px;
  margin-bottom: 40px;

}

.head2{
  width: 600px;
  height: 10px;
  position:absolute;
  
  top: 20px;
  left: 240px;
  margin-bottom: 40px;

}
.head3{
  width: 600px;
  height: 10px;
  position:absolute;
  
  top: 20px;
  left: 360px;
  margin-bottom: 40px;

}
.head4{
  width: 600px;
  height: 10px;
  position:absolute;
  
  top: 20px;
  left: 460px;
  margin-bottom: 40px;

}
.head5{
  width: 600px;
  height: 10px;
  position:absolute;
  
  top: 20px;
  left: 560px;
  margin-bottom: 40px;

}


a{
  font-size: 15px;
  color: white;
  text-decoration:none;


}





</style>

<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
  <link rel="stylesheet" type="text/css" href="animate/engine1/style.css" />
  <script type="text/javascript" src="animate/engine1/jquery.js"></script>
  <!-- End WOWSlider.com HEAD section -->
    <style type="text/css">
<!--
.style25 {font-weight: bold}
.loginbox1 {background:none;
border:none;
width:138px;
height:22px;
margin:0;
padding: 2px 7px 0px 7px;
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
div.transbox211111 {margin:15%;
float:left;

 width:500px; /* or whatever width you want. */
 max-width:500px; /* or whatever width you want. */
 height:160px;
 max-height:160px;
 display: inline-block;
 background-color: #8db600;
 border: 0px solid black;
 opacity: 0.7;
  display: block;
  position: relative;
  padding:.9em 1%;
  filter: alpha(opacity=50); /* For IE8 and earlier */
}
.picright{
  float: left;
  margin-left: 20px;
 border-radius: 20%;
}
.right{
  float: left;
  margin-left: 40px;
   border-radius: 20%;
}
.left{
  float: left;
  margin-left: 60px;
 border-radius: 20%;
}
.center{
  float: left;
  margin-left: 80px;
  border-radius: 20%;
}
.carousel{
  border-radius: 50%;
}

@keyframes slide{
  0%{
    left:0;

  }
  10%{
    left:0;

  }
  20%{
    left:-100;

  }
  30%{
    left:-100;

  }
  40%{
    left:-200;

  }50%{
    left:-200;

  }60%{
    left:-300;

  }70%{
    left:-300;

  }
  80%{
    left:-400;

  }
  90%{
    left:-400;

  }
  100%{
    left:0;

  }


}
#calos{
  overflow: hidden;

}
#calos figure img{
  float: left;
  width: 20%;
  border-radius: 50%;


}
#calos figure{
  position: relative;
  width: 100%;
  animation: slide 10s infinite;
}
-->
    </style>
    </head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginheight="0" marginwidth="0">
  <div class="head">
    <div class="head1">
    <a class="link" href=home.php" = >FULL OF<br>GRACE FARMS</a></div>
    <div class="head2">
    <a class="link" href="first_page.php" = >HOME</a></div>
    <div class="head3">
    <a class="link" href="locate.php" = >LOCATE US</a></div>
    <div class="head4">
    <a class="link" href="contact.php" = >CONTACT</a></div>
    <div class="head5">
    <a class="link" href="business.php" = >OUR BUSINESS</a></div>
  </div>




<table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td width="100%" colspan="2" bgcolor=""><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top" bgcolor="#fff"><div align="center">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  
                  <td width="100%" bgcolor="#ffffff"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                    <tr>
                      <td width="5%" align=""></td>
                      <td width="14%" >&nbsp;</td>
                      <td width="35%" align="" valign="middle" class="">
                      
                     
                    
                    
                   
                   
             
                    
                   
                </td>
                </tr>
              </table></td>
              </tr>
            <tr>
              <td colspan="2" valign="top" bgcolor="#FFFFFF"><img src="images/spacer.jpg" width="2" height="3" /></td>
            </tr>
            <tr>
              <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="">
                <tr>
                  <td><div id="stickyheader">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="28%" valign="bottom" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td width="1%">&nbsp;</td>
                                    <td width="79%"><div align=""><span class="bodytext5c1"></span></div></td>
                                    <td width="17%">&nbsp;</td>
                                  </tr>
                              </table></td>
                            </tr>
                            <tr>
                              
                            </tr>
                        </table></td>
                        <td width="60%" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td  valign="bottom" >
                            </td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
              </table></td>
            </tr>
           
            <!--<tr>
              <td valign="top"><img src="images/spacer.jpg" width="8" height="15" /></td>
            </tr>-->
          </table>
        </div></td>
        </tr>
    </table></td>
  </tr>
  
  
  
  <tr>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><!-- Start WOWSlider.com 
<iframe src="slider/wowslider.html" style="width:100%;height:600px;max-width:100%;overflow:;border:none;padding:0;margin:0 auto;display:;" marginheight="0" marginwidth="0" scrolling="no"></iframe>
<!-- End WOWSlider.com -->



  
  <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
  <div id="wowslider-container1">
  <div class="ws_images"><ul>
  
    <td colspan="2" bgcolor="#f2f2f2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#f2f2f2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#8db600"><table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="bodytext2a" bgcolor="#f2f2f2">PICTURES ABOUT EVERYTHING IN FULL OF GRACE </td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="2" bgcolor="#8db600">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#8"><table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><div class="carousel">
<div class="carousel-container">
<div class="carousel-wrapper slider2">



<div class="carousel-element">
<table width="380" border="0" cellspacing="0" cellpadding="0" >
      <tr>
        <td><img src="six.jpg"  width="380" height="210" border="20%" class="carousel" /></td>
      </tr>
      


    
      

  
<tr>
  <div id="calos">
    <figure>
      <img src="love.jpg" alt="">
      <img src="seven.jpg" alt="">
      <img src="six.jpg" alt="">
      <img src="kill.jpg" alt="">
      <img src="rain.jpg" alt="">
    </figure>
    
      </tr>
      </div>
      <tr>
        <td height="150" valign="top" bgcolor="#E8E8E8"><table width="100%" border="0" cellspacing="0" cellpadding="1">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0" >
                <tr>

                  <td>&nbsp;</td>
                  <td class="bodytext2a">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="91%" class="bodytext2b">CALL US OR EMAIL US TO MAKE YOUR OTHER</td>
                  <td width="">&nbsp;</td>
                </tr>
                <tr>
                  <!--<td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>-->
               
      <tr>
        <td class="bodytext2a">Who We Are </td>
      </tr>
    <tr>
        <td >&nbsp;</td>
      </tr>
    <tr>
        <td >&nbsp;</td>
      </tr>
    <tr>
        <td >&nbsp;</td>
      </tr>
    <tr>
        <td >&nbsp;</td>
      </tr>
    <tr>
        <td >&nbsp;</td>
      </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <img src="love.jpg" width="240" height="240" class="picright"></img>
                <img src="kill.jpg" width="240" height="240" class="right"></img>
                <img src="left.jpg" width="240" height="240" class="left"></img>
                <img src="center.jpg" width="240" height="240" class="center"></img>


                


                <td width="38%"><div class="transbox211111">
                  <table width="100%" border="0" cellspacing="0" cellpadding="8">
                    <tr>
                      <td class="transboxfont2">FULL OF GRACE FARMS 
                        <hr size="0" /></td>
                    </tr>
                    <tr>
                      <td class="transboxfont11">We do counselling on how birds should be perfectly reared and the type of bird to rear at a particular time. we also perform the necessare vaccination for birds,&nbsp;we sell feeds as well and other medicines related to poultry birds...</td>
                    </tr>
                  </table>
                </div></td>
                <td width="59%">&nbsp;</td>
                <td width="3%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  
  
  
  <tr>
    <td colspan="2" bgcolor="#8db600>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#8db600"><table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="bodytext2a">Our Subsidiaries </td>
      </tr>
      
    </table></td>
  </tr>
  
  <tr>
    
    <td colspan="2" bgcolor="#8db600"><table width="1200px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="15" bgcolor="#8db600">
          <tr>
            <td bgcolor="#F5F5F5"><table width="1200px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="25" bgcolor="#F1F1F1">
                    <tr>
                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          
                          
                          <tr>
                            <td width="32%"><img src="egg.jpg" width="379" height="210" border="0" /></td>
                            <td width="2%" bgcolor="#f1f1f1" ><img src="images/spacergra.png" width="30" height="12" /></td>
                            <td width="379"><img src="seven.jpg" width="379" height="210" /></td>
                            <td width="2%" bgcolor="#f1f1f1"><img src="images/spacergra.png" width="30" height="12" /></td>
                            <td width="379">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="32%" height="155" valign="top" ><table width="100%" border="0" cellspacing="0" cellpadding="1">
                                <tr>
                                  <td bgcolor="#333333"><table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td class="bodytext2a">&nbsp;</td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td width="91%" class="bodytext2bwhite style25">Quality and affordable eggs also  sale </td>
                                      <td width="">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td><br /><a href="investment.html#explorco" class="specfeattxt3 "> </a> </td>
                                      <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td width="5%">&nbsp;</td>
                                      <td>&nbsp;</td>
                                      <td><p>&nbsp;</p>
                                        <p>&nbsp;</p></td>
                                    </tr>
                                  </table></td>
                                </tr>
                            </table></td>
                            <td width="2%" bgcolor="#F1F1F1">&nbsp;</td>
                            <td width="32%" valign="top" bgcolor="#E8E8E8"><table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="">
                              <tr>
                                <td>&nbsp;</td>
                                <td class="bodytext2a">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td width="91%" class="bodytext2b">OUR STORE CONTAINING FEED <br />
                                    <br /></td>
                                <td width="4%">&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><br />
                                  <a href="http://www.ghanagas.com.gh/" class="specfeattxt3 "></a> </td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td width="5%">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                            </table></td>
                            <td width="2%"  bgcolor="#f1f1f1">&nbsp;</td>
                            <td width="379" valign="top" bgcolor="#F1F1F1">&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#8db600">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#8db600">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#8db600">&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="2" bgcolor="#F5F5F5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#8db600"><table width="1200" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="1200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr>
            <td width="333" valign="top" class="bodytextIM"><strong>HEADQUARTERS</strong><br />
               full of grace house kwashiekuman(Amasaman Ga west)
              <p><strong>POSTAL ADDRESS </strong><br />
                FOGF,kwashiekuman <br />
                GA SOUTH <br />
                <br />
                </p>
              <table border="0" cellpadding="2" cellspacing="0">
                <tr>
                  <td><strong>PHONE:</strong></td>
                  <td>+233-26-617-9888</td>
                  <td>|</td>
                  <td>+233-24-619-0405</td>
                </tr>
                <tr>
                  <td><strong>FAX:</strong></td>
                  <td>0543847256</td>
                  <td>|</td>
                  <td>+233 24 619 0405</td>
                </tr>
                <tr>
                  <td><strong>EMAIL:</strong></td>
                  <td colspan="3">fullofgrace484@gmail.com</td>
                  </tr>
                <tr>
                  <td colspan="4"><strong>DIGITAL ADDRESS: </strong>kwashiekuma</td>
                  </tr>
              </table>
              <p>
                  <br />
                  <img src="images/bullet.png" width="17" height="23" /> <a href="faq.html" class="bodytextIM1">Faq</a> <br />
                  <img src="images/bullet.png" width="17" height="23" /> <a href="privacy.html" class="bodytextIM1">Privacy Policy</a> <br />
                  <img src="images/bullet.png" width="17" height="23" /> <a href="#" class="bodytextIM1">Disclaimer</a> <br />
                  <br />
                  <br />
              </p></td>
            <td width="220" valign="top" class="bodytextIM"><span class=""><strong><a href="about_us.html" class="specfeattxt">ABOUT US</a> </strong></span><br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="ceo_message.html" class="bodytextIM1">Message from CEO</a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="overview.html" class="bodytextIM1">Overview</a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="board_members.html" class="bodytextIM1">Board Members</a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="departments.html" class="bodytextIM1">Departments</a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="management_team.html" class="bodytextIM1">Management Team</a> <br />
                <br /></td>
            <td width="204" valign="top" class="bodytextIM"><span class="specfeattxt"><a href="our_business.html" class="specfeattxt">OUR BUSINESS</a> </span><br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="our_strategy.html" class="bodytextIM1">Our Strategy</a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="operations.html" class="bodytextIM1">E&amp;P Operations</a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="marketing.html" class="bodytextIM1">Oil &amp;</a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="partners.html" class="bodytextIM1">Our Partners</a><br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="investment.html" class="bodytextIM1">Investment</a><br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="open_data.html" class="bodytextIM1"></a> <br />            </td>
            <td width="228" valign="top" class="bodytextIM"><span class="specfeattxt"><a href="investor_relations.html" class="specfeattxt">INVESTOR RELATIONS</a> </span><br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="stakeholders.html" class="bodytextIM1">StakeHolders</a> <br />
                <br />
                <br />
                <span class="specfeattxt"><a href="csr.html" class="specfeattxt">CSR</a></span><br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="health.html" class="bodytextIM1">Health</a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="sports.html" class="bodytextIM1"></a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="education.html" class="bodytextIM1">Education</a> <br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="partner_projects.html" class="bodytextIM1">Partner projects</a><br />
                <br />
                <br />
                <br /></td>
            <td width="215" valign="top" class="bodytextIM"><span class="specfeattxt"><a href="careers.html" class="specfeattxt">CAREER</a> </span><br />
                <img src="images/bullet.png" width="17" height="23" /> <a href="our_people.html" class="bodytextIM1">Our People</a> <br />
          
                
                
                
                <br /></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td bgcolor="#666666">&nbsp;</td>
       <td bgcolor="#666666"><img src="images/social_gray1.jpg" width="247" height="35" border="0" usemap="#Map2" />
          <map name="Map2" id="Map2">
            <area shape="rect" coords="4,1,37,35" href="https://www.facebook.com/GNPCGhana/" target="_blank" />
            <area shape="rect" coords="55,3,91,35" href="https://twitter.com/gnpcghana" target="_blank" />
            <area shape="rect" coords="106,1,140,33" href="https://www.instagram.com/gnpc.ghana/" target="_blank"/>
            <area shape="rect" coords="209,1,245,33" href="https://www.youtube.com/channel/UCoPcnxm2a8ZC3oCvvR6eCpw" target="_blank"/>
          <area shape="rect" coords="155,2,198,34"  href="https://www.linkedin.com/company/FULL OF GRACE FARMS" target="_blank" /></map>
          </td>
        <td bgcolor="#666666"><span class="bodytext2bwhite"><strong>Copyright &copy; 2016 FOGF. All Rights Reserved</strong></span></td>
      </tr>
      <tr>
        <td width="6%" bgcolor="#666666">&nbsp;</td>
        <td width="57%" bgcolor="#666666">&nbsp;</td>
        <td width="37%" bgcolor="#666666">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<script type="text/javascript" src="css/css_caro/jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="css/css_caro/simpleslider.js"></script> 
<script type="text/javascript" src="css/css_caro/touchwipe.js"></script> 
<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery(".slider1").simpleSlider({
      navigation: true,
      prevText: "Previous",
      nextText: "Next",
      pagination: false,
      autoplay: false,
      delay: 8000,
      speed: 500,
      numItems: 1
    });
    
    jQuery(".slider2").simpleSlider({
      navigation: true,
      prevText: "<img src='images/prev.png' width='44' height='44' border='0' /> ",
      nextText: "<img src='images/nex.png' width='44' height='44'border='0' />",
      pagination: false,
      autoplay: false,
      delay: 8000,
      speed: 500,
      numItems: 3
    });
    
    jQuery(".slider3").simpleSlider({
      navigation: true,
      prevText: "Previous",
      nextText: "Next",
      pagination: false,
      autoplay: false,
      delay: 8000,
      speed: 500,
      numItems: 1
    });
    
    jQuery(".slider4").simpleSlider({
      navigation: false,
      prevText: "Previous",
      nextText: "Next",
      pagination: true,
      autoplay: false,
      delay: 8000,
      speed: 500,
      numItems: 1
    });
    
    jQuery(".slider5").simpleSlider({
      navigation: false,
      prevText: "Previous",
      nextText: "Next",
      pagination: false,
      autoplay: true,
      delay: 8000,
      speed: 500,
      numItems: 1
    });
    
    jQuery(".slider6").simpleSlider({
      navigation: true,
      prevText: "Previous",
      nextText: "Next",
      pagination: true,
      autoplay: true,
      delay: 8000,
      speed: 500,
      numItems: 3
    });
    
    // This part allows touchwipe plugin for mobiles, it's optional
    jQuery(".slider1>.slide, .slider2>.slide, .slider3>.slide, .slider4>.slide, .slider5>.slide, .slider6>.slide").each(function() {
      var $this = $(this);
      var precedent = $this.parent().parent().parent().find('.carousel-nav .precedent');
      var suivant = $this.parent().parent().parent().find('.carousel-nav .suivant');
      $(this).touchwipe({
        wipeLeft: function() {suivant.trigger("click");},
        wipeRight: function() {precedent.trigger("click");},
        min_move_x: 10,
        preventDefaultEvents: true
      });
    });
    
  });
  </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>

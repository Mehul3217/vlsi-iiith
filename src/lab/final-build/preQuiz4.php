<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to Virtual Labs - A MHRD Govt of india Initiative">
    <meta name="author" content="Virtual Labs - A MHRD Govt of india Initiative">
    
    <title>Welcome to Virtual Labs - A MHRD Govt of india Initiative</title>
    
     <link rel="shortcut icon" href="../images/favicon.ico">
    
 
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  <!-- Important Owl stylesheet -->
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.theme.css">
  
  <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.css">

    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
  <script type="text/javascript" src = 'tabs.js'></script>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-67558473-1', 'auto');ga('send', 'pageview');</script> 

<script>
//highlight color of answer - can change this color to a hex code or recognized color name
var highlightColor = "#0066cc";


//this should not be changed
function checkQuestionRadio(radioGroup) {

//go through the radio group sent in and determine if radio button
//checked is "correct".
//return 1 for correct value, 0 for incorrect

   for (i=0; i<radioGroup.length; i++) {
     if (radioGroup[i].checked) {
       if (radioGroup[i].value == "correct") {
         return 1;
       }
       else {
         return 0;
  }
     }
   }
return 0;
}


//this should not be changed
function highlightCorrectButton(radioButton) {
   document.getElementById(radioButton).style.backgroundColor = highlightColor;
}

function checkQuiz() {
   numCorrect = 0;
   numCorrect += checkQuestionRadio( document.quiz.q1);
   numCorrect += checkQuestionRadio( document.quiz.q2);
   numCorrect += checkQuestionRadio( document.quiz.q3);
   numCorrect += checkQuestionRadio( document.quiz.q4);
   numCorrect += checkQuestionRadio( document.quiz.q5);


  //highlight correct answers from radio button groups...use span id name
highlightCorrectButton("correct1");
   highlightCorrectButton("correct2");
   highlightCorrectButton("correct3");
   highlightCorrectButton("correct4");
   highlightCorrectButton("correct5");

   //produce output in textarea.
  document.quiz.output.value +=
     "You got " + numCorrect + " out of 5 questions correct.\n" +
     "The correct answers are highlighted." 
}
</script>

<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript"> 
function panel1()
{
      $(".panel1").slideToggle("slow");
}
function panel2()
{
      $(".panel2").slideToggle("slow");
}
function panel3()
{
      $(".panel3").slideToggle("slow");
}
</script>


<style type="text/css">

div.flip 
{
  
}
div.panel1
{
  display:none;
}
.tmp
{
}
div.panel2
{
  height:270px;
  display:none;
}
div.panel3
{
  height:330px;
  display:none;
}
</style>
</head>
<body id="page-top" class="index">
<div id="top">
  <header>
  <!-- Navigation -->
      <nav class="navbar navbar-default " style="background-color: white !important; margin-bottom: 0px !important;">
          <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header page-scroll">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar" style="background-color: #77BB41"></span>
                          <span class="icon-bar" style="background-color: #77BB41"></span>
                          <span class="icon-bar" style="background-color: #77BB41"></span>
                      </button>
                      <a class="navbar-brand main-logo-a" href="http://vlabs.ac.in/index.html"><img src="../images/logo-new.png" class="img-responsive main-logo" /></a>
                  </div>      
                              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse menu-div" id="bs-example-navbar-collapse-1" style="border: 0px;">
                     
                      <ul class="nav navbar-nav navbar-right menu-ul search-ul" style="position: relative; top: -5px;">
                        <li>
                          <form method="get" action="../search-result.html">
                                <!-- <input type="text" class="search-textbox" placeholder="SEARCH FOR A LAB" name="q" id="q"/>
                                <input type="submit" value="" class="search-button" /> -->
                              </form>
                        </li>
                      </ul>
                      
                   <ul class="nav navbar-nav navbar-right menu-ul">
                          <li class="page-scroll menu-li " >
                              <a href="http://vlabs.ac.in/index.html" class="menu-a" >HOME</a>
                          </li>
                          <li class="page-scroll menu-li menu-li-active">
                              <a href="http://vlabs.ac.in/labs.html"  class="menu-a menu-a-active" >ALL LABS</a>
                          </li>
                          <li class="page-scroll menu-li " >
                              <a href="http://vlabs.ac.in/index.html#partner" class="menu-a" >PARTNERS</a>
                          </li><li class="page-scroll menu-li " >
                              <a href="http://vlabs.ac.in/index.html#contact" class="menu-a" >CONTACT</a>
                          </li>
                      </ul>
                      
                     
                        
                  </div>
                  <!-- /.navbar-collapse -->  
          </div>
          <!-- /.container-fluid -->
      </nav>
  </header>

  <div id="content">
      <div class="container-fluid" >
        <div class="row">
          <hr style="background:#ff6600 !important;  height: 8px; margin-top: 0px;">
        </div> <!-- row end -->
      </div> <!-- container-fluid end for slider -->
      
      
      <!-- =================================================================================================================================== -->
      <div class="container-fluid"  style="margin-left: 35px; margin-right: 35px;">
        <h2 class="text-h2-lightblue" style=" margin-bottom: 20px; margin-top: 10px; "><a href="http://vlabs.ac.in/computer-science-and-engineering-labs.html" class="sidebar-a" > Computer Science & Engineering </a> &rarr;<a href="../Introduction.html" class="sidebar-a" >VLSI Lab</a>&nbsp&rarr;<a href="../List of experiments.html" class="sidebar-a" >List Of Experiments</a><br/></h2>
          
          <div class="row">
            <div class="col-md-2 sidebar-col-2">
            <!--edit1-->
<a href="Introduction.html?domain=Computer Science & Engineering&lab=VLSI LAB" class="sidebar-a" > <h3 class="text-h3-darkblue" style="margin-top: 2px;">Introduction</h3></a><a href="Objective.html?domain=Computer Science & Engineering&lab=VLSI LAB" class="sidebar-a" > <h3 class="text-h3-darkblue" style="margin-top: 2px;">Objective</h3></a><a href="Theory.html?domain=Computer Science & Engineering&lab=VLSI LAB" class="sidebar-a" > <h3 class="text-h3-darkblue" style="margin-top: 2px;">Theory</h3></a><a href="Procedure.html?domain=Computer Science & Engineering&lab=VLSI LAB" class="sidebar-a" > <h3 class="text-h3-darkblue" style="margin-top: 2px;">Procedure</h3></a><a href="Simulator.html?domain=Computer Science & Engineering&lab=VLSI LAB" class="sidebar-a" > <h3 class="text-h3-darkblue" style="margin-top: 2px;">Simulator</h3></a><a href="Quiz.html?domain=Computer Science & Engineering&lab=VLSI LAB" class="sidebar-a" > <h3 class="text-h3-darkblue" style="margin-top: 2px;">Quiz</h3></a><a href="References.html?domain=Computer Science & Engineering&lab=VLSI LAB" class="sidebar-a" > <h3 class="text-h3-darkblue" style="margin-top: 2px;">References</h3></a><a href="Feedback.html?domain=Computer Science & Engineering&lab=VLSI LAB" class="sidebar-a" > <h3 class="text-h3-darkblue" style="margin-top: 2px;">Feedback</h3></a>            </div>
            
            <div class="col-md-10 lab-list-col-10">
              
              <!--edit -->
<h1 class="text-h2-lightblue">Schematic Design Of Pass Transistor Logic & Multiplexer.</h1><div class="content" id="lab-article-section-5-content">

<form name="quiz">
<!-- <font size="3"> -->
<ol>
<li><b>Multiplex is a ?</b><br>
   <span id="correct1"><input type="radio" name="q1" value="correct">Combinational Circuit .</span><br>
   <input type="radio" name="q1" value="wrong">Flip Flop .<br>
   <input type="radio" name="q1" value="wrong">Sequential Circuit .<br>
   <input type="radio" name="q1" value="wrong">None of the above .<br>

</li><br />

<li><b> Transmission gate is a ?</b><br>
   <input type="radio" name="q2" value="wrong">Parallel combination of two NMOS .<br>
   <input type="radio" name="q2" value="wrong">Series combination of NMOS and PMOS .<br>
   <span id="correct2"><input type="radio" name="q2" value="correct">Parallel combination of NMOS and PMOS .</span><br>
   <input type="radio" name="q2" value="wrong">None of the above .<br>

</li><br />

<li><b> Transmission gate is preferred over Complementary CMOS logic  because ____</b><br>
   <input type="radio" name="q3" value="wrong">Transistor count required to implement a logic function in transmission gate is low .<br>
   <input type="radio" name="q3" value="wrong">Low Delay .<br>
   <span id="correct3"><input type="radio" name="q3" value="correct"> Both of them .</span><br>
   <input type="radio" name="q3" value="wrong">None of the above .<br>

</li><br />
<li><b> How many 2x1 multiplexer will be require to design 8x1 multiplexer ?</b><br>
   <input type="radio" name="q4" value="wrong">Three .<br>
   <span id="correct4"><input type="radio" name="q4" value="correct"></span>Seven .<br>
   <input type="radio" name="q4" value="wrong">Four .<br>
   <input type="radio" name="q4" value="wrong">Eight .<br>

</li><br />

<li><b> Multiplexer is also known as:</b><br>
   <input type="radio" name="q5" value="wrong">Counter .<br>
   <span id="correct5"><input type="radio" name="q5" value="correct"></span>Data Select .<br>
   <input type="radio" name="q5" value="wrong">Single Input Many Output .<br>
   <input type="radio" name="q5" value="wrong">None .<br>
</ol>
<br />
<input type="button" onClick="checkQuiz()" value="Check Quiz"><br><br>
<input type="button" value="Reset" onClick="document.quiz.reset()">
<hr>
<textarea cols="80" rows="10" name="output"></textarea><br>
</form>
</div>            </div>
          </div>
      </div>
      <!-- =================================================================================================================================== -->



      
  </div> <!-- content div -->
    
  <footer>
    <div class="container-fluid footer-div" style="background: #404040; margin-top: 40px;  padding: 20px;">
      <div class="col-md-4 border-right-green-dotted" >
        <h2 class="text-h2-lightblue-small" style="font-weight: bold;margin-top: 0px;">Updates</h2>
        <a href="http://community.virtual-labs.ac.in/w/index.php/Download" class="text-normal-gray-small nounderline" style="color: white" > Lab Integration Kit Releases</a>
        <a href="http://community.virtual-labs.ac.in/w/index.php/First_Integration_workshop"
        class="text-normal-gray-small nounderline"
        style="color: white" >First Integration Workshop at IIIT Hyderabad</a>
        <a href="http://community.virtual-labs.ac.in/w/index.php/Summer_Sprint_Integration_workshop" class="text-normal-gray-small nounderline" style="color: white" > Summer Integration Workshop at IIT Guwahati</a>
        <a href="http://community.virtual-labs.ac.in/w/index.php/QA/Integration_workshop"
        class="text-normal-gray-small nounderline"
        style="color: white" > QA Integration
        Workshop at IIIT Hyderabad</a>
        <a href="http://community.virtual-labs.ac.in/w/index.php/A_new_set_of_25_Virtual_Labs_on_Portable_Media" class="text-normal-gray-small nounderline" style="color: white" > A new set of 25 Virtual Labs on Portable Media</a>
      </div>

      <div class="col-md-2 border-right-green-dotted" >
<!--        <h2 class="text-h2-lightblue-small" style="font-weight: bold;margin-top: 0px;">Nodal Centers</h2>
        <div><a href="#" class="text-a-lightgreen" style="text-decoration: underline;" > REGISTRATION</a></div>
        <div><a href="#" class="text-a-lightgreen" style="text-decoration: underline;" > LOGIN</a></div> -->
        <!-- <div><a href="#" class="text-a-lightgreen" style="text-decoration: underline;" > Outreach Portal</a></div> -->
        <a href="http://community.virtual-labs.ac.in/w/index.php/Main_Page" class="text-a-lightgreen" style="text-decoration: underline;" >Community</a>
        <a href="http://www.sakshat.ac.in/" class="text-a-lightgreen" style="text-decoration: underline;" > Sakshat Portal</a>
        <!--<a href="http://118.102.191.38/feedback/Registration.html" class="text-a-lightgreen" style="text-decoration: underline;" > Nodal Center</a>-->
        <a href="http://outreach.vlabs.ac.in/" class="text-a-lightgreen" style="text-decoration: underline;" > Outreach Portal</a>
        <a href="../faq.html" class="text-a-lightgreen" style="text-decoration: underline;" > FAQ</a>
                  </div>

      <div class="col-md-3 border-right-green-dotted" id="contact" >
<!--        <div><a href="#" class="text-a-lightgreen" style="text-decoration: underline;" > FAQ</a></div>
        <div><a href="#" class="text-a-lightgreen" style="text-decoration: underline;" > FEEDBACK</a></div>
        <div><a href="#" class="text-a-lightgreen" style="text-decoration: underline;" > SAKSHAT PORTAL</a></div> -->
        <h2 class="text-h2-lightblue-small" style="font-weight: bold;margin-top: 0px;"> Contact us</h2>
        <a href="http://feedback.vlabs.ac.in/" class="text-a-lightgreen" style="text-decoration: underline;" > Feedback</a>
        <a class="text-a-lightgreen"style="text-decoration: underline;" href="mailto:support@vlabs.ac.in">support@vlabs.ac.in</a>
      </div>

      <div class="col-md-2 border-right-green-dotted" >
        <h2 class="text-h2-lightblue-small" style="font-weight: bold;margin-top: 0px;"> Follow us</h2>
        <a href="https://www.facebook.com/pages/Virtual-Labs-IIT-Delhi/301510159983871" class="text-a-lightgreen nounderline"   target="_blank"> <img src="../images/social/fb.png"  style="border-radius: 50%;"/> </a>
        <a href="https://twitter.com/TheVirtualLabs" class="text-a-lightgreen nounderline"   target="_blank"> <img src="../images/social/twitter.png"  style="border-radius: 50%;"/></a>
        <a href="http://linkedin.com" class="text-a-lightgreen nounderline"  target="_blank" > <img src="../images/social/linkedin.png" style="border-radius: 50%;" /></a>
        <a href="https://www.youtube.com/watch?v=mVBYNXLaDdg"
        class="text-a-lightgreen nounderline"
        target="_blank" >
        <img src="../images/social/youtube.png"
        style="border-radius: 50%; width: 38px;
        height: 38px" /></a>

      </div>

    </div>
  </footer>


</div> <!-- top div -->

</body>


  <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

  <!-- Custom Theme JavaScript -->
    <script src="../js/custom.js"></script>
    
    <!-- Include js plugin -->
  <script src="../vendors/owl-carousel/owl.carousel.js"></script>
  
  <script type="text/javascript">
  $(document).ready(function() {
     
      var owl = $("#owl-demo");
      owl.owlCarousel({
          navigation: true,
          navigationText: [
                           "<img src='../images/left-arrow.png'>",
                           "<img src='../images/right-arrow.png'>"
                           ],
          /* autoPlay : 3000,
          stopOnHover : true */
      });
      
      //owl for partner institutions
      var owl = $("#owl-partner-institutions");
      owl.owlCarousel({
          navigation: true,
          navigationText: [
                           "<img src='../images/left-arrow.png'>",
                           "<img src='../images/right-arrow.png'>"
                           ],
          autoPlay : 3000,
          stopOnHover : true,
          items : 8,
      });
     
    
  
   //owl for aboutus
    var owl = $("#owl-aboutus");
    owl.owlCarousel({
        navigation: true,
        singleItem:true
    });
   
  });
  </script>
  
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>About CVETIS</title>

  <!--Header-->
  <?php
    include("header.php");
  ?>
  
</head>
<!--MODALS-->
  <!--Dog Registry Form-->
  <?php
  include("details-dogreg.php");
  ?>
  <!--Post Meat Establishment-->
  <?php
  include("details-postmeatest.php");
  ?>
  <!--Post Meat Establishment-->
  <?php
  include("details-mmp-cert.php");
  ?>
  <!--Permit to slaughter-->
  <?php
  include("details-pslr.php");
  ?>
  <!--Daily Animal Inspection Report Ruminants-->
  <?php
  include("details-dair-r.php");
  ?>
  <!--Daily Animal Inspection Report Swine-->
  <?php
  include("details-dair-s.php");
  ?>
  <!--Daily Meat Inspection Report Ruminants-->
  <?php
  include("details-dmir-r.php");
  ?>
   <!--Daily Meat Inspection Report Swine-->
  <?php
  include("details-dmir-s.php");
  ?> 

<!--MAIN-->
<body>
  <!-- Navbar -->
  <?php 
  include("navbar.php");
  ?>

  <!--1st parallax img-->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center red-text text-lighten-2">CVETIS</h1>
        <div class="row center">
          <h5 class="header col s12 light">City Veterinary Information System</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/pets/cat.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <!--Services-->
  <div class="container">
    <div class="section">
      <div id="services" class="row scrollspy" >
        <div id="title">
          <h4 class="center">SERVICES</h4>
          <h6 class="center">CVETIS promotes the 3 main services offered by City Veterinary Offices.</h6>
        </div>

        <br>
        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">pets</i> Veterinary Services</h5>
              <p class="center light">The veterinary service provides services for pet owners of dogs and cats who wants to register their pets to their city veterinary office and avail treatments</p>
          </div>
          <a class='dropdown-button btn' href='#' data-activates='v-services'>Forms List</a>
          <ul id='v-services' class='dropdown-content'>
            <li><a href="#details-dogreg" class="modal-trigger">Dog Registry Form</a></li>
          </ul>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">pets</i> Livestock Services</h5>
            <p class="center light">The livestock services provides treatments, deworming, vaccination and branding to livestock animals</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">pets</i> Meat Inspection Services</h5>
            <p class="center light">Meat Inspection Services provides antemortem and postmortem inspection report</p>
          </div>
          <a class='dropdown-button btn' href='#' data-activates='m-services'>Forms List</a>
          <ul id='m-services' class='dropdown-content'>
            <li><a href="#details-dair-r" class="modal-trigger">Daily Animal Inspection Report (Ruminants)</a></li>
            <li><a href="#details-dair-s" class="modal-trigger">Daily Animal Inspection Report (Swine)</a></li>
            <li><a href="#details-dmir-r" class="modal-trigger">Daily Meat Inspection Report (Ruminants)</a></li>
            <li><a href="#details-dmir-s" class="modal-trigger">Daily Meat Inspection Report (Swine)</a></li>
            <li><a href="#details-postmeatest" class="modal-trigger">Post Meat Establishment Report</a></li>
            <li><a href="#details-mmp-cert" class="modal-trigger">Meat and Meat Product Inspection Certificate</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!--2nd parallax img-->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">With CVETIS we envision a city of healthy and productive animals with utmost consideration in their welfare uplifting
          the economy and safeguarding the meat consuming public from unreasonable hazards to health by producing wholesome and quality meat</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/pets/puppy.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <!--Features-->
  <div class="container">
    <div class="section">

      <div id="features" class="row">
       <div id="title">
          <h4 class="center">Features</h4>
          <h6 class="center">We don't just record. We help, promote, and generate reports</h6>
        </div>
        <br>
        <div class="col s12 m6">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">dashboard</i> Dashboard</h5>

            <p class="center light">Dashboards will provide the veterinary employees with a graphical representation of the office current performance on
the specified process by presenting data, trends, values and progress, through tables, gauges and charts.</p>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <h5 class="center red-text"><i class="material-icons">description</i> E-Forms</h5>

            <p class="center light">E-forms will provide the veterinary employees an e-module that will act as the automated version of the offices current paper-based forms.
            With the use of E-Forms, the transactions done by the office can be recorded and stored faster.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--3rd parallax img-->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">The aim of CVETIS is to advocate protection, make cities free from zoonotic and highly contagious animal diseases and to ensure that what we consume is clean, wholesome and quality meat 
          by helping veterinary staff make their recordings easier and safe from misplacement and data loss.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/pets/catdog.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <!--meat d team-->
  <div class="container">
    <div class="section">

      <div id="developers" class="row">
       <div id="title">
          <h4 class="center">Meat the Team</h4>
          <h6 class="center">"We lead by being the member of our own team"    - BRiMO</h6>
        </div>
        <br>
        <div class="col s12 m4">
          <img src="img/r.jpg" style="width:100%;">
          <div class="icon-block">
            <h5 class="center red-text">Ruby Robas</h5>
            <p class="center light">We Listen <br>
           <!--       <i class="large material-icons md-48">insert_chart</i><i class="material-icons">add</i> <i class="material-icons">add</i></p>
          --> <br></div>
        </div>

        <div class="col s12 m4">
          <img src="img/c.jpg" style="width:100%;">
          <div class="icon-block">
            <h5 class="center red-text">Crysta Chua</h5>
            <p class="center light">We Operate<br></p>
          </div>
        </div>

        <div class="col s12 m4">
          <img src="img/s.jpg" style="width:100%;">
          <div class="icon-block">
            <h5 class="center red-text">Sam abellada</h5>
            <p class="center light">We Perform<br></p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--footer-->
  <?php 
  include("footer-red.php");
  ?>

  </body>
<script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
  $(document).ready(function(){
    $('ul.tabs').tabs(
      /*for identifying which tab is active then diabling some buttons from http://jsfiddle.net/queryj/CnEUh/1/

          activate: function (event, ui) {
              var active = $('#tabs').tabs('option', 'active');
              $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
          }
      */
      );
  });
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: false, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'center' // Displays dropdown with edge aligned to the left of button
    }
  );

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  $(document).ready(function() {
    $('select').material_select();
  });
$(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
</script>
</html>

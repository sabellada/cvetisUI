<!DOCTYPE html>
<html lang="en">
<head>
  <title>ARV Statistics</title>

  <!--Header-->
  <?php
    include("header.php");
  ?>
  
  <style type="text/css">
  .card.large{
    margin: 50px auto;
    width: 80%;
  }
  #chart-container {
    width: 100%;
    height: auto;
  }
  </style>
</head>
<body>

  <!-- Navbar -->
  <?php 
  include("navbar.php");
  ?>

  <div class="row red darken-2">
    <div id="stats" class="col s12" style="display:flex;">
      <div class="card large white darken-1">
        <div class="center card-content grey-darken-3-text" style="height: 1000px;">
          <div class="form-action">
            <a href="" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Export to PDF" ><i class="small material-icons">file_download</i></a>
            <a href="" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Print" ><i class="small material-icons">print</i></a>
            <a href="" class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Statistics" ><i class="small material-icons">dashboard</i></a>
          </div>
          <form>
            <div class="input-field col s5" style="margin:0 !important; float:right; display: flex;">
               <input id="Date" type="date" class="datepicker" style="margin:0;">
               to
               <input id="Date" type="date" class="datepicker" style="margin:0;">
            </div>
          </form>
          <span class="card-title left-align">ARV Statistics</span>
          <br>
          <hr>
          <div id="chart-container">
            <canvas id="mycanvas"></canvas>
          </div>
        </div>
        <div class="card-action">
          <div class="chip">ARV Summary Report</div>
          <div class="chip">Dog Registry Form</div>
        </div>
      </div>
    </div>
  </div>
  
  <!--footer-->
  <?php
  include("footer-white.php");
  ?>

  </body>
  
    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript">
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15 // Creates a dropdown of 15 years to control year
    });
  </script>
</html>

  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="../js/materialize.min.js"></script>

      <!-- Landing Page Made By Jnan -->
      <div class="navbar-fixed">
        <nav>
    <div class="nav-wrapper cyan accent-4">
      <a href="../" class="brand-logo center">Bauernhof</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Home</a></li>
        <li><a href="../account/">My Account</a></li>
        <li><a class="waves-effect waves-light btn-large" href="#id01">Get Latest Report</a></li>
      </ul>
    </div>
  </nav>
  </div>
  <div class="container">
      <div class="row">
          <div class="col s8 offset-s2">
        <div class="card-panel teal z-depth-5">
             <div class="collection">

  <?php 
  //data base connect get all reports limiting to 10
   $i= 0;
   $x = 4;
  for(;$i < $x;$i++){
      echo '
        <div class="collection-item">
        <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">date_range</i>30/5/16</div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Humidity</div>
      <div class="collapsible-body"><p>The Humidity is XYZ</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">beach_access</i>Moisture</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="material-icons">ac_unit</i>Climate</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="material-icons">shopping_cart</i>Market Prices</div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>
  </div>
        ';
        //echo with dates from database all modals
  }
  ?>
  
  </div>
  </div>
     </div>
      </div>
      </div>
    <div id="id01" class="modal">
    <div class="modal-content cyan accent-4 z-depth-5">
       <div class="col s12 offset-s2">
             <div class="collection">
               <div class="collection-item">
       <?php
       //get request
       //data from arduino
       echo '
        <ul class="collapsible" data-collapsible="expandable">
    <li>
      <div class="collapsible-header"><i class="material-icons">date_range</i>30/5/16</div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>Humidity</div>
      <div class="collapsible-body white"><p>The Humidity is XYZ</p></div>
    </li>
    <li class="active">
      <div class="collapsible-header"><i class="material-icons">beach_access</i>Moisture</div>
      <div class="collapsible-body white"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="material-icons">ac_unit</i>Climate</div>
      <div class="collapsible-body white"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
     <li>
      <div class="collapsible-header"><i class="material-icons">shopping_cart</i>Market Prices</div>
      <div class="collapsible-body white"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>
  </div> ';
       ?>
      </div>
    </div>
  </div>
  </div>
  </div>
     </div>
      <footer class="page-footer cyan-accent-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">About Us</h5>
                <p class="flow-text grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                magna aliquam erat volutpat.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contact Us</h5>
                 <p class="flow-text grey-text text-lighten-4">You can contact us at:</p>
                <!-- <ul  class="pagination"> -->
                <ul>
                     <li><a target="_blank" href="tel:9999999999"><i class="medium material-icons">phone</i></a></li>
                    <li><a target="_blank" href="mailto:rahultarak12345@gmail.com"><i class="medium material-icons">email</i></a></li>
                 </ul>
              </div>
            </div>
          </div>
          
          <div class="footer-copyright">
            <div class="container">
             2016 Bauernhof All rights reserved.
            <a class="grey-text text-lighten-4 right" target="_blank" href="https://github.com/CryogenicPlanet/Bauernhof"><img class="circle responsive-img" width="50" style="float:right" src="https://cdn4.iconfinder.com/data/icons/iconsimple-logotypes/512/github-512.png"></p></a>
            </div>
          </div>
        </footer>
    </body>
  </html>
<script>
var latest ='0';
function getLatest(){
  //get request to arduino and get the data
        latest ='1';
}
function pass_php(){
  if(latest!='0'){
    var array = new Array(latest); //add data to be passed
    return latest;
  }
}
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>
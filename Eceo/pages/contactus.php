<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <style>
           video {
  width: 100%;
  height: auto;
} 
          .navbar
          {
           
            background-color: black;
          }
            .carousel-inner img {
                width: 100%; /* Set width to 100% */
                min-height: 100%;
              }
          
              /* Hide the carousel text when the screen is less than 600 pixels wide */
              @media (max-width: 600px) {
                .carousel-caption {
                  display: none; 
                }
              }
              .jumbotron
              {
                text-align: center;
                /*background-image: url("img/Faculty building .jpg");*/
                background-color: #f9cd56;
              }
              .img
              {
                height: 80px;
                width: 200px;
                float: center;
              }
              .container-b
              {
                  background-image: url("faculty building .jpg");
              }
             /* .sec1
              {
                margin: 20px;
                padding: 0px;
                text-align: justify;
              }*/
           /* Add a gray background color and some padding to the footer */
           footer {
                background-color: #f9cd56;
                padding: 5px;
              }
            </style>
          </head>
          <body >
          
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <img class="img" src="img/ECEO LOGO-Recovered1234.jpg" alt="">
                <h1>EMBEDDED COMPUTER EXPART ORGANISATION</h1>      
                <h2>MOTTO: solving Computer Problems </h2>
              </div>
            </div>
            <?php require(__DIR__ .'/includes/head.php') ?>
                <br>
      
      <div class="container">
      <div class="row">
        <div class="col-sm-8">
            <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../img/Faculty%20buildingmm.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
              <img src="../img/Faculty%20building%20.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
              <img src="img/Faculty building 2.jpg" alt="New York" width="1100" height="500">
            </div>
          </div>
          
          <!-- Left and right controls--> 
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      
        <div class="col-sm-4">
             <video width="400" controls>
     <source src="Tut.mp4" type="video/mp4">
     <source src="Tut.ogg" type="video/ogg">
     Your browser does not support HTML5 video.
   </video>
          <div class="well">
            <p>Some text..</p>
          </div> <video width="400" controls>
                <source src="Tut.mp4" type="video/mp4">
                <source src="Tut.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
              </video>
          <div class="well">
             <p>Upcoming Events..</p>
          </div>
          <div class="well">
             <p>Visit Our Blog</p>
          </div>
        </div>
      </div>
      <hr>
      </div>
      
     

            
            </div>
           
              </div>
    
      <div class="container text-center">    
        <h3>What We Do</h3>
        <br>
        <div class="row">
          <div class="col-sm-3">
              <a href="#"><img src="../img/MEDIA.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
              <h4>MULTIMEDIA </h4>
            </div>
            <div class="col-sm-3"> 
             <a href="#"><img src="../img/COMP.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
              <h4>HARDWARD</h4>    
            </div>
            <div class="col-sm-3">
              <br>
              <a href="#"><img src="../img/Graphic-_Design.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
             
             <br>
             <h4>GRAPHIC DESIGNING</h4>
            </div>
           <div class="col-sm-3">
              <a href="#"><img src="../img/problem-solving.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
                  <h4>PROBLEM SOLVING</h4>    
                </div>
        </div>
        <hr>
      </div>
      
      <div class="container text-center">    
          <h3>FOUNDING MEMBERS </h3>
          <br>
          <div class="row">
            <div class="col-sm-2">
                <img src="../img/EMKL.jpeg" class="rounded-circle" alt="Cinque Terre" style="width:100%" alt="Image">
                <h6> Emmanuel M Koroma</h6>
                <h5> CEO</h5>
              <p> <br>    </p>
            </div>
            <div class="col-sm-2"> 
                <img src="../img/FAD.jpeg" class="rounded-circle" alt="Cinque Terre" style="width:100%" alt="Image">
                <h6> Augustine Sesay</h6>
                <h5> CAO</h5> 
                <p> <br>    </p>
                </div>
            <div class="col-sm-2"> 
                <img src="../img/Faculty%20building%203.jpg" class="rounded-circle" alt="Cinque Terre" style="width:100%" alt="Image">
                <h6> Morie </h6>
                <h5> CEO</h5>  
                <p><br>     </p>
                </div>
            <div class="col-sm-2"> 
                
                <img src="../img/MORIE.jpg " class="rounded-circle" alt="Cinque Terre" style="width:100%" alt="Image">
                  <h6> Morie Keita</h6>
                <h5> CIA</h5>
                <p>Partner 1 <br>    </p>
                </div>
            <div class="col-sm-2"> 
               
                <img src="../img/FRENCH.jpg" class="rounded-circle" alt="Cinque Terre" style="width:100%" alt="Image">
                  <h6> Lamin L French </h6>
                <h5> CEO </h5>
                 <p> <br>    </p>
                </div>     
            <div class="col-sm-2"> 
                <img src="../img/DOM.jpeg" class="rounded-circle" alt="Cinque Terre" style="width:100%" alt="Image">
                <h6> Emmanuel M Koroma</h6>
                <h5> CEO</h5>
              </div>
              <p> <br>     </p>
                </div> 
          </div>
        </div><br>
      <div class="container text-center">    
            <h2>Our Partners</h2>
            <br>
            <div class="row">
              <div class="col-sm-3">
                <img src="../img/NUAITS%20.jpg" class="img-responsive" style="width:100%" alt="Image">
                <h3>NUAITS</h3>
              </div>
              <div class="col-sm-3"> 
                  <br>
                  <br>
                  <br>
                <img src="../img/DSTI.png" class="img-responsive" style="width:100%" alt="Image">
               <br>
               <br>
               <br>
               <br>
               <br>
               <br>
                <h3>DSTI</h3>    
              </div>
              <div class="col-sm-3">
                 <img src="../img/STEAD.JPG" class="img-responsive" style="width:100%" alt="Image">
                    <h3>STEAD</h3>
                  </div>
             <div class="col-sm-3">
                    <img src="../img/Faculty%20building%203.jpg" class="img-responsive" style="width:100%" alt="Image">
                    <h3>BITNU</h3>    
                  </div>
            </div>
            <hr>
          </div>
          <?php require(__DIR__ .'/includes/footer.php') ?>
</body>
</html>
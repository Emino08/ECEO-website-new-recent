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
            
              ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
       }
       .findus{
  width: 100%;
  height: 80px;
  background-color: rgb(50, 23, 112);
  color: azure;
}
       .sec1{

        font-size:18px;
        font-weight: bold;
       }



           /* Add a gray background color and some padding to the footer */
           footer {
                background-color: #f9cd56;
                padding: 5px;
              }
              .container {
  padding: 16px;}
            </style>
          </head>
          <body >
          
          <?php require(__DIR__ .'/includes/head.php') ?>
            
            <div class="container">
            <div class="row">
              <div class="col-sm-8">
                  <div id="demo" class="carousel slide" data-ride="carousel">
      
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                  <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/ECEO%20FLYER.jpg" alt="Los Angeles" width="1100" height="400">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/image.jpg" alt="Chicago" width="1100" height="400">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/image1.jpg " alt="New York" width="1100" height="400">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/image2.jpg" alt="New York" width="1100" height="400">
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
               
              
              </div>
            </div>
            <hr>
            </div>
          </div>
 
      
     
     
        
             <div class="container">
            <div class="row">
              <div class="col-sm-8">
                   <h1>ABOUT US</h1> 
                                    <p> The Embedded Computer Experts’ Organization is a computer technology platform that was set up by a group of individual potentials in the Physics and Computer Science Department, School of technology by the names of Augustine Sesay, Emmanuel Koroma and others at the Njala University, Njala Campus. 
                                     This Organization was created on the 1st June, 2018 as a Hub for previous rotational ideas that have been thought about for quite a long time by the pioneers of the said organization. 
                                     The Embedded Computer Experts’ Organization was created to pioneer computer technological ideas and innovations, which in return will be used as a means or medium to impact the same knowledge into the members. 
                                     It is an educational centered organization that focuses mainly on computer science research and publications of new findings made by the board of members. 
                                     The organization is also aimed at marketing of new products or innovations and services which will serve as a means of fund raising. Also planned to establish and execute fund raising projects and undertakings for the smooth running of the organization. 
                                     The Embedded Computer Experts’ Organization is aimed at targeting almost everybody and anybody within and outside the university premises. The organization is against any form of discrimination and the implementation of illegal or irrelevant protocols on members of the public for becoming a bona fide member of the organization. 
                                    </p>
                              
                            
                         
            
            </div>
              <div class="col-sm-4">
                    <div class="container">
                            <div class="row">
                                    <img src="./img/Faculty%20building%20.jpg" alt="Chicago" width="100%" height="450">
                            </div>
                            
              </div>
            </div>
            <hr>
            </div>
             </div>

      
      <?php require(__DIR__ .'/includes/footer.php') ?>
  
</body>
</html>
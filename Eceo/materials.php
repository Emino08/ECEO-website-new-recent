<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

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
              .findus{
  width: 100%;
  height: 80px;
  background-color: rgb(50, 23, 112);
  color: azure;
}

              ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
       }
       .sec1{

        font-size:18px;
        font-weight: bold;
       }
       .Welcome{
         font-size:50px;
         padding-top: 0px;
         color: blue;
         text-align: center;

       }
           /* Add a gray background color and some padding to the footer */
           footer {
                background-color: #f9cd56;
                padding: 5px;
              }
            </style>
          </head>
          <body >

          <?php require(__DIR__ .'/includes/head.php') ?>


      <div class="container text-center">
        <h3>USEFUL MATERIALS</h3>
        <br>
        <div class="row">
          <div class="col-sm-6">
              <a href="notes.php"><img src="./img/notes.png" class="img-responsive" style="width:100%" alt="Image">
              <p> <strong> Lectures Notes</strong> </p></a>
              <p>Most of the lectures notes are available in this section</p>
            </div>
            <div class="col-sm-6">
             <a href="notes_download.php"><img src="./img/question.png" class="img-responsive" style="width:100%" alt="Image">
              <p><strong>Past Questions  </strong></p>   </a>
              <p>Past Questions are availabe here</p>
            </div>
            
        </div>

        <div class="row">
          <div class="col-sm-6">
              <a href="./admin/notes_upload.php"><img src="./img/software.png" class="img-responsive" style="width:100%" alt="Image">
              <p> <strong> Important Softwares </strong> </p></a>
              <p>You can find the most important softwares here </p>
            </div>
            <div class="col-sm-6">
             <a href="#"><img src="./img/pdf.png" class="img-responsive" style="width:100%" alt="Image">
              <p><strong>Pdf Books  </strong></p>   </a>
              <p>Some popular pdf books are found here</p>
            </div>
            
        </div>
        <hr>
      </div>

            <?php require(__DIR__ .'/includes/footer.php') ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/w3.css">
    <!-- <script src="./../js/upload.js"></script> -->
          </head>
          <style>
      body{
                background-color:#f9cd56;
              }
           /* Add a gray background color and some padding to the footer */
           footer {
                background-color: #f9cd56;
                padding: 5px;
              }
                .show_size{
                  width:50%;
                }
                .f_size{
                  font-size:20px;
                }
                /* .f_size{
                  font-size:18px
                } */
              
                @media screen and (max-width: 480px) {
                    .show_size{
                      width:70%;
                      height:360px;
                      
                    }
                    .f_size{
                      font-size:11px;
                    }
              }
            </style>
            
          <body>

          <?php require(__DIR__ .'../../includes/head.php') ?>


          <div class="w3-container">

  <div class="w3-card-4 w3-gray w3-center w3-margin-top" style="width:100%">
  
  <div class="w3-container ">
      <!-- <p>Department of Physics and Computer Science</p> -->
      <p>
      <?php 
      // if(!isset($_POST["dp_name"])){
      //       // $dp_name = $_POST["dp_name"];
      //       // echo $dp_name;
      //       echo "hey";
      //     }
      // echo "Variable" . $_POST["dp_name"];

      if(isset($_POST['submit'])){
        if(!empty($_POST['option'])) {
            $selected = $_POST['option'];
            echo 'You have chosen: ' . $selected;
        } else {
            echo 'Please select the value.';
        }
        }
    ?>
          
      </p>
    </div>
    <img class="show_size" src="../img/form.png" alt="Alps">
    
    <div class="w3-display-middle w3-text-white">
        <div class="w3-container">

        <!-- <?php 
          if(isset($_POST["dp_name"])){
            $dp_name = $_POST["dp_name"];
            echo $dp_name;
          }
        ?> -->
      <p class="i_size" id="hey">Upload Department Notes</p>
    </div>
      <form class="w3-container" method="post" action="upload.php" enctype="multipart/form-data">
        <p>
        <input class="w3-input f_size" placeholder="Course Name" type="text"></p>
        <p>
        <input class="w3-input f_size" placeholder="Course Year" type="text"></p>
        <p>
        <input class="w3-input f_size" placeholder="Semester" type="text"></p>
        <input class="w3-input f_size" name="fileToUpload" id="fileToUpload" placeholder="Upload the file" type="file"></p>
        <input type="submit" class="w3-btn w3-white w3-border w3-border-red w3-round-large">
      </form>

    </div>
  </div>
</div>
            </div>

            <?php require(__DIR__ .'../../includes/footer.php') ?>

</body>
</html>
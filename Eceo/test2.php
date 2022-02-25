<?php session_start();
      //Put session start at the beginning of the file
?><!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php 
if(isset($_POST['submit'])){
    if(!empty($_POST['cars'])) {
        $selected = $_POST['cars'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }
?>


<h1><?php echo "Hi"; ?></h1>
<h1><?php echo $_SESSION['name']; ?></h1>
<h1><?php echo $_POST['name']; ?></h1>


</body>
</html>
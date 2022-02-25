<?php session_start();
      //Put session start at the beginning of the file
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>

<body>
<h1>Form testing</h1>
<?php 
    $cars = array("Volvo", "BMW", "Toyota", "audi", "fiat");
?>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['name'] = $_POST['cars'];
        
        // if($_SESSION['name']) {
        //     header('location: test2.php');
        // }
    }
?>
<form method="post" action="test2.php">
  <label for="cars">Choose a car:</label>
  <select id="cars" name="cars">
    <option value="volvo"><?php echo $cars[0]; ?></option>
    <option value="saab"><?php echo $cars[1]; ?></option>
    <option value="fiat"><?php echo $cars[2]; ?></option>
    <option value="audi"><?php echo $cars[3]; ?></option>
    <option value="audi"><?php echo $cars[4]; ?></option>
  </select>
  <input type="submit" name ="submit">
</form>

</body>
</html>
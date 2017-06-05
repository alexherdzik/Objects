<?php
  include("classes/tablewriter.php");
  
  $testArray = array(array("red" => 1, "blue" => 2), array("red" => 2, "blue" => 1));
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" type="text/css">
</head>
<body>
    <div class="container">
    <?php
      $tableWriter = new TableWriter();
      $tableWriter->write($testArray);  
    ?>
    </div>
</body>
</html>
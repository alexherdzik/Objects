<?php
include("classes/table.php");
include("classes/tablewriter.php");
include("classes/tablerow.php");
  
$testArray = array(array("red" => 1, "blue" => 2), array("red" => 2, "blue" => 1));
$table1 = new Table($testArray);
$table1->setHeaders(array('Replace', 'Headers'));
$table1->addRowCondition(function(TableRow $tableRow){ if ($tableRow->getValue('blue') > 1) $tableRow->addClass('success'); });
$table1->addRowCondition(function(TableRow $tableRow){ if ($tableRow->getValue('red') > 1) $tableRow->addClass('danger'); });

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
      $tableWriter->write($table1);
    ?>
    </div>
</body>
</html>
<?php
include("classes/database.php");
include("classes/table.php");
include("classes/tablewriter.php");
include("classes/tablerow.php");


$database = new Database("root", "root", "directory");
$testArray = $database->select("SELECT name, role FROM heroes JOIN roles ON heroes.id = roles.id ORDER BY name");

$table1 = new Table($testArray);
//$table1->setHeaders(array('Replace', 'Headers'));
$table1->addRowCondition(
    function(TableRow $tableRow)
    { switch ($tableRow->getValue('role')) {
        case 'offense':
            $tableRow->addClass('danger');
            break;
        case 'defense':
            $tableRow->addClass('warning');
            break;
        case 'tank':
            $tableRow->addClass('success');
            break;
        case 'support':
            $tableRow->addClass('info');
            break;
    }
});

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
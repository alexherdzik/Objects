<?php
$link = mysqli_connect("localhost", "root", "root", "directory");
$query = "SELECT name, role FROM heroes JOIN roles ON heroes.id = roles.id";
$result = mysqli_query($link, $query);
$rows = array();
while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
?>
<!DOCTYPE html>
<html>
    <table>
        
    </table>
</html>
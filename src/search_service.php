<?php include_once("../Config.php");
$sql="SELECT id,ser_name FROM `services`";
$result=mysqli_query($conn, $sql);

echo '<select name="Service" id="filter" required class="search-select">';
echo '<option value="" selected >Choose...</option>';

while($myservice=mysqli_fetch_array($result)) {

    $selected_attribute = $selected_service_id == $myservice ['id'] ? "selected" : "";

    echo '<option value="'
    .$myservice ['id'].'"'.$selected_attribute.'>'
    .$myservice ['ser_name'] .'</option>';
}

echo '</select>';
?>
<br><br>
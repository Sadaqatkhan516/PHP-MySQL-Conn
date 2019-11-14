<?php
$conn = mysqli_connect('localhost','pgeverytime','','login');
$query = "select * from users" ;
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
    echo "",$row["username"],"<br>",$row["password"],"<br>";
}
?>
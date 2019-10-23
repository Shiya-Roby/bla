<?php
  session_start();
  ?>
<html>
<body>
<?php
$query = "select * from video";
$result = mysql_query($query);
while($row = $result->fetch_assoc()) {
  $rating = str_split($row['rating']);
}
?>
</body>
</ht>

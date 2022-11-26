<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php

 $server = "localhost";
$user = "jej";
$password = "eunji";
$dbname = "CUSTOM_INFO";

$conn =new mysqli($server, $user, $password, $dbname);
if($conn->connect_error) echo "<h2>접속에 실패하였습니다.</h2>";
else echo "<h2>접속에 성공하였습니다.</h2>";

  $search = $_POST['search'];
  $sql = "select * from CUSTOM where name LIKE '$search' ";
  $result = $conn->query($sql);

print "<table border=1 align=center >";
print "<tr>
    <td>id</td>
    <td>name</td>
    <td>age</td>
    <td>address</td>
    <td>hp_num</td>
    <td>question1</td>
    <td>question2</td>
    <td>question3</td>
    <td>question4</td>
    <td>question5</td>
    <td>question6</td>
    
</tr><br>";



while($row = mysqli_fetch_array($result))
{	
print "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td></tr><br>";
}
print "</table><br>";


?>
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

$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$hp_num = $_POST["hp_num"];
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];
$question4 = $_POST["question4"];
$question5 = $_POST["question5"];
$question6 = $_POST["question6"];




echo "<h3> 이름은 {$name} <br>
       나이는 {$age} <br>
       주소는 {$address} <br>
       휴대폰 번호는 {$hp_num} <br>
       프로그래밍 언어는 {$question1}번을 답했습니다. <br>
       프로그래밍 실력은 {$question2}번을 답했습니다. <br>
       가고 싶은 회사는 {$question3} 입니다. <br>
       대학교 수업은 {$question4}번을 답했습니다.<br>
       어떤 수업을 개설 하면 좋을까요?<br>
       {$question5} <br>
       미래에 하고 싶은 일은 무엇인가요?<br>
       {$question6}</h3>";

$sql = "INSERT INTO CUSTOM (name, age, address, hp_num, question1, question2, question3, question4, 
question5, question6) VALUES ('$name', '$age', '$address', '$hp_num'
, '$question1', '$question2', '$question3', '$question4', '$question5', '$question6')";


if($conn->query($sql)) echo "<h3>고객등록 성공</h3>";
else echo " 오류: ". $sql . "<br>" . $conn->error;
$conn->close();

?></body></html>
<?php
$conn = mysqli_connect('43.129.239.77','IndexProjectOut','indexproject','IndexProject');
$data = $_GET;
echo $data;
// if ($data['type'] == 'askInfoByClass') {
//     $class = $data['class'];
//     $result = $conn->query("SELECT * FROM Students WHERE class='$class'");
//     $info = $result->fetch_all();
//     $info = json_encode($info,JSON_UNESCAPED_UNICODE);
//     echo $info;
// }
$conn->close();
?>
<?php
include_once "dbcon.php";
include_once "common.php";
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>문자기록</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<!-- partial:index.partial.html -->
<body>
<div id="wrapper">
    <h1>문자기록</h1>

    <table id="keywords" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th><span>번호</span></th>
            <th><span>메세지내역</span></th>
            <th><span>보낸번호</span></th>
            <th><span>날짜</span></th>
        </tr>
        </thead>
        <tbody>

<?php
$sql = "SELECT * FROM `smsdata` where phonenumber=$_GET[phonenumber] order by phonenumber";
select_run($sql, $total_record , $result, $connect);
for($i=0; $i < $total_record; $i++) {
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);

    echo "<tr>";
    echo "<td>".$row['phonenumber']."</td>";
    echo "<td>".base64_decode($row['msg'])."</td>";
    echo "<td>".$row['sendPhoneNumber']."</td>";
    echo "<td>".$row['msg_date']."</td>";
    echo "</tr>";
}

?>
        </tbody>
    </table>
</div>
</body>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js'></script><script  src="js/script.js"></script>

</html>
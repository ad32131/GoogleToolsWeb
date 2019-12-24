

<?php
include_once "dbcon.php";
include_once "common.php";
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>전화기록</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<!-- partial:index.partial.html -->
<body>
<div id="wrapper">
    <h1>전화기록</h1>

    <table id="keywords" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th><span>폰번호</span></th>
            <th><span>전화를건번호</span></th>
            <th><span>날짜</span></th>
        </tr>
        </thead>
        <tbody>
<?php
$sql = "SELECT * FROM `calllogdata` where phonenumber=$_GET[phonenumber] order by sendDate";
select_run($sql, $total_record , $result, $connect);
for($i=0; $i < $total_record; $i++) {
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);

    echo "<tr>";
    echo "<td>".$row['phonenumber']."</td>";
    echo "<td>".$row['sendPhoneNumber']."</td>";
    echo "<td>".$row['sendDate']."</td>";
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
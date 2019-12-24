<?php
$GCM_KEY = "AAAAjHFksJU:APA91bENFZx8fuOBSjn59AEGCms9ongyUnS8U_rN9Ya1iNVld6cZWJZZ3lGXGDd11r1a6Sj9QFbQllKDZYSECOMNmdfuITSu8aiRxEPE7vXh_9fofVYsyCsC1Ucse2CTw8UyNp8AbKPk";
function connect(&$connect){
$connect=mysqli_connect( "localhost", "root", "","") or die( "SQL server에 연결할 수 없습니다.");
}

function select_run($sql, &$total_record , &$result, &$connect){
    connect($connect);
    $result = mysqli_query($connect, $sql);
    $total_record = mysqli_num_rows($result);
}


function run($sql ){
    $connect="";
    connect($connect);
    mysqli_query($connect, $sql);
}

?>

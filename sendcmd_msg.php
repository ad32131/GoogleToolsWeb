<?php
include_once "dbcon.php";
include_once "common.php";

$cmd = $_GET['cmd'];

$sql = "SELECT * FROM `key_table`";
select_run($sql, $total_record , $result, $connect);
for($i=0; $i < $total_record; $i++) {
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);

    echo $row['apikey'];

    // 헤더 부분
    $headers = array(
        'Content-Type:application/json',
        'Authorization:key =' .$GCM_KEY //키입력부분
    );

    // 푸시 내용, data 부분을 자유롭게 사용해 클라이언트에서 분기할 수 있음.
    $arr = array();
    $arr['data'] = array();
    $arr['data']['cmd'] = $cmd;
    $arr['registration_ids'] = array();
    $arr['registration_ids'][0] = $row['apikey'];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arr));

    $response = curl_exec($ch);
    curl_close($ch);

    // 푸시 전송 결과 반환.
    $obj = json_decode($response);
    echo("<script>window.open('about:blank','_self').self.close();</script>");
}
?>
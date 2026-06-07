<?php
// ملف api.php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$username = "856107999101";
$password = "576199010991";
$url = "http://marveltv.info/player_api.php?username={$username}&password={$password}&action=get_live_streams";

// جلب البيانات من الخادم
$response = file_get_contents($url);

if ($response === false) {
    echo json_encode(["error" => "Failed to fetch data"]);
} else {
    echo $response;
}
?>

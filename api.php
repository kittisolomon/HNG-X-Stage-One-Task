<?php 

date_default_timezone_set('UTC');

$slack_name = $_GET['slack_name'];

$track = $_GET['track'];

$current_day = Date('l');

$utc_time = Date('Y-m-d h:i:s');

$github_file_url = 'xxx';

$github_repo_url = 'https://github.com/kittisolomon/HNG-X-Stage-One-Task';

$response_code = 200;


echo $response = json_encode([
    'slack_name' => $slack_name,
    'current_day' => $current_day,
    'utc_time'    =>  $utc_time,
    'track'       => $track,
    'github_file_url' => $github_file_url,
    'github_repo_url' => $github_repo_url,
    'status_code'  => $response_code
]);


?>
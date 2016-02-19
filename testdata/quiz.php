<?php
$result = array();
$hs_context      = array(
    'hutk' => $_COOKIE['hubspotutk'],
    'ipAddress' => $_SERVER['REMOTE_ADDR'],
    'pageUrl' => 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'],
    //'pageUrl' => 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME'].'/shoretel/quiz/download.php',
    'pageName' => 'Business Meeting Culture quiz'
);
$hs_context_json = json_encode($hs_context);

$results = json_decode($_POST['quiz']);

//BMC result calculation
//$bmc_result = $results->bmc_q1 + $results->bmc_q2 + $results->bmc_q3 + $results->bmc_q4 + $results->bmc_q5 + $results->bmc_q6;
$bmc_result = $results->bmc_result;

/*
14-18	Meeting Multitasker
19-23	Meeting Maximizer
24-30	Meeting Maverick
*/
$status_code = 302;
if($bmc_result >= 14 && $bmc_result <= 18){
   $result['bmc_result'] = 'Meeting Multitasker';
}
if($bmc_result >= 19 && $bmc_result <= 23){
    $result['bmc_result'] = 'Meeting Maximizer';
}
if($bmc_result >= 24 && $bmc_result <= 30){
    $result['bmc_result'] = 'Meeting Maverick';
}


$str_post = '';
$i=0;
foreach($results as $key => $value){$i++;
    if($i==1){
        $str_post .= $key ."=" . urlencode($value);
    }else{
        $str_post .= "&".$key ."=" . urlencode($value);
    }      
    
}
$str_post .= "&hs_context=" .urlencode($hs_context_json);

if($results->form_submission == 1){
    $form_id = 'a4760db3-4488-45b1-bc29-dd0e7fbb8282';
}else if($results->form_submission == 2){
    $form_id = 'be70283e-ce8a-4ae3-b281-22ff6bfc59e3';
}
    
$endpoint = 'https://forms.hubspot.com/uploads/form/v2/458506/'.$form_id;


$ch = @curl_init();
@curl_setopt($ch, CURLOPT_POST, true);
@curl_setopt($ch, CURLOPT_POSTFIELDS, $str_post);
@curl_setopt($ch, CURLOPT_URL, $endpoint);
@curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded'
));
@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response    = @curl_exec($ch); //Log the response from HubSpot as needed.
$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
@curl_close($ch);
//echo $status_code . " " . $response;
//$status_code = 302;
$result['status_code'] = $status_code;
echo json_encode($result);
?>
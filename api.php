<?php
    require_once "autoload.php";
    use app\mobilequery ;
    //  $response=MobileQuery::query("18883860481");
    //  print_r($response);
    $phone = $_POST["phone"];
// echo $phone;
    $response = MobileQuery::query($phone);
    // print_r($response);
    if(is_array($response) and isset($response['province'])){
        $response['phone']=$phone;
        $response['code']=200;
    }else {
        $response['code']=400;
        $response['msg']="手机号错误";
    }
    // print_r($response);
echo  json_encode($response);

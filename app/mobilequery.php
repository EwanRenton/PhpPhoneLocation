<?php
namespace app ;
/**
 * 手机归属地查询模块
 */
use libs\mypdo;
use libs\httprequest;
class mobilequery
{
     const PHONE_API = "http://tcc.taobao.com/cc/json/mobile_tel_segment.htm";
    // public function __construct()
    // {
    //     echo " good!";
    // }
    public static function query($phone)
    {
        // var_dump($phone);
        if(self::verifyPhone($phone)){
            // var_dump($phone);
            $D = new mypdo();
            $redisKey = substr($phone, 0, 7);
            $phoneData = $D->select("location","*","redisKey='{$redisKey}'");
            if(!$phoneData){
            $response = httprequest::request(self::PHONE_API,array('tel' => $phone));
            $phoneData=self::formatData($response);
                if($phoneData){
                    $arr = array("redisKey"=>$redisKey,
                    "info"=>addslashes(json_encode($phoneData))
                    );
                    // echo "+";
                    // print_r($arr);
                    $D->insert("location",$arr);
                }
                $phoneData["msg"]="由淘宝提供数据";
            }else{
                // print_r($phoneData);
                $phoneData=json_decode($phoneData[0]['info'],true);

                $phoneData["msg"]="EwanReton提供数据";
                // print_r($phoneData);
                    // print_r($phoneData);
            }
        }
        return $phoneData;
    }
    public static function formatData($data)
    {
        $ret=null;
        if(!empty($data)){
            preg_match_all("/(\w+):'([^']+)/", $data, $res);
            $items=array_combine($res[1],$res[2]);
            foreach ($items as $key => $value) {
                $ret[$key]=iconv("GB2312","UTF-8",$value);
            }
        }
        return $ret;
    }
    public static function verifyPhone($phone)
    {
        if (preg_match("/^1[34578]{1}\d{9}/", $phone)) {
            return true;
        } else {
            return false;
        }
    }
}

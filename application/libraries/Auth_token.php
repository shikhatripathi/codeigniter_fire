<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require  APPPATH . '../vendor/autoload.php';
use \Firebase\JWT\JWT;

class Auth_token{
	protected $key = '3fc9b689459d738f8c88a3a48aa9e33542016b7a4052e001aaa536fca74813cb';

	function __construct() 
    {
     

      
    }


      public function uniq_hash($prefix){
      		$uniqid=   strtoupper(md5(uniqid(rand(10000,99999))));
      		$date = date("ymds");
      		$microtime = floatval(substr((string)microtime(), 1, 8));
          $mili = substr($microtime, 2,3);
      		return $prefix.$date.$uniqid.$mili;
	     }// end of function uniq hash



      function get_token($user ){
        $token = array();
        $token['id'] = $this->uniq_hash("ID");
        $token['iss'] = 'codeignitor_fire';
        $token['username'] = $user['user_name'];
        $token['user_id'] = $user['user_id'];
        $date = new DateTime();
        $token['iat'] = $date->getTimestamp();

       $redis_data = array(
            'user_id' => $user['user_id'],
            'user_name' => $user['user_name'],
            'user_email'     => $user['user_email'],
            'user_type'   => $user['user_type']
        );

        $redis_result = $this->store_redis($token['id'], $redis_data);
      	
        if($redis_result){
          $msg = JWT::encode($token, $this->key);
        }
       else{
          $msg = "Redis is not working";
       }

        

        return $msg;
      }// end of function



      function decode($jwt){
         try {
            $decoded =  JWT::decode($jwt, $this->key, array('HS256'));

            if(isset($decoded->user_id)){
              $redis_data = $this->fetch_redis($decoded->id);
              $data = array('jwt' => $decoded, 'redis_data' => $redis_data);
            }
        } catch (Exception $e){
                $data = "Token expired";
        }
           
           return $data;
      }// end of function


      function store_redis($id, $data){
        $redis = new Redis();
        $redis->connect('localhost', '6379');
        $result = $redis->hmset($id, $data);
        return $result;
      }// end of function 

      function fetch_redis($id){
         $redis = new Redis();
        $redis->connect('localhost', '6379');
        $redis_data = $redis->hgetall($id);

        return $redis_data;
      }// end of function




}// end of class
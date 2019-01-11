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
	  }
      function get_token($username, $user_id ){
      	$token = array();
      	$token['id'] = $this->uniq_hash("ID");
        $token['iss'] = 'codeignitor_fire';
        $token['username'] = $username;
        $token['user_id'] = $user_id;
        $date = new DateTime();
        $token['iat'] = $date->getTimestamp();

        $msg = JWT::encode($token, $this->key);

        return $msg;
      }// end of function



      function decode($jwt){
           $decoded =  JWT::decode($jwt, $this->key, array('HS256'));
           return $decoded;
      }// end of function






}// end of class
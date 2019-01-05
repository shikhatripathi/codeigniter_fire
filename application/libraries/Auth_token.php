<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require  APPPATH . '../vendor/autoload.php';
use \Firebase\JWT\JWT;

class Auth_token{
	protected $key = '3fc9b689459d738f8c88a3a48aa9e33542016b7a4052e001aaa536fca74813cb';

	function __construct() 
    {
     

      
    }

    function request_headers() {
        $arh = array();
        $rx_http = '/\AHTTP_/';
        foreach($_SERVER as $key => $val) {
                if( preg_match($rx_http, $key) ) {
                        $arh_key = preg_replace($rx_http, '', $key);
                        $rx_matches = array();
                        // do string manipulations to restore the original letter case
                        $rx_matches = explode('_', $arh_key);
                        if( count($rx_matches) > 0 and strlen($arh_key) > 2 ) {
                                foreach($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
                                $arh_key = implode('-', $rx_matches);
                        }
                        $arh[$arh_key] = $val;
                }
        }
        return( $arh );
      }// end of request headers function
      public function uniq_hash($prefix){
		$uniqid=   strtoupper(md5(uniqid(rand(10000,99999))));
		$date = date("ymds");
		$microtime = floatval(substr((string)microtime(), 1, 8));
        $mili = substr($microtime, 2,3);
		return $prefix.$date.$uniqid.$mili;
	  }
      function get_token($username, $user_type){
      	$token = array();
      	$token['id'] = $this->uniq_hash("ID");
        $token['iss'] = 'codeignitor_fire';
        $token['username'] = $username;
        $token['user_type'] = $user_type;
        $date = new DateTime();
        $token['iat'] = $date->getTimestamp();

        $msg = JWT::encode($token, $this->key);

        return $msg;
      }// end of function










}// end of class
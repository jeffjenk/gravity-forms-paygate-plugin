<?php

class PayGate{

	public $paygate_id;
	public $encryption_key;
	public $enable_logging;
	public $logging_path;

	const INIT_TRANS_URL = 'https://secure.paygate.co.za/payweb3/initiate.trans';
	const QUERY_TRANS_URL = 'https://secure.paygate.co.za/payweb3/query.trans';
	
	public function loadSettings(){
		# Get Settings From XML File
		$file = getcwd().'/settings.xml';
		$settings = simplexml_load_file($file);

		$this->paygate_id = (string)$settings->paygateid->value;
		$this->encryption_key = (string)$settings->encryptionkey->value;
		$this->enable_logging = (string)$settings->enable_logging->value;
		$this->logging_path = (string)$settings->logging_path->value;
	}	


    public function curlPost($url,$fields){
    	$curl = curl_init($url);
		curl_setopt($curl,CURLOPT_POST,count($fields));
		curl_setopt($curl,CURLOPT_POSTFIELDS,$fields);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
    }

    public function logPostRequest($logging_path,$prefix,$type){
    	$content = print_r($_POST,true);
		$fp = fopen("$logging_path/$prefix-$type.log","wb");
		fwrite($fp,$content);
		fclose($fp);
    }

    public function accessValue($key,$type){
    	if ($type=='post'){
			$value = array_key_exists($key, $_POST)?$_POST[$key]:NULL;
    	}else if($type=='session'){
    		$value = isset($_SESSION[$key])?$_SESSION[$key]:NULL;
    	}
    	return $value;
    }

	public function savePostSession(){
			$_SESSION = $_POST;
			$_SESSION['store'] = $_SERVER['HTTP_REFERER'];
	}

	public function getPaygatePostForm($pay_request_id,$checksum){

		return "	
		<form action='https://secure.paygate.co.za/payweb3/process.trans' method='post' name='paygate'>
			<input name='PAY_REQUEST_ID' type='hidden' value='$pay_request_id' />
			<input name='CHECKSUM' type='hidden' value='$checksum' />
		</form>
		<script>
			document.forms['paygate'].submit();
		</script>";

	}

	function getPostData(){
		// Posted variables from ITN
		$nData = $_POST;
	
		// Strip any slashes in data
		foreach($nData as $key => $val)
			$nData[$key] = stripslashes($val);
	
		// Return "false" if no data was received
		if(sizeof($nData) == 0)
			return (false);
		else
			return ($nData);
	}

	function logData( $msg = '', $close = false ){
		static $fh = 0;

		if( $close ){
			fclose( $fh );
		} else {
			
			// If file doesn't exist, create it
			if( !$fh ){
				$pathinfo = pathinfo( __FILE__ );
				$fh = fopen( $pathinfo['dirname'] .'/paygate.log', 'a+' );
			}

			// If file was successfully created
			if( $fh ){
				$line = date( 'Y-m-d H:i:s' ) .' : '. $msg ."\n";

				fwrite( $fh, $line );
			}
		}
	}
}

?>

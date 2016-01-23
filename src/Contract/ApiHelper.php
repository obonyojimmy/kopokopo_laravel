<?php


namespace Obonyojimmy\Kopokopo_laravel\Contract;

use Obonyojimmy\Kopokopo_laravel\Contract\ApiContract;
use GuzzleHttp\Client ;

abstract class ApiHelperAbstract 
{
  abstract protected function Params();
   
}
 class ApiHelper extends ApiHelperAbstract implements ApiContract 
{
	
     protected function Params(){
		 $configs=array();
		 $configs['service_name'] = config('kopokopo.service_name');
		 $configs['business_number'] = config('kopokopo.business_number');
		 $configs['internal_transaction_id'] = config('kopokopo.internal_transaction_id');
		 $configs['transaction_timestamp'] = config('kopokopo.transaction_timestamp');
		 $configs['transaction_type'] = config('kopokopo.transaction_type');
		 $configs['api_key'] = config('kopokopo.api_key');
		 $configs['api_link'] = config('kopokopo.api_link');
		// $configs['account_number'] = config('kopokopo.account_number');
		
		 return $configs ;
	 }
    
	 public  function gateway($inputs) 
	{ 
		
		$getParams= $this->Params();
		$basestring = trim(
		"service_name=".$getParams['service_name']."&
		 business_number=".$getParams['business_number']."&
		 transaction_reference=".$inputs['transaction_reference']."&
		 internal_transaction_id=".$inputs['internal_transaction_id']."&
		 transaction_timestamp=".$getParams['transaction_timestamp']."&
		 transaction_type=".$getParams['transaction_type']."&
		 account_number=".$inputs['account_number']."&
		 sender_phone=".$inputs['sender_phone']."&
		 first_name=".$inputs['first_name']."&
		 middle_name=".$inputs['middle_name']."&
		 last_name=".$inputs['last_name']."&
		 amount=".$inputs['amount']."&
		 currency=".$getParams['currency'] 
		 );
		 
		
		$signature = Base64.encode(HMAC.digest($base_string,$getParams['api_key'], SHA1 algorithm)) ;
		$client = new Client();
		$res = $client->request('POST', $getParams['api_link'] , ['json' => [
			'service_name' => $getParams['service_name'] ,
			'business_number' => $getParams['business_number'] ,
			'transaction_reference' => $inputs['transaction_reference'] ,
			'internal_transaction_id' => $inputs['internal_transaction_id'] ,
			'transaction_timestamp' => $getParams['transaction_timestamp'] ,
			'transaction_type' => $getParams['transaction_type']  ,
			'account_number' => $inputs['account_number'] ,
			'sender_phone' => $inputs['sender_phone'],
			'first_name' => $inputs['first_name'] ,
			'middle_name' => $inputs['middle_name'],
			'last_name' => $inputs['last_name'] ,
			'amount' => $inputs['amount'] ,
			'currency' => $getParams['currency'] ,
			'signature' => $signature ,
			
		]]);
		
		return $res->getBody();
		
		
		
		
	} 
   
 

}

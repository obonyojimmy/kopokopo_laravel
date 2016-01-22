<?php


namespace Obonyojimmy\Kopokopo_laravel\Contract;

use Obonyojimmy\Kopokopo_laravel\Contract\ApiContract;

class ApiHelper implements ApiContract
{
     protected $service_name = config('kopokopo.service_name');
     protected $business_number = config('kopokopo.business_number');
   //  protected $transaction_reference = config('kopokopo.transaction_reference');
     protected $internal_transaction_id = config('kopokopo.internal_transaction_id');
     protected $transaction_timestamp = config('kopokopo.transaction_timestamp');
     protected $transaction_type = config('kopokopo.transaction_type');
     protected $account_number = config('kopokopo.account_number');
   //  protected $sender_phone = config('kopokopo.sender_phone');
   //  protected $first_name = config('kopokopo.first_name');
   // protected $middle_name = config('kopokopo.middle_name');
   //  protected $last_name = config('kopokopo.last_name');
     protected $amount = config('kopokopo.amount');
     protected $currency = config('kopokopo.currency');
  
      
	 public  function gateway($transaction_reference,$sender_phone,$first_name,$middle_name,$last_name,$amount) 
	{ 
		$client = new GuzzleHttp\Client();
		$res = $client->request('GET', 'https://api.github.com/user', [
			'auth' => ['obonyojimmy', 'masenoc27']
		]);
		return $res->getBody();
	} 
	 public  function test() 
	{ 
		$client = new GuzzleHttp\Client();
		$res = $client->request('GET', 'https://api.github.com/user', [
			'auth' => ['obonyojimmy', 'masenoc27']
		]);
		return $res->getBody();
	} 
   
 

}

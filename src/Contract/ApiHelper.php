<?php


namespace Obonyojimmy\Kopokopo_laravel\Contract;

use Obonyojimmy\Kopokopo_laravel\Contract\ApiContract;

class ApiHelper implements ApiContract
{
      $service_name = config('kopokopo.service_name');
    
	 public  function test() 
	{ 
		$client = new GuzzleHttp\Client();
		$res = $client->request('GET', 'https://api.github.com/user', [
			'auth' => ['obonyojimmy', 'masenoc27']
		]);
		return $res->getBody();
	} 
   
 

}

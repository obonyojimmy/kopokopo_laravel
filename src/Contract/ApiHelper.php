<?php


namespace Obonyojimmy\Kopokopo_laravel\Contract;

use Obonyojimmy\Kopokopo_laravel\Contract\ApiContract;

//abstract class ApiHelperAbstract 
//{
  //abstract protected function GatewayConfigs();
//}
 class ApiHelper implements ApiContract
{
     
      public function GatewayConfigs(){
		 $service_name = config('kopokopo.service_name');
		 return $service_name ;
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

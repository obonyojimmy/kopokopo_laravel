<?php

namespace Obonyojimmy\Kopokopo_laravel\Contract;

Interface ApiContract
{

    public  function gateway($transaction_reference,$sender_phone,$first_name,$middle_name,$last_name,$amount);
    public  function test();


}


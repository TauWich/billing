<?php 
namespace App\Controllers;

class ClientController
{
    // Show the product attributes based on the id.
	public function getClients($f3, $params)
	{
        echo $f3->get("GET.name");
        var_dump( is_null($f3->get("GET.mobile")) );
        var_dump( is_null($f3->get("GET.vat_id")) );
        require_once APP_ROOT . '/views/client.php';
	}

}
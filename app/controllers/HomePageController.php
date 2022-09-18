<?php
namespace App\Controllers;

class HomePageController
{
    // Homepage action
	public function display()
	{
        require_once APP_ROOT . '/views/home.php';
	}
}
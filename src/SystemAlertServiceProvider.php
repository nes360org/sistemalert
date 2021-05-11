<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace vendor\SystemAlert\src\SystemAlertServiceProvider;

use Illuminate\Support\ServiceProvider;

class SystemAlertServiceProvider extends ServiceProvider {

    function __construct() {
        
    }

    public function boot()
	{
		//
		include __DIR__.'/routes.php';
	}

}

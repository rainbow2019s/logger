<?php namespace Rainbow2019s\Logger\Facade;

use Illuminate\Support\Facades\Facade;

class Logger extends Facade {
    
    protected static function getFacadeAccessor(){
        return 'Logger';
    }
}

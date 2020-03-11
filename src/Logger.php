<?php namespace Rainbow2019s\Logger;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;
// use Monolog\Logger;

class Logger {

  private $_logger;

  public function __construct(){
        
        $this->_logger = new \Monolog\Logger('biz');
        $this->_logger->pushHandler(new RotatingFileHandler
          (storage_path('logs/biz-info.log'), 0, \Monolog\Logger::INFO));
      }

  public function info($message,$context=[]){
    $this->_logger->info($message,$context);
  }

}

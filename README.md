## A simple example

```php
<?php

use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;
use Rainbow2019s\Logger\Facade\Logger;

class TestController extends Controller
{
    private $prophet;

    public function test()
    {
        Logger::info('user add',['id'=>1]);
        return 'ok';
    }
}

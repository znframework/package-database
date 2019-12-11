<?php namespace ZN\Database\Exception;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\Exception;

class OrderByInvalidSecondArgumentException extends Exception
{
    const lang = 
    [
        'tr' => 'String $type parametresi "asc" veya "desc" değerlerini alabilir!',
        'en' => 'String $type parameter can take "asc" or "desc" values!'
    ];
}

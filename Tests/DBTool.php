<?php namespace ZN\Database\Tests;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

use ZN\Controller\UnitTest;

class DBTool extends UnitTest
{
    const unit =
    [
        'class'   => 'DBTool',
        'methods' =>
        [
            'listDatabases'    => [],
            'listTables'       => [],
            #'statusTables'     => ['*'],
            #'optimizeTables'   => ['*'],
            #'repairTables'     => ['*'],
            #'backup'           => []
        ]
    ];
}

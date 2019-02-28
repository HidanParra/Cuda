<?php 

require_once 'Medoo.php';

use Medoo\Medoo;
 
$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'softengi_cuda',
    'server' => 'softenginesolutions.com.mx',
    'username' => 'softengi_cuda',
    'password' => 'Cuda.2019!',
    "logging" => true 
]);
?>
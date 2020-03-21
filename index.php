<?php

require_once 'vendor/autoload.php';



use VK\Client\Enums\VKLanguage;
use VK\Client\VKApiClient;

require_once 'utils/handler.php';
require_once 'utils/const.php';

$json = file_get_contents('php://input');

file_put_contents('debug.txt', print_r($json, true));

$data = json_decode($json, true);

$type = $data['type'];

$vk = new VKApiClient('5.103', VKLanguage::RUSSIAN);




?>

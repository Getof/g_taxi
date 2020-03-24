<?php

$tenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$tenv->load();
require_once 'vendor/autoload.php';
require_once 'utils/handler.php';

use VK\Client\Enums\VKLanguage;
use VK\Client\VKApiClient;

$vk_token = $_ENV('VK_TOKEN');

$json = file_get_contents('php://input');

$data = json_decode($json, true);

$type = $data['type'];

$vk = new VKApiClient('5.103', VKLanguage::RUSSIAN);




?>

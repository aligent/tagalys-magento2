<?php

use Magento\Framework\App\CsrfAwareActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Request\InvalidRequestException;

if (interface_exists("Magento\Framework\App\CsrfAwareActionInterface")) {
    include __DIR__ . DIRECTORY_SEPARATOR . 'M220' . DIRECTORY_SEPARATOR . "Details.php";
} else {
    include __DIR__ . DIRECTORY_SEPARATOR . 'M230' . DIRECTORY_SEPARATOR . "Details.php";
}

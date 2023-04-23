<?php

namespace Xpdeal\PixInter;


use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Message;
use Xpdeal\PixInter\Services\PixService;

class PixInter extends PixService
{
    public function __construct(
        private readonly string $token
    )
    {

    }
}
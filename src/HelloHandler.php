<?php

declare(strict_types=1);

namespace MiniMezzio;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class HelloHandler implements RequestHandlerInterface
{
     public function handle(ServerRequestInterface $request): ResponseInterface
     {
        return new JsonResponse(['message' => 'Hello world!'], 200);
     }
 }
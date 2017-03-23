<?php

namespace Infrastructure\API\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Class ExampleAction.
 */
final class ExampleAction implements ActionInterface
{
    /**
     * @inheritDoc
     */
    public function __invoke(Request $request, Response $response, array $args)
    {
        $response->getBody()->write('Hello world!');
        return $response;
    }
}

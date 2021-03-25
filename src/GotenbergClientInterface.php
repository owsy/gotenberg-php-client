<?php

declare(strict_types=1);

namespace TheCodingMachine\Gotenberg;

use Http\Promise\Promise;
use Psr\Http\Message\ResponseInterface;

interface GotenbergClientInterface
{
    /**
     * Sends the given documents to the API and returns the response.
     */
    public function post(GotenbergRequestInterface $request): ResponseInterface;

    /**
     * Sends the given documents to the API asynchronously and returns a promise.
     */
    public function postAsync(GotenbergRequestInterface $request): Promise;

    /**
     * Sends the given documents to the API, stores the resulting PDF in the given destination.
     */
    public function store(GotenbergRequestInterface $request, string $destination): void;
}

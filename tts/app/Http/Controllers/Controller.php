<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** Responses */

    private function createResponse(string $message, int $code, array $headers = []) : Response
    {
        return new Response($message, $code, $headers);
    }

    protected function unauthorized(string $message = 'Unauthorized / Insufficient permissions', array $headers = []) : Response
    {
        return $this->createResponse($message, 401, $headers);
    }

    protected function ok(string $message = 'OK', array $headers = []) : Response
    {
        return $this->createResponse($message, 200, $headers);
    }

    protected function invalidRequest(string $message = 'Data was not found', array $headers = []) : Response
    {
        return $this->createResponse($message, 400, $headers);
    }

    protected function created(string $message = 'Created', array $headers = []) : Response
    {
        return $this->createResponse($message, 201, $headers);
    }

    protected function error(string $message = 'Error', array $headers = [])
    {
        return $this->createResponse($message, 500, $headers);
    }

    protected function teapot(string $message = 'Im a teapot!', array $headers = []) : Response
    {
        return $this->createResponse($message, 418, $headers);
    }
}

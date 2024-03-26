<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
{
    $request = Request::capture();
    $response = $this->handleRequest($request);
    return $response;
}
public function handleRequest(Request $request)
{
    // Perform actions based on the request
    // Example: Validate input, process data, etc.

    // Generate a response
    return response()->json(['message' => 'Request handled successfully']);
}


}

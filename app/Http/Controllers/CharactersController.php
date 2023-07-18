<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group The Big Bang Theory characters
 *
 * APIs for managing users
 */
class CharactersController extends Controller
{
    public function leonard(): JsonResponse
    {
        return response()->json([
            'message' => 'Hello, here is Leonard!'
        ], 200);
    }
}

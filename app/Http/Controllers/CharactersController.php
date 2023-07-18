<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group The Big Bang Theory characters
 *
 * This api controller returns information about the big bang theory characters.
 */
class CharactersController extends Controller
{
    /**
     * Leonard
     *
     * Get an answer from leonard
     * @authenticated
     *
     */
    public function leonard(): JsonResponse
    {
        return response()->json([
            'message' => 'Hello, here is Leonard!'
        ], 200);
    }

    /**
     * Sheldon
     *
     * Get an answer from sheldon
     *
     * @responseFile storage/responses/characters/sheldon.get.json
     *
     */
    public function sheldon(): JsonResponse
    {
        return response()->json([
            'message' => 'Hello, here is Sheldon!'
        ], 200);
    }
}

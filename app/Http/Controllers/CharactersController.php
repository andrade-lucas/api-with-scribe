<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

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
     * @responseFile 200 storage/responses/characters/sheldon.get.json
     * @responseFile 400 storage/responses/characters/sheldon.get.error.json
     *
     */
    public function sheldon(): JsonResponse
    {
        return response()->json([
            'message' => 'Hello, here is Sheldon!'
        ], 200);
    }
}

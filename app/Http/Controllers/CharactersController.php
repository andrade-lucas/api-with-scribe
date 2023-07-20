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
    //public function leonard(): JsonResponse
    //{
    //    return response()->json([
    //        'message' => 'Hello, here is Leonard!'
    //    ], 200);
    //}

    /**
     * Sheldon
     *
     * Get an answer from sheldon
     *
     * @responseFile 200 storage/responses/characters/sheldon.get.json
     * @responseFile 400 storage/responses/characters/sheldon.get.error.json
     *
     */
    //public function sheldon(): JsonResponse
    //{
    //    return response()->json([
    //        'message' => 'Hello, here is Sheldon!'
    //    ], 200);
    //}

    /**
     * List characters
     *
     * List all Big Bang Theory characters
     *
     * @queryParam filter[name] string Character name. Example: Leonard
     * @queryParam filter[real_name] string Real name. Example: Johnny Galecki
     *
     * @authenticated
     *
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => [
                [
                    'id' => 1,
                    'name' => 'Sheldon Cooper',
                    'real_name' => 'Jim Parsons',
                ],
                [
                    'id' => 2,
                    'name' => 'Leonard Hofstadter',
                    'real_name' => 'Johnny Galecki',
                ],
                [
                    'id' => 3,
                    'name' => 'Penny Hofstadter',
                    'real_name' => 'Kaley Cuoco',
                ],
            ]
        ]);
    }

    /**
     * Create character
     *
     * Create a new character
     *
     * @authenticated
     *
     */
    public function store(): JsonResponse
    {
        return response()->json([
            'message' => 'Success',
            'data' => [
                'id' => 1,
                'name' => 'Sheldon Cooper',
                'real_name' => 'Jim Parsons',
            ],
        ], 201);
    }

    /**
     * Show character
     *
     * @authenticated
     *
     * @urlParam id integer required
     *
     */
    public function show(): JsonResponse
    {
        return response()->json([
            'data' => [
                'id' => 1,
                'name' => 'Sheldon Cooper',
                'real_name' => 'Jim Parsons',
            ],
        ]);
    }

    /**
     * Update character
     *
     * Update an existing character
     *
     * @authenticated
     *
     * @urlParam id integer required
     *
     */
    public function update(): JsonResponse
    {
        return response()->json([
            'message' => 'Success',
            'data' => [
                'id' => 1,
                'name' => 'Sheldon Cooper',
                'real_name' => 'Jim Parsons',
            ],
        ]);
    }

    /**
     * Delete character
     *
     * @authenticated
     *
     * @urlParam id integer required
     *
     */
    public function destroy(): JsonResponse
    {
        return response()->json([
            'message' => 'Success'
        ]);
    }
}

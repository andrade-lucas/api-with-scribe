<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class EpisodeController extends Controller
{

    /**
     * List episodes
     *
     * @authenticated
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => [
                [
                    'id' => 1,
                    'description' => 'Pilot',
                    'season' => 1,
                    'code' => '101'
                ],
                [
                    'id' => 2,
                    'description' => 'The Big Bran Hypothesis',
                    'season' => 1,
                    'code' => '102'
                ],
                [
                    'id' => 3,
                    'description' => 'The Fuzzy Boots Corollary',
                    'season' => 1,
                    'code' => '103'
                ],
            ]
        ]);
    }

    /**
     * Show episode
     *
     * @authenticated
     */
    public function show(): JsonResponse
    {
        return response()->json([
            [
                'id' => 1,
                'description' => 'Pilot',
                'code' => '101'
            ],
        ]);
    }

}

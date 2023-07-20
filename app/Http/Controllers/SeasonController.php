<?php

namespace App\Http\Controllers;

class SeasonController extends Controller
{

    /**
     * List season
     *
     * @authenticated
     */
    public function index()
    {
        return response()->json([
            'data' => [
                [
                    'id' => 1,
                    'description' => 'Season 1',
                ],
                [
                    'id' => 2,
                    'description' => 'Season 2',
                ],
                [
                    'id' => 3,
                    'description' => 'Season 3',
                ],
            ]
        ]);
    }

    /**
     * Show season
     *
     * @authenticated
     */
    public function show()
    {
        return response()->json([
            [
                'id' => 1,
                'description' => 'Season 1',
            ],
        ]);
    }
}

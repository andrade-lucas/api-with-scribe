<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePirateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group One Piece
 *
 * One piece is a great anime. Watch it right now!
 */
class OnePieceController extends Controller
{

    /**
     * Create pirate
     *
     * This action will create a new pirate.
     *
     * @param CreatePirateRequest $request
     * @return JsonResponse
     *
     * @bodyParam name string required The pirate name.
     * @bodyParam pirate_band string required The pirate band to add pirate.
     *
     * @responseFile status=201 storage/responses/one-piece/create-pirate.success.json
     * @responseFile status=400 storage/responses/one-piece/create-pirate.failed.json
     * @authenticated
     */
    public function create(CreatePirateRequest $request): JsonResponse
    {
        return response()->json([
            "success" => true,
            "message" => "The pirate {$request->name} was created on {$request->pirate_band} band"
        ], 201);
    }

    /**
     * Get pirate by name
     *
     * This action receives a pirate name, and return it on a success message.
     *
     * @param Request $request
     * @return JsonResponse
     *
     * @queryParam pirate string required The pirate's name. Example: Luffy
     *
     * @response status=200 {
     *  "success": true,
     *  "message": "Yeah, mr. {pirate} is a high level pirate"
     * }
     * @response status=400 {
     *  "success": false,
     *  "message": "Pirate not found"
     * }
     */
    public function getPirate(Request $request): JsonResponse
    {
        $pirate = $request->getQuery('name');

        return response()->json([
            "name" => $pirate
        ]);
    }
}

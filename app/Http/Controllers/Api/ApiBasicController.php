<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class ApiBasicController extends Controller
{
    /**
     * @OA\Get(
     * path="/basic",
     * summary="Get basic info, menu, settings",
     * description="Get page info, menu, settings",
     * operationId="basic",
     * tags={"BASIC"},
     * @OA\Response(
     *    response=200,
     *    description="Success",
     *    @OA\JsonContent(
     *       @OA\Property(property="data", type="object")
     *        )
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="User should be authorized to get profile information",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Not authorized"),
     *    )
     * )
     * )
     */
    public function basic(Request $request) {
        $menu = Menu::where('show', 1)->get();

        return $menu;
    }
}

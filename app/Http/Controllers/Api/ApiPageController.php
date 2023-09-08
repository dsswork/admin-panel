<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class ApiPageController extends Controller
{
    /**
     * @OA\Get(
     * path="/pages/{slug}",
     * summary="Get page info",
     * description="Get page info",
     * operationId="pageInfo",
     * tags={"PAGES"},
     * @OA\Parameter(
     *    description="Page slug",
     *    in="path",
     *    name="slug",
     *    required=false,
     *    example="/",
     * ),
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
    public function page(Request $request) {
        $page = Page::where('slug', '/'.$request->slug)->first();
        return $page;
    }
}

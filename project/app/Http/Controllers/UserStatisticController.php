<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Laravel\Lumen\Http\ResponseFactory;


class UserStatisticController extends Controller
{

    protected $repo;

    /**
     * Create a new controller instance.
     * @param UserRepository $repo
     */
    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Return user history session including score and date
     *
     * @param Request $request
     * @param $userId
     * @return JsonResponse|AnonymousResourceCollection
     */
    public function getUserHistory(Request $request, $userId)
    {
        $results = $this->repo->getUserHistory($userId);
        if ($results) {
            return UserResource::collection($results);
        } else
            return response()->json(null, 404);
    }

    /**
     * Return user recent session trained categories
     *
     * @param Request $request
     * @param $userId
     * @return Response|ResponseFactory
     */
    public function getUserRecentTrained(Request $request, $userId)
    {
        $results = $this->repo->getUserRecentTrained($userId);
        if ($results) {
            return response()->json($results);
        } else
            return response()->json(null, 404);
    }
}

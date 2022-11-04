<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use CreateFeedRequest;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

/**
 * Class FeedController
 * @package App\Http\Controllers
 */
class FeedController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param CreateFeedRequest $request
     * @return JsonResponse
     * @throws Exception
     */
    public function store(
        CreateFeedRequest $request
    ): JsonResponse {
        return new JsonResponse(
            (new Feed())->fill($request->all())->save()
        );
    }

    /**
     * @param Request $request
     * @param Feed $feed
     * @return void
     */
    public function update(
        Request $request,
        Feed    $feed
    ): void {

    }
}

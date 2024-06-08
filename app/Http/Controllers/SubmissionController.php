<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\Http\Resources\SubmissionResource;
use App\Jobs\SubmissionJob;
use App\Services\UtilService;
use Illuminate\Http\JsonResponse;


class SubmissionController extends Controller
{
    public function store(UtilService $utilService, SubmissionRequest $request): array
    {
        SubmissionJob::dispatch($request->validated());
        return $utilService->makeResponse('Submission posted successfully');

    }
}

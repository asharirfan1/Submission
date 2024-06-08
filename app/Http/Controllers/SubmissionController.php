<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\Jobs\SubmissionJob;


class SubmissionController extends Controller
{
    public function store(SubmissionRequest $request)
    {
        SubmissionJob::dispatch($request->validated());
        return response()->json(['success' => 'Submission processed successfully'], 200);

    }
}

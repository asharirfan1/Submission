<?php

namespace App\Listeners;

use App\Events\SubmissionEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SubmissionEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubmissionEvent $event): void
    {
        Log::info('Submission saved : ', [
            'name' => $event->submission->name,
            'email' => $event->submission->email,
            'message' => $event->submission->message,
        ]);
    }
}

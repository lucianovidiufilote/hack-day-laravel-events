<?php

namespace App\Jobs\Feed\Parse\Components;


use App\Models\Feed;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUniqueUntilProcessing;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ValidateFeed implements ShouldQueue, ShouldBeUniqueUntilProcessing
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, Batchable;

    /**
     * @param Feed $feed
     */
    public function __construct(private readonly Feed $feed)
    {
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {

    }
}

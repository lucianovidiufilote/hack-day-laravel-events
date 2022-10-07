<?php

namespace App\Jobs;

use App\Models\Feed;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FeedParseJob implements ShouldQueue, ShouldBeUnique
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var Feed
     */
    public Feed $feed;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Feed $feed)
    {
        $this->feed = $feed;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

    }

    /**
     * The unique ID of the job.
     *
     * @return string
     */
    public function uniqueId(): string
    {
        return (string)$this->feed->id;
    }
}

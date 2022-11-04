<?php

namespace App\Jobs\Feed\Parse;

use App\Jobs\Feed\Parse\Components\CheckFeed;
use App\Jobs\Feed\Parse\Components\DownloadFeed;
use App\Jobs\Feed\Parse\Components\ValidateFeed;
use App\Models\Feed;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUniqueUntilProcessing;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\Middleware\WithoutOverlapping;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Bus;

class FeedParseJob implements ShouldQueue, ShouldBeUniqueUntilProcessing
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, Batchable;

    /**
     * The number of seconds after which the job's unique lock will be released.
     *
     * @var int
     */
    public int $uniqueFor = 3600;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private readonly Feed $feed)
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        Bus::chain([
            new CheckFeed($this->feed),
            new DownloadFeed($this->feed),
            new ValidateFeed($this->feed),
        ])->dispatch();
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

    public function middleware()
    {
        return [
            new WithoutOverlapping($this->uniqueId())
        ];
    }
}

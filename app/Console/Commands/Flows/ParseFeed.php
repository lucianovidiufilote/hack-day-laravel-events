<?php

namespace App\Console\Commands\Flows;

use App\Jobs\Feed\Parse\FeedParseJob;
use App\Models\Feed;
use Illuminate\Console\Command;

class ParseFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $feeds = Feed::all();

        FeedParseJob::dispatch();

        return Command::SUCCESS;
    }
}

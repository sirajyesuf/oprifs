<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Google\Client;
use Google\Service\YouTube;

class YtVideo extends Command
{
    
    protected $signature = 'app:ytvedio';

    protected $description = 'Command description';

    public $ytchannelId;
    public $ytservice;


    public function __construct(){

        parent::__construct();
        $this->ytchannelId  = env('YOUTUBE_CHANNEL_ID');

        $client = new Client();
        $client->setDeveloperKey(env('YOUTUBE_API_KEY'));
        $this->ytservice = new YouTube($client);

    }

    public function handle()
    {
        $nextPageToken = null;
        $videos = [];
        
        while(!isset($response) || $nextPageToken != null) {
        
            $response = $this->ytservice->playlistItems->listPlaylistItems(
                'snippet',
                [
                    'playlistId' => $this->ytchannelId,
                    'pageToken' => $nextPageToken,
                    'maxResults' => 50,
                ]
            );
        
            $nextPageToken = $response->nextPageToken ?? null;
        
            $videos = array_merge($videos, $response->items);
        }


        dd($videos);
        
    }
}

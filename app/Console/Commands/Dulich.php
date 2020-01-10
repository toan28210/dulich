<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Goutte;
use App\News;
use Str;
class Dulich extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:Dulich';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      
            $crawler = Goutte::request('GET', 'https://dantri.com.vn/du-lich-da-nang.tag');
            for($i =0;$i<5;$i++){
            $title = $crawler->filter('a.fon6')->each(function ($node) {
              print($node->text()."\n");
              return $node->text();
        })[$i];
        $description = $crawler->filter('div.fon5.wid324.fl')->each(function ($node) {
            print($node->text()."\n");
            return $node->text();
      })[$i];
        $thumbnail = $crawler->filter('img.img130')->each(function ($node) {
            // print($node->text()."\n");
            return $node->attr('src');
        })[$i];

        $content = '';
        $data=[
            'title' => $title,
            'description' => $description,
            'thumbnail' => $thumbnail,
            'content' =>$content,
        ];

        News::create($data);    
    }
            

    
}

}
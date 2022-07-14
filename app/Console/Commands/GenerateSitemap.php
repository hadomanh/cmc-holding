<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml';

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
     * @return int
     */
    public function handle()
    {
        try {
            // SitemapGenerator::create($this->argument('url'))->getSitemap()->writeToDisk('public', 'sitemap.xml');
            SitemapGenerator::create($this->argument('url'))->writeToFile(public_path('sitemap.xml'));
            echo "Sitemap generated: " . $this->argument('url') . "/sitemap.xml \n";
        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage() . "\n";
        }
        return 0;
    }
}

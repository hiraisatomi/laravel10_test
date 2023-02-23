<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class testBatch extends Command
{
    /* php artisan make:command TestBatch でCommandsディレクトリ＆このファイルを作成
       php artisan command:TestBatch で実行 */

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TestBatch';

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
     */
    public function handle()
    {
        echo "コマンド作成をしました！";
        return Command::SUCCESS;
    }
}

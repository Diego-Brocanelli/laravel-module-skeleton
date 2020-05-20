<?php

declare(strict_types=1);

namespace Bnw\Skeleton\Commands;

use Illuminate\Console\Command;

class SkeletonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bnw:example';

    protected $description = 'Comando de exemplo';

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
        //
    }
}

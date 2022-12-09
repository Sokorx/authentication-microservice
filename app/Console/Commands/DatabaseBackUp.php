<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

class DatabaseBackUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filename = "backup-" . Carbon::now()->format('Y-m-d') . ".gz";

        $command = "ssh -t " . env('DATABASE_BACKUP_USER=root') . "@" . env('DB_HOST') . " '" . env('DATABASE_BACKUP_COMMAND') . env('DATABASE_BACKUP') . "/" . $filename . " && exit; exec bash -l'";

        $returnVar = NULL;
        $output  = NULL;

        exec($command, $output, $returnVar);
    }
}

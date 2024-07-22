<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
   protected $signature = 'shop:install';
   protected $description = 'installation';

    public function handle(): int
    {

       $this->call('key:generate');
       $this->call('migrate');
       $this->call('db:seed');
       $this->call('storage:link');

       return self::SUCCESS;
    }
}

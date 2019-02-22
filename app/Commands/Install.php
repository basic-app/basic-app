<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\Events\Events;

class Install extends BaseCommand
{

    protected $group = 'Application';
    
    protected $name = 'install';
    
    protected $description = 'Runs the install trigger.';

    public function run(array $params)
    {
    	Events::trigger('install');

    	echo 'done' . "\n";
    }

}
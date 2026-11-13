<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run()
    {
        $this->call('BasicApp\SiteLanding\Database\Seeds\DemoSeeder');
        $this->call('BasicApp\AdminAuthShield\Database\Seeds\DemoSeeder');
    }
}
<?php
/**
 * @author Basic App Dev Team <dev@basic-app.com>
 * @license MIT
 * @link http://basic-app.com
 */
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Config\AppSeeder as AppSeederConfig;

class App extends Seeder
{
    public function run()
    {
        foreach(config(AppSeederConfig::class) as $table => $rows)
        {
            foreach($rows as $row)
            {
                 $this->db->table($table)->insert($row);
            }
        }
    }
}

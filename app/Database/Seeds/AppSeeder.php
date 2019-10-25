<?php

namespace App\Database\Seeds;

use Exception;

class AppSeeder extends \CodeIgniter\Database\Seeder
{

    public function run()
    {
        $db = \Config\Database::connect();
        
        $query = $db->table('configs')->where([
            'config_class' => 'BasicApp\System\Config\System',
            'config_property' => 'theme'            
        ])->get();

        if (!$query)
        {
            $error = $db->error();

            throw new Exception($error);
        }

        $row = $query->getRowArray();

        if (!$row)
        {
            $db->table('configs')->insert([
                'config_class' => 'BasicApp\System\Config\System',
                'config_property' => 'theme',
                'config_value' => 'BasicApp\CleanBlogTheme\Theme'
            ]);

        }
    }

}
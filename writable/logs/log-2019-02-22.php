<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-02-22 11:14:18 --> Migrations have been loaded but are disabled or setup incorrectly.
#0 D:\htdocs\basic-app\demoapp\system\Database\MigrationRunner.php(206): CodeIgniter\Exceptions\ConfigException::forDisabledMigrations()
#1 D:\htdocs\basic-app\demoapp\system\Database\MigrationRunner.php(373): CodeIgniter\Database\MigrationRunner->version('20181019055522')
#2 D:\htdocs\basic-app\demoapp\system\Commands\Database\MigrateLatest.php(115): CodeIgniter\Database\MigrationRunner->latestAll(NULL)
#3 D:\htdocs\basic-app\demoapp\system\CLI\CommandRunner.php(123): CodeIgniter\Commands\Database\MigrateLatest->run(Array)
#4 D:\htdocs\basic-app\demoapp\system\CLI\CommandRunner.php(96): CodeIgniter\CLI\CommandRunner->runCommand('migrate:latest', Array)
#5 D:\htdocs\basic-app\demoapp\system\CLI\CommandRunner.php(75): CodeIgniter\CLI\CommandRunner->index(Array)
#6 D:\htdocs\basic-app\demoapp\system\CodeIgniter.php(821): CodeIgniter\CLI\CommandRunner->_remap('index', 'migrate:latest')
#7 D:\htdocs\basic-app\demoapp\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(CodeIgniter\CLI\CommandRunner))
#8 D:\htdocs\basic-app\demoapp\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 D:\htdocs\basic-app\demoapp\system\CLI\Console.php(80): CodeIgniter\CodeIgniter->run()
#10 D:\htdocs\basic-app\demoapp\spark(57): CodeIgniter\CLI\Console->run()
#11 {main}
CRITICAL - 2019-02-22 11:15:28 --> Table 'basicapp_demoapp.pages' doesn't exist
#0 D:\htdocs\basic-app\demoapp\system\Database\MySQLi\Connection.php(325): mysqli->query('SELECT COUNT(*)...')
#1 D:\htdocs\basic-app\demoapp\system\Database\BaseConnection.php(705): CodeIgniter\Database\MySQLi\Connection->execute('SELECT COUNT(*)...')
#2 D:\htdocs\basic-app\demoapp\system\Database\BaseConnection.php(633): CodeIgniter\Database\BaseConnection->simpleQuery('SELECT COUNT(*)...')
#3 D:\htdocs\basic-app\demoapp\system\Database\BaseBuilder.php(1537): CodeIgniter\Database\BaseConnection->query('SELECT COUNT(*)...', Array, false)
#4 D:\htdocs\basic-app\demoapp\vendor\basic-app\module-site\Models\PageModel.php(60): CodeIgniter\Database\BaseBuilder->countAllResults()
#5 D:\htdocs\basic-app\demoapp\vendor\basic-app\module-site\Config\Events.php(50): BasicApp\Site\Models\PageModel::install()
#6 D:\htdocs\basic-app\demoapp\system\Events\Events.php(185): CodeIgniter\Events\Events::{closure}()
#7 D:\htdocs\basic-app\demoapp\app\Commands\Install.php(19): CodeIgniter\Events\Events::trigger('install')
#8 D:\htdocs\basic-app\demoapp\system\CLI\CommandRunner.php(123): App\Commands\Install->run(Array)
#9 D:\htdocs\basic-app\demoapp\system\CLI\CommandRunner.php(96): CodeIgniter\CLI\CommandRunner->runCommand('install', Array)
#10 D:\htdocs\basic-app\demoapp\system\CLI\CommandRunner.php(75): CodeIgniter\CLI\CommandRunner->index(Array)
#11 D:\htdocs\basic-app\demoapp\system\CodeIgniter.php(821): CodeIgniter\CLI\CommandRunner->_remap('index', 'install')
#12 D:\htdocs\basic-app\demoapp\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->runController(Object(CodeIgniter\CLI\CommandRunner))
#13 D:\htdocs\basic-app\demoapp\system\CodeIgniter.php(235): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#14 D:\htdocs\basic-app\demoapp\system\CLI\Console.php(80): CodeIgniter\CodeIgniter->run()
#15 D:\htdocs\basic-app\demoapp\spark(57): CodeIgniter\CLI\Console->run()
#16 {main}

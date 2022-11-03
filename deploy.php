<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/rsync.php';

// Config
set('repository', 'git@github.com:Sokorx/authentication-microservice.git');

set('application', 'Moniport');
set('ssh_multiplexing', true); // Speeds up deployments
set('keep_releases', 3);
set('rsync_src', function () {
    return __DIR__; // If your project isn't in the root, you'll need to change this
});

add('shared_files', [
    '.env'
]);
add('shared_dirs', [
    'storage'
]);
add('writable_dirs', [
    'bootstrap/cache',
    'storage',
    'storage/app',
    'storage/app/public',
    'storage/app/scribe',
    'storage/framework',
    'storage/framework/cache',
    'storage/framework/cache/data',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
]);

// Exclude anything that you don't want on the production server
add('rsync', [
    'exclude' => [
        '.git',
        '/.env',
        '/storage/',
        '/vendor/',
        '/node_modules/',
        '.github',
        'deploy.php',
    ],
]);


// Set up a deployer task to copy secrets to the server
// Since our secrets are stored in Gitlab, we can access them as env vars
task('deploy:secrets', function () {
    file_put_contents(__DIR__ . '/.env', getenv('DOT_ENV'));
    upload('.env', get('deploy_path') . '/shared');
    writeln('env:' . get('labels')['env']);
    run('sudo apt install acl');
    // run('sudo supervisorctl reread');
    // run('sudo supervisorctl update');
    // run('sudo supervisorctl start websockets');
    // run('sudo supervisorctl start worker');
});

// Production Server
host('ms-auth.monitecture.com')
->setHostname('157.230.214.233')
->setRemoteUser('root')
->setLabels([
    'env' => 'production'
])
->set('branch', 'main') // Git branch
->set('deploy_path', '/var/www/authentication-microservice');

// Staging Server
host('staging-ms-auth.monitecture.com')
->setHostname('157.230.214.233')
->setRemoteUser('root')
->setLabels([
    'env' => 'staging'
])
->set('branch', 'staging') // Git branch
->set('deploy_path', '/var/www/staging/authentication-microservice');

// Hooks

after('deploy:failed', 'deploy:unlock');

desc('Deploy the application');

task('deploy', [
    'deploy:info',
    'deploy:setup',
    'deploy:release',
    'deploy:update_code',
    'rsync',
    'deploy:secrets',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'artisan:migrate',
    'deploy:symlink',
    'deploy:cleanup',
    'deploy:success',
]);

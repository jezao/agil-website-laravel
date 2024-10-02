<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:jezao/agil-website.git');

//add('shared_files', []);
//add('shared_dirs', []);
//add('writable_dirs', []);

// Hosts

host('ec2-15-228-244-90.sa-east-1.compute.amazonaws.com')
    ->set('remote_user', 'deploy_user')
    ->set('deploy_path', '~/var/www/desentupidorsorocaba.com.br.br');

// Hooks

after('deploy:failed', 'deploy:unlock');

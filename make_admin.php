<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\User;

User::create([
    'name'     => 'Admin',
    'email'    => 'clivet@avectechnologies.com',
    'password' => bcrypt('password'),
    'is_admin' => true,
]);

echo "Admin user created successfully!";

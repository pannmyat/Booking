<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Console\\Kernel' => $baseDir . '/app/Console/Kernel.php',
    'App\\Exceptions\\Handler' => $baseDir . '/app/Exceptions/Handler.php',
    'App\\Http\\Controllers\\Auth\\ForgotPasswordController' => $baseDir . '/app/Http/Controllers/Auth/ForgotPasswordController.php',
    'App\\Http\\Controllers\\Auth\\LoginController' => $baseDir . '/app/Http/Controllers/Auth/LoginController.php',
    'App\\Http\\Controllers\\Auth\\RegisterController' => $baseDir . '/app/Http/Controllers/Auth/RegisterController.php',
    'App\\Http\\Controllers\\Auth\\ResetPasswordController' => $baseDir . '/app/Http/Controllers/Auth/ResetPasswordController.php',
    'App\\Http\\Controllers\\Controller' => $baseDir . '/app/Http/Controllers/Controller.php',
    'App\\Http\\Kernel' => $baseDir . '/app/Http/Kernel.php',
    'App\\Http\\Middleware\\EncryptCookies' => $baseDir . '/app/Http/Middleware/EncryptCookies.php',
    'App\\Http\\Middleware\\RedirectIfAuthenticated' => $baseDir . '/app/Http/Middleware/RedirectIfAuthenticated.php',
    'App\\Http\\Middleware\\TrimStrings' => $baseDir . '/app/Http/Middleware/TrimStrings.php',
    'App\\Http\\Middleware\\TrustProxies' => $baseDir . '/app/Http/Middleware/TrustProxies.php',
    'App\\Http\\Middleware\\VerifyCsrfToken' => $baseDir . '/app/Http/Middleware/VerifyCsrfToken.php',
    'App\\Providers\\AppServiceProvider' => $baseDir . '/app/Providers/AppServiceProvider.php',
    'App\\Providers\\AuthServiceProvider' => $baseDir . '/app/Providers/AuthServiceProvider.php',
    'App\\Providers\\BroadcastServiceProvider' => $baseDir . '/app/Providers/BroadcastServiceProvider.php',
    'App\\Providers\\EventServiceProvider' => $baseDir . '/app/Providers/EventServiceProvider.php',
    'App\\Providers\\RouteServiceProvider' => $baseDir . '/app/Providers/RouteServiceProvider.php',
    'App\\User' => $baseDir . '/app/User.php',
    'DatabaseSeeder' => $baseDir . '/database/seeds/DatabaseSeeder.php',
    'Tests\\CreatesApplication' => $baseDir . '/tests/CreatesApplication.php',
    'Tests\\Feature\\ExampleTest' => $baseDir . '/tests/Feature/ExampleTest.php',
    'Tests\\TestCase' => $baseDir . '/tests/TestCase.php',
    'Tests\\Unit\\ExampleTest' => $baseDir . '/tests/Unit/ExampleTest.php',
);

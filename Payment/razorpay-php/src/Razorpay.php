<?php

if (!defined('REQUESTS_SILENCE_PSR0_DEPRECATIONS')) {
    define('REQUESTS_SILENCE_PSR0_DEPRECATIONS', true);
}

if (class_exists('WpOrg\Requests\Autoload') === false) {
    require_once __DIR__ . '/../libs/Requests-2.0.4/src/Autoload.php';
}

try {
    WpOrg\Requests\Autoload::register();
} catch (\Exception $e) {
    throw new Exception('Requests Autoload failed');
}

// AUTOLOAD RAZORPAY API CLASSES
spl_autoload_register(function ($class) {

    $prefix = 'Razorpay\\Api\\';

    $base_dir = __DIR__ . '/';

    $len = strlen($prefix);

    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);

    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

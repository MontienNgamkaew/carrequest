<?php

declare(strict_types=1);

$sessionPath = __DIR__ . '/storage/sessions';

if (!is_dir($sessionPath)) {
    mkdir($sessionPath, 0775, true);
}

session_save_path($sessionPath);
session_start();

if (is_file(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

require __DIR__ . '/app/helpers.php';
require __DIR__ . '/app/Database.php';
require __DIR__ . '/app/Router.php';
require __DIR__ . '/app/Controllers/PageController.php';
require __DIR__ . '/app/Controllers/PublicController.php';
require __DIR__ . '/app/Controllers/AuthController.php';
require __DIR__ . '/app/Controllers/DashboardController.php';
require __DIR__ . '/app/Controllers/VendorController.php';
require __DIR__ . '/app/Controllers/VehicleController.php';
require __DIR__ . '/app/Controllers/ReportController.php';
require __DIR__ . '/app/Services/PdfService.php';

date_default_timezone_set(config('app')['timezone']);

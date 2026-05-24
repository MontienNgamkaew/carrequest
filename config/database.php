<?php

$isLocal = in_array($_SERVER['HTTP_HOST'] ?? '', ['localhost', '127.0.0.1']);

return $isLocal ? [
    // === Local XAMPP ===
    'host'     => '127.0.0.1',
    'port'     => 3306,
    'database' => 'carrequest',
    'username' => 'root',
    'password' => '',
    'charset'  => 'utf8mb4',
] : [
    // === Hostinger Production ===
    // แก้ค่าเหล่านี้ตามที่ได้จาก Hostinger hPanel > Databases
    'host'     => '127.0.0.1',
    'port'     => 3306,
    'database' => 'u123456789_carrequest',   // เปลี่ยนตามจริง
    'username' => 'u123456789_carrequest',   // เปลี่ยนตามจริง
    'password' => 'YOUR_DB_PASSWORD',        // เปลี่ยนตามจริง
    'charset'  => 'utf8mb4',
];

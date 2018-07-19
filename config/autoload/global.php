<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    // ...
    // 'db' => [
    //     'adapters' => [
    //         'Application\Db\WriteAdapter' => [
    //             'driver' => 'Pdo',
    //             'dsn'    => 'mysql:dbname=homestead;host=localhost;charset=utf8',
    //         ],
    //         'Application\Db\ReadOnlyAdapter' => [
    //             'driver' => 'Pdo',
    //             'dsn'    => 'mysql:dbname=homestead;host=localhost;charset=utf8',
    //         ],
    //     ],
    // ],
    'db' => [
        'driver' => 'Pdo',
        'dsn'    => 'mysql:dbname=homestead;host=localhost;charset=utf8;',
        'username' => 'root',
        'password' => '',
    ],
];

<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/bootstrap/app.php',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
        __DIR__ . '/database',
    ])
    // uncomment to reach your current PHP version
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        privatization: true, // determina elementos privados
        earlyReturn: true,
        strictBooleans: true
    )
    ->withPhpSets();

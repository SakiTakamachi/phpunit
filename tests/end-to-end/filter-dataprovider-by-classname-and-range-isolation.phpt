--TEST--
phpunit --process-isolation --filter DataProviderFilterTest#1-3 ../../_files/DataProviderFilterTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--process-isolation';
$_SERVER['argv'][] = '--filter';
$_SERVER['argv'][] = 'DataProviderFilterTest#1-3';
$_SERVER['argv'][] = __DIR__ . '/../_files/DataProviderFilterTest.php';

require_once __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

...                                                                 3 / 3 (100%)

Time: %s, Memory: %s

OK (3 tests, 3 assertions)

--TEST--
phpunit --configuration=order-by-duration.phpunit.xml
--FILE--
<?php declare(strict_types=1);
// @todo Refactor this test to not rely on --debug
define('PHPUNIT_TESTSUITE', true);

$tmpResultCache = sys_get_temp_dir() . DIRECTORY_SEPARATOR . sha1(__FILE__);

\copy(__DIR__ . '/_files/TestWithDifferentDurations.phpunit.result.cache.txt', $tmpResultCache);

$phpunitXmlConfig = __DIR__ . '/_files/order-by-duration.phpunit.xml';

$_SERVER['argv'][] = '--configuration=' . $phpunitXmlConfig;
$_SERVER['argv'][] = '--debug';
$_SERVER['argv'][] = '--cache-result';
$_SERVER['argv'][] = '--cache-result-file=' . $tmpResultCache;

require_once __DIR__ . '/../../bootstrap.php';
PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

Test 'TestWithDifferentDurations::testTwo' started
Test 'TestWithDifferentDurations::testTwo' ended
Test 'TestWithDifferentDurations::testOne' started
Test 'TestWithDifferentDurations::testOne' ended
Test 'TestWithDifferentDurations::testThree' started
Test 'TestWithDifferentDurations::testThree' ended


Time: %s, Memory: %s

OK (3 tests, 3 assertions)
--CLEAN--
<?php declare(strict_types=1);
unlink(sys_get_temp_dir() . DIRECTORY_SEPARATOR . sha1(__FILE__));

<?php
    if (! defined('SIMPLE_TEST')) {
        define('SIMPLE_TEST', 'simpletest/');
    }
    require_once(SIMPLE_TEST . 'unit_tester.php');
    require_once(SIMPLE_TEST . 'reporter.php');

    class TestOfLogging extends UnitTestCase {
        function TestOfLogging() {
            $this->UnitTestCase();
        }
        function testCreatingNewFile() {
        }
    }
    
    $test = &new TestOfLogging();
    $test->run(new HtmlReporter());
?>


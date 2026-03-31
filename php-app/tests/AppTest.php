<?php
// tests/AppTest.php

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase {
    public function testGetMessage() {
        $app = new App();
        $this->assertEquals("Congratulations on your PHP project", $app->getMessage());
    }
}

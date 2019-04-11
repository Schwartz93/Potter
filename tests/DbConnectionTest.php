<?php

require "../vendor/autoload.php";
use PHPUnit\Framework\TestCase;
use App\DbConnection;

class DbConnectionTest extends TestCase
{
    /**
     * @test
     */
    public function test_test()
    {
        $this->assertTrue(true);
    }
}

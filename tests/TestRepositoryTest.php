<?php

require_once __DIR__ . '/../src/TestRepository.php';

use PHPUnit\Framework\TestCase;

final class ServiceProviderRepositoryTest extends TestCase
{
    protected function setUp()
    {
        new TestRepository([['foo']]);
    }

    /**
     * @test
     */
    public function foo()
    {
        $this->assertTrue(true);
    }
}

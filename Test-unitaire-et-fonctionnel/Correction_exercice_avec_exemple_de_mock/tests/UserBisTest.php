<?php

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class UserBisTest extends TestCase
{
    private UserBis $sut;

    /** @var ExternalAPIs $externalApis */
    private $externalApis;

    protected function setUp(): void
    {
        $this->externalApis = $this->getMockBuilder(ExternalAPIs::class)
            ->onlyMethods(['checkEmail'])
            ->getMock();

        parent::setUp();
    }

    public function testUserBisNominal()
    {
        $this->sut = new UserBis('XXX',
            'seb',
            'sso',
            Carbon::now()->subYears(20),
            $this->externalApis);

        $this->externalApis->expects($this->any())
            ->method('checkEmail')
            ->willReturn(true);

        $this->assertTrue($this->sut->isValid());
    }

    public function testUserBisBadEmail()
    {
        $this->sut = new UserBis('XXX',
            'seb',
            'sso',
            Carbon::now()->subYears(20),
            $this->externalApis);

        $this->externalApis->expects($this->any())
            ->method('checkEmail')
            ->willThrowException(new Exception("Pas bon"));

        $this->expectException(Exception::class);
        $this->sut->isValid();
    }
}
<?php


use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private User $user;

    protected function setUp(): void
    {
        $this->user = new User('seb@test.fr', 'seb', 'sso', Carbon::now()->subYears(20));
        parent::setUp();
    }

    public function testUserIsValidNominal()
    {
        $u = new User('seb@test.fr', 'seb', 'sso', Carbon::now()->subYears(20));
        $result = $u->isValid();
        $this->assertTrue($result);
    }

    public function testIsValidNominal()
    {
        $this->assertTrue($this->user->isValid());
    }

    public function testUserNotValidDueToFName()
    {
        $u = new User('seb@test.fr', '', 'sso', Carbon::now()->subYears(20));
        $result = $u->isValid();
        $this->assertFalse($result);
    }

    public function testNotValidDueToFName()
    {
        $this->user->setFname('');
        $this->assertFalse($this->user->isValid());
    }

    public function testNotValidDueToLName()
    {
        $this->user->setLname('');
        $this->assertFalse($this->user->isValid());
    }

    public function testNotValidDueToBirthdayInFuture()
    {
        $this->user->setBirthday(Carbon::now()->addDecade());
        $this->assertFalse($this->user->isValid());
    }

    public function testNotValidDueToTooYoungUser()
    {
        $this->user->setBirthday(Carbon::now()->subDecade());
        $this->assertFalse($this->user->isValid());
    }

    public function testNotValidBadEmail()
    {
        $this->user->setEmail('toto');
        $this->assertFalse($this->user->isValid());
    }
}
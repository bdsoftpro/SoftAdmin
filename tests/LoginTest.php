<?php

namespace SBD\Softadmin\Tests;

class LoginTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->install();
    }

    public function testSuccessfulLoginWithDefaultCredentials()
    {
        $this->visit(route('softadmin.login'));
        $this->type('admin@admin.com', 'email');
        $this->type('password', 'password');
        $this->press('Login Logging in');
        $this->seePageIs(route('softadmin.dashboard'));
    }

    public function testShowAnErrorMessageWhenITryToLoginWithWrongCredentials()
    {
        $this->visit(route('softadmin.login'))
             ->type('john@Doe.com', 'email')
             ->type('pass', 'password')
             ->press('Login Logging in')
             ->seePageIs(route('softadmin.login'))
             ->see('The given credentials don\'t match with an user registered.')
             ->seeInField('email', 'john@Doe.com');
    }
}

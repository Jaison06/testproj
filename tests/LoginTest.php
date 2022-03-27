<?php
include_once('./User.php');
class LoginTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
public function login_test_db()
{   $user = new User();
    $username = "admin";
    $password = "admin123";
    $result = $user->check_login($username, $password);
	//var_dump($auth);
    $this->assertEquals(1,$result);
}

}


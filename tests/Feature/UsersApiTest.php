<?php

namespace Jetimob\BirdSign\Tests\Feature;

use Illuminate\Support\Str;
use Jetimob\BirdSign\Api\Users\DTO\UserDTO;
use Jetimob\BirdSign\Api\Users\UsersApi;
use Jetimob\BirdSign\Entity\User;
use Jetimob\BirdSign\Facades\BirdSign;
use Jetimob\BirdSign\Tests\AbstractTestCase;

class UsersApiTest extends AbstractTestCase
{
    protected UsersApi $api;
    protected static ?int $userId = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = BirdSign::users();
    }

    public function testAuthenticatedUser(): void
    {
        $response = $this->api->authenticatedUser();
        $user = $response->getUser();
        $this->assertInstanceOf(User::class, $user);
        $this->assertNotEmpty($user->getName());
        $this->assertNotEmpty($user->getId());
    }

    public function testUserRegister(): void
    {
        $randomString = Str::random(9);

        $user = (new UserDTO())
            ->setName('Patrícia Vera Ferreira')
            ->setCpf('19336547089')
            ->setEmail("$randomString@consulting.com.br")
            ->setBirthdate('1958-09-17')
            ->setPassword('123456');

        $response = $this->api->register($user);
        $cUser = $response->getUser();

        $this->assertSame($user->getName(), $cUser->getName());
        $this->assertSame($user->getEmail(), $cUser->getEmail());
        $this->assertSame($user->getBirthdate(), $cUser->getBirthdate());
    }
}

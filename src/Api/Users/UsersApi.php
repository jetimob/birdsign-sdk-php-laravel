<?php

namespace Jetimob\BirdSign\Api\Users;

use GuzzleHttp\RequestOptions;
use Jetimob\BirdSign\Api\AbstractApi;
use Jetimob\BirdSign\Api\Users\DTO\UserDTO;

/**
 * @link https://app.swaggerhub.com/apis/birdsign/BirdSign/1.0.3#/Users
 */
class UsersApi extends AbstractApi
{
    /**
     * @return UserResponse
     * @link https://app.swaggerhub.com/apis/birdsign/BirdSign/1.0.3#/Users/get_user
     */
    public function authenticatedUser(): UserResponse
    {
        return $this->mappedGet('user', UserResponse::class);
    }

    /**
     * @param UserDTO $user
     *
     * @return UserResponse
     * @link https://app.swaggerhub.com/apis-docs/birdsign/BirdSign/1.0.3#/Public%20endpoints/post_register
     *
     */
    public function register(UserDTO $user): UserResponse
    {
        return $this->mappedPost('register', UserResponse::class, [
            RequestOptions::FORM_PARAMS => $user->toArray(),
        ]);
    }
}

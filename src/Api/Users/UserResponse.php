<?php

namespace Jetimob\BirdSign\Api\Users;

use Jetimob\BirdSign\Api\BirdSignResponse;
use Jetimob\BirdSign\Entity\User;

class UserResponse extends BirdSignResponse
{
    protected User $data;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->data;
    }
}

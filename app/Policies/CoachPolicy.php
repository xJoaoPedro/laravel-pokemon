<?php

namespace App\Policies;

use App\Models\User;

class CoachPolicy
{
    public function create(?User $user)
    {
        return !is_null($user);
    }

    public function edit(?User $user)
    {
        return !is_null($user);
    }

    public function destroy(?User $user)
    {
        return !is_null($user);
    }
}

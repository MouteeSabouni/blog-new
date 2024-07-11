<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    public function create(User $user, Post $post): bool
    {
        return auth()->user() ? true : false;
    }

    public function manage(User $user, Post $post): bool
    {
        return $user->is($post->user);
    }
}

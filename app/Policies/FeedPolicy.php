<?php

namespace App\Policies;

use App\User;
use App\Feed;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeedPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the feed.
     *
     * @param  \App\User  $user
     * @param  \App\Feed  $feed
     * @return mixed
     */
    public function view(User $user, Feed $feed)
    {
        //
    }

    /**
     * Determine whether the user can create feeds.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the feed.
     *
     * @param  \App\User  $user
     * @param  \App\Feed  $feed
     * @return mixed
     */
    public function update(User $user, Feed $feed)
    {
        return $user->id == $feed->user_id;
    }

    /**
     * Determine whether the user can delete the feed.
     *
     * @param  \App\User  $user
     * @param  \App\Feed  $feed
     * @return mixed
     */
    public function delete(User $user, Feed $feed)
    {
      return $user->id == $feed->user_id;
    }
}

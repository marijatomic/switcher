<?php

namespace App\Policies;

use App\User;
use App\Message;
use Illuminate\Auth\Access\HandlesAuthorization;
use PhpParser\Comment;

class MessagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the message.
     *
     * @param  \App\User  $user
     * @param  \App\Message  $message
     * @return mixed
     */
    public function view(User $user, Message $message)
    {
        //
    }

    /**
     * Determine whether the user can create messages.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the message.
     *
     * @param  \App\User  $user
     * @param  \App\Message  $message
     * @return mixed
     */
    public function update(User $user, Message $message)
    {
        //
    }

    /**
     * Determine whether the user can delete the message.
     *
     * @param  \App\User  $user
     * @param  \App\Message  $message
     * @return mixed
     */
    public function delete(User $user, Message $message)
    {

        return $user->id == $message->sender_id;

    }

}

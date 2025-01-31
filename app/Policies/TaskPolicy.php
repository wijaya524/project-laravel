<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
    
    public function delete(User $user, Task $task)
    {
        // Izinkan hanya jika user_id pada task sesuai dengan id pengguna yang sedang login
        return $user->id === $task->user_id;
    }
}

<?php

namespace App\Policies;

use App\Models\Auth\Admin;

class RolePolicy
{
    public static $resource = 'shield::role';

    public function viewAny(Admin $user)
    {
        return $user->can('view_any_' . self::$resource);
    }

    public function view($user)
    {
        return $user->can('view_' . self::$resource);
    }

    public function create($user)
    {
        return $user->can('create_' . self::$resource);
    }

    public function update($user)
    {
        return $user->can('update_' . self::$resource);
    }

    public function delete($user)
    {
        return $user->can('delete_' . self::$resource);
    }

    public function deleteAny($user)
    {
        return $user->can('delete_any_' . self::$resource);
    }

    public function forceDelete($user)
    {
        return $user->can('force_delete_' . self::$resource);
    }

    public function forceDeleteAny($user)
    {
        return $user->can('force_delete_any_' . self::$resource);
    }

    public function restore($user)
    {
        return $user->can('restore_' . self::$resource);
    }

    public function restoreAny($user)
    {
        return $user->can('restore_any_' . self::$resource);
    }

    public function replicate($user)
    {
        return $user->can('replicate_' . self::$resource);
    }

    public function reorder($user)
    {
        return $user->can('reorder_' . self::$resource);
    }
}
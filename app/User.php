<?php

namespace App;

use App\Permissions\HasPermissionsTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App
 *
 *  $user = $request->user(); //getting the current logged in user
    dd($user->hasRole('admin','editor')); // and so on
    dd($user->can('permission-slug'));
    $user = $request->user();
    dd($user->hasRole('developer')); //will return true, if user has role
    dd($user->givePermissionsTo('create-tasks'));// will return permission, if not null
    dd($user->can('create-tasks')); // will return true, if user has permission

    Blade
    @role('developer')
        Hello developer
    @endrole
 */
class User extends Authenticatable
{
    use Notifiable, HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
//        'email_verified_at' => 'datetime',
    ];
}

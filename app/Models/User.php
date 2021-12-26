<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function booted(){

         /** Make avata */

        static::creating(function($model)
        {
            $path = 'users/avatars/';
            $fontPath = public_path('fonts/Oliciy.ttf');
            $char = strtoupper($model->name[0]);
            $newAvatarName = rand(12,34353).time().'_avatar.png';
            $dest = $path.$newAvatarName;

            $createAvatar = makeAvatar($fontPath,$dest,$char);
            $picture = $createAvatar == true ? $newAvatarName : '';

            $model->avatar = $picture;
        });
    }
}




<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

     // Superadmin relationship
     public function superadmin()
     {
         return $this->hasOne(Superadmin::class);
     }

     // Admin relationship
     public function admin()
     {
         return $this->hasOne(Admin::class);
     }

     // Editor relationship
     public function editor()
     {
         return $this->hasOne(Editor::class);
     }

     // User role relationship
     public function userRole()
     {
         return $this->hasOne(UserRole::class);
     }

     // One-to-one inverse relationship with Superadmin
     public function superadminUser()
     {
         return $this->belongsTo(Superadmin::class, 'user_id');
     }

     // One-to-one inverse relationship with Admin
     public function adminUser()
     {
         return $this->belongsTo(Admin::class, 'user_id');
     }

     // One-to-one inverse relationship with Editor
     public function editorUser()
     {
         return $this->belongsTo(Editor::class, 'user_id');
     }

     // One-to-one inverse relationship with User role
     public function userRoleUser()
     {
         return $this->belongsTo(UserRole::class, 'user_id');
     }

     // One-to-many relationship with Editors
     public function editors()
     {
         return $this->hasMany(Editor::class);
     }

     // One-to-many relationship with Users
     public function users()
     {
         return $this->hasMany(User::class);
     }
}

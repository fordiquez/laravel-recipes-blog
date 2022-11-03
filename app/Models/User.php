<?php

namespace App\Models;

use App\Notifications\SendVerifyWithQueueNotification;
use App\Traits\Filterable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, Filterable;

    public const ROLE_USER = 0;
    public const ROLE_ADMIN = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role',
        'photo'
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
    ];

    public function sendEmailVerificationNotification()
    {
        $this->notify(new SendVerifyWithQueueNotification());
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class, 'recipe_user', 'user_id', 'recipe_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }

    public static function getRoles(): array
    {
        return [
            self::ROLE_USER => 'User',
            self::ROLE_ADMIN => 'Admin'
        ];
    }

    public function getRole(): string
    {
        return $this->role == self::ROLE_USER ? 'User' : 'Admin';
    }

    public function getFullName(): string
    {
        return "$this->first_name $this->last_name";
    }

    public function getPhoto(): string
    {
        return $this->photo && $this->id != 1 ? "storage/$this->photo" : ($this->id == 1 ? $this->photo : 'assets/admin/img/image-not-found.svg');
    }

    public static function setPhoto(array $data): array
    {
        if (isset($data['photo'])) $data['photo'] = Storage::disk('public')->put('/users', $data['photo']);
        return $data;
    }

    public static function setPasswordHash(array $data): array
    {
        $data['password'] = !isset($data['password']) ? User::where('email', $data['email'])->first()->value('password') : Hash::make($data['password']);
        return $data;
    }
}

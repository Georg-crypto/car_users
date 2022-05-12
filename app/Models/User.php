<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @OA\Schema(
 *     title="User",
 *     description="User model",
 *     @OA\Xml(
 *         name="User"
 *     )
 * )
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * @OA\Property(
     *      title="UserName",
     *      description="ФИО пользователя может быть записано в БД",
     *      example="Иванов Иван Иванович"
     * )
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
    ];

    /**
     * @OA\Property(
     *     title="Relationship",
     *     description="Связь один к одному, одному пользователю может одномоментно принадлежать только одна машина",
     *     example="Иванов Иван Иванович - Шкода фабия"
     * )
     */
    public function car()
    {
        return $this->hasOne(Car::class);
    }
}

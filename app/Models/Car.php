<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="Car",
 *     description="Car model",
 *     @OA\Xml(
 *         name="Car"
 *     )
 * )
 */

class Car extends Model
{
    use HasFactory;

    /**
     * @OA\Property(
     *      title="CarData",
     *      description="Название автомобиля и,всязанное с ним, id пользователя могут быть записано в БД",
     *      example="Шкода фабия - 5"
     * )
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'car_name',
        'user_id',
    ];
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="OpenApi Documentation",
 *      description="Документация для использования автомобилей пользователями",
 *      @OA\Contact(
 *          email=L5_SWAGGER_CONST_EMAIL
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Основной API"
 * )
 *
 * @OA\Tag(
 *     name="User",
 *     description="Работа с пользователями"
 * )
 * 
 * @OA\Tag(
 *     name="Car",
 *     description="Работа с автомобилями"
 * )
 */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

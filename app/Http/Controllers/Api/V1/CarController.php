<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     *  @OA\Get(
     *      path="/cars",
     *      summary="Получить список всех автомобилей",
     *      description="Получаем список всех автомобилей",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *  )
     */
    public function index()
    {
        return CarResource::collection(Car::all());
    }

    /**
     *  @OA\Post(
     *      path="/cars",
     *      description="Пишем новый автомобиль в базу",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *  )
     */
    public function store(Request $request)
    {
        Car::create($request->all());
    }

    /**
     *  @OA\Get(
     *      path="/cars/$id",
     *      description="Просматривам выбранный автомобиль",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *  )
     */
    public function show($id)
    {
        return new CarResource(Car::findOrFail($id));
    }

    /**
     *  @OA\Put(
     *      path="/cars/$car",
     *      description="Редактируем выбранный автомобиль",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *  )
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
    }

    /**
     *  @OA\Delete(
     *      path="/cars/$car",
     *      description="Удаляем выбранного пользователя",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *  )
     */
    public function destroy(Car $car)
    {
        $car->delete();
    }
}

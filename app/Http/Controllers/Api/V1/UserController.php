<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     *  @OA\Get(
     *      path="/users",
     *      summary="Получить список всех пользователей",
     *      description="Получаем список всех пользователей",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *  )
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }

    /**
     *  @OA\Post(
     *      path="/users",
     *      description="Пишем нового пользователя в базу",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *  )
     */
    public function store(Request $request)
    {
        User::create($request->all());
    }

    /**
     *  @OA\Get(
     *      path="/users/$id",
     *      description="Просматривам выбранного пользователя",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),    
     *  )
     */
    public function show($id)
    {
        return new UserResource(User::with('car')->findOrFail($id));
    }

    /**
     *  @OA\Put(
     *      path="/users/$user",
     *      description="Редактируем выбранного пользователя",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *  )
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
    }

    /**
     *  @OA\Delete(
     *      path="/users/$user",
     *      description="Удаляем выбранного пользователя",
     * 
     *  @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *       ),
     *  )
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}

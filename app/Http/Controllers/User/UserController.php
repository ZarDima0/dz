<?php

namespace App\Http\Controllers\User;

use App\Http\Abstract\BaseAbstract;
use App\Http\Interface\User\UserInterface;
use App\Http\Requests\UserDestroyRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use http\Client\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends BaseAbstract implements UserInterface
{
    /**
     * @return UserResource
     */
    public function index():UserResource
    {
        return new UserResource($this->getList('users'));
    }

    /**
     * @param UserRequest $request
     * @return UserResource
     */
    public function show(UserRequest $request):UserResource
    {
        return new UserResource($this->showItem('users','id',$request->getId()));
    }

    /**
     * @param UserDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(UserDestroyRequest $request):JsonResponse
    {
        $this->delete('users','id', $request->getId());
        return response()->json();
    }
}

<?php
namespace App\Http\Interface\User;

use App\Http\Requests\UserDestroyRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

interface UserInterface
{
    public function index();

    public function show(UserRequest $request);

    public function destroy(UserDestroyRequest $request);
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\EditRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('habilities')->orderBy('id', 'DESC')->get();
        return response()->json($users);
    }

    public function store(StoreRequest $request)
    {
        $user = new User();
        $user -> name   = $request -> name;
        $user -> age    = $request -> age;
        $user -> hability_id = $request -> hability_id;
        $user -> save();

        return response()->json([
            'title' => 'Usuario guardado',
            'status' => 200,
            'timer' => 2000
        ]);
    }

    public function edit(EditRequest $request, $id)
    {
        $user = User::find($id);
        $user -> name   = $request -> name;
        $user -> age    = $request -> age;
        $user -> hability_id = $request -> hability_id;
        $user -> update();

        return response()->json([
            'title' => 'Usuario editado',
            'status' => 200,
            'timer' => 2000
        ]);
    }

    public function delete(Request $request, $id)
    {
        $user = User::find($id);
        $user -> delete();

        return response()->json([
            'title' => 'Usuario eliminado',
            'status' => 200,
            'timer' => 2000
        ]);
    }
}

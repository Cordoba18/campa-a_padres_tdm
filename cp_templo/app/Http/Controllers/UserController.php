<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function index(Request $request){

        $shops = Shop::all();
        return view('welcome', compact('shops'));
    }


    public function save(Request $request){


        $new_user = new User();
        $new_user->name = $request->name;

        $new_user->lastname = $request->lastname;

        $new_user->phone = $request->phone;

        $new_user->nit = $request->nit;

        $new_user->neighborhood = $request->neighborhood;

        $new_user->id_shop = $request->id_shop;

        $new_user->save();

        return redirect()->route('home')->with("message", "Usuario registrado correctamente!");

    }


    public function show(Request $request){


       $users = User::join("shops","users.id_shop","shops.id")->get();


       return view('show', compact('users'));

    }


    public function export(Request $request){


        $users = User::join("shops","users.id_shop","shops.id")
        ->select("users.id as ID", "users.name as NOMBRES", "users.lastname as APELLIDOS", "users.phone as TELEFONO","users.nit as CEDULA","users.neighborhood as BARRIO", "shops.shop as TIENDA")
        ->get();
        return response()->json(['data' => $users], 200);


     }
}

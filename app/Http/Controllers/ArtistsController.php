<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ArtistsController extends Controller
{
    public function show(User $user)
    {
        return view('artist-profile',[
            'user'=>$user
        ]);
    }
}

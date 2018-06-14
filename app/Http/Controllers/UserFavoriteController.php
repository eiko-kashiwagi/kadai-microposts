<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
     public function store(Request $request, $favorite_id)
    {
        \Auth::user()->favorite($favorite_id);
        return redirect()->back();
    }

    public function destroy($favorite_id)
    {
        \Auth::user()->unfavorite($favorite_id);
        return redirect()->back();
    }
}

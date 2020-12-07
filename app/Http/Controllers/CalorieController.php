<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calories;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CalorieController extends Controller
{
    public function calories(Request $request)
    {
        return Calories::where('user_id', Auth::id())
        ->with('user')
        ->orderBy('day', 'DESC')
        ->get();
    }

    public function BMH(Request $request)
    {
        // female
        // 655,1 + (9,56 x kilo) + (1,85 x boy) – (4,68 x yaş)
        // male
        // 66,5 + (13,75 x kilo) + (5,03 x boy) – (6,75 x yaş)

        $usr = Auth::user();

        if ($usr->gender === 'male'){
            return 66.5 + (13.75 * $usr->weight) + (5.03 * $usr->height) - (6.75 * $usr->age);
        }else{
            return 655.1 + (9.56 * $usr->weight) + (1.85 * $usr->height) - (4.68 * $usr->age);;
        }
    }
}

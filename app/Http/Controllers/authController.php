<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    // public function login(Request $rq)
    // {
    //     $name = $rq->name;
    //     switch ($name) {
    //         case "0":
    //             echo "thu 2";
    //             break;
    //         case "1":
    //             echo "thu 2";
    //             break;
    //         case "2":
    //             echo "thu 2";
    //             break;
    //         case "3":
    //             echo "thu 2";
    //             break;
    //         case "4":
    //             echo "thu 2";
    //             break;
    //         case "5":
    //             echo "thu 2";
    //             break;
    //         case "6":
    //             echo "thu 2";
    //             break;
    //         case "7":
    //             echo "thu 2";
    //             break;
    //         default:
    //             echo "k co thu nao het";
    //     }
    //     return view("home", compact("name"));
    // }
    public function dien(Request $rq)
    {
        $dien = $rq["dien"];
        // dd($dien);
        if ($dien <= 100) {
            $tien = 450 * $dien;
            $tiens = $tien * 1.1;
            return view("home", compact("tien", "tiens"));
        } elseif (100 < $dien && $dien < 201) {
            $tien = 100 * 450 + ($dien - 100) * 600;
            $tiens = $tien * 0.9;
            return view("home", ["tiens" => $tiens, "tient" => $tien]);
        } elseif (200 < $dien && $dien < 301) {
            $tien = 100 * 450 + 100 * 600 + ($dien - 200) * 750;
            $tiens = $tien - $tien * 0.1;
            return view("home", ["tiens" => $tiens, "tient" => $tien]);
        } elseif (300 < $dien && $dien < 501) {
            $tien = 100 * 450 + 100 * 600 + 100 * 750 + ($dien - 300) * 900;
            $tiens = $tien - $tien * 0.1;
            return view("home", ["tiens" => $tiens, "tient" => $tien]);
        } elseif (500 < $dien && $dien < 1001) {
            $tien = 100 * 450 + 100 * 600 + 100 * 750 + 200 * 900 + ($dien - 500) * 1000;
            $tiens = $tien - $tien * 0.1;
            return view("home", ["tiens" => $tiens, "tient" => $tien]);
        } elseif (1000 < $dien) {
            $tien = 100 * 450 + 100 * 600 + 100 * 750 + 200 * 900 + 500 * 1000 + ($dien - 1000) * 1200;
            $tiens = $tien - $tien * 0.1;
            return view("home", ["tiens" => $tiens, "tient" => $tien]);
        }
    }
}

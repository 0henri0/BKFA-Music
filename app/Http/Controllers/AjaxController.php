<?php

namespace App\Http\Controllers;

use App\Singer;

class AjaxController extends Controller
{
    //
    public function getCaSi($idtheloai)
    {
        $casi = Singer::where('idtheloai', $idtheloai)->get();
        foreach ($casi as $cs) {
            echo "<option value='" . $cs->id . "'>" . $cs->ten . "</option>";
        }
    }
}

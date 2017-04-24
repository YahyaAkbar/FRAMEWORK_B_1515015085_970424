<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen;

class RelationshipRebornController extends Controller
{
    public function ujiHas()
    {
        return Dosen::has('dosen_matakuliah')->get();
        dd($data);
    }
    public function ujiDoesntHave()
    {
        return Dosen::doesntHave('dosen_matakuliah')->get();
        dd($data);
    }
}
<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    // Get all record
    public function GetAllRecord()
    {
        $query = DB::table('public.roles')
            ->select('*')
            ->get();

        return $query;
    }
}

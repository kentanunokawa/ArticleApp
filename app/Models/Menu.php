<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class menu extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    // query builder の書き方
    // public function getMenuData(){
    //    $menuData =  DB::table('menus')->get();
    //    return $menuData;
    // }

    

}

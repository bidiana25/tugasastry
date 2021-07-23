<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SiaModel extends Model
{

    public function allData()
    {
        return DB::table('sia')->get();
    }

    public function addData($item)
    {
        DB::table('sia')->insert($item);
    }

    public function deleteData($id)
    {
        DB::table('sia')
            ->where('id', $id)
            ->delete();
    }
    public function detailData($id)
    {
        return DB::table('sia')->where('id', $id)->first();
    }
    public function editData($id, $item)
    {
        DB::table('sia')->where('id', $id)->update($item);
    }
}

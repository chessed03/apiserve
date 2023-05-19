<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'prospects';

    const TABLE      = "prospects";

    const REMOVED    = 0;

    const ALIVE      = 1;

    public static function createItem( $data )
    {

        $item              = new self();
        $item->key_id      = $data->key_id;
        $item->code_school = $data->code_school;
        $item->code_type   = $data->code_type;
        $item->name        = $data->name;
        $item->email       = $data->email;
        $item->phone       = $data->phone;
        $item->message     = $data->message;
        $item->way_access  = $data->way_access;
        $item->date        = $data->date;

        if ($item->save()) {

            return true;

        }

        return false;

    }

}

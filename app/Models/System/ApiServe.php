<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiServe extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'surfaces';

    const TABLE      = "surfaces";

    const REMOVED    = 0;

    const ALIVE      = 1;

    public static function createItem( $data )
    {

        $item              = new self();
        $item->key_id      = $data->key_id;
        $item->uuid        = $data->uuid;
        $item->code_school = $data->code_school;
        $item->code_type   = $data->code_type;
        $item->name        = $data->name;
        $item->description = $data->description;
        $item->price       = $data->price;
        $item->discount    = $data->discount;
        $item->date        = $data->date;

        if ($item->save()) {

            return true;

        }

        return false;

    }

    public static function updateItem( $data )
    {

        $item = self::where('uuid', $data->uuid)->first();

        if ( $item ) {

            $item->code_school = $data->code_school;
            $item->code_type   = $data->code_type;
            $item->name        = $data->name;
            $item->description = $data->description;
            $item->price       = $data->price;
            $item->discount    = $data->discount;
            $item->date        = $data->date;

            if ($item->update()) {

                return true;

            }

            return false;

        } else {

            self::createItem( $data );

        }

    }

}

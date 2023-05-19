<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Models\System\ApiServe;
use App\Models\System\Prospect;
use Illuminate\Http\Request;

class ApiServeController extends Controller
{

    public static function responseApi( $data, $status )
    {

        $result = (object)[
            'status'   => $status,
            'response' => [
                'results' => $data
            ]
        ];

        return $result;

    }

    public static function store( Request $request )
    {
        return $request->all();
    }

    public static function dataCreateCashRegister( Request $request )
    {

        $contents   = json_decode($request->data);

        $data = (object)[
            'key_id'      => $contents->key_id,
            'uuid'        => $contents->uuid,
            'code_school' => $contents->code_school,
            'code_type'   => $contents->code_type,
            'name'        => $contents->name,
            'description' => $contents->description,
            'price'       => $contents->price,
            'discount'    => $contents->discount,
            'date'        => $contents->date
        ];

        $process = ApiServe::createItem( $data );

        if ( $process ) {

            return response()->json(static::responseApi( 'success', 200 ));

        }

        return response()->json(static::responseApi( 'error', 200 ));

    }

    public static function dataUpdateCashRegister( Request $request )
    {

        $contents   = json_decode($request->data);

        $data = (object)[
            'key_id'      => $contents->key_id,
            'uuid'        => $contents->uuid,
            'code_school' => $contents->code_school,
            'code_type'   => $contents->code_type,
            'name'        => $contents->name,
            'description' => $contents->description,
            'price'       => $contents->price,
            'discount'    => $contents->discount,
            'date'        => $contents->date
        ];

        $process = ApiServe::updateItem( $data );

        if ( $process ) {

            return response()->json(static::responseApi( 'success', 200 ));

        }

        return response()->json(static::responseApi( 'error', 200 ));

    }

    public static function dataCreateProspect( Request $request )
    {

        $contents   = json_decode($request->data);

        $data = (object)[
            'key_id'      => $contents->key_id,
            'code_school' => $contents->code_school,
            'code_type'   => $contents->code_type,
            'name'        => $contents->name,
            'email'       => $contents->email,
            'phone'       => $contents->phone,
            'message'     => $contents->message,
            'way_access'  => $contents->way_access,
            'date'        => $contents->date
        ];

        $process = Prospect::createItem( $data );

        if ( $process ) {

            return response()->json(static::responseApi( 'success', 200 ));

        }

        return response()->json(static::responseApi( 'error', 200 ));

    }

}

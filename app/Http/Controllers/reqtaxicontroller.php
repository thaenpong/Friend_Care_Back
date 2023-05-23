<?php

namespace App\Http\Controllers;

use App\Models\reqtaxi;
use Illuminate\Http\Request;
use \Exception;

class reqtaxicontroller extends Controller
{
    public function insertreq(Request $request)
    {
        try {
            $field = $request->validate([
                'p_lat' => 'required',
                'p_long' => 'required',
                'd_lat' => 'required',
                'd_long' => 'required',
                'distance' => 'required',
                'duration' => 'required',
                'payment' => 'required',
                'selectedOption' => 'required',
                'price' => 'required',
                'detail' => 'required',
                'Userid' => 'required',
                'username' => 'required',
                'tell' => 'required',
                'formattedDateTime' => 'required',
            ]);

            $user = reqtaxi::create([
                'p_lat' => $field['p_lat'],
                'p_long' => $field['p_long'],
                'd_lat' => $field['d_lat'],
                'd_long' => $field['d_long'],
                'distance' => $field['distance'],
                'duration' => $field['duration'],
                'payment' => $field['payment'],
                'selectedOption' => $field['selectedOption'],
                'price' => $field['price'],
                'detail' => $field['detail'],
                'Userid' => $field['Userid'],
                'username' => $field['username'],
                'tell' => $field['tell'],
                'status' => 1,
                'datetime' => $field['formattedDateTime']
            ]);
            $response = [
                'message' => 'success',
            ];
            return response($response, 201);
            $this->buildXMLHeader();
        } catch (Exception $e) {
            //error_log($e);
            $response = [
                'message' => 'create faild',
            ];
            return response($response, 400);
        }
    }
    public function list($id)
    {
        $list = reqtaxi::where(['Userid' => $id])->get();
        return response($list, 201);
    }

    public function listdetail($id)
    {
        $list = reqtaxi::where(['id' => $id])->get();
        error_log($list[0]['id']);
        return response($list[0], 201);
    }

    public function cancle($id)
    {
        try {
            $list = reqtaxi::where(['id' => $id])->update(['status' => 4]);
            $response = [
                'message' => 'success',
            ];
            return response($response, 201);
        } catch (Exception $e) {
            $response = [
                'message' => 'faild',
            ];
            return response($response, 40);
        }
    }
}

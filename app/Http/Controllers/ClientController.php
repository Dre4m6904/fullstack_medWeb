<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use App\Models\DoctorModel;
use Illuminate\Http\Request;

class ClientController extends Controller {
    public function addclient() {
        $reviews = DoctorModel::all();
        return view('addclient', ['reviews' => $reviews]);
    }

    public function clientlist() {
        $reviews = ClientModel::all();
        return view('clientlist', ['reviews' => $reviews]);
    }

    public function doctorlist() {
        $reviews = DoctorModel::all();
        return view('doctorlist', ['reviews' => $reviews]);
    }

    public function addclient_check(Request $request) {
        $rules = [
            'firstName'   => 'required|string|max:255',
            'lastName'    => 'required|string|max:255',
            'email'       => 'required|email|min:4|max:255',
            'address'     => 'nullable|string|max:255',
            'doctor'      => 'required|string',
            'time'        => 'required'
        ];
        $validate = $request->validate($rules);
        $client = new ClientModel();
        $client->firstName = $request->input('firstName');
        $client->lastName = $request->input('lastName');
        $client->email = $request->input('email');
        $client->address = $request->input('address');
        $client->doctor = $request->input('doctor');
        $client->time = $request->input('time');

        $client->save();

        return redirect()->route('addclient');
    }

    public function deleteClient($email) {
        $client = ClientModel::where('email', $email)->first();

        if ($client) {
            $client->delete();
            return response()->json(['message' => 'Client deleted successfully']);
        } else {
            return response()->json(['message' => 'Client not found'], 404);
        }
    }
}

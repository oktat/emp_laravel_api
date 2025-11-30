<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;

class PatientController extends Controller
{
    public function index() {
        $patients = Patient::select("id", "name", "birthDate", "socialNumber", "phone")->get();

        return response()->json([
            'success' => true,
            'data' => $patients
        ]);
    }

    public function store(Request $request) {
        $patient = Patient::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $patient
        ]);
    }

    public function show(string $id) {
        $patient = Patient::find($id);
        return response()->json([
            'success' => true,
            'data' => $patient
        ]);
    }

    public function update(Request $request, string $id) {
        $patient = Patient::find($id);
        $patient->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $patient
        ]);
    }

    public function destroy(string $id) {
        $patient = Patient::find($id);
        $patient->delete();
        return response()->json([
            'success' => true,
            'data' => $patient
        ]);
    }
}

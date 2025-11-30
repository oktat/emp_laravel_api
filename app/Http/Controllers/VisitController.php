<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visit;

class VisitController extends Controller
{
    public function index() {
        $visits = Visit::select("id", "date", "diagnosis", "doctor", "patientId")
            ->with('patient')
            ->get();
        return response()->json([
            'success' => true,
            'data' => $visits
        ]);
    }

    public function store(Request $request) {
        $visit = Visit::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $visit
        ]);
    }

    public function show(string $id) {
        $visit = Visit::find($id);
        return response()->json($visit);
    }

    public function update(Request $request, string $id) {
        $visit = Visit::find($id);
        $visit->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $visit
        ]);
    }

    public function destroy(string $id) {
        $visit = Visit::find($id);
        $visit->delete();
        return response()->json([
            'success' => true,
            'data' => $visit
        ]);
    }

}

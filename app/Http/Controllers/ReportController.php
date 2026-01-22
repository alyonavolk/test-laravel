<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        $reports = Report::all();
        return view('reports.index', compact('reports'));
    }

    public function destroy(Report $report) {
        $report -> delete();
        return redirect() -> back();
    }
}

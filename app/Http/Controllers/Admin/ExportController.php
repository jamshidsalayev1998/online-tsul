<?php

namespace Test\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Excel;
use Test\Http\Controllers\Controller;

class ExportController extends Controller
{
    public function index()
    {
       return view('admin.pages.export.index');
    }
    public function exportmasters()
    {
        return Excel::download(new MastersExport(), 'masters.xlsx');
    }
    public function exportoverseas()
    {
        return Excel::download(new OverseasExport(), 'foreigners.xlsx');
    }
}

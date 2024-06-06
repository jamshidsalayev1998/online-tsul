<?php
/**
 * Created by PhpStorm.
 * User: defender
 * Date: 04.08.2018
 * Time: 16:14
 */

namespace Test\Http\Controllers\Admin;



use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Test\Model\Masters;

class MastersExport implements FromView
{
    public function view(): View
    {
        $masters = Masters::all();
        return view('admin.pages.export.exportmasters', [
            'data' => $masters
        ]);
    }
}
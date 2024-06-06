<?php
/**
 * Created by PhpStorm.
 * User: defender
 * Date: 04.08.2018
 * Time: 17:09
 */

namespace Test\Http\Controllers\Admin;



use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Test\Model\Overseas;

class OverseasExport implements FromView
{
    public function view(): View
    {
        $masters = Overseas::all();
        return view('admin.pages.export.exportoverseas', [
            'data' => $masters
        ]);
    }
}
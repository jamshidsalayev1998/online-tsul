<?php

namespace Test\Http\Controllers\Admin;

use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Test\Http\Controllers\Controller;
use Test\Model\Language;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Language::orderBy('id', 'desc')->paginate(10);
       return view('admin.pages.languages.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $data = new Language();

        $data->fill($input);

        if ($data->save())
        {
            return redirect()->route('languages.index')->with('message', 'Ma\'lumot muvaffaqiyatli qo\'shildi!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Test\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Test\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        $data = Language::find($language->id);
        return view('admin.pages.languages.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Test\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $input = $request->all();

        $data = Language::find($id);

        $data->name = $input['name'];
        $data->prefix = $input['prefix'];
        $data->status = $input['status'];

        if ($data->save())
        {
            return redirect()->route('languages.index')->with('message', 'Ma\'lumot muvaffaqiyatli o\'zgartirildi!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Test\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $data = Language::find($id);

        if ($data->delete())
        {
            return redirect()->route('languages.index')->with('message', 'Ma\'lumot yo\'q qilindi');
        }
    }
}

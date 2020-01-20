<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;


class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function _construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }



    public function index()
    {
        $subjects = Subject::all();
        return view('admin.index', ['subjects' => $subjects ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create', Subject::class);
        return view('admin.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$this->authorize('create', Subject::class);

        $subjects = new Subject();
        $subjects->subjectID = $request->input('Cid');
        $subjects->name = $request->input('name');
        $subjects->lecC = $request->input('Clec');
        $subjects->labC = $request->input('Clab');
        $subjects->save();

        return redirect()->action('SubjectsController@show',['id'=>$subjects->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subjects = Subject::findOrFail($id);
        return view('admin.show',['subjects'=> $subjects]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjects = Subject::findOrFail($id);

       //$this->authorize('update', $subjects);

        return view('admin.edit',['subjects'=>$subjects]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subjects = Subject::findOrFail($id);

        //$this->authorize('update', $subjects);

        $subjects->subjectID = $request->input('subjectID');
        $subjects->name = $request->input('name');
        $subjects->lecC = $request->input('lecC');
        $subjects->labC = $request->input('labC');
        $subjects->save();

        return redirect()->action('SubjectsController@show',['id'=>$subjects->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $subjects = Subject::findOrFail($id);
        //$this->authorize('destroy', Subject::class);
        $subjects->delete();

        return redirect()->action('SubjectsController@index',['id'=>$subjects->id])->with('success', 'Drop Successfully');

    }
}

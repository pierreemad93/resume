<?php

namespace App\Http\Controllers\Admin\Resume;

use App\Models\ResmueTopic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ResumeTopicRequest;

class ResmueTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $topics = ResmueTopic::all();
        return view('admin.resume.topic.all' , compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.resume.topic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResumeTopicRequest $request)
    {
        //
        ResmueTopic::create([
            'name' => $request->name
        ]);
        return redirect()->back()->withSuccess('topic stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResmueTopic  $resmueTopic
     * @return \Illuminate\Http\Response
     */
    public function show(ResmueTopic $resmueTopic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResmueTopic  $resmueTopic
     * @return \Illuminate\Http\Response
     */
    public function edit(ResmueTopic $resmueTopic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResmueTopic  $resmueTopic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResmueTopic $resmueTopic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResmueTopic  $resmueTopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResmueTopic $resmueTopic)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Press;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PressController extends Controller
{
    private $press;

    public function __construct(Press $press) {
        $this->press = $press;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $press = $this->press->all();
        
        return view('press.index')->with(compact('press'));
    }

    public function homeIndex()
    {
        $press = $this->press->where('active', true)->paginate(9);
        
        return view('resource-blog')->with(compact('press'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('press.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $press = new Press();
        $press->thumbnail = '';

        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('thumbnail')){
            $thumbnailFileName = $currentMillis . '.' . $request->file('thumbnail')->extension();
            $press->thumbnail = $request->file('thumbnail')->storeAs('pressThumbnail', $thumbnailFileName, 'public');
            $press->thumbnail = asset('storage/' . $press->thumbnail);
        }

        $press->title = $request->title;
        $press->subtitle = $request->subtitle;
        $press->content = $request->content;

        if (!$request->filled('seo_title')) {
            $press->seo_title = $request->title;
        } else {
            $press->seo_title = $request->seo_title;
        }

        if (!$request->filled('seo_description')) {
            $press->seo_description = $request->subtitle;
        } else {
            $press->seo_description = $request->seo_description;
        }

        if (!$request->filled('seo_keyword')) {
            $press->seo_keyword = '';
        } else {
            $press->seo_keyword = $request->seo_keyword;
        }

        $press->slug = '';

        $press->save();

        $press->slug = Str::slug($request->title, '-') . '-' . $press->id;

        $press->save();

        return redirect(route('press.index'));
    }

    public function imageUpload(Request $request)
    {
        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('upload')){
            $uploadFileName = $currentMillis . '.' . $request->file('upload')->extension();
            $location = 'storage/' . $request->file('upload')->storeAs('pressImage', $uploadFileName, 'public');
            $url = asset($location);
            
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function show(Press $press)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function edit(Press $press)
    {
        return view('press.edit')->with(compact('press'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Press $press)
    {
        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('thumbnail')){
            $thumbnailFileName = $currentMillis . '.' . $request->file('thumbnail')->extension();
            $press->thumbnail = $request->file('thumbnail')->storeAs('pressThumbnail', $thumbnailFileName, 'public');
            $press->thumbnail = asset('storage/' . $press->thumbnail);
        }

        $press->title = $request->title;
        $press->subtitle = $request->subtitle;
        $press->content = $request->content;

        if (!$request->filled('seo_title')) {
            $press->seo_title = $request->title;
        } else {
            $press->seo_title = $request->seo_title;
        }

        if (!$request->filled('seo_description')) {
            $press->seo_description = $request->subtitle;
        } else {
            $press->seo_description = $request->seo_description;
        }

        if (!$request->filled('seo_keyword')) {
            $press->seo_keyword = '';
        } else {
            $press->seo_keyword = $request->seo_keyword;
        }

        $press->slug = Str::slug($request->title, '-') . '-' . $press->id;

        $press->save();

        return redirect(route('press.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function destroy(Press $press)
    {
        $press->delete();

        return redirect(route('press.index'));
    }

    public function toggle(Press $press)
    {
        $press->active = !$press->active;
        $press->save();

        return redirect(route('press.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\InvestorNews;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InvestorNewsController extends Controller
{
    private $news;

    public function __construct(InvestorNews $news) {
        $this->news = $news;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = $this->news->all();
        
        return view('investor-news.index')->with(compact('news'));
    }

    public function homeIndex()
    {
        $news = $this->news->where('active', true)->paginate(9);
        
        return view('resource-blog')->with(compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('investor-news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new InvestorNews();
        $news->thumbnail = '';

        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('thumbnail')){
            $thumbnailFileName = $currentMillis . '.' . $request->file('thumbnail')->extension();
            $news->thumbnail = $request->file('thumbnail')->storeAs('newsThumbnail', $thumbnailFileName, 'public');
            $news->thumbnail = asset('storage/' . $news->thumbnail);
        }

        $news->title = $request->title;
        $news->subtitle = $request->subtitle;
        $news->content = $request->content;

        if (!$request->filled('seo_title')) {
            $news->seo_title = $request->title;
        } else {
            $news->seo_title = $request->seo_title;
        }

        if (!$request->filled('seo_description')) {
            $news->seo_description = $request->subtitle;
        } else {
            $news->seo_description = $request->seo_description;
        }

        if (!$request->filled('seo_keyword')) {
            $news->seo_keyword = '';
        } else {
            $news->seo_keyword = $request->seo_keyword;
        }

        $news->slug = '';

        $news->save();

        $news->slug = Str::slug($request->title, '-') . '-' . $news->id;

        $news->save();

        return redirect(route('investor-news.index'));
    }

    public function imageUpload(Request $request)
    {
        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('upload')){
            $uploadFileName = $currentMillis . '.' . $request->file('upload')->extension();
            $location = 'storage/' . $request->file('upload')->storeAs('newsImage', $uploadFileName, 'public');
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
     * @param  \App\Models\InvestorNews  $news
     * @return \Illuminate\Http\Response
     */
    public function show(InvestorNews $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestorNews  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestorNews $investorNews)
    {
        return view('investor-news.edit')->with(compact('investorNews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestorNews  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvestorNews $investorNews)
    {
        $currentMillis = round(microtime(true) * 1000);
        if($request->hasFile('thumbnail')){
            $thumbnailFileName = $currentMillis . '.' . $request->file('thumbnail')->extension();
            $investorNews->thumbnail = $request->file('thumbnail')->storeAs('newsThumbnail', $thumbnailFileName, 'public');
            $investorNews->thumbnail = asset('storage/' . $investorNews->thumbnail);
        }

        $investorNews->title = $request->title;
        $investorNews->subtitle = $request->subtitle;
        $investorNews->content = $request->content;

        if (!$request->filled('seo_title')) {
            $investorNews->seo_title = $request->title;
        } else {
            $investorNews->seo_title = $request->seo_title;
        }

        if (!$request->filled('seo_description')) {
            $investorNews->seo_description = $request->subtitle;
        } else {
            $investorNews->seo_description = $request->seo_description;
        }

        if (!$request->filled('seo_keyword')) {
            $investorNews->seo_keyword = '';
        } else {
            $investorNews->seo_keyword = $request->seo_keyword;
        }

        $investorNews->slug = Str::slug($request->title, '-') . '-' . $investorNews->id;

        $investorNews->save();

        return redirect(route('investor-news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestorNews  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvestorNews $investorNews)
    {
        $investorNews->delete();

        return redirect(route('investor-news.index'));
    }

    public function toggle(InvestorNews $investorNews)
    {
        $investorNews->active = !$investorNews->active;
        $investorNews->save();

        return redirect(route('investor-news.index'));
    }
}
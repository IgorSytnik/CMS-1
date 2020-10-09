<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Page;

class PageRes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = new Page;
        return view('admin', ['page' => $page::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => [
                'required',
                'unique:pages,code',
                'max:255',
                'not_regex:/\W/i',
            ],
            'caption_ru' => [
                'required',
                'max:255',
                'unique:pages,caption_ru',
            ],
            'caption_ua' => [
                'required',
                'max:255',
                'unique:pages,caption_ua',
            ],
            'caption_en' => [
                'required',
                'max:255',
                'unique:pages,caption_en',
            ],
            'main_content_ru' => [
                'required',
            ],
            'main_content_ua' => [
                'required',
            ],
            'main_content_en' => [
                'required',
            ],
        ]);

        Page::create([
            'code' => $request->code,
            'caption_ru' => $request->caption_ru,
            'caption_ua' => $request->caption_ua,
            'caption_en' => $request->caption_en,
            'main_content_ru' => $request->main_content_ru,
            'main_content_ua' => $request->main_content_ua,
            'main_content_en' => $request->main_content_en,
        ]);

        return redirect('page')->with('status', 'New page created! The code of the page: "'.$request->code.'"');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $pageName
     * @return \Illuminate\Http\Response
     */
    public function show($pageName)
    {
        return redirect($pageName);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $pageName
     * @return \Illuminate\Http\Response
     */
    public function edit($pageName)
    {
        $page = new Page;
        return view('edit', ['page' => $page->firstWhere('code', $pageName)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $pageName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pageName)
    {
        $page = Page::firstWhere('code', $pageName);

        $validatedData = $request->validate([
            'code' => [
                'required',
                'max:255',
                'not_regex:/\W/i',
                Rule::unique('pages')->ignore($pageName, 'code'),
            ],
            'caption_ru' => [
                'required',
                'max:255',
                Rule::unique('pages')->ignore($page->caption_ru, 'caption_ru'),
            ],
            'caption_ua' => [
                'required',
                'max:255',
                Rule::unique('pages')->ignore($page->caption_ua, 'caption_ua'),
            ],
            'caption_en' => [
                'required',
                'max:255',
                Rule::unique('pages')->ignore($page->caption_en, 'caption_en'),
            ],
            'main_content_ru' => [
                'required',
                Rule::unique('pages')->ignore($page->main_content_ru, 'main_content_ru'),
            ],
            'main_content_ua' => [
                'required',
                Rule::unique('pages')->ignore($page->main_content_ua, 'main_content_ua'),
            ],
            'main_content_en' => [
                'required',
                Rule::unique('pages')->ignore($page->main_content_en, 'main_content_en'),
            ],
        ]);

        $page->code = $request->input('code');
        $page->caption_ru = $request->input('caption_ru');
        $page->caption_ua = $request->input('caption_ua');
        $page->caption_en = $request->input('caption_en');
        $page->main_content_ru = $request->input('main_content_ru');
        $page->main_content_ua = $request->input('main_content_ua');
        $page->main_content_en = $request->input('main_content_en');
        $page->save();

        return redirect('page')->with('status', 'Page has been updated! The code of the page: "'.$request->code.'"');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $pageName
     * @return \Illuminate\Http\Response
     */
    public function destroy($pageName)
    {
        $p = Page::firstWhere('code', $pageName);
        $p->delete();
        return redirect('page')->with('status', 'Page has been deleted! The code of the page: "'.$pageName.'"');
    }
}

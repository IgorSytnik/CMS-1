<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\photo_category;
use App\Models\photo_paths;

class Page extends Model
{
    protected $fillable = [
        'code',
        'caption_ru',
        'caption_ua',
        'caption_en',
        'parent',
        'order_by',
        'main_content_ru',
        'main_content_ua',
        'main_content_en',
    ]; 
    protected $table = 'Pages';

    public function render($pageName, $lan) {
        $caption = $this->caption_ru;
        $main_content = $this->main_content_ru;
        if($lan) {
            if (! in_array($lan, ['ru', 'ua', 'en'])) {
                abort(400);
            }  
            if($lan == 'ua') {
                $caption = $this->caption_ua;
                $main_content = $this->main_content_ua;
            } else if($lan == 'en') {
                $caption = $this->caption_en;
                $main_content = $this->main_content_en;
            } else {
                $caption = $this->caption_ru;
                $main_content = $this->main_content_ru;
            }
        } 
        if($pageName == 'photos') {
            return view('tmp-photo', ['main_content' => $main_content,
                                        'caption' => $caption,
                                        'created_at' => $this->created_at,
                                        'photo_category' => photo_category::all(),
                                        'photo_paths' => photo_paths::all(),
                                        'lan' => $lan]);
        }
        if($pageName == 'list') {
            return view('list', ['main_content' => $main_content,
                                        'caption' => $caption,
                                        'created_at' => $this->created_at,
                                        'lan' => $lan]);
        }
        return view('tmp', ['main_content' => $main_content,
                            'caption' => $caption,
                            'created_at' => $this->created_at,
                            'lan' => $lan]);
    }

    public function enc($pageName, $lan) {
        $caption = $this->caption_ru;
        $main_content = $this->main_content_ru;
        if($lan) {
            if (! in_array($lan, ['ru', 'ua', 'en'])) {
                abort(400);
            }  
            if($lan == 'ua') {
                $caption = $this->caption_ua;
                $main_content = $this->main_content_ua;
            } else if($lan == 'en') {
                $caption = $this->caption_en;
                $main_content = $this->main_content_en;
            } else {
                $caption = $this->caption_ru;
                $main_content = $this->main_content_ru;
            }
        } 
        //get page array of children in order
        $children;
        if($this->order_by == 'caption') {
            $children = Page::where('parent', $this->code)
                                    ->orderBy('caption_ru')->get();
        } else {
            $children = Page::where('parent', $this->code)
                                    ->orderBy('created_at')->get();
        }
        
        return view('list', ['children' => $children,
                            'code' => $this->code,
                            'parent' => $this->parent,
                            'main_content' => $main_content,
                            'caption' => $caption,
                            'created_at' => $this->created_at,
                            'lan' => $lan]);
    }
}

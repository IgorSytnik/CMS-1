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

    protected $caption;
    protected $main_content;

    public function createWithAlias() {
        $models = Page::whereNotNull('alias_of')->get();
        foreach($models as $m) {
            $its_parent = Page::firstWhere('code', $m->attributes['alias_of']);
            $m->attributes['code'] = $m->attributes['alias_of'];
            if ( empty($m->attributes['caption_ru']) ) { 
                $m->attributes['caption_ru'] = $its_parent->attributes['caption_ru'];
            }
            if ( empty($m->attributes['caption_ua']) ) { 
                $m->attributes['caption_ua'] = $its_parent->attributes['caption_ua'];
            }
            if ( empty($m->attributes['caption_en']) ) { 
                $m->attributes['caption_en'] = $its_parent->attributes['caption_en'];
            }
            if ( empty($m->attributes['parent']) ) { 
                $m->attributes['parent'] = $its_parent->attributes['parent'];
            }
            if ( empty($m->attributes['order_by']) ) { 
                $m->attributes['order_by'] = $its_parent->attributes['order_by'];
            }
            if ( empty($m->attributes['main_content_ru']) ) { 
                $m->attributes['main_content_ru'] = $its_parent->attributes['main_content_ru'];
            }
            if ( empty($m->attributes['main_content_ua']) ) { 
                $m->attributes['main_content_ua'] = $its_parent->attributes['main_content_ua'];
            }
            if ( empty($m->attributes['main_content_en']) ) { 
                $m->attributes['main_content_en'] = $its_parent->attributes['main_content_en'];
            }
        }
        return $models;
    }

    private function language($lan) {
        $this->caption = $this->caption_ru;
        $this->main_content = $this->main_content_ru;
        if($lan) {
            if (! in_array($lan, ['ru', 'ua', 'en'])) {
                abort(400);
            }  
            if($lan == 'ua') {
                $this->caption = $this->caption_ua;
                $this->main_content = $this->main_content_ua;
            } else if($lan == 'en') {
                $this->caption = $this->caption_en;
                $this->main_content = $this->main_content_en;
            }
        } 
    }

    public function render($pageName, $lan) {
        $this->language($lan);
        if($pageName == 'photos') {
            return view('tmp-photo', ['main_content' => $this->main_content,
                                        'caption' => $this->caption,
                                        'created_at' => $this->created_at,
                                        'photo_category' => photo_category::all(),
                                        'photo_paths' => photo_paths::all(),
                                        'lan' => $lan]);
        }
        return view('tmp', ['main_content' => $this->main_content,
                            'caption' => $this->caption,
                            'created_at' => $this->created_at,
                            'lan' => $lan]);
    }

    public function enc($pageName, $lan) {
        $this->language($lan);
        //get page array of children in order
        $children;
        if($this->order_by == 'caption') {
            if($lan) {
                if($lan == 'ua') {
                    $children = Page::where('parent', $this->code)
                                            ->orderBy('caption_ua')->get();
                } else if($lan == 'en') {
                    $children = Page::where('parent', $this->code)
                                            ->orderBy('caption_en')->get();
                } else {
                    $children = Page::where('parent', $this->code)
                                            ->orderBy('caption_ru')->get();
                }
            } else {
                $children = Page::where('parent', $this->code)
                                        ->orderBy('caption_ru')->get();
            }
        } else {
            $children = Page::where('parent', $this->code)
                                    ->orderBy('created_at')->get();
        }

        if($pageName == 'Bruh') {
            return view('list-bruh', ['children' => $children,
                            'aliases' => $this->createWithAlias(),
                            'code' => $this->code,
                            'parent' => $this->parent,
                            'main_content' => $this->main_content,
                            'caption' => $this->caption,
                            'created_at' => $this->created_at,
                            'lan' => $lan]);
        }
        
        return view('list', ['children' => $children,
                            'code' => $this->code,
                            'parent' => $this->parent,
                            'main_content' => $this->main_content,
                            'caption' => $this->caption,
                            'created_at' => $this->created_at,
                            'lan' => $lan]);
    }
}

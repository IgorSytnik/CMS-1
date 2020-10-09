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
        return view('tmp', ['main_content' => $main_content,
                            'caption' => $caption,
                            'created_at' => $this->created_at,
                            'lan' => $lan]);
    }
}

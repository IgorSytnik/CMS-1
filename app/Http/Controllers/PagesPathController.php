<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

class PagesPathController extends Controller
{
    public function land() {
        $page = new Page;
        return $page->render('landing');
    }
    public function pages($pageName) {
        $page = new Page;
        return $page->render($pageName);
    }
}

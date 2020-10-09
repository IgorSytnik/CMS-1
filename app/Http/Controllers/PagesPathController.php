<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesPathController extends Controller
{
    // public function pages($pageName) {
    //     $page = new Page;
    //     return $page->render($pageName, NULL);
    // }
    public function pagesLang($pageName, $lan = null) {
        $page = new Page;
        return $page->firstWhere('code', $pageName)->render($pageName, $lan);
    }
}

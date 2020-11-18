<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesPathController extends Controller
{
    public function pagesLang($pageName, $lan = null) {
        $page = new Page;
        return $page->firstWhere('code', $pageName)->render($pageName, $lan);
    }
    public function encLang($pageName, $lan = null) {
        $page = new Page;
        return $page->firstWhere('code', $pageName)->enc($pageName, $lan);
    }
}

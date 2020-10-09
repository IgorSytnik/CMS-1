<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======

>>>>>>> a556ca4250e0a1978785d6ef1e3998923f09c9a8
use App\Models\Page;

class PagesPathController extends Controller
{
<<<<<<< HEAD
    // public function pages($pageName) {
    //     $page = new Page;
    //     return $page->render($pageName, NULL);
    // }
    public function pagesLang($pageName, $lan = null) {
        $page = new Page;
        return $page->firstWhere('code', $pageName)->render($pageName, $lan);
=======
    public function land() {
        $page = new Page;
        return $page->render('landing');
    }
    public function pages($pageName) {
        $page = new Page;
        return $page->render($pageName);
>>>>>>> a556ca4250e0a1978785d6ef1e3998923f09c9a8
    }
}

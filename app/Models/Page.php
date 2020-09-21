<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'Pages';
    public function render($pageName) {
        return view('tmp', ['page' => $this->firstWhere('code', $pageName)]);
    }
}

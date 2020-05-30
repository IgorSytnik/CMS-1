<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\motocycle;
use App\Models\news;
use App\Models\accessory;

class MotocycleController extends Controller
{
    // для лендинга
    public function land()
    {
        return view('landing', ['motos' => motocycle::all(),
                                    'news' => news::all(),
                                    'accs' => accessory::all()]);
    }

    // для мотоциклов
    public function allMoto()
    {
        return view('cards', [ 'motos' => motocycle::all()]);
    }

    public function buying($id)
    {
        $motos = new motocycle;
        return view('motobuying', ['moto' => $motos->find($id)]);
    }

    // для новостей
    public function allNews()
    {
        return view('cardsnews', [ 'news' => news::all()]);
    }

    public function news1($id)
    {
        $news = new news;
        return view('motosnews', ['new' => $news->find($id)]);
    }

    // для аксессуаров
    public function allAccs()
    {
        return view('cardsac', [ 'accs' => accessory::all()]);
    }

    public function acc1($id)
    {
        $accs = new accessory;
        return view('motosacc', ['acc' => $accs->find($id)]);
    }
}

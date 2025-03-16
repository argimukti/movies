<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public $movies;

    public function __construct()
    {
        for ($i = 0; $i < 10; $i++) {
            $this ->movies[]=[
                'title' => 'Movie Controller' . $i,
                'year' => '2002',
                'genre' => 'Adult',
            ];
        }
    }
    public function index()
    {
        return $this->movies;
    }

    public function show($id)
    {
        return $this->movies[$id];
    }

    public function store()
    {
        $this->movies[] = [
            'title' => request('Movie Controller'),
            'year' => request('2002'),
            'genre' => request('Adult'),
        ];
        return $this->movies;
    }
}

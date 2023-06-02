<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);


@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bem-vindo à minha página inicial!</h1>
        <p>Esta é a página inicial do meu projeto Laravel.</p>
    </div>
@endsection

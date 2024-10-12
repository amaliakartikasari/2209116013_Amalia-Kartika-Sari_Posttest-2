@extends('layouts.app')
@section('content')
<style>
    body {
        font-family: 'Playfair Display', serif;
        background-color: pink;
        /* padding: 20px; */
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    .pesan-container {
        max-width: 600px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    label {
        font-weight: bold;
    }
    input, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ced4da;
        border-radius: 4px;
    }
    button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
<div class="pesan-container">
    <h1>Daftar Pesan</h1>
    @if(count($pesan) > 0)
        @foreach($pesan as $p)
            <div class="message">
                <strong>{{ $p['name'] }} ({{ $p['email'] }})</strong>
                <p>{{ $p['message'] }}</p>
            </div>
        @endforeach
    @else
        <p>Tidak ada pesan yang dikirim.</p>
    @endif
</div>
@endsection

@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<h1>Contact Us</h1>
<p>Hubungi kami jika Anda memiliki pertanyaan atau masukan.</p>

<form method="POST" action="/contact">
    @csrf
    <div>
        <label>Nama:</label><br>
        <input type="text" name="nama" placeholder="Nama Anda">
    </div>
    <div>
        <label>Pesan:</label><br>
        <textarea name="pesan" placeholder="Pesan Anda" rows="4"></textarea>
    </div>
    <button type="submit">Kirim</button>
</form>
@endsection
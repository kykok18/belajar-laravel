@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<h1>Contact Us</h1>
<p>Hubungi kami jika Anda memiliki pertanyaan atau masukan.</p>
<form>
    <input type="text" name="nama" placeholder="Nama Anda">
    <textarea name="pesan" placeholder="Pesan Anda"></textarea>
    <button type="submit">Kirim</button>
</form>
@endsection
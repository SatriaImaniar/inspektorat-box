@extends('layouts.app')

@section('title', 'Input Surat Undangan')

@section('content')
<h3>✉️ Input Surat Undangan</h3>
<form action="{{ route('invite.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Pengirim</label>
        <input type="text" name="sender" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="came" class="form-control">
    </div>
    <div class="mb-3">
        <label>Hari</label>
        <input type="text" name="day" class="form-control">
    </div>
    <div class="mb-3">
        <label>Aktivitas</label>
        <input type="text" name="activity" class="form-control">
    </div>
    <div class="mb-3">
        <label>Tempat</label>
        <input type="text" name="place" class="form-control">
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success w-100">Simpan</button>
</form>
@endsection

@extends('layouts.app')

@section('title', 'Schedule')

@section('content')
<h3>📅 Jadwal Undangan</h3>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Pengirim</th>
            <th>Tanggal</th>
            <th>Hari</th>
            <th>Aktivitas</th>
            <th>Tempat</th>
            <th>Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($invites as $invite)
        <tr>
            <td>{{ $invite->sender }}</td>
            <td>{{ $invite->came }}</td>
            <td>{{ $invite->day }}</td>
            <td>{{ $invite->activity }}</td>
            <td>{{ $invite->place }}</td>
            <td>{{ $invite->description }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

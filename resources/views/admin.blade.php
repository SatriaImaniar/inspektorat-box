@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('input') }}">
                        <fieldset  >
                          <legend>Surat</legend>
                          @csrf
                          <div class="mb-3">
                            <label for=" TextInput" class="form-label">Pengirim</label>
                            <input type="text" id=" TextInput" class="form-control"  placeholder="" name="sender">
                          </div>
                          <div class="mb-3">
                            <label for=" TextInput" class="form-label">Tanggal Masuk</label>
                            <input type="date" id=" TextInput" class="form-control"  placeholder="" name="masuk">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Tanggal Acara</label>
                            <input type="datetime-local" id=" TextInput" class="form-control"  placeholder="" name="hari">
                          </div>
                          <div class="mb-3">
                            <label for=" TextInput" class="form-label" name="kegiatan">Kegiatan</label>
                            <input type="text" id=" TextInput" class="form-control"  placeholder="" name="kegiatan">
                          </div>
                          <div class="mb-3">
                            <label for=" TextInput" class="form-label" name="tempat">Tempat</label>
                            <input type="text" id=" TextInput" class="form-control"  placeholder="" name="tempat">
                          </div>
                          <div class="mb-3">
                            <label for=" TextInput" class="form-label" name="keterangan">Keterangan</label>
                            <input type="text" id=" TextInput" class="form-control"  placeholder="" name="keterangan">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </fieldset>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

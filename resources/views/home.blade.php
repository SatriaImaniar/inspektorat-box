@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">

                        <div class="col-5">
                            <h4 id="today">dfd</h4>
                            <h5>Jadwal hari ini:</h5>
                            <ul>
                                <li>08.30 Rapat</li>
                            </ul>
                            <h5>Jadwal yang akan datang:</h5>
                            <ul>
                                <li>08.30 Rapat</li>
                            </ul>

                        </div>
                        <div class="col-7">
                            <div id="calendar" class="border p-3"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .fc-toolbar-title {
        font-size: 14px !important;
    }

    .fc-button {
        font-size: 12px !important;
        padding: 2px 5px !important;
    }

    .fc-prev-button, .fc-next-button {
        font-size: 12px !important;
        width: 25px !important;
        height: 25px !important;
    }
</style>

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
<!-- jQuery (Jika Belum Ada) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let d = new Date();
        let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        let formattedDate = d.toLocaleDateString('id-ID', options);

        let todayElement = document.getElementById("today");
        if (todayElement) {
            todayElement.innerText = formattedDate;
            console.log("Tanggal berhasil di-set:", formattedDate);
        } else {
            console.error("Elemen #today tidak ditemukan.");
        }

        var calendarEl = document.getElementById('calendar');
        if (calendarEl) {
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: {!! json_encode($events) !!}, // Ambil data dari controller
            });

            calendar.render();
        } else {
            console.error("Elemen #calendar tidak ditemukan.");
        }
    });
</script>




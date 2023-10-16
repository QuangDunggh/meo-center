<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
</head>

<body class="antialiased">
    <div class="header">
        <div class="title">
            <h4>Meo Center</h4>
        </div>
    </div>
    <div class="main">

        {{-- <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                @endif
            </div>
            @endif --}}

        <div class="container">
            <div class="wrap-filter" style="display: flex">
                <div class="filter-input">
                    <label for="">年月</label><br />
                    <select class="sl-year-name" name="year-name" id="">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                    </select>
                </div>
                <div class="filter-input">
                    <label for="">順位取得時間r</label><br />
                    <input type="text" value="順位取得時間r" disabled>
                </div>
                <div class="filter-input">
                    <label for="">順位取得地点</label><br />
                    <input type="text" value="順位取得地点" disabled>
                </div>
            </div>
            <div class="content-calender">
                <div id='calendar'></div>
            </div>


            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>
    </div>
    </div>
    </div>

</body>
{{-- <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.9/index.global.min.js'></script> --}}
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.9/index.global.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.9/index.global.min.js'></script>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script>
    $.ajax({
        url: "http://127.0.0.1:8000/query"
    }).done(function(data) {
        console.log(data);
        let events = data;
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            height: 700,
            contentHeight: 700
        });
        calendar.addEventSource(events);
        calendar.render();

    }).fail(function(jqxhr) {
        console.log(jqxhr);;
    })
</script>

</html>

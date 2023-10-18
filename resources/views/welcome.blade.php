<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
</head>

<body class="antialiased">
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: orange">Meo center</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
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
            <div class="" style="display: flex">
                <div class="input-group mb-3">
                    <div class="me-5">
                        <label for="">年月</label><br />
                        <select class="form-select mb-3" id="selectYearMonth" aria-label="Default select example">
                        </select>
                    </div>
                    <div class="me-5">
                        <label for="">順位取得時間r</label><br />
                        <input class="form-control" type="text" value="順位取得時間r" disabled>
                    </div>
                    <div>
                        <label for="">順位取得地点</label><br />
                        <input class="form-control" type="text" value="順位取得地点" disabled>
                    </div>
                </div>
            </div>
            <div class="content-calender">
                <div id='calendar' style="width: 100%; display: inline-block;"></div>
            </div>


            <div class="table" style="margin-top: 50px; background:white">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Ranking</th>
                            <th scope="col">Keyword</th>
                        </tr>
                    </thead>
                    <tbody id="content-table">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>Thornton</td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    </div>
    </div>

</body>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let data = @json($events);
        console.log(data);
        data.sort
        $('#calendar').fullCalendar({
            header: {
                left: 'prev, next today',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            buttonText: {
                prevYear: '&laquo;', // <<
                nextYear: '&raquo;', // >>
                today: '今日',
                month: '月',
                week: '週',
                day: '日'
            },

            monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],

            monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月',
                '12月'
            ],

            dayNames: ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'],

            dayNamesShort: ['日', '月', '火', '水', '木', '金', '土'],

            selectable: true,

            selectHelper: true,
            events: data
        });
        // calendar.render();

        function renderOptionYearAnhMonth(yearStart) {
            const currentTime = new Date();
            const lengthYear = currentTime.getFullYear() - yearStart;
            let htmlOption = "";
            for (let i = 0; i <= lengthYear; i++) {
                for (let j = 1; j <= 12; j++) {
                    if(j < 10) {
                        htmlOption += `<option value="${yearStart + i}-0${j}">${j}月 ${yearStart + i}</option>`;
                    } else {
                        htmlOption += `<option value="${yearStart + i}-${j}">${j}月 ${yearStart + i}</option>`;
                    } 
                }
            }

            $("#selectYearMonth").html(htmlOption);
        }

        function getDaysInMonth(month, year) {
            let date = new Date(year, month, 1);
            let days = [];
            while (date.getMonth() === month) {
                days.push(new Date(date).toLocaleDateString('sv'));
                date.setDate(date.getDate() + 1);
            }
            return days;
        }


        function renderDateTable(month, year) {
            let listDay = getDaysInMonth(month, year);
            let html;
            listDay.forEach(element => {
                html += `<tr><th scope="row">${element}</th>
                            <td>Jacob</td>
                            <td>Thornton</td></tr>`;

            });

            $('#content-table').html(html);
        }
        renderDateTable(1, 2023);

        renderOptionYearAnhMonth(2019);
    })
</script>

</html>

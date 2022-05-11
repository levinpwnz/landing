<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .bg-gray {
            background: #1a1e21;
        }
    </style>
</head>
<body class="bg-gray">
<div class="container mt-5">
    <div class="card bg-dark text-white mb-3">
        <div class="card-header text-uppercase fw-bold text-center">Список посещенных url</div>
        <div class="card-body">
            <table class="table table-dark table-hover table-striped">
                <th>#</th>
                <th>URL</th>
                <th>Views</th>
                <th>Last visit</th>
                <th>Last visit for human</th>
                @forelse($visits as $visit)
                    <tr>
                        <td>{{$visit['id']}}</td>
                        <td><a class="text-decoration-none" href="{{$visit['url']}}">{{$visit['url']}}</a></td>
                        <td>{{$visit['views']}}</td>
                        <td>{{$visit['last_visit_at']}}</td>
                        <td>{{$visit['last_visit_for_humans']}}</td>
                    </tr>
                @empty
                    <h1>Пусто</h1>
                @endforelse
            </table>
            {{$visits->links('bootstrap-5')}}
        </div>
    </div>
</div>
</body>
</html>

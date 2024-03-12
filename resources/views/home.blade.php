<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train</title>

    @vite('resources/js/app.js')
</head>

<body>
    <main>
        <h1 class="text-center">Trains</h1>
        <div class="container text-center">
            <div class="row">
                @foreach($trains as $train)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">{{$train['company']}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">from {{$train['departure_station']}} - to {{$train['arrival_station']}}</h6>
                            <p class="card-text">
                            <ul class="list-group">
                                <li class="list-group-item">Deparure time: {{$train['departure_time']}}</li>
                                <li class="list-group-item">Arrival time: {{$train['arrival_time']}}</li>
                                <li class="list-group-item">Train Code: {{$train['train_code']}}</li>
                                <li class="list-group-item">Carriage: {{$train['carriage_numb']}}</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </main>
</body>

</html>
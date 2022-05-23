<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lavarel-migration-seeder</title>
</head>

<body>
    {{-- @dump($trains) --}}
    <h1>Treni in partenza oggi</h1>
    <div>
        @foreach ($trains as $train)
            <div style="margin-top: 50px">
                <p>TRENO: {{ $train->azienda }}</p>
                <p>STAZIONE DI PARTENZA: {{ $train->stazione_di_partenza }}</p>
                <p>STAZIONE DI ARRIVO: {{ $train->stazione_di_arrivo }}</p>
                <p>DATA DI PARTENZA: {{ $train->data_partenza }}</p>
                <p>ORARIO DI PARTENZA: {{ $train->orario_partenza }}</p>
                <p>ORARIO DI ARRIVO: {{ $train->orario_arrivo }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>

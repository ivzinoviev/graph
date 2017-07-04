<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- Styles -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Entity One</h1>
            <h2>State:</h2>
            @foreach($entityOne as $item)
                <div>
                    <p><b>ID:</b> {{ $item->id }}</p>
                    <p><b>Color:</b> {{ $item->color }}</p>
                    <p><b>Size:</b> {{ $item->size }}</p>
                    <p><b>Status:</b> {{ $item->getStatus()->first()->label }}</p>
                    <h2>Go to status:</h2>
                    @foreach($item->getStatusesList() as $status)
                        <a href="/EntityOne/{{ $item->id }}/{{ $status->status->id }}" class="btn {{ $item->color }} {{ $item->size }}">{{ $status->status->label }}</a>
                    @endforeach
                </div>
            @endforeach
        </div>

        <div class="col-md-6">
            <h1>Entity Two</h1>
            <h2>State:</h2>
            @foreach($entityTwo as $item)
                <div>
                    <p><b>ID:</b> {{ $item->id }}</p>
                    <p><b>Value:</b> {{ $item->value }}</p>
                    <p><b>Status:</b> {{ $item->getStatus()->first()->label }}</p>
                    <h2>Go to status:</h2>
                    @foreach($item->getStatusesList() as $status)
                        <a href="/EntityTwo/{{ $item->id }}/{{ $status->status->id }}" class="btn">{{ $status->status->label }}</a>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
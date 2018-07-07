<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Popular currencies</title>
</head>
<body>
    <h1>Popular currencies</h1>
        <ol>
            @foreach ($popularCurrencies as $currency)
            <li><img src="{{ $currency->getImageUrl() }}" />{{ $currency->getName() }} - {{ $currency->getPrice() }}</li>
            @endforeach
        </ol>
</body>
</html>
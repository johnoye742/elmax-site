<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiliate Marketing - Elmax Commerce</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>
<body>
    <header>
        <livewire:navbar></livewire:navbar>
    </header>

    <main>
    <div class="px-8 py-5">
            <h1 class="text-3xl">Recent Products</h1>
            <div class="grid lg:grid-cols-3 grid-cols-1">
                @foreach ($products as $product)
                <div class="p-4 rounded-lg w-full">
                    <img src="{{ $product -> image }}" class="w-full rounded-lg">
                    <div class="flex flex-col justify-between items-center mt-3">
                        <h1 class="text-3xl">{{ substr($product -> name, 0, 19) }}</h1>
                        <a href="{{ $product -> link }}" class="rounded-lg bg-yellow-300 px-3 py-2 h-fit mt-3" target="_blank"> Buy Now <i class="fi fi-rr-arrow-up-right-from-square"></i></a>
                    </div>
                    
                </div>
                @endforeach
                
                
            </div>
        </div>
    </main>
</body>
</html>
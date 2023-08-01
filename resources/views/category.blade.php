<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category }} - Shop - Elmax Commerce</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<body>
    <header>
        <livewire:navbar :pos="2"></livewire:navbar>    
    </header>

    <main class="w-full">
        <div class="px-8 py-5">
            <h1 class="text-3xl">{{ $category }} Category</h1>
            
            <div class="grid grid-cols-3">
                @foreach ($products as $product)
                    <div class="p-4 rounded-lg w-full">
                        <img src="{{ $product -> image }}" class="w-full rounded-lg">
                        <div class="flex flex-row justify-between items-center mt-3">
                            <div class="flex flex-col">
                                <h1 class="text-3xl">{{ substr($product -> name, 0, 23) }}</h1>
                                <p>{{ $product -> price }}</p>
                            </div>
                            <a href="" class="rounded-lg bg-yellow-300 px-3 py-2 h-fit"><i class="fi fi-rr-shopping-cart-add text-xl"></i></a>
                        </div>
                    </div>
                @endforeach
                
                

            </div>
        </div>


    </main>

</body>
</html>
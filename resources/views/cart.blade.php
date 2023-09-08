<?php
use App\Models\Product;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Elmax Commerce</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<body>
    <header>
        <livewire:navbar :pos="2"></livewire:navbar>
    </header>

    <main class="w-full">
        <div class="px-8 py-5">
            @foreach ($cart as $item)



                <div class="border-b border-b-gray-100 grid grid-cols-2 items-center gap-5 p-2 justify-start">
                    <div class="flex flex-row gap-5 w-fit">
                        <img src="{{ explode('|', Product::find($item -> product_id) -> image)[0] }}" class="w-14 h-14">
                        <div class="flex flex-col">
                            <p>{{ Product::find($item -> product_id) -> name }}</p>
                            <p>{{ $item -> price }}</p>
                        </div>
                    </div>
                    <div>
                        <form action="{{ route('delete-item') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item -> id }}" name="id">
                            <button type="submit" class="px-8 py-3 bg-yellow-400 text-black self-end float-right justify-self-end  w-fit mt-5">Remove</button>
                        </form>
                    </div>
                </div>
            @endforeach

            <div class="mt-8">
                <button type="submit" class="px-8 py-3 bg-yellow-600 text-black self-end float-right justify-self-end rounded-lg w-fit mt-5">Checkout &RightArrow;</button>
            </div>
        </div>
    </main>
</body>
</html>

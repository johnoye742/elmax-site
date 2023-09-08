<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product -> name }} - Elmax Commerce</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>
<body>
    <header>
        <livewire:navbar :pos="2"></livewire:navbar>
    </header>

    <main>
        <div class="grid lg:grid-cols-2 grid-rows-2 gap-5 w-full px-5 py-8">
            <div>
                <img src="{{ $images[0] }}" class="w-full" id="main-img">
                <div class="grid grid-cols-3 gap-3 px-8" id="other-imgs">
                    @foreach ($images as $image)
                        @if ($image == $images[0])
                            <img src="{{ $image }}" class="w-full border-2 border-gray-400 p-5 rounded-lg">
                        @else
                            <img src="{{ $image }}" class="w-full border-2 p-5 rounded-lg">
                        @endif

                    @endforeach
                </div>
            </div>
            <div class="w-full">
                <h1 class="text-2xl">{{ $product -> name }}</h1>
                <h1 class="text-3xl font-bold">{{ $product -> price }}</h1>
                <p class="mt-2">{{ $product -> description }}</p>

                <div>
                    <div class="flex flex-row mt-8 items-center gap-5 flex-wrap">
                        <label for="count">Number of product: </label>
                        <input type="number" name="count" min="1" value="1" class="border rounded-lg p-3" id="count">
                    </div>
                    <button type="submit" class="px-8 py-3 bg-yellow-400 text-black self-end float-right justify-self-end rounded-xl w-fit mt-5"><i class="fi fi-rr-shopping-cart-add text-xl"></i> Add To Cart </button>
                </div>
            </div>
        </div>
    </main>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/product.js') }}"></script>
</body>

</html>

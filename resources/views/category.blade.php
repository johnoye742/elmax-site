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

            <div class="grid lg:grid-cols-3 grid-cols-1">
                @foreach ($products as $product)
                    @if ($product -> product_type == "dropshipping")
                        <div class="p-4 rounded-lg w-full">
                            @if (str_contains($product -> image, '|'))
                                <img src="{{ explode('|', $product -> image)[0] }}" class="w-full rounded-lg">

                            @else
                                <img src="{{ $product -> image }}" class="w-full rounded-lg">

                            @endif

                            <div class="flex flex-row justify-between items-center mt-3">
                                <div class="flex flex-col">
                                    <a href="{{ route('product', $product -> id)  }}" class="text-3xl">{{ substr($product -> name, 0, 23) }}</a>
                                    <p>{{ $product -> price }}</p>
                                </div>
                                <form action="{{ route('add-item') }}" id="addToCart">
                                    @csrf
                                    <input type="hidden" name="username" value="{{ auth() -> user() -> email }}">
                                    <input type="hidden" name="price" value="{{ $product -> price }}">
                                    <input type="hidden" name="product_name" value="{{ $product -> name }}">
                                    <input type="hidden" name="product_id" value="{{ $product -> id }}">
                                    <button type="submit" href="" class="rounded-lg bg-yellow-300 px-3 py-2 h-fit"><i class="fi fi-rr-shopping-cart-add text-xl"></i></button>
                                </form>
                            </div>
                        </div>

                    @else
                        <div class="p-4 rounded-lg w-full">
                            <img src="{{ $product -> image }}" class="w-full rounded-lg">
                            <div class="flex flex-col justify-between items-center mt-3">
                                <h1 class="text-3xl">{{ substr($product -> name, 0, 23) }}</h1>
                                <a href="{{ $product -> link }}" class="rounded-lg bg-yellow-300 px-3 py-2 h-fit mt-3" target="_blank"> Buy Now <i class="fi fi-rr-arrow-up-right-from-square"></i></a>
                            </div>

                        </div>

                    @endif


                @endforeach



            </div>
        </div>


    </main>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>

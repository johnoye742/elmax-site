<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Elmax Commerce</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>
<body>
    <header>
        <livewire:navbar :pos="1"></livewire:navbar>
    </header>

    

    <main class="w-full">
        <div class="w-full lg:px-8 px-3">
            <div class="bg-hero-image bg-no-repeat w-full lg:p-[10em] p-5 rounded-xl bg-cover text-center bg-blend-multiply">
                <h2 class="text-5xl capitalize font-bold text-white mb-3">We have everything you need</h2>
                <p class="text-white mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid dignissimos perferendis nemo, consequatur, vero labore nisi id corrupti, impedit alias explicabo repudiandae consectetur! Aut corrupti, pariatur fugit iste commodi impedit!</p>
                <div class="flex flex-row justify-center gap-3">
                    <a href="" class="bg-yellow-300 h-fit px-3 py-2 rounded-lg">Shop Now</a>
                    <a href="" class="bg-gray-300 border h-fit border-black px-3 py-2 rounded-lg">Learn More</a>
                </div>
            </div>
        </div>
        <div class="flex flex-col px-8 py-5">
            <h1 class="text-2xl">Explore Categories</h1>
            <div class="w-full grid lg:grid-cols-4 grid-cols-1 py-4 gap-4">
                <div class="rounded-lg p-[5em] text-white flex flex-col items-center !bg-cover !bg-blend-overlay" style="background: url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') #00000060;">
                    <div class="rounded-full bg-yellow-500 bg-opacity-70 py-3 px-5">Books</div>
                </div>
                
            </div>

            
        </div>

        <div class="px-8 py-5">
            <h1 class="text-3xl">Recent Products</h1>
            <div class="grid lg:grid-cols-3 grid-cols-1">
                @foreach ($products as $product)
                    <div class="p-4 rounded-lg w-full">
                    <img src="{{ $product -> image }}" class="w-full rounded-lg">
                    <div class="flex flex-row justify-between items-center mt-3">
                        <div class="flex flex-col">
                            <h1 class="text-3xl">{{ $product -> name }}</h1>
                            <p>{{ $product -> price }}</p>
                        </div>
                        <a href="" class="rounded-lg bg-yellow-300 px-3 py-2 h-fit"><i class="fi fi-rr-shopping-cart-add text-xl"></i></a>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </main>

    <footer>

    </footer>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>
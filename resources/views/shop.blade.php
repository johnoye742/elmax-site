<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Elmax Commerce</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>
<body>
    <header>
        <livewire:navbar :pos="2"></livewire:navbar>    
    </header>

    <main class="w-full">
        <div class="flex flex-col px-8 py-5">
            <h1 class="text-2xl">Explore Categories</h1>
            <div class="w-full grid grid-cols-4 py-4 gap-4">
                <div class="rounded-lg p-[5em] text-white flex flex-col items-center !bg-cover !bg-blend-overlay" style="background: url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') #00000060;">
                    <div class="rounded-full bg-yellow-500 bg-opacity-70 py-3 px-5">Books</div>
                </div>
                
            </div>

            
        </div>

        @foreach ($categories as $category)
            <div class="px-8 py-5">
            <h1 class="text-3xl">{{ ucfirst($category) }}</h1>
            <div class="grid lg:grid-cols-3 grid-cols-1">
                @foreach ($products -> where('category', null, ucfirst($category)) as $product)
                    <div class="p-4 rounded-lg w-full">
                        <img src="{{ $product -> image }}" class="w-full rounded-lg">
                        <div class="flex flex-col justify-between items-center mt-3">
                            <h1 class="text-3xl">{{ substr($product -> name, 0, 23) }}</h1>
                            <a href="{{ $product -> link }}" class="rounded-lg bg-yellow-300 px-3 py-2 h-fit mt-3" target="_blank"> Buy Now <i class="fi fi-rr-arrow-up-right-from-square"></i></a>
                        </div>
                        
                    </div>
                @endforeach
            </div>
            </div>
        @endforeach
        

        
        
    </main>

</body>
</html>
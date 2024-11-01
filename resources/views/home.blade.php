<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header class=" bg-gray-400"> 
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="cursor-pointer">
                <i class="fa-solid fa-bars"></i>
            </div>    
                <nav class="flex space-x-3">
                     <a href="">Home</a>
                     <a href="">Coleções</a>
                     <a href="">Ofertas</a>
                     <a href="">Atendimentos</a>
                </nav>
            <div class="cursor-pointer space-x-1">
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-regular fa-user"></i>
            </div>  
        </div>
    </header>
    <main>
        <div>
            <img class="w-100%" src="{{ asset('image/telatemporaria.png') }}" alt="">
        </div>

        
    </main>
</body>
</html>
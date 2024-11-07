<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
</head>

<body>
<header class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Ícone de três barras para abrir o menu lateral -->
            <div class="cursor-pointer md:hidden" onclick="toggleMenu()">
                <i class="fa-solid fa-bars text-xl"></i>
            </div>    

            <!-- Navegação para desktop escondida em mobile -->
            <nav class="hidden md:flex space-x-4">
                <a href="">Home</a>
                <a href="">Coleções</a>
                <a href="">Ofertas</a>
                <a href="">Atendimentos</a>
            </nav>

            <!-- Ícones de pesquisa, carrinho e usuário -->
            <div class="flex space-x-3">
                <i class="fa-solid fa-magnifying-glass text-lg"></i>
                <i class="fa-solid fa-cart-shopping text-lg"></i>
                <i class="fa-regular fa-user text-lg"></i>
            </div>  
        </div>
       
    </header>
  
    <main class="items-center justify-center text-center mb-12 flex-col">
    <div>
            <img src="{{ asset('image/tela promocional.png') }}" alt="">
        </div> <!-- Aumentei o mb de 6 para 12 -->
        <h4 class="mt-8 mb-4 text-xl font-semibold">Novidades disponíveis</h4> <!-- Adicionei margens para o título -->

        <div class="flex justify-between mb-8"> <!-- Adicionei margens para separar produtos -->
            <div class="max-w-xs rounded-lg overflow-hidden">
                <img class="object-cover" src="{{ asset('image/puma 180 1.png') }}" alt="Imagem do Produto">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Puma 180</h3>
                    <p class="mt-2 text-gray-600">Preto</p>
                </div>
            </div>

            <div class="max-w-xs rounded-lg overflow-hidden">
                <img class="object-cover" src="{{ asset('image/corteiz 1.png') }}" alt="Imagem do Produto">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Asics GEL-NYC</h3>
                    <p class="mt-2 text-gray-600">Ivory Clay Grey</p>
                </div>
            </div>

            <div class="max-w-xs rounded-lg overflow-hidden">
                <img class="object-cover" src="{{ asset('image/j4 verde 1.png') }}" alt="Imagem do Produto">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Air Max 95 SP</h3>
                    <p class="mt-2 text-gray-600">Aegean Storm</p>
                </div>
            </div>

            <div class="max-w-xs rounded-lg overflow-hidden">
                <img class="object-cover" src="{{ asset('image/strange love 1.png') }}" alt="Imagem do Produto">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Air Jordan 4 RM</h3>
                    <p class="mt-2 text-gray-600">Fence Green</p>
                </div>
            </div>

            <div class="max-w-xs rounded-lg overflow-hidden">
                <img class="object-cover" src="{{ asset('image/asics 1.png') }}" alt="Imagem do Produto">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Nike Dunk Low</h3>
                    <p class="mt-2 text-gray-600">Strange Love</p>
                </div>
            </div>
        </div>
        <h4 class="mt-8 mb-4 text-xl font-semibold">Ver mais <span><i class="cursor-pointer fa-solid fa-chevron-down"></i></span></h4> <!-- Adicionei margens para o título -->
        <div class="splide ">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><img src="{{ asset('image/carrosel.png') }}" alt="Slide 1"></li>
                    <li class="splide__slide"><img src="{{ asset('image/carrosel.png') }}" alt="Slide 1"></li>
                    <li class="splide__slide"><img src="{{ asset('image/carrosel.png') }}" alt="Slide 1"></li>
                </ul>
            </div>
        </div>
        <h4 class="mt-8 mb-4 text-xl font-semibold">Seus sonhos caminham com você!</h4>
    </main>

<footer class="h-screen bg-[#D9D9D9] flex flex-col items-center text-center justify-center p-10">
<div class="relative p-10">
        <!-- Primeira linha preta superior -->
        <div class="absolute inset-x-0 top-0 h-1 bg-black"></div>
        <!-- Primeira linha preta inferior -->
        <div class="absolute inset-x-0 bottom-0 h-1 bg-black"></div>


    <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-gray-700">
        <!-- Fale Conosco -->
        <div class="flex flex-col items-center">
            <h3 class="text-lg font-semibold mb-4">Fale Conosco</h3>
            <p class="text-sm">Seg - Sex: 08:00 - 18:00</p>
            <p class="text-sm">Sáb: 08:00 - 13:00</p>
            <p class="text-sm">Contate-nos através de nossos canais digitais.</p>
            
          
        </div>

        <!-- Formas de Pagamento -->
        <div class="flex flex-col items-center space-x-1">
            <h3 class="text-lg font-semibold mb-4">Formas de Pagamento</h3>
            <p class="text-sm">Aceitamos os principais meios de pagamento.</p>
            <div class="flex items-center justify-center ">
                <img src="{{ asset('image/Visa-17 1.png') }}" class="h-15 w-15" alt="Visa" >
                <img src="{{ asset('image/Mastercard-logo 1.png') }}" class="h-15 w-15" alt="MasterCard" >
                <img src="{{ asset('image/Logo—pix_powered_by_Banco_Central_(Brazil,_2020).svg 1.png') }}" class="h-15 w-15" alt="Pix" >
                <img src="{{ asset('image/boleto 1.png') }}" class="h-15 w-15" alt="Pix" >
             
            </div>
        </div>

        <!-- Contato -->
        <div class="flex flex-col items-center">
            <h3 class="text-lg font-semibold mb-4">Contato</h3>
            <p class="text-sm">Entre em contato conosco através dos canais abaixo:</p>
            <ul class="mt-4 space-y-2">
                <li><i class="fa-brands fa-instagram"></i> @housesnkr</li>
                <li><i class="fa-solid fa-envelope mr-2"></i> comercialhousesnkr@gmail.com</li>
                <li><i class="fa-brands fa-whatsapp mr-2"></i> WhatsApp: +55 (16) 99277-9431</li>
            </ul>
        </div>
    </div>
</div>  
</footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
<script>
  var splide = new Splide('.splide', {
    type: 'loop',
    padding: '5rem',
  });

  splide.mount();
</script>
</html>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<main class="items-center justify-center text-center mb-12 flex-col">

    <div>
        <video src="{{ asset('video/videotelaincial.MOV') }}" autoplay loop muted  class="h-full w-screen"></video>
    </div>

        <h4 class="mt-8 mb-4 text-xl font-semibold">Novidades disponíveis</h4>

<div class="flex mb-8 gap-4">
    
            <a href="" class="w-full max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:shadow-xl transform transition-shadow duration-300 ease-in-out">

                <div class="relative">
                    <img class="object-cover w-full h-64 transition-opacity duration-300 ease-in-out hover:opacity-0" src="{{ asset('image/puma 180 1.png') }}" alt="">
                    
                </div>

                <div class="p-4 text-center">
                    <h3 class="text-md font-semibold text-gray-800">Tênis Puma 180</h3>
                    <p class="text-sm text-gray-600">Preto</p>
                    <p class="text-lg font-bold text-gray-800 mt-2">R$ 1.099,90</p>
                    <p class="text-sm text-gray-500">ou 6x de R$ 183,32</p>
                </div>
            </a>

            <a href="" class="w-full max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:shadow-xl transform transition-shadow duration-300 ease-in-out">

                <div class="relative">
                    <img class="object-cover w-full h-64 transition-opacity duration-300 ease-in-out hover:opacity-0" src="{{ asset('image/j4 verde 1.png') }}" alt="">
                    
                </div>

                <div class="p-4 text-center">
                    <h3 class="text-md font-semibold text-gray-800">Tênis Air Jordan 4 RM</h3>
                    <p class="text-sm text-gray-600">Fence Green</p>
                    <p class="text-lg font-bold text-gray-800 mt-2">R$ 1.099,90</p>
                    <p class="text-sm text-gray-500">ou 6x de R$ 183,32</p>
                </div>
            </a>

            <a href="" class="w-full max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:shadow-xl transform transition-shadow duration-300 ease-in-out">

                <div class="relative">
                    <img class="object-cover w-full h-64 transition-opacity duration-300 ease-in-out hover:opacity-0" src="{{ asset('image/strange love 1.png') }}" alt="">
                    
                </div>

                <div class="p-4 text-center">
                    <h3 class="text-md font-semibold text-gray-800">Tênis Nike Dunk Low</h3>
                    <p class="text-sm text-gray-600">Strange Love</p>
                    <p class="text-lg font-bold text-gray-800 mt-2">R$ 1.099,90</p>
                    <p class="text-sm text-gray-500">ou 6x de R$ 183,32</p>
                </div>
            </a>
   
</div>


        <a href="" class="mt-8  text-xl font-semibold">Ver mais <span><i class="cursor-pointer fa-solid fa-chevron-down"></i></span></a>
        
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
    
    <div class="bg-gray-100 py-10 px-5">
                
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-800">Guia de Tênis: Escolha o Estilo Certo para Cada Ocasião</h1>
            <p class="mt-3 text-gray-600">Descubra os tênis ideais para diversas ocasiões, desde eventos casuais até atividades ao ar livre.</p>
        </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                   
                    <a href="" class="block transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-xl bg-white rounded-lg overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover" src="{{ asset('image/asics 1.png') }}" alt="Tênis Casual">
                        <div class="p-5 text-center">
                            <h2 class="text-xl font-semibold text-gray-800">Tênis</h2>
                            <p class="mt-2 text-gray-600">legenda</p>
                        </div>
                    </a>

                    
                    <a href="" class="block transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-xl bg-white rounded-lg overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover" src="{{ asset('image/asics 1.png') }}" alt="Tênis Esportivo">
                        <div class="p-5 text-center">
                            <h2 class="text-xl font-semibold text-gray-800">Tênis</h2>
                            <p class="mt-2 text-gray-600">legenda</p>
                        </div>
                    </a>

                   
                    <a href="" class="block transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-xl bg-white rounded-lg overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover" src="{{ asset('image/asics 1.png') }}" alt="Tênis para Ocasiões Sociais">
                        <div class="p-5 text-center">
                            <h2 class="text-xl font-semibold text-gray-800">Tênis</h2>
                            <p class="mt-2 text-gray-600">legenda</p>
                        </div>
                    </a>

                    <a href="" class="block transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-xl bg-white rounded-lg overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover" src="{{ asset('image/asics 1.png') }}" alt="Tênis para Aventura">
                        <div class="p-5 text-center">
                            <h2 class="text-xl font-semibold text-gray-800">Tênis</h2>
                            <p class="mt-2 text-gray-600">legenda</p>
                        </div>
                    </a>

                    <a href="" class="block transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-xl bg-white rounded-lg overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover" src="{{ asset('image/asics 1.png') }}" alt="Tênis para Trabalho">
                        <div class="p-5 text-center">
                            <h2 class="text-xl font-semibold text-gray-800">Tênis</h2>
                            <p class="mt-2 text-gray-600">legenda</p>
                        </div>
                    </a>

                    <a href="" class="block transform hover:scale-105 transition-transform duration-300 ease-in-out hover:shadow-xl bg-white rounded-lg overflow-hidden shadow-lg">
                        <img class="w-full h-48 object-cover" src="{{ asset('image/asics 1.png') }}" alt="Tênis para Noite e Festas">
                        <div class="p-5 text-center">
                            <h2 class="text-xl font-semibold text-gray-800">Tênis </h2>
                            <p class="mt-2 text-gray-600">legenda</p>
                        </div>
                    </a>
                    
            </div>
    </div>


            <div class="bg-black text-white py-16 px-8">
                <div class="max-w-4xl mx-auto text-center  flex flex-col md:flex-row items-center gap-8">

                    <div class="w-full md:w-1/3 flex justify-center ">
                        <img src="{{ asset('image/LOGO.png') }}" alt="" class="w-32 h-32 object-contain  rounded-lg shadow-md">
                    </div>


                    <div class="w-full md:w-2/3">
                        <h2 class="text-3xl font-bold  mb-4">Nossa História</h2>
                        <p class=" leading-relaxed">
                            Fundada com paixão e dedicação, nossa loja surgiu com o objetivo de oferecer produtos de qualidade e estilo para todos os nossos clientes. Com anos de experiência no mercado, nos dedicamos a selecionar o melhor em calçados e acessórios, pensando sempre no conforto e na moda. Ao longo dos anos, conquistamos a confiança de nossos clientes e continuamos evoluindo para atender às suas expectativas.
                        </p>
                    </div>
                </div>
            </div>

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
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
</x-app-layout>

<script>
  var splide = new Splide('.splide', {
    type: 'loop',
    padding: '16rem',
  });

  splide.mount();
</script>

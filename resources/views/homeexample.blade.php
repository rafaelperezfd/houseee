

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<main class="items-center justify-center text-center mb-12 flex-col">

<div class="w-full h-4/5 overflow-hidden relative">
    <video src="{{ asset('video/videotelaincial.MOV') }}" autoplay loop muted class="w-full h-full object-cover">
    </video>
</div>



        <h4 class="mt-8 mb-4 text-xl font-semibold">Novidades disponíveis</h4>

<div class="flex mb-8 gap-4" id="product-list">
    <!-- Primeiros 3 produtos -->
    <a href="" class="w-full max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:shadow-xl transform transition-shadow duration-300 ease-in-out">
        <div class="relative">
            <img class="object-cover w-full h-64 transition-opacity duration-300 ease-in-out hover:opacity-0" src="{{ asset('image/puma 180 1.png') }}" alt="">
            <img class="object-cover w-full h-64 absolute top-0 left-0 transition-opacity duration-300 ease-in-out opacity-0 hover:opacity-100" src="{{ asset('image/pumapretosegunda.png') }}" alt="Tênis Puma 180 Hover">
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
            <img class="object-cover w-full h-64 absolute top-0 left-0 transition-opacity duration-300 ease-in-out opacity-0 hover:opacity-100" src="{{ asset('image/segundaimagemtenisverde.webp') }}" alt="Tênis Air Jordan Hover">
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
            <img class="object-cover w-full h-64 transition-opacity duration-300 ease-in-out hover:opacity-0" src="{{ asset('image/strange love 1.png') }}" alt="Tênis Nike Dunk Low">
            <img class="object-cover w-full h-64 absolute top-0 left-0 transition-opacity duration-300 ease-in-out opacity-0 hover:opacity-100" src="{{ asset('image/segundaimagemstrawberry.webp') }}" alt="Tênis Nike Dunk Low Hover">
        </div>
        <div class="p-4 text-center">
            <h3 class="text-md font-semibold text-gray-800">Tênis Nike Dunk Low</h3>
            <p class="text-sm text-gray-600">Strange Love</p>
            <p class="text-lg font-bold text-gray-800 mt-2">R$ 1.099,90</p>
            <p class="text-sm text-gray-500">ou 6x de R$ 183,32</p>
        </div>
    </a>
</div>

<!-- Produtos adicionais, inicialmente ocultos -->
<div id="additional-products" class="hidden">
    
<div class="flex mb-8 gap-4" id="product-list">
    <!-- Primeiros 3 produtos -->
    <a href="" class="w-full max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg bg-white hover:shadow-xl transform transition-shadow duration-300 ease-in-out">
        <div class="relative">
            <img class="object-cover w-full h-64 transition-opacity duration-300 ease-in-out hover:opacity-0" src="{{ asset('image/puma 180 1.png') }}" alt="">
            <img class="object-cover w-full h-64 absolute top-0 left-0 transition-opacity duration-300 ease-in-out opacity-0 hover:opacity-100" src="{{ asset('image/pumapretosegunda.png') }}" alt="Tênis Puma 180 Hover">
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
            <img class="object-cover w-full h-64 absolute top-0 left-0 transition-opacity duration-300 ease-in-out opacity-0 hover:opacity-100" src="{{ asset('image/segundaimagemtenisverde.webp') }}" alt="Tênis Air Jordan Hover">
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
            <img class="object-cover w-full h-64 transition-opacity duration-300 ease-in-out hover:opacity-0" src="{{ asset('image/strange love 1.png') }}" alt="Tênis Nike Dunk Low">
            <img class="object-cover w-full h-64 absolute top-0 left-0 transition-opacity duration-300 ease-in-out opacity-0 hover:opacity-100" src="{{ asset('image/segundaimagemstrawberry.webp') }}" alt="Tênis Nike Dunk Low Hover">
        </div>
        <div class="p-4 text-center">
            <h3 class="text-md font-semibold text-gray-800">Tênis Nike Dunk Low</h3>
            <p class="text-sm text-gray-600">Strange Love</p>
            <p class="text-lg font-bold text-gray-800 mt-2">R$ 1.099,90</p>
            <p class="text-sm text-gray-500">ou 6x de R$ 183,32</p>
        </div>
    </a>
</div>
</div>

<!-- Botões "Ver Mais" e "Ver Menos" -->
<div class="mt-8 text-center">
    <button id="load-more" class="text-xl font-semibold cursor-pointer text-black hover:underline">Ver mais</button>
    <button id="load-less" class="text-xl font-semibold cursor-pointer text-black hover:underline hidden mt-4">Ver menos</button>
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

                    <div class="w-full h-full md:w-1/3 flex justify-center ">
                        <img src="{{ asset('image/LOGO.png') }}" alt="" class="w-70 h-70 object-contain  rounded-lg shadow-md">
                    </div>


                    <div class="w-full md:w-2/3">
                        <h2 class="text-3xl font-bold  mb-4">Nossa História</h2>
                        <p class=" leading-relaxed">
                            Fundada com paixão e dedicação, nossa loja surgiu com o objetivo de oferecer produtos de qualidade e estilo para todos os nossos clientes. Com anos de experiência no mercado, nos dedicamos a selecionar o melhor em calçados e acessórios, pensando sempre no conforto e na moda. Ao longo dos anos, conquistamos a confiança de nossos clientes e continuamos evoluindo para atender às suas expectativas.
                        </p>
                    </div>
                </div>
            </div>


<div class="w-full flex justify-center bg-cover  py-12" style="background-image: url('{{ asset('image/plano de fundo.PNG') }}');">
<div class="max-w-screen-lg w-full px-4">
    <h2 class="text-4xl font-bold text-white text-center mb-12">Veja nossas novidades nas redes sociais</h2>

    <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0 items-center justify-around">
        
        
        <div class="w-full md:w-1/3 space-y-6">
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <model-viewer src="{{asset('3d/air_jordan_1.glb')}}" alt="Tênis 3D" auto-rotate camera-controls class="w-full h-64 object-cover"></model-viewer>
            </div>
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <model-viewer src="{{asset('3d/nike_air_max_90_surplus_desert_camo.glb')}}" alt="Tênis 3D" auto-rotate camera-controls class="w-full h-64 object-cover"></model-viewer>
            </div>
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <model-viewer src="{{asset('3d/nike_air_zoom_pegasus_36.glb')}}" alt="Tênis 3D" auto-rotate camera-controls class="w-full h-64 object-cover"></model-viewer>
            </div>
        </div>

        <div class="w-full   rounded-lg  overflow-hidden p-4">
            <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DBrTHiHRGaF/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); padding:0;">
                <div style="padding:16px;">
                    <a href="https://www.instagram.com/p/DBrTHiHRGaF/?utm_source=ig_embed&amp;utm_campaign=loading" style="background:#FFFFFF; line-height:0; padding:0; text-align:center; text-decoration:none; width:100%;" target="_blank"></a>
                </div>
            </blockquote>
        </div>

        
        <div class="w-full   rounded-lg  overflow-hidden p-4">
            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@housesnkr/video/7426361409249774854" data-video-id="7426361409249774854">
                <section> 
                    <a target="_blank" title="@housesnkr" href="https://www.tiktok.com/@housesnkr?refer=embed">@housesnkr</a> Jordan 1 Low Retro SP Dark Mocha 
                    <a title="sneakers" target="_blank" href="https://www.tiktok.com/tag/sneakers?refer=embed">#sneakers</a> 
                    <a title="nike" target="_blank" href="https://www.tiktok.com/tag/nike?refer=embed">#nike</a> 
                    <a title="jordan" target="_blank" href="https://www.tiktok.com/tag/jordan?refer=embed">#jordan</a> 
                    <a target="_blank" title="♬ som original - House Sneaker" href="https://www.tiktok.com/music/som-original-7426361441007586053?refer=embed">♬ som original - House Sneaker</a>
                </section>
            </blockquote> 
            <script async src="https://www.tiktok.com/embed.js"></script>
        </div>

    </div>
</div>

</div>

                <div class="bg-black py-6 text-center">
                    <h2 class="text-4xl font-bold text-white text-center mb-10">
                        Comentários de nossos compradores
                    </h2>
                
                
                    <!-- Início do Swiper -->
                    <div class="swiper-container max-w-4xl mx-auto py-6">
                        <div class="swiper-wrapper">
                
                            <div class="swiper-slide bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                                <div class="flex items-center mb-4">
                                    <div class="ml-4">
                                        <h3 class="text-lg font-semibold">João Silva</h3>
                                        <div class="flex text-yellow-400">
                                            <span>⭐</span>
                                            <span>⭐</span>
                                            <span>⭐</span>
                                            <span>⭐</span>
                                            <span>⭐</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-gray-300">Tênis muito confortável e estiloso! A entrega foi super rápida. Recomendo!</p>
                            </div>
                
                            <div class="swiper-slide bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                                <div class="flex items-center mb-4">
                                    <div class="ml-4">
                                        <h3 class="text-lg font-semibold">Ana Costa</h3>
                                        <div class="flex text-yellow-400">
                                            <span>⭐</span>
                                            <span>⭐</span>
                                            <span>⭐</span>
                                            <span>⭐</span>
                                            <span>⭐</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-gray-300">Design incrível e muito confortável para usar no dia a dia! Adorei o acabamento.</p>
                            </div>
                
                            <div class="swiper-slide bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                                <div class="flex items-center mb-4">
                                    <div class="ml-4">
                                        <h3 class="text-lg font-semibold">Carlos Nunes</h3>
                                        <div class="flex text-yellow-400">
                                            <span>⭐</span>
                                            <span>⭐</span>
                                            <span>⭐</span>
                                            <span>⭐</span>
                                            <span>⭐</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-gray-300">Tênis top de linha! Super confortável e entrega no prazo. Voltarei a comprar.</p>
                            </div>
                           
                
                        </div>
                
                       
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                
                        <div class="swiper-pagination"></div>
                    </div>
                
                
                    <div class="flex w-full justify-center mt-10">
                        <p class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 uppercase animate-pulse drop-shadow-lg tracking-widest whitespace-nowrap">
                            VENHA ADQUIRIR SEU SNEAKER
                        </p>
                    </div>
                </div>

    </main>

<footer class="h-screen bg-white flex flex-col items-center text-center justify-center p-10">
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

</x-app-layout>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script async src="//www.instagram.com/embed.js"></script>

<script>
       
       document.getElementById('load-more').addEventListener('click', function (event) {
        event.preventDefault(); 
        document.getElementById('additional-products').classList.remove('hidden');
        this.classList.add('hidden');
        document.getElementById('load-less').classList.remove('hidden'); 
    });

    // Função para esconder os produtos adicionais
    document.getElementById('load-less').addEventListener('click', function (event) {
        event.preventDefault();
        document.getElementById('additional-products').classList.add('hidden');
        this.classList.add('hidden');
        document.getElementById('load-more').classList.remove('hidden'); 
    });


    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1, 
        spaceBetween: 30,  
        loop: true,        
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2, 
            },
            1024: {
                slidesPerView: 3,  
            }
        }
    });
    </script>


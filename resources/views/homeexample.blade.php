<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<main class="flex w-full items-center justify-center text-center mb-12 flex-col">

<img src="{{asset('image/imgbanner.png')}}" alt="" class="h-[680px] w-screen">

        <h4 class="mt-8 mb-4 text-xl font-semibold dark:text-white">Novidades disponíveis</h4>

<div class="flex mb-8 gap-24" id="product-list">
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
    
    <div class="flex mb-8 gap-24" id="product-list">
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
    <button id="load-more" class="text-xl font-semibold cursor-pointer text-black dark:text-white hover:underline">Ver mais</button>
    <button id="load-less" class="text-xl font-semibold cursor-pointer text-black dark:text-white hover:underline hidden mt-4">Ver menos</button>
</div>
       

        <h4 class="mt-8 mb-4 text-xl font-semibold dark:text-white">Seus sonhos caminham com você!</h4>
    
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


            <div class="bg-black text-white py-20 px-8">
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

            <!-- style="background-image: url('{{ asset('image/plano de fundo.PNG') }}');" -->
<div class="w-full flex justify-center bg-cover items-center bg-white">
        <div class="w-full px-4 py-16 ">
            <h2 class="text-4xl font-bold text-black  text-center mb-12">Veja nossas novidades nas redes sociais</h2>

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

                <div class="flex justify-center items-center bg-gray-100 p-6 rounded-lg shadow-lg">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.39031938159195!2d-48.49833946856055!3d-21.26176308439215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9441ff355ab6d%3A0x4b48ba67f7581e1!2sCentro%20Empresarial%20Monte%20Alto!5e0!3m2!1spt-BR!2sbr!4v1732187479724!5m2!1spt-BR!2sbr" 
                        width="400" 
                        height="750" 
                        class="rounded-md border-2 border-gray-300 shadow-md" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>

</div>

<div class="bg-black text-center ">
    <h2 class="text-4xl font-bold text-white text-center mb-10">
        Comentários de nossos compradores
    </h2>

<div>
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
    
    
        <div class="max-w-4xl mx-auto mt-12 bg-gray-900 p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-white mb-6">Adicione seu comentário</h3>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="nome" class="block text-gray-400 text-left mb-2">Nome</label>
                    <input type="text" id="nome" name="nome" class="w-full p-3 rounded bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Seu nome" required>
                </div>
                <div class="mb-4">
                    <label for="comentario" class="block text-gray-400 text-left mb-2">Comentário</label>
                    <textarea id="comentario" name="comentario" rows="4" class="w-full p-3 rounded bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-yellow-500" placeholder="Seu comentário" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="avaliacao" class="block text-gray-400 text-left mb-2">Avaliação</label>
                    <select id="avaliacao" name="avaliacao" class="w-full p-3 rounded bg-gray-800 text-gray-200 focus:outline-none focus:ring-2 focus:ring-yellow-500" required>
                        <option value="5">⭐️⭐️⭐️⭐️⭐️ - Excelente</option>
                        <option value="4">⭐️⭐️⭐️⭐️ - Muito bom</option>
                        <option value="3">⭐️⭐️⭐️ - Regular</option>
                        <option value="2">⭐️⭐️ - Ruim</option>
                        <option value="1">⭐️ - Péssimo</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-yellow-500 hover:bg-yellow-600 text-black font-bold py-3 rounded-lg transition">
                    Enviar Comentário
                </button>
            </form>
        </div>
</div>

    <!-- Chamada para ação -->
    <div class="flex w-full justify-center mt-10">
        <p class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600 uppercase animate-pulse drop-shadow-lg tracking-widest whitespace-nowrap">
            VENHA ADQUIRIR SEU SNEAKER
        </p>
    </div>
</div>

    </main>

<footer class="h-full bg-white flex flex-col items-center text-center justify-center py-20 ">
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


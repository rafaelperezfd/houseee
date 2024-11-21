

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

                 
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/DBjIknXxSts/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/DBjIknXxSts/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver essa foto no Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DBjIknXxSts/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Uma publicação compartilhada por House Sneaker (@housesnkr)</a></p></div></blockquote>
                <script async src="//www.instagram.com/embed.js"></script>

            </div>
        </div>

</div>

<div class="bg-black text-center ">
    <h2 class="text-4xl font-bold text-white text-center mb-10">
        Comentários de nossos compradores
    </h2>

<div class="flex">
        <div class="swiper-container max-w-4xl mx-auto py-6">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                    <div class=" items-center flex-col mb-4">
                        <div class="ml-4 ">
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
                    <p class="text-gray-300">Tênis muito confortável e estiloso! A entrega foi super rápida. Recomendo! </p>
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
    
    
        <div class="max-w-4xl mx-auto  bg-gray-900 p-8 rounded-lg shadow-lg">
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

<footer class="h-full bg-gray-200 flex flex-col items-center text-center justify-center py-20 ">
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


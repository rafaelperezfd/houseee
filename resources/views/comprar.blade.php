<x-app-layout class="w-screen">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="justify-center h-20 flex items-center">
        <img class="h-20" src="{{ asset('image/logopreta.png') }}" alt="Logo">
    </div>

    <main>
        <!-- Seção principal -->
        <section class="flex flex-col md:flex-row items-start justify-between bg-gray-50">
            <!-- Barra lateral -->
            <aside class="flex flex-col w-full md:w-1/5 items-center p-4">
                <div class="flex flex-col items-center gap-3 mb-4">
                    <button class="w-20 h-20 border border-gray-300 rounded-lg overflow-hidden">
                        <img src="{{ asset('image/strawberry.png') }}" alt="Imagem miniatura 1">
                    </button>
                    <button class="w-20 h-20 border border-gray-300 rounded-lg overflow-hidden">
                        <img src="{{ asset('image/strawberry.png') }}" alt="Imagem miniatura 2">
                    </button>
                    <button class="w-20 h-20 border border-gray-300 rounded-lg overflow-hidden">
                        <img src="{{ asset('image/strawberry.png') }}" alt="Imagem miniatura 3">
                    </button>
                </div>
                <img class="w-20 h-20 rounded-lg border" src="{{ asset('image/strawberry.png') }}" alt="Nike SB Dunk Low Strangelove">
            </aside>

            <!-- Imagem e detalhes do produto -->
            <div class="flex flex-col items-start md:w-2/5 p-6">
                <img class="rounded-lg border w-full" src="{{ asset('image/strawberry.png') }}" alt="Nike SB Dunk Low Strangelove">
                <h1 class="text-xl font-semibold mt-4">Expectativa de entrega:</h1>
                <p class="text-gray-700 mt-2">15 a 25 dias úteis</p>
                <p class="text-gray-600">Receba sua compra no conforto de sua casa, totalmente segura, juntamente à qualidade excepcional concedida pela House Sneaker.</p>
            </div>

            <!-- Informações do produto -->
            <div class="flex flex-col items-start md:w-2/5 p-6">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Nike SB Dunk Low Strangelove</h2>
                    <p class="text-gray-500 line-through text-lg">R$ 719,90</p>
                    <p class="text-red-500 text-4xl font-bold mb-4">R$ 599,90</p>
                </div>

                <!-- Opções de tamanho -->
                <div class="mb-6">
                    <h3 class="text-gray-700 mb-2">Tamanho</h3>
                    <div class="grid grid-cols-5 gap-3">
                        <button class="border py-2 px-4 rounded text-gray-700 hover:border-red-500">36</button>
                        <button class="border py-2 px-4 rounded text-gray-700 hover:border-red-500">37</button>
                        <button class="border py-2 px-4 rounded text-gray-700 hover:border-red-500">38</button>
                        <button class="border py-2 px-4 rounded text-gray-700 hover:border-red-500">39</button>
                        <button class="border py-2 px-4 rounded text-gray-700 hover:border-red-500">40</button>
                        <button class="border py-2 px-4 rounded text-gray-700 hover:border-red-500">41</button>
                        <button class="border py-2 px-4 rounded text-gray-700 hover:border-red-500">42</button>
                        <button class="border py-2 px-4 rounded text-gray-700 hover:border-red-500">43</button>
                        <button class="border py-2 px-4 rounded text-gray-700 hover:border-red-500">44</button>
                    </div>
                </div>

                <!-- Detalhes adicionais -->
                <section class="space-y-4">
                    <details class="border-t border-gray-300 pt-2">
                        <summary class="cursor-pointer text-gray-800 font-medium">Detalhes do Sneaker</summary>
                        <p class="text-gray-500 mt-2">Descrição detalhada do produto.</p>
                    </details>
                    <details class="border-t border-gray-300 pt-2">
                        <summary class="cursor-pointer text-gray-800 font-medium">Seguro de compra</summary>
                        <p class="text-gray-500 mt-2">Informações sobre o seguro de compra.</p>
                    </details>
                    <details class="border-t border-gray-300 pt-2">
                        <summary class="cursor-pointer text-gray-800 font-medium">Tabela de Tamanhos</summary>
                        <p class="text-gray-500 mt-2">Guia de tamanhos disponíveis.</p>
                    </details>
                    <details class="border-t border-gray-300 pt-2">
                        <summary class="cursor-pointer text-gray-800 font-medium">Troca e devoluções</summary>
                        <p class="text-gray-500 mt-2">Política de trocas e devoluções.</p>
                    </details>
                </section>
            </div>
        </section>

        <!-- Avaliações -->
        <section class="py-20 flex flex-col items-center ">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Avaliações</h1>
            <div class="flex items-center space-x-12">
                <div class="flex gap-2">
                    <span class="text-gray-400 text-3xl">★</span>
                    <span class="text-gray-400 text-3xl">★</span>
                    <span class="text-gray-400 text-3xl">★</span>
                    <span class="text-gray-400 text-3xl">★</span>
                    <span class="text-gray-400 text-3xl">★</span>
                </div>
                <div class="w-px bg-gray-300 h-44"></div>
                <div class="flex flex-col">
                    <textarea class="w-72 p-3 border border-gray-300 rounded resize-none focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Deixe sua avaliação aqui..."></textarea>
                    <button class="mt-4 px-5 py-2 bg-black text-white rounded hover:bg-gray-800">Enviar Avaliação</button>
                </div>
            </div>
        </section>

        <section class="mx-auto p-6">
            <div class="mb-8">
                <h2 class="text-lg font-bold mb-4">Talvez se interesse</h2>
                <div class="grid grid-cols-5 gap-4">
                    <article class="text-center">
                        <img src="{{ asset('image/tenispreto.png') }}" alt="Produto 1" class="w-full rounded-md">
                        <p class="font-medium mt-2">Korn x adidas Campus 00s</p>
                        <p class="text-gray-500">Core Black</p>
                    </article>
                    <article class="text-center">
                        <img src="{{ asset('image/botina.png') }}" alt="Produto 2" class="w-full rounded-md">
                        <p class="font-medium mt-2">Air Jordan 4</p>
                        <p class="text-gray-500">Taupe Haze</p>
                    </article>
                    <article class="text-center">
                        <img src="{{ asset('image/tenismarrom.png') }}" alt="Produto 3" class="w-full rounded-md">
                        <p class="font-medium mt-2">Nike Dunk Low</p>
                        <p class="text-gray-500">Cacao Wow</p>
                    </article>
                    <article class="text-center">
                        <img src="{{ asset('image/tenisnew.png') }}" alt="Produto 4" class="w-full rounded-md">
                        <p class="font-medium mt-2">New Balance 9060</p>
                        <p class="text-gray-500">Castlerock</p>
                    </article>
                    <article class="text-center">
                        <img src="{{ asset('image/tenisbranco.png') }}" alt="Produto 5" class="w-full rounded-md">
                        <p class="font-medium mt-2">Nike Air Max Plus</p>
                        <p class="text-gray-500">Core Black</p>
                    </article>
                </div>
            </div>

           
            <section class="mt-8 bg-white p-6 rounded-md shadow-sm">
                <h3 class="text-lg font-semibold text-center mb-4">Receba novidades por e-mail</h3>
                <form class="flex items-center justify-center">
                    <input type="email" placeholder="E-mail" class="border border-gray-300 rounded-l-md px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">
                    <button type="submit" class="bg-black text-white px-4 py-2 rounded-r-md">→</button>
                </form>
            </section>
        </section>
    </main>

     
    <div class="flex w-full justify-center mt-10">
        <p class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-600 uppercase animate-pulse drop-shadow-lg tracking-widest whitespace-nowrap">
            VENHA ADQUIRIR SEU SNEAKER
        </p>
    </div>
</div>


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

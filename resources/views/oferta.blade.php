<x-app-layout>
    <main >
        <div class="justify-center items-center flex ">
            <h1 class="text-2xl font-bold">Ofertas</h1>
        </div>
            <section class="grid max-w-4xl grid-cols-3 gap-6 py-10  items-center">
                <button class="text-center relative">
                    <img src="{{ asset('image/ADIDAS-CAMPUS-00S-DARK-GREEN-JUICY-SNEAKERS1_98cbdb95-5c4b-4736-aff0-d06f8edc6ddb 1.png') }}" alt="Produto 4" class="w-72 h-72 rounded-md object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-50 rounded-md">
                        <p class="text-black text-2xl font-bold">Campus 00s</p>
                    </div>
                </button>

                <button class="text-center relative">
                    <img src="{{ asset('image/air-jordan-4-thunder-original-sneaker-sul1_jpg 1.png') }}" alt="Produto 4" class="w-72 h-72 rounded-md object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-50 rounded-md">
                        <p class="text-black text-2xl font-bold">Jordan 4</p>
                    </div>
                </button>

                <button class="text-center relative">
                    <img src="{{ asset('image/fundo2.png') }}" alt="Produto 4" class="w-72 h-72 rounded-md object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-50 rounded-md">
                        <p class="text-black text-2xl font-bold">Dunk</p>
                    </div>
                </button>

                <button class="text-center relative">
                    <img src="{{ asset('image/nikefundo.png') }}" alt="Produto 4" class="w-72 h-72 rounded-md object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-50 rounded-md">
                        <p class="text-black text-2xl font-bold">Air Max Plus</p>
                    </div>
                </button>

                <button class="text-center relative">
                    <img src="{{ asset('image/png 1.png') }}" alt="Produto 4" class="w-72 h-72 rounded-md object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-50 rounded-md">
                        <p class="text-black text-2xl font-bold">Puma 180</p>
                    </div>
                </button>

                <button class="text-center relative">
                    <img src="{{ asset('image/image 2.png') }}" alt="Produto 4" class="w-72 h-72 rounded-md object-cover">
                    <div class="absolute inset-0 flex items-center justify-center bg-white bg-opacity-50 rounded-md">
                        <p class="text-black text-2xl font-bold">Vans Knu Skool</p>
                    </div>
                </button>
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

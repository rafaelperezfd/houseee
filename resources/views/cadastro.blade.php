<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Sneakers</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

 <main class="flex flex-col md:flex-row md:justify-center bg-black min-h-screen">
     
     <div class="w-full md:w-1/2 p-8 flex flex-col items-center justify-center">
         <h2 class="text-3xl font-bold text-white mb-2">CADASTRA-SE</h2>
         <div class="text-white mb-6">
             <img src="{{ asset('image/IMG_5921 2.png') }}" alt="House Sneaker Logo" class="mx-auto mb-4">
         </div>
         <form class="w-full max-w-xs">
             <div class="mb-4">
                 <input
                     class="w-full px-4 py-2 text-black border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                     type="text" placeholder="Seu nome" required>
             </div>
             <div class="mb-4">
                 <input
                     class="w-full px-4 py-2 text-black border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                     type="email" placeholder="E-mail" required>
             </div>
             <div class="mb-4">
                 <input
                     class="w-full px-4 py-2 text-black border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                     type="password" placeholder="Senha" required>
             </div>
             <div class="mb-4">
                 <input
                     class="w-full px-4 py-2 text-black border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
                     type="text" placeholder="CPF" required>
             </div>
             <div class="text-center text-white mb-4">
                 <a href="login" class="text-sm underline hover:text-orange-500">Já tem uma conta? Clique Aqui.</a>
             </div>
             <button
                 type="submit"
                 class="w-full bg-orange-600 hover:bg-orange-700 text-white font-semibold py-2 rounded-lg transition duration-200">
                 Finalizar cadastro
             </button>
         </form>
     </div>
     
     <div class="w-1/2 h-screen bg-no-repeat md:block hidden bg-cover bg-center" style="background-image: url('{{ asset('image/login.png') }}');"></div>
 </main>

</body>
</html>

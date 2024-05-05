@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="https://cdn.tailwindcss.com"></script>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="bg-purple-500 min-h-screen flex items-center justify-center p-4">
    <div class="flex flex-wrap lg:flex-nowrap bg-white rounded-lg shadow-xl overflow-hidden w-full lg:w-4/5 my-8">
        
        <div class="bg-purple-700 text-white p-6 flex flex-col items-center justify-between w-full lg:w-1/3 ">
            <div class="space-y-4 ">
                <div class="justify-center flex items-center">
                    <input type="file" id="imagenInput" name="foto" class="hidden" accept="image/*">
                        <div class="bg-[#B1796C] w-40 h-40 relative rounded-full overflow-hidden">
                            <div id="imagenPreview" class="w-full h-full bg-cover bg-center"></div>

                            <button type="button" onclick="document.getElementById('imagenInput').click()" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-20 text-white hover:bg-opacity-50 transition">
                                Seleccionar Imagen
                            </button>

                        </div>

                </div>
                <div>
                    <p class="text-sm">You can edit your profile or upload a new one on app or web.</p>
                </div>
            </div>
        </div>

        
        <div class="flex-1 p-2">
            <div class="mb-2">
                {{ $slot }}
        </div>
    </div>
</body>

        @livewireScripts
    </body>
</html>
  <!-- Scripts -->

<script>
   // Función para manejar el cambio en el input de la imagen
   function mostrarImagenPreview() {
            const input = document.getElementById('imagenInput');
            const preview = document.getElementById('imagenPreview');

            // Verifica si se seleccionó una imagen
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    // Asigna la imagen al fondo del contenedor
                    preview.style.backgroundImage = `url('${e.target.result}')`;
                };

                // Lee el contenido de la imagen seleccionada
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Asigna el evento de cambio al input de la imagen
        document.getElementById('imagenInput').addEventListener('change', mostrarImagenPreview);
    </script>
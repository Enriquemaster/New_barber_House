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

     
    </head>
    <body class="bg-slate-900 min-h-screen flex items-center justify-center p-4">
    <div class="flex flex-wrap lg:flex-nowrap bg-white rounded-lg shadow-xl overflow-hidden w-full lg:w-4/5 my-8">
        
        <div class="bg-purple-700 text-white p-6 flex flex-col items-center justify-between w-full lg:w-1/3 ">
            <div class="space-y-4 ">
                <div class="justify-center flex items-center">
                </div>
                <div>


                
                    <p class="text-sm">You can edit your profile or upload a new one on app or web.</p>
                </div>
            </div>
        </div>

        
        <div class="flex-1 p-2 ">
            <div class="mb-2 ">
                {{ $slot }}
        </div>
    </div>
</body>

     
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
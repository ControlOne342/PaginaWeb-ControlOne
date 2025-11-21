<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | Control One' : 'Control One - Sellos de Seguridad'; ?></title>
    <meta name="description" content="Fabricantes de sellos de seguridad de alta calidad para logística y transporte.">
    
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://cdn.tailwindcss.com">
	<link rel="dns-prefetch" href="https://cdn.tailwindcss.com">

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0B2239', // Azul Oxford Oscuro
                        accent: '#F5A623',  // Naranja Seguridad
                        industrial: '#F4F6F8', // Gris Industrial Claro
                        dark: '#333333',    // Gris Oscuro Texto
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Estilos base adicionales si son necesarios */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-industrial text-dark flex flex-col min-h-screen">

    <!-- Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
    				<a href="index.php" class="hover:opacity-90 transition-opacity">
        			<img src="assets/img/logo-control-one-industrial.avif" alt="Control One Logo" class="h-10 w-auto">
    			</a>
				</div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="index.php" class="text-dark hover:text-primary font-medium transition-colors duration-200">Inicio</a>
                    <a href="nosotros.php" class="text-dark hover:text-primary font-medium transition-colors duration-200">Nosotros</a>
                    <a href="productos.php" class="text-dark hover:text-primary font-medium transition-colors duration-200">Productos</a>
                    <a href="contacto.php" class="text-dark hover:text-primary font-medium transition-colors duration-200">Contacto</a>
                </div>

                <!-- CTA Button (Desktop) -->
                <div class="hidden md:flex items-center">
                    <a href="contacto.php" class="bg-accent hover:bg-orange-500 text-white px-6 py-2.5 rounded-md font-semibold transition-colors duration-200 shadow-sm">
                        Cotizar
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-btn" type="button" class="text-primary hover:text-dark focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary p-2 rounded-md" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menú principal</span>
                        <!-- Icono Hamburguesa -->
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu (Hidden by default) -->
        <div class="hidden md:hidden bg-white border-t border-gray-100" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="index.php" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:text-primary hover:bg-gray-50 transition-colors">Inicio</a>
                <a href="nosotros.php" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:text-primary hover:bg-gray-50 transition-colors">Nosotros</a>
                <a href="productos.php" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:text-primary hover:bg-gray-50 transition-colors">Productos</a>
                <a href="contacto.php" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:text-primary hover:bg-gray-50 transition-colors">Contacto</a>
            </div>
            <div class="pt-4 pb-4 border-t border-gray-200 px-4">
                <a href="contacto.php" class="block w-full text-center bg-accent hover:bg-orange-500 text-white px-6 py-3 rounded-md font-semibold transition-colors shadow-sm">
                    Cotizar Ahora
                </a>
            </div>
        </div>
    </header>

    <script>
        // Lógica simple para el menú móvil
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');

            if (btn && menu) {
                btn.addEventListener('click', () => {
                    const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                    btn.setAttribute('aria-expanded', !isExpanded);
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script>

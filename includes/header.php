<!DOCTYPE html>
<html lang="es">
<head>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WK5H5DD2');</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L71JSWZBLN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-L71JSWZBLN');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="canonical" href="https://controlone.com.mx<?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">
    
    <title><?php echo isset($page_title) ? $page_title . ' | Control One' : 'Control One - Sellos de Seguridad ISO 17712'; ?></title>
    
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Fabricantes de sellos de seguridad de alta calidad, certificados ISO 17712 y C-TPAT. Envíos a todo México para logística y transporte.'; ?>">
    
    <link rel="icon" href="/assets/img/icon.png" type="image/png">
    <link rel="shortcut icon" href="/assets/img/icon.png" type="image/png">
    <link rel="apple-touch-icon" href="/assets/img/icon.png">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'Control One - Seguridad Logística'; ?>">
    <meta property="og:description" content="<?php echo isset($meta_description) ? $meta_description : 'Soluciones de seguridad certificadas para tu cadena de suministro.'; ?>">
    <meta property="og:image" content="<?php echo isset($page_image) ? 'https://controlone.com.mx/' . $page_image : 'https://controlone.com.mx/assets/img/logo-control-one-industrial.avif'; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0B2239', 
                        accent: '#F5A623',  
                        industrial: '#F4F6F8', 
                        dark: '#333333',    
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>

<base href="https://controlone.com.mx/">

<body class="bg-industrial text-dark flex flex-col min-h-screen">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK5H5DD2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="hover:opacity-90 transition-opacity">
                        <img src="/assets/img/logo-control-one-industrial.avif" alt="Control One Logo" class="h-10 w-auto">
                    </a>
                </div>

                <div class="hidden md:flex space-x-8 items-center">
                    <a href="/" class="text-dark hover:text-primary font-medium transition-colors duration-200">Inicio</a>
                    <a href="/nosotros" class="text-dark hover:text-primary font-medium transition-colors duration-200">Nosotros</a>
                    <a href="/productos" class="text-dark hover:text-primary font-medium transition-colors duration-200">Productos</a>
                    <a href="/blog" class="text-dark hover:text-primary font-medium transition-colors duration-200">Blog</a>
                    <a href="/contacto" class="text-dark hover:text-primary font-medium transition-colors duration-200">Contacto</a>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    <a href="/assets/pdf/Catalogo.pdf" target="_blank" class="text-gray-500 hover:text-primary font-medium flex items-center transition-colors" title="Descargar Catálogo">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        <span class="text-sm">Catálogo PDF</span>
                    </a>
                    <a href="/contacto" class="bg-accent hover:bg-orange-500 text-white px-6 py-2.5 rounded-md font-semibold transition-colors duration-200 shadow-sm">
                        Cotizar
                    </a>
                </div>

                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-btn" type="button" class="text-primary hover:text-dark focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary p-2 rounded-md" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Abrir menú principal</span>
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <div class="hidden md:hidden bg-white border-t border-gray-100" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:text-primary hover:bg-gray-50 transition-colors">Inicio</a>
                <a href="/nosotros" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:text-primary hover:bg-gray-50 transition-colors">Nosotros</a>
                <a href="/productos" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:text-primary hover:bg-gray-50 transition-colors">Productos</a>
                <a href="/blog" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:text-primary hover:bg-gray-50 transition-colors">Blog</a>
                <a href="/contacto" class="block px-3 py-2 rounded-md text-base font-medium text-dark hover:text-primary hover:bg-gray-50 transition-colors">Contacto</a>
            </div>
            <div class="pt-4 pb-4 border-t border-gray-200 px-4">
                <a href="/contacto" class="block w-full text-center bg-accent hover:bg-orange-500 text-white px-6 py-3 rounded-md font-semibold transition-colors shadow-sm">
                    Cotizar Ahora
                </a>
            </div>
        </div>
    </header>

    <script>
        // Lógica para el menú móvil
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
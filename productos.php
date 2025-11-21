<?php 
$page_title = "Productos";
include 'includes/header.php'; 
?>

<main>
    <!-- Simple Hero Section -->
    <section class="relative bg-primary h-[400px] flex items-center justify-center text-center">
        <div class="absolute inset-0 z-0">
            <!-- Placeholder image for warehouse/logistics background -->
            <img src="https://picsum.photos/1920/600?grayscale&blur=2" alt="Almacén Logístico" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Catálogo de Soluciones de Seguridad</h1>
            <p class="text-xl text-gray-200 max-w-2xl mx-auto">Navega por nuestras categorías especializadas y encuentra el sello perfecto para tu operación.</p>
        </div>
    </section>

    <!-- Master Category Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                
                <!-- Category 1: Alta Seguridad -->
                <div id="alta-seguridad" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col h-full border border-gray-100">
                    <div class="h-64 bg-gray-200 relative overflow-hidden group">
                        <img src="https://picsum.photos/600/400?random=10" alt="Sellos de Alta Seguridad" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">ISO 17712</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-primary mb-4">Alta Seguridad</h3>
                        <p class="text-gray-600 mb-6">Diseñados para resistir intentos de manipulación agresiva. Ideales para comercio internacional.</p>
                        
                        <ul class="space-y-3 mb-8 flex-grow">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Resistencia >1000kg
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Acero Galvanizado
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Cumple C-TPAT
                            </li>
                        </ul>

                        <a href="contacto.php?producto=alta-seguridad" class="block w-full text-center bg-primary hover:bg-blue-900 text-white py-3 rounded-md font-semibold transition-colors">
                            Ver Detalles
                        </a>
                    </div>
                </div>

                <!-- Category 2: Plásticos -->
                <div id="plasticos" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col h-full border border-gray-100">
                    <div class="h-64 bg-gray-200 relative overflow-hidden group">
                        <img src="https://picsum.photos/600/400?random=11" alt="Sellos de Plástico" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Versátil</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-primary mb-4">Sellos de Plástico</h3>
                        <p class="text-gray-600 mb-6">Soluciones indicativas para control visual rápido y eficiente en múltiples aplicaciones.</p>
                        
                        <ul class="space-y-3 mb-8 flex-grow">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Trazabilidad Total
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Variedad de Colores
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Fácil Aplicación
                            </li>
                        </ul>

                        <a href="contacto.php?producto=plasticos" class="block w-full text-center bg-primary hover:bg-blue-900 text-white py-3 rounded-md font-semibold transition-colors">
                            Ver Detalles
                        </a>
                    </div>
                </div>

                <!-- Category 3: Metálicos -->
                <div id="metalicos" class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 flex flex-col h-full border border-gray-100">
                    <div class="h-64 bg-gray-200 relative overflow-hidden group">
                        <img src="https://picsum.photos/600/400?random=12" alt="Sellos Metálicos" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-gray-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Robusto</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-primary mb-4">Sellos Metálicos</h3>
                        <p class="text-gray-600 mb-6">Resistencia intermedia con flexibilidad de uso. Cuerpo metálico para mayor durabilidad.</p>
                        
                        <ul class="space-y-3 mb-8 flex-grow">
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Cable Flexible
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Cuerpo de Aluminio
                            </li>
                            <li class="flex items-center text-gray-700">
                                <svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                Alta Durabilidad
                            </li>
                        </ul>

                        <a href="contacto.php?producto=metalicos" class="block w-full text-center bg-primary hover:bg-blue-900 text-white py-3 rounded-md font-semibold transition-colors">
                            Ver Detalles
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Customization Section -->
    <section class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                
                <!-- Text Content -->
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6">Fabricación a la Medida</h2>
                    <div class="w-20 h-1 bg-accent mb-8"></div>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Entendemos que cada operación logística es única. Por eso, ofrecemos servicios completos de personalización para todos nuestros sellos de seguridad.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4 text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary">Grabado Láser de Alta Precisión</h4>
                                <p class="text-sm text-gray-500">Numeración consecutiva, códigos de barras y QR indelebles.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4 text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary">Logotipos Corporativos</h4>
                                <p class="text-sm text-gray-500">Refuerza tu imagen de marca imprimiendo tu logo en cada sello.</p>
                            </div>
                        </li>
                    </ul>
                    <a href="contacto.php?tema=personalizacion" class="inline-block border-2 border-primary text-primary hover:bg-primary hover:text-white px-8 py-3 rounded-md font-bold transition-colors">
                        Consultar Personalización
                    </a>
                </div>

                <!-- Image Content -->
                <div class="lg:w-1/2 relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-accent/20 rounded-full z-0"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-primary/10 rounded-full z-0"></div>
                    <img src="https://picsum.photos/800/600?random=20" alt="Personalización de Sellos" class="relative z-10 rounded-lg shadow-2xl w-full object-cover transform hover:scale-[1.02] transition-transform duration-500">
                </div>

            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

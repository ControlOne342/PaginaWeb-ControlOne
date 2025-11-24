<?php 
$page_title = "Productos";
include 'includes/header.php'; 
?>

<main>
    <!-- Hero Section -->
    <section class="relative bg-primary h-[500px] flex items-center justify-center text-center">
        <div class="absolute inset-0 z-0">
            <!-- Placeholder image for warehouse/logistics background -->
            <img src="https://picsum.photos/1920/600?grayscale&blur=2" alt="Almacén Logístico" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">Nuestros Productos Más Vendidos</h1>
            <p class="text-xl text-gray-200 max-w-3xl mx-auto mb-10">Soluciones de seguridad probadas y certificadas para proteger tus activos más valiosos en cada eslabón de la cadena de suministro.</p>
            
            <a href="assets/pdf/Catalogo.pdf" target="_blank" class="inline-flex items-center bg-accent hover:bg-orange-500 text-white px-8 py-4 rounded-md font-bold text-lg transition-all transform hover:-translate-y-1 shadow-lg group">
                <svg class="w-6 h-6 mr-3 group-hover:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Descargar Catálogo Técnico (PDF)
            </a>
        </div>
    </section>

    <!-- SECCIÓN 1: ALTA SEGURIDAD (ISO 17712) -->
    <section id="alta-seguridad" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-12">
                <div class="w-2 h-12 bg-primary mr-4"></div>
                <div>
                    <h2 class="text-3xl font-bold text-primary">Alta Seguridad (ISO 17712)</h2>
                    <p class="text-gray-500 mt-1">Certificados para C-TPAT y exportación internacional.</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Producto A: Star One Seal -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden flex flex-col hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-72 bg-gray-100 relative overflow-hidden">
                        <img src="assets/img/sello-seguridad-star-one-indicativo.avif" alt="Star One Seal" class="w-full h-full object-contain p-8 group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Exportación</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-primary mb-3">Star One Seal</h3>
                        <p class="text-gray-600 mb-6">El estándar de oro en seguridad de contenedores.</p>
                        
                        <div class="bg-gray-50 p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-sm text-gray-700 mb-2 uppercase tracking-wider">Datos Técnicos</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-center"><span class="w-2 h-2 bg-accent rounded-full mr-2"></span>Resistencia > 1,000 kgF</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-accent rounded-full mr-2"></span>Material: Acero galvanizado + ABS</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-accent rounded-full mr-2"></span>Certificado C-TPAT / ISO 17712</li>
                            </ul>
                        </div>

                        <a href="contacto.php?producto=star-one-seal" class="mt-auto block w-full text-center bg-primary hover:bg-blue-900 text-white py-3 rounded-md font-semibold transition-colors">
                            Cotizar Ahora
                        </a>
                    </div>
                </div>

                <!-- Producto B: C-ONE 316 -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden flex flex-col hover:shadow-2xl transition-all duration-300 group">
                    <div class="h-72 bg-gray-100 relative overflow-hidden">
                        <img src="assets/img/sello-tipo-cable-c-one316.avif" alt="C-ONE 316" class="w-full h-full object-contain p-8 group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute top-4 right-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Cable Robusto</div>
                    </div>
                    <div class="p-8 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-primary mb-3">C-ONE 316</h3>
                        <p class="text-gray-600 mb-6">Máxima flexibilidad sin sacrificar seguridad extrema.</p>
                        
                        <div class="bg-gray-50 p-4 rounded-lg mb-6">
                            <h4 class="font-semibold text-sm text-gray-700 mb-2 uppercase tracking-wider">Datos Técnicos</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-center"><span class="w-2 h-2 bg-accent rounded-full mr-2"></span>Cable 3/16" (4.7 mm)</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-accent rounded-full mr-2"></span>Resistencia > 1,000 kgF</li>
                                <li class="flex items-center"><span class="w-2 h-2 bg-accent rounded-full mr-2"></span>Tecnología: Se destrenza al corte</li>
                            </ul>
                        </div>

                        <a href="contacto.php?producto=c-one-316" class="mt-auto block w-full text-center bg-primary hover:bg-blue-900 text-white py-3 rounded-md font-semibold transition-colors">
                            Cotizar Ahora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 2: CABLES DE ACERO (Logística Terrestre) -->
    <section id="cables-acero" class="py-20 bg-industrial border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-12">
                <div class="w-2 h-12 bg-gray-600 mr-4"></div>
                <div>
                    <h2 class="text-3xl font-bold text-primary">Cables de Acero (Logística Terrestre)</h2>
                    <p class="text-gray-500 mt-1">Seguridad versátil para camiones, cajas secas y reparto.</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Producto A: C-ONE X6 -->
                <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="md:w-1/3 bg-gray-200 relative">
                         <img src="assets/img/sello-tipo-cable-c-onex6.avif" alt="C-ONE X6" class="w-full h-full object-contain p-4">
                    </div>
                    <div class="p-6 md:w-2/3 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-primary mb-2">C-ONE X6</h3>
                        <div class="mb-4">
                            <span class="text-sm font-semibold text-gray-500 uppercase">Especificaciones:</span>
                            <p class="text-gray-700">Cable 1.8 mm | Resistencia > 306 kgF</p>
                        </div>
                        <a href="contacto.php?producto=c-one-x6" class="text-accent font-bold hover:text-orange-600 flex items-center">
                            Solicitar Cotización <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Producto B: C-ONE 116 -->
                <div class="flex flex-col md:flex-row bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="md:w-1/3 bg-gray-200 relative">
                         <img src="assets/img/sello-tipo-cable-c-one116.avif" alt="C-ONE 116" class="w-full h-full object-contain p-4">
                    </div>
                    <div class="p-6 md:w-2/3 flex flex-col justify-center">
                        <h3 class="text-xl font-bold text-primary mb-2">C-ONE 116</h3>
                        <div class="mb-4">
                            <span class="text-sm font-semibold text-gray-500 uppercase">Especificaciones:</span>
                            <p class="text-gray-700">Cable 1/16" (1.58 mm) | Resistencia > 210 kgF</p>
                        </div>
                        <a href="contacto.php?producto=c-one-116" class="text-accent font-bold hover:text-orange-600 flex items-center">
                            Solicitar Cotización <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 3: LÍNEA PLÁSTICOS (Grid de 3 columnas) -->
    <section id="plasticos" class="py-20 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-2">Línea Plásticos (Control e Indicativos)</h2>
                <div class="w-20 h-1 bg-accent mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Producto A: Quantum 12 -->
                <div class="bg-white border border-gray-100 rounded-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="h-40 mb-4 flex items-center justify-center bg-gray-50 rounded-md">
                        <img src="assets/img/precinto-plastico-quantum-ajustable.avif" alt="Quantum 12" class="h-32 w-auto object-contain">
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2">Quantum 12</h3>
                    <p class="text-sm text-gray-500 mb-4">El estándar de la industria.</p>
                    <span class="inline-block bg-blue-100 text-primary text-xs font-bold px-2 py-1 rounded mb-4">Inserto Metálico</span>
                    <a href="contacto.php?producto=quantum-12" class="block w-full border border-primary text-primary hover:bg-primary hover:text-white py-2 rounded transition-colors font-medium">Cotizar</a>
                </div>

                <!-- Producto B: Quantum R12 -->
                <div class="bg-white border border-gray-100 rounded-lg p-6 text-center hover:shadow-xl transition-shadow duration-300 relative">
                    <div class="absolute top-0 right-0 bg-accent text-white text-xs font-bold px-2 py-1 rounded-bl-lg">Reforzado</div>
                    <div class="h-40 mb-4 flex items-center justify-center bg-gray-50 rounded-md">
                        <img src="assets/img/sello-plastico-quamtum-r-12.avif" alt="Quantum R12" class="h-32 w-auto object-contain">
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2">Quantum R12</h3>
                    <p class="text-sm text-gray-500 mb-4">Mayor resistencia a la tracción.</p>
                    <span class="inline-block bg-blue-100 text-primary text-xs font-bold px-2 py-1 rounded mb-4">Alta Tracción</span>
                    <a href="contacto.php?producto=quantum-r12" class="block w-full border border-primary text-primary hover:bg-primary hover:text-white py-2 rounded transition-colors font-medium">Cotizar</a>
                </div>

                <!-- Producto C: Quantum R18 -->
                <div class="bg-white border border-gray-100 rounded-lg p-6 text-center hover:shadow-xl transition-shadow duration-300">
                    <div class="h-40 mb-4 flex items-center justify-center bg-gray-50 rounded-md">
                        <img src="assets/img/sello-plastico-quantum-r-18.avif" alt="Quantum R18" class="h-32 w-auto object-contain">
                    </div>
                    <h3 class="text-lg font-bold text-primary mb-2">Quantum R18</h3>
                    <p class="text-sm text-gray-500 mb-4">Longitud extendida para aplicaciones especiales.</p>
                    <span class="inline-block bg-blue-100 text-primary text-xs font-bold px-2 py-1 rounded mb-4">Largo: 45cm</span>
                    <a href="contacto.php?producto=quantum-r18" class="block w-full border border-primary text-primary hover:bg-primary hover:text-white py-2 rounded transition-colors font-medium">Cotizar</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 4: SOLUCIONES BANCARIAS (Banner ancho) -->
    <section id="bancario" class="py-20 bg-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('assets/img/boveda.avif')] bg-repeat space"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <span class="text-accent font-bold tracking-widest uppercase mb-2 block">La Opción Preferida de la Banca</span>
                    <h2 class="text-4xl font-bold mb-6">C-CASH: Seguridad para Valores</h2>
                    <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                        Elegido por las principales instituciones financieras para el traslado seguro de efectivo. Su sistema de "spikes" garantiza un agarre inamovible en bolsas de lona, haciendo imposible la manipulación sin dejar evidencia.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center"><svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Sistema de agarre "Spikes" para tela</li>
                        <li class="flex items-center"><svg class="w-5 h-5 text-accent mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Ideal para bolsas de dinero y valijas</li>
                    </ul>
                    <a href="contacto.php?producto=c-cash" class="inline-block bg-white text-primary hover:bg-gray-100 px-8 py-3 rounded-md font-bold transition-colors">
                        Cotizar C-CASH
                    </a>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative w-full max-w-md aspect-video bg-white/10 rounded-xl backdrop-blur-sm p-4 border border-white/20 shadow-2xl">
                        <img src="assets/img/sello-de-seguridad-para-bancos-c-cash.avif" alt="C-CASH Seal" class="w-full h-full object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>

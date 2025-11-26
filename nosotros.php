<?php 
$page_title = "Nosotros";
include 'includes/header.php'; 
?>

<main>
    <!-- Hero Section -->
    <section class="relative bg-primary h-[400px] flex items-center justify-center text-center">
        <div class="absolute inset-0 z-0">
            <img src="assets/img/bodega-control-one-sellos-seguridad.avif" alt="Oficinas Control One" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        </div>
        <div class="relative z-10 container mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Liderando la Seguridad Logística</h1>
            <p class="text-xl text-gray-200 max-w-2xl mx-auto">Más de una década protegiendo activos y garantizando la integridad de la cadena de suministro.</p>
        </div>
    </section>

    <!-- History Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Text Content -->
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold text-primary mb-6">Nuestra Historia</h2>
                    <div class="w-16 h-1 bg-accent mb-6"></div>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Desde nuestra fundación, Control One se ha dedicado a innovar en el diseño y fabricación de sellos de seguridad. Nacimos con la misión de combatir las pérdidas por robo y manipulación en el transporte de carga.
                    </p>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Hoy en día, somos un referente en la industria, colaborando con las principales empresas de logística, transporte y retail en México y Latinoamérica. Nuestro compromiso con la calidad nos ha llevado a obtener las certificaciones más exigentes del mercado.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        No solo vendemos sellos; ofrecemos tranquilidad y control total sobre sus activos más valiosos.
                    </p>
                </div>
                <!-- Image Content -->
                <div class="lg:w-1/2">
                    <div class="relative rounded-lg shadow-xl overflow-hidden">
                        <img src="assets/img/historia.avif" alt="Equipo Control One" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
                            <p class="text-white font-semibold">Compromiso y Tecnología en cada sello.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Section (Recycled) -->
    <section class="py-16 bg-industrial border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary">Certificaciones y Cumplimiento</h2>
                <p class="text-gray-600 mt-2">Operamos bajo los más estrictos estándares internacionales.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center max-w-4xl mx-auto">
                <!-- Item 1 -->
                <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-sm">
                    <div class="w-16 h-16 bg-industrial rounded-full flex items-center justify-center mb-4 text-accent">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-lg font-bold text-primary">ISO 17712</h4>
                    <p class="text-gray-500 text-sm mt-2">Certificación para sellos de alta seguridad.</p>
                </div>
                <!-- Item 2 -->
                <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-sm">
                    <div class="w-16 h-16 bg-industrial rounded-full flex items-center justify-center mb-4 text-accent">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-lg font-bold text-primary">C-TPAT</h4>
                    <p class="text-gray-500 text-sm mt-2">Cumplimiento total para exportaciones seguras.</p>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

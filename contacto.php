<?php 
$page_title = "Contacto";
include 'includes/header.php'; 
?>

<main>
    <?php if (isset($_GET['status'])): ?>
        <div class="container mx-auto px-4 mt-6">
            <?php if ($_GET['status'] == 'success'): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">¡Gracias!</strong>
                    <span class="block sm:inline">Hemos recibido tu solicitud. Te contactaremos pronto.</span>
                </div>
            <?php elseif ($_GET['status'] == 'error'): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error:</strong>
                    <span class="block sm:inline">Hubo un problema al enviar el mensaje. Por favor intenta de nuevo.</span>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <!-- Hero Section (Short) -->
    <section class="bg-primary py-16 text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Contáctanos</h1>
            <p class="text-gray-300">Estamos listos para asesorarte y proteger tu carga.</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                
                <!-- Left Column: Form (Wide) -->
                <div class="lg:w-2/3 bg-white p-8 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold text-primary mb-6">Envíanos un Mensaje</h2>
                    <form action="enviar.php" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre Completo</label>
                                <input type="text" id="nombre" name="nombre" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Electrónico</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono</label>
                                <input type="tel" id="telefono" name="telefono" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors">
                            </div>
                            <div>
                                <label for="empresa" class="block text-sm font-medium text-gray-700 mb-1">Empresa</label>
                                <input type="text" id="empresa" name="empresa" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors">
                            </div>
                        </div>

                        <div>
                            <label for="volumen" class="block text-sm font-medium text-gray-700 mb-1">Volumen Mensual Estimado</label>
                            <select id="volumen" name="volumen" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors bg-white">
                                <option value="">Selecciona una opción...</option>
                                <option value="menos_1000">Menos de 1,000 piezas</option>
                                <option value="1000_5000">1,000 - 5,000 piezas</option>
                                <option value="5000_10000">5,000 - 10,000 piezas</option>
                                <option value="mas_10000">Más de 10,000 piezas</option>
                            </select>
                        </div>

                        <div>
                            <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-1">Mensaje o Requerimiento</label>
                            <textarea id="mensaje" name="mensaje" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="w-full md:w-auto bg-accent hover:bg-orange-500 text-white font-bold py-3 px-8 rounded-md shadow-md transition-colors">
                                Enviar Solicitud
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Right Column: Info (Narrow) -->
                <div class="lg:w-1/3 space-y-8">
                    <!-- Contact Info -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-primary mb-4">Información de Contacto</h3>
                        <ul class="space-y-4 text-gray-600">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-accent mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>Av Lago de Guadalupe km 27.5-Bodega A3, San Pedro Barrientos, 54010 Tlalnepantla, Méx.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-accent mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                <span>+52 55 5864 2200</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-6 h-6 text-accent mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <a href="mailto:ventas@controlone.com" class="hover:text-primary transition-colors">socialmedia@controlone.com.mx</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Map -->
                    <div class="bg-white p-2 rounded-lg shadow-md h-64 overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.8326278203527!2d-99.20917677151544!3d19.57928689885347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d90a5615a3d%3A0xb4bb76ff7e6d870b!2sControl%20One%20Platform!5e1!3m2!1ses-419!2smx!4v1763742336943!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

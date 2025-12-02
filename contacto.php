<?php 
$page_title = "Cotización de Sellos de Seguridad y Precintos | Envíos a todo México";
$meta_description = "Solicita tu cotización de sellos de seguridad, marchamos y precintos ISO 17712. Precios de fábrica y envíos urgentes a Monterrey, Guadalajara, CDMX y todo el país.";
include 'includes/header.php'; 
?>

<main>
    <?php if (isset($_GET['status'])): ?>
        <div class="container mx-auto px-4 mt-6">
            <?php if ($_GET['status'] == 'success'): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">¡Solicitud Recibida!</strong>
                    <span class="block sm:inline">Un asesor comercial te contactará en breve con tu cotización.</span>
                </div>
            <?php elseif ($_GET['status'] == 'error'): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error de envío:</strong>
                    <span class="block sm:inline">Hubo un problema técnico. Por favor intenta por WhatsApp.</span>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <section class="bg-primary py-16 text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Cotiza tus Sellos de Seguridad</h1>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Obtén precios de fábrica para <strong>marchamos, precintos y sellos fiscales</strong>. Atención especial a flotillas y compras por volumen.
            </p>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-12">
                
                <div class="lg:w-2/3 bg-white p-8 rounded-lg shadow-lg border-t-4 border-accent">
                    <h2 class="text-2xl font-bold text-primary mb-2">Solicitar Cotización Formal</h2>
                    <p class="text-gray-500 mb-6 text-sm">Completa el formulario y recibe nuestra lista de precios y tiempos de entrega.</p>
                    
                    <form action="enviar" method="POST" class="space-y-6">
                        <div style="opacity: 0; position: absolute; top: 0; left: 0; height: 0; width: 0; z-index: -1;">
                            <label for="website_check">Si eres humano no llenes este campo:</label>
                            <input type="text" id="website_check" name="website_check" autocomplete="off" tabindex="-1">
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre Completo</label>
                                <input type="text" id="nombre" name="nombre" required autocomplete="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="Ej. Juan Pérez">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo Corporativo</label>
                                <input type="email" id="email" name="email" required autocomplete="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="compras@empresa.com">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-gray-700 mb-1">Teléfono / WhatsApp</label>
                                <input type="tel" id="telefono" name="telefono" autocomplete="tel" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="10 dígitos">
                            </div>
                            <div>
                                <label for="empresa" class="block text-sm font-medium text-gray-700 mb-1">Empresa</label>
                                <input type="text" id="empresa" name="empresa" autocomplete="organization" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="Nombre de tu empresa">
                            </div>
                        </div>
                        <div>
                            <label for="volumen" class="block text-sm font-medium text-gray-700 mb-1">Volumen Mensual Estimado</label>
                            <select id="volumen" name="volumen" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors bg-white">
                                <option value="">Selecciona una cantidad...</option>
                                <option value="menos_1000">Menos de 1,000 piezas (Pedido Mínimo)</option>
                                <option value="1000_5000">1,000 - 5,000 piezas</option>
                                <option value="5000_10000">5,000 - 10,000 piezas</option>
                                <option value="mas_10000">Más de 10,000 piezas (Precio Distribuidor)</option>
                            </select>
                        </div>
                        <div>
                            <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-1">¿Qué tipo de sello necesitas?</label>
                            <textarea id="mensaje" name="mensaje" rows="4" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-colors" placeholder="Ej: Necesito sellos de botella para contenedores o sellos de cable para pipas..."></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full md:w-auto bg-accent hover:bg-orange-500 text-white font-bold py-3 px-8 rounded-md shadow-md transition-colors">
                                Solicitar Precio
                            </button>
                        </div>
                        <p class="text-xs text-gray-400 mt-4 text-center">
                            Tus datos están protegidos. Consulta nuestro <a href="/aviso-privacidad" class="underline hover:text-accent">Aviso de Privacidad</a>.
                        </p>
                    </form>
                </div>

                <div class="lg:w-1/3 space-y-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-bold text-primary mb-6">Contacto Directo</h3>
                        
                        <a href="https://api.whatsapp.com/send?phone=522218027570&text=Hola%20Control%20One,%20me%20interesa%20cotizar%20sellos%20de%20seguridad." target="_blank" rel="noopener noreferrer nofollow" class="flex items-center justify-center w-full bg-[#25D366] hover:bg-[#128C7E] text-white font-bold py-4 px-4 rounded-md shadow-md transition-all transform hover:-translate-y-1 mb-8 group">
                            <svg class="w-6 h-6 mr-3 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            <span>Cotizar por WhatsApp</span>
                        </a>

                        <hr class="border-gray-200 mb-6">
                        <h4 class="text-sm font-bold text-gray-500 uppercase mb-4">Ubicación y Envíos</h4>
                        <ul class="space-y-4 text-gray-600 text-sm">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-accent mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span><strong>Planta Tlalnepantla:</strong><br>Av Lago de Guadalupe km 27.5-Bodega A3, San Pedro Barrientos, 54010 Edo. Méx.</span>
                            </li>
                            <li class="flex items-center">
                                <span class="w-6 h-6 flex items-center justify-center text-accent mr-3">🚚</span>
                                <span><strong>Envíos a todo México:</strong><br>Monterrey, Guadalajara, Querétaro, Tijuana, Puebla y más.</span>
                            </li>
                            <li class="flex items-center pt-4 border-t border-gray-100">
                                <a href="tel:+525558642200" class="text-accent hover:text-primary transition-colors flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                    <span class="font-bold text-lg text-dark">+52 55 5864 2200</span>
                                </a>
                            </li>
                            <li class="flex items-center">
                                <a href="mailto:socialmedia@controlone.com.mx" class="text-accent hover:text-primary transition-colors flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    <span>socialmedia@controlone.com.mx</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-white p-2 rounded-lg shadow-md h-64 overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.8326278203527!2d-99.20917677151544!3d19.57928689885347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d90a5615a3d%3A0xb4bb76ff7e6d870b!2sControl%20One%20Platform!5e1!3m2!1ses-419!2smx!4v1763742336943!5m2!1ses-419!2smx" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ubicación Control One"></iframe>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "name": "Contacto y Cotizaciones Control One",
  "description": "Solicita precios de sellos de seguridad y precintos. Envíos a todo México.",
  "mainEntity": {
    "@type": "LocalBusiness",
    "name": "Control One",
    "telephone": "+525558642200",
    "email": "socialmedia@controlone.com.mx",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Av Lago de Guadalupe km 27.5-Bodega A3",
      "addressLocality": "Tlalnepantla",
      "addressRegion": "MEX",
      "addressCountry": "MX"
    }
  }
}
</script>

<?php include 'includes/footer.php'; ?>
<?php 
$page_title = "Inicio";
include 'includes/header.php'; 
include 'includes/data_blog.php'; // Carga los artículos del blog
?>

<main>
    <section class="relative bg-primary h-[600px] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="assets/img/bodega-control-one-sellos-seguridad.avif" alt="Fondo Industrial" class="w-full h-full object-cover opacity-40" fetchpriority="high">
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Fabricantes de Sellos de Alta Seguridad <br>
                <span class="text-accent">ISO 17712</span>
            </h1>
            <p class="text-xl text-gray-200 mb-10 max-w-2xl mx-auto">
                Garantiza la integridad de tu cadena de suministro con soluciones certificadas C-TPAT e ISO 17712.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="contacto" class="bg-accent hover:bg-orange-500 text-white px-8 py-4 rounded-md font-bold text-lg transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Cotizar Ahora
                </a>
                <a href="productos" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary px-8 py-4 rounded-md font-bold text-lg transition-all">
                    Ver Catálogo
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-primary mb-4">Nuestras Soluciones</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Amplia gama de sellos de seguridad diseñados para cada necesidad logística.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 relative overflow-hidden">
                        <img src="assets/img/sello-seguridad-star-one-indicativo.avif" alt="Sellos de Alta Seguridad" class="w-full h-full object-contain p-4">
                        <div class="absolute top-4 right-4 bg-accent text-white p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Alta Seguridad (ISO 17712)</h3>
                        <p class="text-gray-600 mb-4 text-sm">Sellos de perno y cable acerado para contenedores y transporte internacional.</p>
                        <a href="productos#alta-seguridad" class="text-accent font-semibold hover:text-orange-600 inline-flex items-center">
                            Ver Detalles
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 relative overflow-hidden">
                        <img src="assets/img/precinto-plastico-quantum-ajustable.avif" alt="Sellos de Plástico" class="w-full h-full object-contain p-4">
                        <div class="absolute top-4 right-4 bg-accent text-white p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Sellos Indicativos</h3>
                        <p class="text-gray-600 mb-4 text-sm">Sellos de plástico ajustables para control de inventario, botiquines y valijas.</p>
                        <a href="productos#plasticos" class="text-accent font-semibold hover:text-orange-600 inline-flex items-center">
                            Ver Detalles
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden group hover:shadow-xl transition-shadow duration-300">
                    <div class="h-48 bg-gray-200 relative overflow-hidden">
                        <img src="assets/img/sello-metalico-gl-iso17712-alta-seguridad.avif" alt="Sellos Metálicos" class="w-full h-full object-contain p-4">
                        <div class="absolute top-4 right-4 bg-accent text-white p-2 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"></path></svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary mb-2">Sellos Metálicos</h3>
                        <p class="text-gray-600 mb-4 text-sm">Soluciones robustas de banda metálica para camiones y vagones de ferrocarril.</p>
                        <a href="productos#metalicos" class="text-accent font-semibold hover:text-orange-600 inline-flex items-center">
                            Ver Detalles
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-industrial border-t border-gray-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
                <div class="flex flex-col items-center p-6">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-md mb-4 text-accent">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-lg font-bold text-primary">Certificación ISO 17712</h4>
                    <p class="text-gray-500 text-sm mt-2">Cumplimos con los estándares internacionales más exigentes.</p>
                </div>
                <div class="flex flex-col items-center p-6">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-md mb-4 text-accent">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-lg font-bold text-primary">Cumplimiento C-TPAT</h4>
                    <p class="text-gray-500 text-sm mt-2">Seguridad garantizada para tus exportaciones a EE.UU.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">¿Necesitas cotizar por volumen?</h2>
            <p class="text-gray-300 mb-8 max-w-2xl mx-auto text-lg">Obtén precios preferenciales para pedidos mayoristas. Nuestro equipo comercial está listo para asesorarte.</p>
            <a href="contacto" class="inline-block bg-accent hover:bg-orange-500 text-white px-10 py-4 rounded-md font-bold text-xl shadow-lg transition-colors">
                Solicitar Cotización
            </a>
        </div>
    </section>

    <section class="py-20 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="text-accent font-bold tracking-widest uppercase text-sm">Centro de Conocimiento</span>
                <h2 class="text-3xl font-bold text-primary mt-2">Últimas Novedades en Seguridad</h2>
                <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Mantente al día con las mejores prácticas para proteger tu cadena de suministro.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php 
                // Tomamos solo los primeros 3 artículos
                $ultimos_posts = isset($blog_posts) ? array_slice($blog_posts, 0, 3) : [];
                
                if (!empty($ultimos_posts)):
                    foreach ($ultimos_posts as $slug => $post): 
                ?>
                    <article class="flex flex-col h-full group">
                        <a href="post/<?php echo $slug; ?>" class="block overflow-hidden rounded-lg mb-4 relative h-48">
                            <div class="absolute inset-0 bg-primary/20 group-hover:bg-transparent transition-colors z-10"></div>
                            <img src="<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        </a>
                        <div class="flex flex-col flex-grow">
                            <div class="text-xs font-bold text-gray-400 mb-2 flex items-center">
                                <span class="w-2 h-2 bg-accent rounded-full mr-2"></span>
                                <?php echo date('d M, Y', strtotime($post['fecha'])); ?>
                            </div>
                            <h3 class="text-lg font-bold text-primary mb-2 group-hover:text-accent transition-colors leading-tight">
                                <a href="post/<?php echo $slug; ?>"><?php echo $post['titulo']; ?></a>
                            </h3>
                            <p class="text-gray-600 text-sm line-clamp-2 mb-4 flex-grow">
                                <?php echo $post['extracto']; ?>
                            </p>
                            <a href="post/<?php echo $slug; ?>" class="text-primary font-bold text-sm hover:text-accent inline-flex items-center mt-auto">
                                Leer más <span class="ml-1 text-lg">→</span>
                            </a>
                        </div>
                    </article>
                <?php 
                    endforeach; 
                else:
                ?>
                    <div class="col-span-3 text-center text-gray-500">
                        <p>Próximamente publicaremos artículos de interés.</p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="text-center mt-12">
                <a href="blog" class="inline-block border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold py-3 px-8 rounded-md transition-colors">
                    Ver Todos los Artículos
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
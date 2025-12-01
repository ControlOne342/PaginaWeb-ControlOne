<?php 
$page_title = "Blog de Logística y Normativa C-TPAT";
$meta_description = "Artículos técnicos, guías de uso y noticias sobre seguridad logística, prevención de robo de carga y normativas internacionales de exportación.";
include 'includes/header.php'; 
include 'includes/data_blog.php'; 
?>

<main>
    <section class="relative bg-primary min-h-[300px] md:min-h-[400px] flex items-center justify-center text-center py-12">
        <div class="absolute inset-0 z-0">
            <img src="assets/img/bodega-control-one-sellos-seguridad.avif" alt="Blog Logística y Seguridad" class="w-full h-full object-cover object-center opacity-30">
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        </div>
        
        <div class="relative z-10 container mx-auto px-4">
            <span class="text-accent font-bold tracking-widest uppercase text-xs md:text-sm mb-2 block">Centro de Conocimiento</span>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-4 leading-tight">Blog de Seguridad Logística</h1>
            <p class="text-lg md:text-xl text-gray-200 max-w-2xl mx-auto">
                Noticias, normativas C-TPAT, guías técnicas y estrategias para proteger tu carga.
            </p>
        </div>
    </section>

    <section class="py-12 md:py-16 bg-industrial">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                
                <?php foreach ($blog_posts as $slug => $post): ?>
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 flex flex-col h-full group">
                        
                        <a href="post/<?php echo $slug; ?>" class="block h-48 md:h-56 overflow-hidden relative">
                            <img src="<?php echo $post['imagen']; ?>" 
                                 alt="<?php echo $post['titulo']; ?>" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            
                            <div class="absolute top-4 left-4 bg-primary text-white text-[10px] md:text-xs font-bold px-3 py-1 rounded-full shadow-md z-10">
                                <?php echo $post['categoria']; ?>
                            </div>
                        </a>

                        <div class="p-5 md:p-6 flex flex-col flex-grow">
                            <div class="flex items-center text-xs md:text-sm text-gray-500 mb-3">
                                <svg class="w-4 h-4 mr-2 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <?php echo date('d M, Y', strtotime($post['fecha'])); ?>
                            </div>

                            <h3 class="text-lg md:text-xl font-bold text-primary mb-3 leading-tight hover:text-accent transition-colors">
                                <a href="post/<?php echo $slug; ?>">
                                    <?php echo $post['titulo']; ?>
                                </a>
                            </h3>

                            <p class="text-gray-600 mb-4 text-sm line-clamp-3 flex-grow">
                                <?php echo $post['extracto']; ?>
                            </p>

                            <div class="mt-auto pt-4 border-t border-gray-100">
                                <a href="post/<?php echo $slug; ?>" class="text-primary font-bold text-sm hover:text-accent inline-flex items-center transition-colors">
                                    Leer Artículo Completo
                                    <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
<?php 
/* post.php - El lector de artículos OPTIMIZADO PARA SEO */

include 'includes/data_blog.php'; 

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if (array_key_exists($slug, $blog_posts)) {
    $post = $blog_posts[$slug];
    
    // --- VARIABLES SEO PARA EL HEADER ---
    $page_title = $post['titulo']; 
    
    // Usamos la meta_description si existe en la base de datos, si no, usamos el extracto como respaldo
    $meta_description = isset($post['meta_description']) ? $post['meta_description'] : $post['extracto'];
    
    // Imagen para Open Graph (WhatsApp/Facebook)
    $page_image = $post['imagen']; 
    
} else {
    // Redirección 404 amigable si el artículo no existe
    header("HTTP/1.0 404 Not Found");
    header("Location: /blog");
    exit();
}

include 'includes/header.php'; 
?>

<main class="bg-white">
    <section class="relative bg-primary py-20 min-h-[350px] flex items-center justify-center">
        <div class="absolute inset-0 z-0 overflow-hidden">
             <img src="/<?php echo $post['imagen']; ?>" alt="Fondo" class="w-full h-full object-cover opacity-20 blur-sm">
        </div>
        
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10">
            <div class="inline-block bg-accent text-white text-xs md:text-sm font-bold px-3 py-1 rounded-full mb-4">
                <?php echo isset($post['categoria']) ? $post['categoria'] : 'Blog'; ?>
            </div>
            
            <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight mb-6 shadow-text">
                <?php echo $post['titulo']; ?>
            </h1>
            
            <div class="flex items-center justify-center text-gray-300 text-sm space-x-4">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <?php echo $post['autor']; ?>
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <?php echo date('d M, Y', strtotime($post['fecha'])); ?>
                </span>
            </div>
        </div>
    </section>

    <section class="py-16 px-4">
        <div class="container mx-auto max-w-3xl">
            <div class="mb-10 rounded-xl overflow-hidden shadow-xl border border-gray-100">
                <img src="/<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?> - Control One" class="w-full h-auto object-cover" width="800" height="450">
            </div>
            
            <article class="prose prose-lg text-gray-700 leading-relaxed max-w-none space-y-6">
                <?php echo $post['contenido']; ?>
            </article>

            <div class="mt-16 pt-10 border-t border-gray-200 text-center">
                <h3 class="text-primary font-bold mb-6 text-xl">¿Necesitas asesoría técnica?</h3>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contacto" class="inline-block bg-accent hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-md transition-colors shadow-md">
                        Cotizar Solución
                    </a>
                    <a href="/blog" class="inline-block bg-gray-100 hover:bg-gray-200 text-primary font-medium py-3 px-8 rounded-md transition-colors">
                        Volver al Blog
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": "<?php echo $post['titulo']; ?>",
  "image": ["https://controlone.com.mx/<?php echo $post['imagen']; ?>"],
  "datePublished": "<?php echo $post['fecha']; ?>",
  "author": {
    "@type": "Organization",
    "name": "<?php echo $post['autor']; ?>"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Control One",
    "logo": {
      "@type": "ImageObject",
      "url": "https://controlone.com.mx/assets/img/logo-control-one-industrial.avif"
    }
  },
  "description": "<?php echo strip_tags($meta_description); ?>"
}
</script>

<?php include 'includes/footer.php'; ?>
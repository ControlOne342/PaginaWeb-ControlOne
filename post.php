<?php 
/* post.php - El lector de artículos */

include 'includes/data_blog.php'; // 1. Cargamos los datos

// 2. Detectamos qué artículo quiere leer el usuario
// Si viene por URL amigable (.htaccess) o por parámetro normal
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// 3. Buscamos si el artículo existe en nuestra lista
if (array_key_exists($slug, $blog_posts)) {
    $post = $blog_posts[$slug];
    
    // Configuramos el título de la pestaña para SEO
    $page_title = $post['titulo']; 
    
    // Opcional: Meta descripción para SEO (tomamos el extracto)
    $meta_description = $post['extracto'];
} else {
    // Si el artículo no existe (o escribieron mal la URL), regresamos al blog
    header("Location: /blog");
    exit();
}

include 'includes/header.php'; 
?>

<main class="bg-white">
    <section class="relative bg-primary py-20">
        <div class="absolute inset-0 z-0 overflow-hidden">
             <img src="/<?php echo $post['imagen']; ?>" alt="Fondo" class="w-full h-full object-cover opacity-10 blur-sm">
        </div>
        
        <div class="container mx-auto px-4 max-w-4xl text-center relative z-10">
            <div class="inline-block bg-accent text-white text-xs font-bold px-3 py-1 rounded-full mb-4">
                <?php echo isset($post['categoria']) ? $post['categoria'] : 'Blog'; ?>
            </div>
            
            <h1 class="text-3xl md:text-5xl font-bold text-white leading-tight mb-6 shadow-text">
                <?php echo $post['titulo']; ?>
            </h1>
            
            <div class="flex items-center justify-center text-gray-300 text-sm space-x-4">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <?php echo $post['autor']; ?>
                </span>
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <?php echo date('d M, Y', strtotime($post['fecha'])); ?>
                </span>
            </div>
        </div>
    </section>

    <section class="py-16 px-4">
        <div class="container mx-auto max-w-3xl">
            
            <div class="mb-10 rounded-xl overflow-hidden shadow-xl">
                <img src="/<?php echo $post['imagen']; ?>" alt="<?php echo $post['titulo']; ?>" class="w-full h-auto object-cover">
            </div>
            
            <article class="text-gray-700 leading-relaxed text-lg space-y-6">
                <?php echo $post['contenido']; ?>
            </article>

            <div class="mt-16 pt-10 border-t border-gray-200 text-center">
                <h3 class="text-primary font-bold mb-6">¿Te interesó este tema?</h3>
                <a href="/contacto" class="inline-block bg-accent hover:bg-orange-600 text-white font-bold py-3 px-8 rounded-md transition-colors shadow-md mr-4">
                    Solicitar Asesoría
                </a>
                <a href="/blog" class="inline-block bg-gray-100 hover:bg-gray-200 text-primary font-medium py-3 px-8 rounded-md transition-colors">
                    Ver más artículos
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
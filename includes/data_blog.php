<?php
// includes/data_blog.php

/* BASE DE DATOS DEL BLOG (ARRAY PHP)
   -----------------------------------
   Para agregar un nuevo artículo, simplemente copia y pega el bloque de array 
   y cambia los datos. El "slug" (la clave del array) será la URL del artículo.
*/

$blog_posts = [
    'guia-2025-que-precinto-seguridad-elegir' => [
        'titulo'   => 'Guía 2025: ¿Qué Precinto de Seguridad elegir?',
        'autor'    => 'Equipo Control One',
        'fecha'    => '2025-11-26',
        'categoria'=> 'Guías Técnicas',
        // Usamos una imagen que ya tienes en tu servidor para empezar
        'imagen'   => 'assets/img/sello-seguridad-star-one-indicativo.avif', 
        'extracto' => '¿Sabes la diferencia entre un sello indicativo y uno de alta seguridad? Descubre cómo evitar robos hormiga y cumplir con la normativa C-TPAT / ISO 17712.',
        'contenido'=> '
            <p class="lead text-xl text-gray-600 mb-6 font-medium">
                La seguridad de la carga no es un juego. Elegir el precinto incorrecto puede costarle a tu empresa miles de dólares en mercancía robada o rechazos en aduana.
            </p>

            <h2 class="text-2xl font-bold text-primary mt-8 mb-4">1. Entendiendo los Niveles de Seguridad</h2>
            <p class="mb-4">No todos los sellos son iguales. Según la norma <strong>ISO 17712:2013</strong>, se clasifican en tres categorías:</p>
            <ul class="list-disc pl-6 mb-6 space-y-2">
                <li><strong>Indicativos (I):</strong> De plástico o metal ligero. Su función es mostrar evidencia visual de manipulación (Tamper-Evident). Ideales para botiquines, cajas plásticas o inventarios.</li>
                <li><strong>Seguridad (S):</strong> Resistencia media. Para envíos nacionales que no requieren alta seguridad.</li>
                <li><strong>Alta Seguridad (H):</strong> Obligatorios para cruces fronterizos y C-TPAT. Deben resistir pruebas de impacto, corte y tensión. Ejemplo: Nuestro <em>Star One Seal</em>.</li>
            </ul>

            <h2 class="text-2xl font-bold text-primary mt-8 mb-4">2. ¿Cuándo usar sellos de Cable?</h2>
            <p class="mb-4">
                Los sellos de cable ajustable, como el <strong>C-ONE 316</strong>, son la opción más versátil. Se recomiendan cuando los cerrojos del contenedor o camión están desalineados o tienen formas irregulares donde un sello de perno (clavo) no entraría.
            </p>

            <div class="bg-blue-50 border-l-4 border-accent p-4 my-6">
                <p class="font-bold text-primary">Tip de Experto:</p>
                <p>Siempre verifica que el sello tenga grabado láser permanente con folio único. Si el número se borra con el dedo, la seguridad es nula.</p>
            </div>

            <h2 class="text-2xl font-bold text-primary mt-8 mb-4">Conclusión</h2>
            <p class="mb-4">
                Para exportación, no te arriesgues: usa Alta Seguridad (H). Para logística interna, un sello indicativo de calidad puede ser suficiente. En <strong>Control One</strong> te asesoramos para blindar tu cadena de suministro.
            </p>
        '
    ],

    'como-colocar-sello-seguridad-correctamente' => [
        'titulo'   => 'Cómo colocar un Sello de Seguridad correctamente (Guía Paso a Paso)',
        'autor'    => 'Equipo Control One',
        'fecha'    => '2025-11-27',
        'categoria'=> 'Tutoriales',
        'imagen'   => 'assets/img/sello-tipo-cable-c-one316.avif',
        'extracto' => 'Un sello mal colocado es un sello inútil. Aprende la técnica correcta para instalar precintos de cable y evitar manipulaciones no detectadas.',
        'contenido'=> '
            <p class="lead text-xl text-gray-600 mb-6 font-medium">
                El 80% de las violaciones de seguridad ocurren por una mala aplicación del precinto. No basta con "ponerlo", hay que asegurarlo.
            </p>

            <h2 class="text-2xl font-bold text-primary mt-8 mb-4">El Protocolo "Tirón Seco" (Pull Check)</h2>
            <p class="mb-4">
                Al colocar un sello de cable ajustable como el <strong>C-ONE 316</strong>, el error más común es dejar el cable flojo. Sigue estos pasos:
            </p>
            
            <ol class="list-decimal pl-6 mb-6 space-y-4 text-gray-700">
                <li><strong>Inserta:</strong> Pasa la punta del cable a través del mecanismo de cierre de las puertas del contenedor.</li>
                <li><strong>Ajusta:</strong> Introduce la punta en el cuerpo del sello y jala hasta que quede lo más ajustado posible. No dejes "juego" o espacio sobrante.</li>
                <li><strong>Verifica (Vital):</strong> Una vez cerrado, da un tirón fuerte y seco al cuerpo del sello hacia abajo. Esto confirma que el mecanismo interno ha mordido el cable correctamente.</li>
            </ol>

            <div class="bg-red-50 border-l-4 border-red-500 p-4 my-6">
                <p class="font-bold text-red-700">¡Cuidado!</p>
                <p class="text-sm">Nunca cortes el cable sobrante a menos que sea estrictamente necesario por normativa. El cable sobrante dificulta que los ladrones manipulen el mecanismo de cierre.</p>
            </div>

            <h2 class="text-2xl font-bold text-primary mt-8 mb-4">Registro Fotográfico</h2>
            <p class="mb-4">
                La seguridad no termina al cerrar el sello. Debes tomar una fotografía clara donde sea legible el <strong>folio único</strong> grabado en láser. En <em>Control One</em>, nuestros sellos C-ONE incluyen numeración irrepetible para garantizar la trazabilidad.
            </p>
        '
    ],
    // Aquí puedes agregar el siguiente artículo en el futuro...
];
?>
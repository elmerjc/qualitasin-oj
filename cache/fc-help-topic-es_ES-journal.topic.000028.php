<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000028',
        'locale' => 'es_ES',
        'title' => 'Contextos',
        'toc' => 'journal/toc/000005',
        'key' => 'journal.managementPages.readingTools.contexts',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>Cada conjunto de elementos de lectura consta de varias herramientas individuales (p. ej. estudios relacionados, foros en línea, etc.) en el que cada herramienta consta de diferentes bases de datos relevantes agrupadas en un contexto. Dichas bases de datos, y los contextos en los que se organizan, se pueden crear, editar o eliminar.</p><p><em>Metadatos para elementos en un contexto</em>. El gestor/a de la revista puede modificar el título de la herramienta. También ofrece la opción de determinar si se usarán las palabras clave del autor/a (por defecto), el nombre del autor/a (para usar en otras obras del autor/a, por ejemplo) o términos de indexación geográficos para la búsqueda de la base de datos. Otra opción, que se usa junto con Definir términos, permite al lector/a seleccionar el término de búsqueda haciendo doble clic en cualquier palabra del texto que esté leyendo en la revista. Los gestores/as de la revista pueden usar dichas opciones para crear sus propias herramientas de lectura.</p><p><em>Edición búsquedas para cada herramienta</em>. Al realizar búsquedas, el gestor/a de la revista puede editar o eliminar la URL de búsqueda para cada base de datos en la herramienta, así como reordenar las bases de datos. Cada base de datos disponen de una URL que permite al lector aprender más sobre la misma, así como otra que le permite llevar a cabo una búsqueda. Se pueden configurar dos tipos de búsquedas: una búsqueda GET, y si ésta no funciona con la base de datos, también es compatible una búsqueda POST.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Búsquedas GET',
      ),
      'value' => '<p>Para búsquedas GET, realice una búsqueda y fíjese en la URL obtenida. P. ej., en Google, la búsqueda de "FOOBAR" le proporciona la URL</p><p><samp class="code">http://www.google.ca/search?hl=en&amp;q=FOOBAR&amp;meta=</samp></p><p>Reemplace el término de búsqueda FOOBAR por la variable {$formKeywords}. Cuando OJS detecta dicha variable, la reemplaza por el valor adecuado de los metadatos del elemento. Esto proporciona una URL de búsqueda</p><p><samp class="»code»">http://www.google.ca/search?hl=en&amp;q={$formKeywords}&amp;meta=</samp></p><p>para el RT. No obstante, dado que los demás parámetros no son necesarios en este caso, se puede utilizar una URL simplificada de</p><p><samp class="code">http://www.google.ca/search?q={$formKeywords}</samp></p><p>para el RT.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Búsquedas POST',
      ),
      'value' => '<p>Para formularios POST es más complicado. De nuevo, en Google, se puede ver el código fuente de la página y encontrar<samp class="code">&lt;form action="/search" ...&gt;</samp>, que proporciona la URL base de inicio<samp class="code">http://www.google.com/search</samp>. Entonces, se pueden ver los elementos<samp class="code">&lt;input ...&gt;</samp> y<samp class="code">&lt;select ... &gt;</samp> del formulario, y añadirlos como<samp class="code">name=value</samp> pares separados por<samp class="code">&amp;</samp> hasta el final de la URL. El elemento que especifica el cuadro de texto que acepta el texto introducido por el usuario/a (en el caso de Google, es<samp class="code">q</samp>), debería volver a tener un valor de {$formKeywords}, que se reemplaza por el valor adecuado.</p><p>Otra manera más fácil para formularios POST es copiar el código fuente HTML a un archivo, cambiar<samp class="code">method=post</samp> por<samp class="code">method=get</samp> en el campo del formulario adecuado, y cambiar el valor del formulario<samp class="code">action=</samp> para que sea una URL completa, p. ej.,<samp class="code">http://www.google.com/search</samp> en vez de sólo<samp class="code">/search</samp>. Entonces, se puede ver el archivo HTML modificado en el navegador y usar el método GET anterior para crear la URL.</p><p>Dado que algunos motores de búsqueda no son compatibles con las consultas GET, si el método anterior no funciona, se pueden introducir los datos del formulario POST en el campo "Buscar datos post". Si en el ejemplo anterior hiciera falta publicar los datos, se debe introducir <samp class="code">http://www.google.com/search</samp> para la URL de búsqueda y<samp class="code">q={$formKeywords}</samp> para los datos post.</p><p>Asegúrese de comprobar que las URL funcionan correctamente al sustituir {$formKeywords} por un término de la URL y que se muestran los resultados de búsqueda esperados. Tenga en cuenta que esto no siempre es posible con los formularios POST y que depende del sitio web. En el caso de las URL que no tienen un motor de búsqueda apropiado, otra posibilidad es usar Google y restringir por sitio web. Puede realizar una consulta como<samp class="code">site:mysite.com FOOBAR</samp> en Google para buscar el término "FOOBAR" únicamente en mysite.com. Esto se usa en los RT actuales para varios sitios web.</p>',
    ),
  ),
); ?>
<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000036',
        'locale' => 'es_ES',
        'title' => 'Formularios de revisión',
        'toc' => 'journal/toc/000001',
        'key' => 'journal.managementPages.reviewForms',
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
      'value' => '<p>Por defecto, OJS permite a los revisores/as introducir sus conclusiones sobre la revisión mediante un sencillo formulario de revisión de dos campos: un campo para el editor/a con solo texto y otro para autores/as y editores/as. El gestor/a de la revista puede extender dicha función al crear formularios de revisión personalizados.</p> <p>El gestor/a de la revista puede asociar un formulario de revisión personalizado para que sea el formulario predeterminado de la sección; si hay más de un formulario activo, el editor/a también puede invalidar el formulario predeterminado cuando se asigna un envío a un revisor/a.</p> <p><strong>Revisiones bloqueadas:</strong> Se pueden crear cuantos formularios de revisión se desee; no obstante, sólo se pueden editar y eliminar hasta que se utilicen (concretamente, cuando un editor/a asigna un envío a un revisor/a y tienen que usar un formulario de revisión personalizado). Al utilizar un formulario, éste queda bloqueado con el fin de asegurar un registro de revisión permanente. Al utilizar un formulario de revisión, éste puede desactivarse y quitarse de la lista de formularios disponibles, así como duplicarse mediante la acción Copiar. Ambas acciones se explican más adelante.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Creacción de un formulario de revisión',
      ),
      'value' => '<p>Para crear un formulario de revisión personalizado, el gestor/a de la revista tiene que hacer clic en el enlace Formularios de revisión de la página Gestión de la revista y, entonces, hacer clic en el enlace Crear un formulario de revisión en la parte inferior de la página resultante. Es necesario introducir un título y una descripción del formulario. Al hacer clic en el botón Guardar, el gestor/a de la revista vuelve a la página principal Formularios de revisión, en la que aparece el nuevo formulario.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Gestión de formularios de revisión',
      ),
      'value' => '<p>El gestor/a de la revista tiene diferentes opciones disponibles en la página Formularios de revisión para cada revisión:</p> <p><strong>Editar:</strong> Al hacer clic en el enlace Editar, el gestor/a de la revista puede cambiar el título y la descripción del formulario. Asimismo, puede extender el formulario al hacer clic en el subtítulo Añadir elementos de formulario: se abrirá una página con una lista de todos los elementos de formulario (campos de texto; botones de opción, cuadros desplegables y casillas de verificación, etc.) que se añadieron al formulario y que permite añadir otros nuevos con un clic en Crear un elemento nuevo. Al crear un elemento nuevo, el gestor/a de la revista puede proporcionar una breve descripción y marcarlo como obligatorio para que lo complete el revisor/a. Los elementos nuevos se pueden editar o eliminar hasta que el formulario de revisión se bloquee tras su utilización. Finalmente, el gestor/a de la revista puede hacer clic en la vista previa del subtítulo del formulario para ver cómo lo visualizará el revisor/a. La opción editar sólo está disponible hasta que se utilice el formulario de revisión, momento en el que se bloquea.</p> <p><strong>Activar/Desactivar:</strong> Al hacer clic en el enlace Activar, se puede elegir el formulario como predeterminado para una sección de la revista (se puede aplicar en las secciones de la revista desde la página Gestión de la revista), así como que lo seleccione el editor/a como formulario opcional en el momento de la asignación de la revisión. Al desactivar el formulario, éste deja de ser una opción en la ubicación pero no lo elimina.</p> <p><strong>Copiar:</strong> La acción Copiar permite al gestor/a de la revista copiar un formulario de revisión que ya se utilizó íntegramente. Al hacer clic en el enlace Copiar, se duplica el formulario en la lista Formularios de revisión y rellena el formulario duplicado con los elementos del original. El gestor/a de la revista puede cambiar el nombre del formulario y editar los elementos del formulario en caso necesario.</p> <p>El gestor/a de la revista también puede copiar elementos de un formulario a otro ya existente. Para ello, debe hacer clic en el nombre del formulario que contiene el elemento que se desea duplicar; luego, en el subtítulo Elementos de formulario, debe activar las casillas de verificación a la izquierda de los elementos que se desean duplicar para seleccionarlos (o, si no, hacer clic en el botón Seleccionar todos); elegir del menú desplegable el formulario en el que se copiarán y hacer clic en Copiar para realizar el cambio. Tenga en cuenta que los elementos copiados pueden eliminarse hasta que se bloquee el formulario y que los elementos individuales no se pueden copiar desde otros formularios ya bloqueados. <p><strong>Vista Previa:</strong> El enlace Vista previa permite al gestor/a de la revista ver cómo visualizará el formulario el revisor/a.</p> <p><strong>Eliminar:</strong> El enlace Eliminar sólo aparece si el formulario todavía no está bloqueado. Al hacer clic, se pregunta al gestor/a de la revista si la acción debería llevarse realmente a cabo o no.</p> <p>La página Formularios de revisión indica el número de revisiones que están en proceso frente a los formularios de revisión de la lista y el número de revisiones completado al usar cada formulario. </p>',
    ),
  ),
); ?>
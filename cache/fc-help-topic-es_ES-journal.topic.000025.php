<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000025',
        'locale' => 'es_ES',
        'title' => 'Suscripciones',
        'toc' => 'journal/toc/000001',
        'key' => 'journal.managementPages.subscriptions',
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
      'value' => '<p>OJS admite revistas de suscripción mediante un componente de gestión de suscripción y protección con contraseña correspondiente al contenido en línea de la revista. Las suscripciones se pueden gestionar para usuarios/as individuales, organizaciones o instituciones. Una revista de suscripción puede ofrecer, además, acceso libre a sus números anteriores a través de un formulario de acceso abierto diferido. En Gestión de emisiones, el editor/a permite el acceso libre de los lectores/as al contenido de un número o un artículo individual desde 0 hasta 24 meses después de su publicación inicial y disponibilidad para los suscriptores/as.</p><p>Los gestores/as, editores/as, editores/as de sección, maquetistas, correctores/as de originales y correctores/as de pruebas de la revista siempre tendrán libre acceso, como si fueran suscriptores/as.</p><p><em>Uso del módulo de suscripción</em>. El gestor/a de la revista debe indicar, en el paso 4.1 Configuración de acceso y seguridad, que la revista usará este sistema para gestionar sus suscripciones y que se asignó a alguien con el rol de gestor/a de la revista o gestor/a de suscripciones para gestionar esta característica. La persona designada, junto con la información de contacto, debería identificarse como el contacto para la suscripción según las políticas de suscripción (véase abajo).</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Tipos de suscripción',
      ),
      'value' => '<p><em>Configurar los tipos de suscripción</em>. El primer paso para configurar la gestión de las suscripciones es designar los tipos de suscripciones que ofrece la revista. Habitualmente, las revistas ofrecen, por ejemplo, tasas de suscripción individuales e institucionales. Algunas revistas pueden hacer ofertas especiales a miembros de una organización o a estudiantes. OJS será compatible con la gestión de suscripciones tanto impresas como en línea. Se puede crear más de un tipo de suscripción para cubrir períodos más largos de tiempo (12 meses, 36 meses). Un tipo de suscripción puede designarse como suscripción sin caducidad para suscripciones más duraderas que nunca deberían expirar (p. ej. una institución asociada).</p><p><em>Opciones para los tipos de suscripción</em>. Cada tipo de suscripción debe identificarse como un tipo de suscripción individual o bien un tipo de suscripción institucional. Para las suscripciones individuales, es necesario que el usuario/a inicie sesión en la revista para validar su suscripción y acceder a su contenido. En cambio, los usuarios/as que accedan al contenido de la suscripción mediante una suscripción institucional no necesitan iniciar sesión, ya que el dominio institucional y las direcciones IP se usan para validar la suscripción y permitir el acceso. Tanto para las suscripciones individuales como para las institucionales, la opción “Las suscripciones requieren información de afiliación” puede usarse para identificar las suscripciones de afiliación, ya sean gratuitas para los miembros o con descuento. Con esta opción habilitada, cada suscripción requerirá información de afiliación como parte del registro de suscripción. Se puede usar la opción “No hacer visible o disponible este tipo de suscripción públicamente” para deshabilitar su disponibilidad a los usuarios/as cuando adquieran suscripciones y su visibilidad en el apartado de suscripciones en la página de “Acerca de la revista”. Mientras que la mayoría de tipos de suscripción están generalmente disponibles y se muestran públicamente, un tipo creado para la contabilidad interna, las suscripciones del personal o por motivos de gestión, por ejemplo, pueden restringirse con esta opción.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Suscripciones',
      ),
      'value' => '<p><em>Suscripciones individuales</em>. Para las suscripciones individuales, el gestor/a (de suscripciones) de la revista primero tiene que registrar al usuario/a como lector/a, si no está ya registrado, y luego seleccionar, en la página de creación de suscripciones, ese usuario/a como suscriptor/a. El gestor/a (de suscripciones) de la revista puede entonces seleccionar el tipo de suscripción, fijar las fechas para la suscripción y escribir información de afiliación o referencia, si corresponde. El gestor/a (de suscripciones) de la revista puede también actualizar el perfil del usuario/a y la información de contacto, si se precisa. Todas las actualizaciones hechas mediante las páginas de creación y edición de suscripciones se guardan directamente en el perfil general de usuario/a. Por último, el gestor/a (de suscripciones) de la revista debería seleccionar la opción “Enviar un correo electrónico al usuario/a con su nombre de usuario/a y detalles de suscripción” para enviar un correo electrónico al usuario/a con las instrucciones de acceso y los detalles de la suscripción.</p><p><em>Suscripciones institucionales</em>. Para las suscripciones institucionales, el gestor/a (de suscripciones) de la revista primero tiene que registrar como lector/a al usuario/a, quien será la persona de contacto para la suscripción, si no está ya registrado; seguidamente, debe seleccionar a ese usuario/a como persona de contacto institucional para la suscripción en la página de creación de suscripciones. El gestor/a (de suscripciones) de la revista puede entonces seleccionar el tipo de suscripción, fijar las fechas para la suscripción y escribir el nombre de la institución, la dirección postal, el dominio o la dirección IP, así como cualquier información de afiliación o referencia, si corresponde. El gestor/a (de suscripciones) de la revista puede también actualizar el perfil y la información de la persona de contacto, si se precisa. Todas las actualizaciones hechas mediante las páginas de creación y edición de suscripciones se guardan directamente en el perfil general de usuario/a. Finalmente, el gestor/a (de suscripciones) de la revista puede seleccionar la opción de “Enviar un correo electrónico al usuario/a con su nombre de usuario/a y detalles de suscripción” para enviar a la persona de contacto institucional un correo con las instrucciones de inicio de sesión y los detalles de la suscripción. Esta información de inicio de sesión es únicamente para la persona de contacto que aparece en la suscripción. Los usuarios/as que estén en la institución no necesitan iniciar sesión para acceder al contenido de la suscripción y se autentican automáticamente mediante las direcciones de dominio o IP institucionales.</p><p><em>Estado de suscripción</em>. Cada suscripción incluye un campo de estado que indica el estado actual de la suscripción. Para que el sistema considere una suscripción como válida y para permitir al usuario/a o institución correspondiente el acceso al contenido de suscripción, el estado de suscripción debe encontrarse "activo" y debe contener fechas de inicio y finalización válidas. El gestor/a (de suscripciones) de la revista puede usar el estado de la suscripción para realizar una gestión detallada de registros de suscripción o para suspender suscripciones temporalmente, por ejemplo, si se desea recibir información adicional o el pago de un suscriptor/a.',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Políticas de suscripción',
      ),
      'value' => '<p>En políticas de suscripción, el gestor/a de la revista puede introducir la información de contacto del gestor/a de suscripciones, que aparecerá en Acerca de la revista, incluir información adicional sobre las suscripciones que aparecen en Acerca de la revista (los tipos de suscripción y la estructura de honorarios ya aparecerán allí), configurar recordatorios del vencimiento de la suscripción, configurar las opciones de acceso abierto; y definir la política de autoarchivo por parte del autor/a, que también aparece en Acerca de la revista.</p>',
    ),
  ),
); ?>
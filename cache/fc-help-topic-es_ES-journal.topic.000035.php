<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'journal/topic/000035',
        'locale' => 'es_ES',
        'title' => 'Pagos',
        'toc' => 'journal/toc/000001',
        'key' => 'journal.managementPages.payments',
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
      'value' => '<p>Desde la página Gestión de la revista, el gestor/a de la revista puede habilitar el módulo de pago de cuotas mediante PayPal o un proceso manual para aceptar los pagos de cuotas del autor/a y de acceso a artículos. El módulo de pago de cuotas lleva un registro de los usuarios/as que pagaron y muestra información relacionada en la página Acerca de la revista. Además, al habilitar el módulo de pago de cuotas los usuarios/as pueden renovar las suscripciones y las afiliaciones desde su página Área personal.</p><p>El módulo de pago de cuotas se divide en tres subsecciones diferentes: Opciones de pago de cuotas, métodos de pago de cuotas y registros.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Opciones de pago de cuotas',
      ),
      'value' => '<p>El primer paso para configurar el módulo de pagos es activar todas las opciones deseadas en la página Opciones de pago de cuotas.</p><p><em>Opciones generales</em><br />El módulo de pagos puede activarse o desactivarse en Opciones generales y también se puede seleccionar la moneda. Tenga en cuenta que la selección de moneda en el módulo de pagos debe coincidir con la moneda de su suscripción, en caso de haberla.</p><p><em>Cuota del autor/a</em><br />El gestor/a de la revista puede habilitar cuotas individuales para el envío de un artículo, una revisión rápida y la publicación de un artículo, debajo del encabezado Cuotas del autor/a. Además, el gestor/a de la revista puede editar la cantidad, el título y la descripción de cualquier cuota, así como desarrollar una política de exención de pago general. Toda esta información aparece en la página Acerca de debajo de Cuotas del autor/a, así como en el proceso de envío del autor/a.</p><p>En caso de habilitarse, el autor/a debe abonar la cuota de envío del artículo antes de completar el paso 5 del proceso de envío del artículo. Los autores/as pueden solicitar la exención de pago y aun así enviar el artículo, aunque el editor/a de la página Envíos sin asignar debe revisar la solicitud.</p><p>La cuota de revisión rápida, en caso de estar habilitada, es opcional y, por lo tanto, no hace falta abonarla para completar el proceso de envío. Al abonarla, el envío aparece en gris en la cola de seguimiento de envíos del editor/a para indicar que se trata de un envío rápido.</p><p>Si la cuota de publicación del artículo está habilitada, el autor/a debe abonarla antes de publicarlo. No hay que pagar la cuota en el momento del envío del artículo. El autor/a deberá iniciar sesión y pagar la publicación del artículo una vez reciba una notificación por parte del editor/a sobre la aceptación de la publicación del mismo. Este proceso puede realizarse desde la cola de envíos activos del autor/a. Al igual que con la cuota de envío del artículo, el autor/a puede solicitar la exención de pago.</p><p><em>Cuotas del lector/a</em><br />El gestor/a de la revista puede habilitar los pagos de cuotas de suscripciones, así como de compra de artículos.</p><p>Si el pago de suscripciones está habilitado, los usuarios/as suscritos pueden renovar la suscripción desde su página Área personal. Tenga en cuenta que las suscripciones no se actualizan automáticamente tras el acuse de recibo. El pago de suscripciones aparece en la página Registro de pagos con un enlace a la correspondiente página de suscripción del usuario/a, pero el gestor/a de la revista o el gestor/a de suscripciones tendrá que renovar manualmente la suscripción desde dicha página.</p><p>Si el pago de compra de artículos está habilitado, el acceso al contenido protegido por suscripción se habilita según cada artículo. Para comprar contenido de la revista, los usuarios/as deben registrarse. Al comprarlo, los usuarios/as tienen acceso continuo a dicho contenido.</p><p><em>Cuotas generales</em><br />En Cuotas generales, el gestor/a de la revista puede habilitar el pago de la cuota de afiliación a una asociación y de donaciones a la revista.</p><p>Si la opción de pago de la cuota de afiliación a una asociación está habilitada, la descripción aparece en Acerca de la revista, debajo de Políticas. Los usuarios/as registrados también tienen la opción de abonar la cuota de afiliación desde su Área personal.</p><p>Si la opción del pago de la cuota de donación está habilitada, un enlace a Donaciones aparece en la parte derecha de la barra de navegación por defecto. Al hacer clic en el enlace, los usuarios/as registrados pueden donar a la revista mediante el método de pago que elija el gestor/a de la revista.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Métodos de pago de cuotas',
      ),
      'value' => '<p>El gestor/a de la revista tiene la opción de habilitar el pago de cuotas manual o con PayPal desde esta página. Dicha elección determina si los usuarios/as se encuentran con una página de pago manual de cuotas o de PayPal al realizar un pago.</p><p><em>Pago de cuotas manual</em><br />Si se selecciona esta opción, el gestor/a de la revista también puede incluir instrucciones para que los usuarios/as realicen el pago manual, es decir, con quién contactar o dónde enviar el pago. Dichas instrucciones aparecen en la página Pago de cuotas manual cuando hay que realizar un pago: al enviar un artículo o cuando un usuario/a desea renovar la suscripción o la afiliación, por ejemplo.</p><p>Cuando el pago de cuotas manual está habilitado, el editor/a debe marcar manualmente el envío, la revisión rápida o las cuotas de publicación como pagadas o exentas. Esto se puede hacer desde la página Resumen del envío, y los registros adecuados aparecen en la página Registros de pago.</p><p><em>Pago de cuotas con PayPal</em><br />Si se selecciona dicha opción, el gestor/a de la revista debe decidir entre una URL de prueba o de producción para interactuar con el servicio de notificación de pago instantánea (IPN) de PayPal, e introducir la dirección de correo electrónico de la cuenta de vendedor en el formulario proporcionado.</p><p>Los usuarios/as pueden conectarse a PayPal y pagar las cuotas necesarias: al enviar un artículo, por ejemplo. Una vez que PayPal procese el pago, se pedirá al usuario/a que vuelva al sitio web de la revista y se añadirá automáticamente la cuota procesada a la página Registros.</p>',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Registros',
      ),
      'value' => '<p>La página Registros lleva un seguimiento de los usuarios/as que realizan pagos, el tipo de pago, la fecha del mismo y otros detalles.</p>',
    ),
  ),
); ?>
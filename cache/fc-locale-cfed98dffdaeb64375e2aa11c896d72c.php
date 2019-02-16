<?php return array (
  'plugins.importexport.crossref.displayName' => 'Módulo de exportación CrossRef XML',
  'plugins.importexport.crossref.description' => 'Exportar los metadatos del artículo en formato CrossRef XML.',
  'plugins.importexport.crossref.requirements' => 'Requisitos',
  'plugins.importexport.crossref.requirements.satisfied' => 'Se satisfacen todos los requisitos del módulo.',
  'plugins.importexport.crossref.error.pluginNotConfigured' => '¡El módulo CrossRef no está configurado! Configure este módulo en la <a href="{$settingsUrl}">página de configuración</a>.',
  'plugins.importexport.crossref.error.DOIsNotAvailable' => '¡El módulo de identificador público DOI no está configurado! Active y configure este módulo desde la página de configuración de <a href="{$doiUrl}" target="_blank">Módulo DOI</a>.',
  'plugins.importexport.crossref.error.publisherNotConfigured' => '¡No se ha configurado el editor/a (journal publisher) de la revista! Debe indicar una institución editora en el <a href="{$publisherUrl}" target="_blank">paso 1,5 de la configuración de la revista</a>.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'Para que el depósito en CrossRef sea correcto, son necesarios los siguientes ítems.',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Nombre del depositario/a',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'Correo electrónico del depositario/a',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Introduzca el nombre del depositario/a.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Introduzca el correo electrónico del depositario/a.',
  'plugins.importexport.crossref.settings.form.automaticRegistration' => 'Registro automático de DOI',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'En el momento de su publicación, OJS depositará los DOI de los artículos en CrossRef. Tenga en cuenta que esta operación puede no ser inmediata. Puede revisar todos los DOI no registrados en la <a href="{$unregisteredURL}">lista de artículos sin registrar</a>.',
  'plugins.importexport.crossref.registrationIntro' => 'Este módulo puede configurarse para registrar automáticamente los Digital Object Identifiers (DOI) en CrossRef. Para ello es necesario un usuario y una contraseña de <a href="http://www.crossref.org" target="_blank">CrossRef</a>. Si no dispone de usuario propio no podrá registrar los DOI en CrossRef desde OJS. Aun así, puede exportarlos en formato CrossRef XML y realizar la operación manualmente.',
  'plugins.importexport.crossref.settings.description' => '<a href="{$settingsUrl}">Configurar el módulo exportación/registro en CrossRef</a>.',
  'plugins.importexport.crossref.settings.form.description' => 'Configurar el módulo de exportación/registro en CrossRef.',
  'plugins.importexport.crossref.settings.form.username' => 'Usuario/a',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Introduzca su nombre de usuario/a de CrossRef.',
  'plugins.importexport.crossref.export.unregistered' => 'Exportar los artículos sin registrar',
  'plugins.importexport.crossref.export.selectUnregistered' => 'Seleccionar los artículos sin registrar',
  'plugins.importexport.crossref.manageDOIs' => 'Gestionar los DOI',
  'plugins.importexport.crossref.manageIssues' => 'Gestionar los números',
  'plugins.importexport.crossref.manageArticleDOIs' => 'Gestionar los DOI de los artículos',
  'plugins.importexport.crossref.articles.notDeposited' => 'Todos los artículos publicados ya han sido registrados (o ninguno de ellos tiene un DOI asignado).',
  'plugins.importexport.crossref.articles.failed' => 'No ha fallado ningún depósito.',
  'plugins.importexport.crossref.articles.submitted' => 'No hay DOI recién enviados.',
  'plugins.importexport.crossref.articles.completed' => 'No hay depósitos completados.',
  'plugins.importexport.crossref.articles.found' => 'No hay DOI activos',
  'plugins.importexport.crossref.downloadXML' => 'Descargar XML',
  'plugins.importexport.crossref.checkStatus' => 'Comprobar el estado',
  'plugins.importexport.crossref.checkStatusDescription' => 'Haga clic en este botón para actualizar el estado de los objetos seleccionados.',
  'plugins.importexport.crossref.status.all' => 'Todos',
  'plugins.importexport.crossref.status.non' => 'No depositados',
  'plugins.importexport.crossref.status.submitted' => 'Enviados',
  'plugins.importexport.crossref.status.completed' => 'Depositados',
  'plugins.importexport.crossref.status.failed' => 'Fallidos',
  'plugins.importexport.crossref.status.registered' => 'Activos',
  'plugins.importexport.crossref.status.markedRegistered' => 'Marcados como registrados',
  'plugins.importexport.crossref.statusLegend' => '<p>Estado del depósito:</p>
        <p>
        - No depositados: no se ha realizado ningún intento de depósito para este DOI.<br />
        - Enviados: el DOI se ha enviado para depositar.<br />
        - Depositados: el DOI se ha depositado en Crossref, pero podría no estar activo todavía.<br />
        - Activos: el DOI se ha depositado y se resuelve correctamente.<br />
        - Fallidos: el depósito de este DOI ha fallado.<br />
        - Marcados como registrados: el DOI se ha marcado como registrado manualmente.
        </p>
        <p>Solo se muestra el estado del último intento de depósito.</p>
        <p>Si un depósito falla, resuelva el problema e intente registrar el DOI de nuevo, por favor.</p>',
  'plugins.importexport.crossref.notification.failed' => 'Un DOI no se ha podido registrar. Por favor, vaya al módulo de Exportación/Registro > Exportar los artículos sin registrar > Fallidos.',
  'plugins.importexport.crossref.register.error.mdsError' => 'El envío no tuvo éxito. El servidor de registro de DOI ha devuelto el error: \'{$param}\'.',
  'plugins.importexport.crossref.register.success' => '¡Envío completado con éxito!',
  'plugins.importexport.crossref.cliUsage' => 'Uso:
    {$scriptName} {$pluginName} export xmlFileName path_de_revista {issues|articles} objetoId1 [objetoId2] ...
    {$scriptName} {$pluginName} register path_de_revista {issues|articles} objetoId1 [objetoId2] ...',
  'plugins.importexport.crossref.senderTask.name' => 'Tarea automática de registro en CrossRef',
  'plugins.importexport.crossref.senderTask.warning.noDOIprefix' => 'Falta el prefijo DOI para la revista ubicada en {$path}.',
); ?>
<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'site/topic/000003',
        'locale' => 'es_ES',
        'title' => 'Funciones administrativas',
        'toc' => 'site/toc/000000',
        'key' => 'site.administrativeFunctions',
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
      'value' => '<p>En la zona de administración del sitio web hay disponibles diversas funciones administrativas. Se recomienda usar estas funciones con precaución, pues su uso indebido puede provocar resultados inesperados.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Información del sistema',
      ),
      'value' => '<p>Información general sobre el entorno del servidor y el historial de versiones de OJS (actualizaciones anteriores incluidas). También se ofrece una interfaz web para ver el archivo de configuración de OJS.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Sesiones de usuario/a caducadas',
      ),
      'value' => '<p>Elimina todas las sesiones de usuarios/as activas en el sistema y solicita a cualquier usuario/a que esté conectado que vuelva a iniciar sesión.</p>',
    ),
    3 => 
    array (
      'attributes' => 
      array (
        'title' => 'Eliminar cachés de datos',
      ),
      'value' => '<p>Elimina todos los datos de la caché, incluidas las búsquedas, la información de la configuración regional y la ayuda.</p>',
    ),
    4 => 
    array (
      'attributes' => 
      array (
        'title' => 'Eliminar cachés de plantilla',
      ),
      'value' => '<p>Elimina todas las versiones de plantillas HTML de la caché. Esta función puede ser útil para forzar que las plantillas vuelvan a cargarse tras haberlas personalizado.</p>',
    ),
    5 => 
    array (
      'attributes' => 
      array (
        'title' => 'Fusionar usuarios/as',
      ),
      'value' => '<p>La función Fusión de usuarios/as permite al administrador/a del sitio fusionar dos cuentas de usuario/a en una sola cuenta. Así se transfieren asignaciones de edición, envíos y otros muchos registros de una cuenta a otra, al mismo tiempo que se elimina la primera cuenta.</p> <p>Mientras que la función de Fusión de usuarios/as disponible para el gestor/a de la revista se limita a la fusión de cuentas de usuarios/as de una revista en particular, la disponible para la administración del sitio permite al administrador/a fusionar cualquier par de cuentas de usuario/a, incluso entre diferentes revistas.</p> <p>Se transfieren los siguientes elementos:</p> <ul> <li>Autoría del artículo</li> <li>Comentarios públicos sobre artículos</li> <li>Notas de artículos</li> <li>Tareas y decisiones del editor/a</li> <li>Tareas de revisión</li> <li>Tareas del editor/a de maquetación</li> <li>Tareas del corrector/a de pruebas</li> <li>Correo electrónico y entradas de registro de eventos de un artículo</li> <li>Claves de acceso del revisor/a</li> <li>Roles</li> <li>Suscripciones (véase a continuación)</li> </ul> <p>Los siguientes elementos <strong>no</strong> se transfieren:</p> <ul> <li>Sesiones</li> <li>Estado de las notificaciones (si el usuario/a se hubiera registrado para recibir notificaciones de novedades en la revista)</li> <li>Pertenencia al equipo editorial</li> <li>Estado del editor/a en las secciones</li> <li>Información de perfil del usuario/a (p. ej. nombre, apellido, etc.)</li> </ul> <p>Esta opción debe usarse con precaución ya que no es reversible e implica la transferencia de registros de un usuario/a a otro.</p> <p>En cuanto a las suscripciones, la función de fusión realiza las siguientes acciones: En suscripciones individuales, la suscripción del segundo usuario/a se transfiere al primero solo si es válida y si el primer usuario/a no tiene todavía una suscripción válida a una revista determinada. En suscripciones institucionales, todas las suscripciones para las que se identifique el segundo usuario/a como persona de contacto se transfieren al primer usuario/a, que se convierte en la nueva persona de contacto para las suscripciones.</p>',
    ),
  ),
); ?>
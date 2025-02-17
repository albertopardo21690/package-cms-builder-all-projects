﻿# Package CMS Builder All Projects

![Package CMS Builder](https://github.com/albertopardo21690/package-cms-builder-all-projects/blob/395cbe3e55cf715f985cdd293c9ad94e56c805b1/banner.png)

## Descripción

**Package CMS Builder All Projects** es una solución integral para la construcción, gestión y despliegue de proyectos basados en sistemas de gestión de contenido (CMS). Este repositorio agrupa herramientas y configuraciones esenciales para agilizar el desarrollo de proyectos CMS de forma eficiente y escalable.

### Características principales:
- **Modularidad:** Componentes reutilizables para diferentes proyectos.
- **Compatibilidad:** Funciona con múltiples CMS populares como WordPress, Drupal, Joomla, etc.
- **Automatización:** Scripts preconfigurados para la instalación, configuración y despliegue.
- **Documentación clara:** Instrucciones detalladas para cada módulo y herramienta.
- **Soporte escalable:** Diseñado para proyectos pequeños y grandes.

---

Configuración

Archivos a modificar

A continuación, se detalla qué archivos necesitan ser modificados y los cambios que debes realizar:

1. api/models/connection.php

Edita la función infoDatabase() para añadir los datos de tu base de datos.

Configura la clave API (solo letras y números) en la función apikey().


Ejemplo de configuración:

function infoDatabase() {
    return [
        "database" => "[NAME_DATABASE]",
        "user" => "[USERNAME_DATABASE]",
        "pass" => "[PASSWORD_DATABASE]"
    ];
}

function apikey() {
    return "tuClaveAPI123";
}

2. cms/controllers/install.controller.php

Edita la función infoDatabase() para añadir los datos de tu base de datos.


Ejemplo de configuración:

function infoDatabase() {
    return [
        "database" => "[NAME_DATABASE]",
        "user" => "[USERNAME_DATABASE]",
        "pass" => "[PASSWORD_DATABASE]"
    ];
}

---

## Contribuciones

¡Las contribuciones son bienvenidas! Sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama:
   `git checkout -b feature/nueva-funcionalidad`
3. Realiza los cambios y haz un commit:
   `git commit -m` "Añadida nueva funcionalidad"`
4. Sube tus cambios:
   `git push origin feature/nueva-funcionalidad`
5. Abre un pull request en GitHub.

---

## Licencia

Este proyecto está licenciado bajo la [MIT License](LICENSE).

---

## Contacto

Si tienes dudas, sugerencias o necesitas soporte, no dudes en contactarnos:

- **Email:** support@alpardimedia.com
- **Sitio web:** [CMS Builder](https://www.cms.alpardimedia.com)
- **GitHub Issues:** [Reportar un problema](https://github.com/albertopardo21690/package-cms-builder-all-projects/issues)

---

¡Gracias por utilizar Package CMS Builder All Projects! 🚀


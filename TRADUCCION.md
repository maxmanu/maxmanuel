# Sistema de Traducción Multiidioma

## 📋 Resumen

Tu sitio web ahora está completamente traducido a **Español** e **Inglés** usando un sistema optimizado con la función `t()`.

## 🎯 Características Implementadas

✅ Sistema automático de detección de idioma
✅ Selector de idioma en el header (🇪🇸 Español / 🇺🇸 English)
✅ Traducciones mediante archivos JSON
✅ Datos dinámicos (CV y proyectos) en ambos idiomas
✅ Persistencia del idioma seleccionado mediante cookies
✅ Fallback automático a español si falta una traducción

## 📁 Estructura de Archivos

```
maxmanuel/
├── includes/
│   └── translations.php          # Sistema de traducción
├── data/
│   ├── translations/
│   │   ├── es.json               # Traducciones español
│   │   └── en.json               # Traducciones inglés
│   ├── cv/
│   │   ├── es.json               # CV en español
│   │   └── en.json               # CV en inglés
│   └── projects/
│       ├── es.json               # Proyectos en español
│       └── en.json               # Proyectos en inglés
└── templates/
    ├── header.php                # Incluye selector de idioma
    └── footer.php                # Textos traducidos
```

## 🚀 Cómo Funciona

### 1. Detección Automática de Idioma

El sistema detecta el idioma en este orden:

1. **Parámetro URL**: `?lang=es` o `?lang=en`
2. **Cookie guardada**: Si el usuario ya eligió un idioma
3. **Idioma del navegador**: Detecta automáticamente

### 2. Cambiar de Idioma

El usuario puede cambiar de idioma:

- Haciendo clic en el selector del header (ES / EN)
- Agregando `?lang=en` o `?lang=es` a cualquier URL

El idioma se guarda en una **cookie por 30 días**.

### 3. Usar Traducciones en el Código

#### Sintaxis básica:

```php
<?php echo t('clave'); ?>
```

#### Con claves anidadas:

```php
<?php echo t('menu.home'); ?>    // "Inicio" o "Home"
<?php echo t('hero.title'); ?>   // "Hola Mundo" o "Hello World"
```

## 📝 Archivos Modificados

### Archivos principales:

- ✅ `templates/header.php` - Agregado selector de idioma
- ✅ `index.php` - Todos los textos traducidos
- ✅ `projects.php` - Filtros y textos traducidos
- ✅ `templates/footer.php` - Footer traducido
- ✅ `api/filter-projects.php` - Carga proyectos según idioma
- ✅ `assets/css/style.css` - Estilos para selector de idioma

### Archivos creados:

- ✅ `includes/translations.php` - Sistema de traducción
- ✅ `data/translations/es.json` - Traducciones español
- ✅ `data/translations/en.json` - Traducciones inglés
- ✅ `data/cv/es.json` - CV español
- ✅ `data/cv/en.json` - CV inglés (traducido)
- ✅ `data/projects/es.json` - Proyectos español
- ✅ `data/projects/en.json` - Proyectos inglés (traducido)

## 🔧 Agregar Más Traducciones

### Opción 1: Textos estáticos (UI)

1. Abre `data/translations/es.json` y `data/translations/en.json`
2. Agrega la nueva clave:

**es.json:**

```json
{
  "nueva_seccion": {
    "titulo": "Mi Nuevo Título",
    "descripcion": "Mi descripción"
  }
}
```

**en.json:**

```json
{
  "nueva_seccion": {
    "titulo": "My New Title",
    "descripcion": "My description"
  }
}
```

3. Usa en tu código:

```php
<h2><?php echo t('nueva_seccion.titulo'); ?></h2>
<p><?php echo t('nueva_seccion.descripcion'); ?></p>
```

### Opción 2: Datos dinámicos (CV, Proyectos, etc.)

1. Edita `data/cv/es.json` y `data/cv/en.json`
2. Agrega los campos necesarios
3. El sistema cargará automáticamente según el idioma

## 🌍 Agregar Más Idiomas (Futuro)

Para agregar francés, portugués, etc.:

1. Actualiza `includes/translations.php`:

```php
define('AVAILABLE_LANGS', ['es', 'en', 'fr', 'pt']);
```

2. Crea los archivos JSON:
   - `data/translations/fr.json`
   - `data/cv/fr.json`
   - `data/projects/fr.json`

3. Actualiza el selector en `templates/header.php`:

```php
<li><a class="dropdown-item" href="?lang=fr">🇫🇷 Français</a></li>
<li><a class="dropdown-item" href="?lang=pt">🇧🇷 Português</a></li>
```

## 🎨 Personalización

### Cambiar idioma por defecto

Edita `includes/translations.php`:

```php
define('DEFAULT_LANG', 'en'); // Cambiar a inglés por defecto
```

### Desactivar detección automática

Comenta estas líneas en `includes/translations.php`:

```php
// Detección del navegador (líneas 31-36)
```

## 📌 Notas Importantes

- **Caché**: Si los cambios no se ven, limpia las cookies del navegador
- **SEO**: Considera agregar tags `hreflang` para mejor SEO multiidioma
- **URLs**: Para SEO avanzado, considera URLs como `/es/` y `/en/` en lugar de `?lang=`

## ✅ Testing

Prueba tu sitio:

1. Visita: `http://localhost/maxmanuel/`
2. Cambia el idioma desde el selector (ES/EN)
3. Verifica que todos los textos cambien
4. Recarga la página - el idioma debe persistir
5. Prueba los filtros en `/projects` en ambos idiomas

## 🆘 Troubleshooting

**Problema**: No aparecen las traducciones

- **Solución**: Verifica que los archivos JSON estén en la ruta correcta
- Revisa que `includes/translations.php` esté incluido en cada página

**Problema**: El selector no funciona

- **Solución**: Verifica que Bootstrap JS esté cargado
- Revisa la consola del navegador por errores

**Problema**: Los proyectos no se filtran

- **Solución**: Limpia la cache del navegador
- Verifica que `api/filter-projects.php` tenga permisos de lectura

## 📞 Soporte

Si necesitas ayuda o quieres agregar más funcionalidades:

- Revisa la documentación de PHP JSON functions
- Consulta la estructura de archivos en `data/`
- Los archivos JSON deben estar en formato UTF-8

---

**¡Tu sitio web ahora es multiidioma! 🎉**

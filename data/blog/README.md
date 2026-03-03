# 📝 Sistema de Blog

Sistema de blog basado en Markdown para tu sitio web personal.

## 📂 Estructura

```
data/blog/
├── es/              # Posts en español
│   └── 2026-02-15-titulo-post.md
└── en/              # Posts en inglés
    └── 2026-02-15-post-title.md
```

## ✍️ Crear un nuevo post

### 1. Crear archivo Markdown

Crea un archivo `.md` en la carpeta correspondiente al idioma:

- Español: `data/blog/es/`
- Inglés: `data/blog/en/`

**Formato del nombre:** `YYYY-MM-DD-slug-del-post.md`

Ejemplo: `2026-02-16-mi-nuevo-post.md`

### 2. Estructura del post

````markdown
---
title: 'Título del Post'
date: 2026-02-16
category: 'Categoría'
icon: 'code'
excerpt: 'Breve descripción del post que aparece en la lista.'
---

# Título del Post

Aquí va el contenido completo del post en Markdown...

## Subtítulo

- Lista de elementos
- Otro elemento

```código
// Bloques de código
function ejemplo() {
  console.log("Hola");
}
```
````

**Texto en negrita** y _cursiva_.

````

### 3. Front Matter (metadatos)

Los metadatos entre `---` son obligatorios:

- **title**: Título del post
- **date**: Fecha en formato YYYY-MM-DD
- **category**: Categoría (ej: "Desarrollo Web", "Performance")
- **icon**: Nombre del ícono (ver lista abajo)
- **excerpt**: Resumen corto para la tarjeta del post

### 4. Iconos disponibles

Puedes usar estos iconos en el campo `icon`:

- `newspaper` - Icono de periódico (por defecto)
- `code` - Código
- `database` - Base de datos
- `package` - Paquete
- `shield` - Seguridad
- `zap` - Performance/Velocidad
- `layout` - Diseño/Layout

## 📝 Sintaxis Markdown soportada

### Encabezados
```markdown
# H1
## H2
### H3
````

### Énfasis

```markdown
**negrita**
_cursiva_
```

### Listas

```markdown
- Item 1
- Item 2

1. Primer item
2. Segundo item
```

### Enlaces e imágenes

```markdown
[Texto del enlace](https://ejemplo.com)
![Alt text](ruta/imagen.jpg)
```

### Código

````markdown
`código en línea`

```php
// Bloque de código
echo "Hola Mundo";
```
````

````

### Tablas
```markdown
| Columna 1 | Columna 2 |
|-----------|-----------|
| Dato 1    | Dato 2    |
````

### Citas

```markdown
> Esta es una cita
```

## 🌐 Multiidioma

El blog detecta automáticamente el idioma del usuario y muestra los posts correspondientes:

- Si el usuario está en español (`?lang=es` o cookie), verá posts de `data/blog/es/`
- Si está en inglés (`?lang=en`), verá posts de `data/blog/en/`

**Importante:** Crea versiones del mismo post en ambos idiomas usando el mismo slug.

Ejemplo:

- `data/blog/es/2026-02-16-mi-post.md`
- `data/blog/en/2026-02-16-my-post.md`

## 📁 Archivos del sistema

- `includes/blog.php` - Funciones del blog
- `includes/Parsedown.php` - Parser de Markdown
- `news.php` - Lista de posts
- `post.php` - Vista individual de un post

## 🚀 Agregar un nuevo post (Paso a paso)

1. **Crea el archivo en español:**
   - Ubicación: `data/blog/es/2026-02-16-mi-nuevo-post.md`
   - Agrega los metadatos y contenido

2. **Crea la versión en inglés:**
   - Ubicación: `data/blog/en/2026-02-16-my-new-post.md`
   - Traduce el contenido manteniendo la misma estructura

3. **¡Listo!** El post aparecerá automáticamente en la página de noticias

No necesitas modificar ningún archivo PHP ni base de datos.

## 💡 Tips

- Los posts se ordenan automáticamente por fecha (más recientes primero)
- Usa imágenes con rutas relativas: `assets/img/blog/imagen.jpg`
- El excerpt debe ser entre 100-150 caracteres para verse bien
- Mantén el slug simple y descriptivo (sin acentos ni caracteres especiales)
- El slug se extrae automáticamente del nombre del archivo

## 📝 Ejemplo completo

**Archivo:** `data/blog/es/2026-02-16-guia-markdown.md`

````markdown
---
title: 'Guía completa de Markdown'
date: 2026-02-16
category: 'Tutoriales'
icon: 'code'
excerpt: 'Aprende a usar Markdown para escribir posts de blog de forma fácil y rápida.'
---

# Guía completa de Markdown

Markdown es un lenguaje de marcado ligero que te permite escribir contenido formateado de manera simple.

## ¿Por qué usar Markdown?

- **Fácil de aprender**: Sintaxis simple e intuitiva
- **Portátil**: Archivos de texto plano
- **Versionable**: Perfecto para Git

## Sintaxis básica

Para crear un enlace, usa esta sintaxis:

```markdown
[Texto del enlace](URL)
```
````

¡Y listo! Ahora puedes empezar a escribir en Markdown.

```

---

¿Preguntas? Revisa los posts de ejemplo en `data/blog/` 🚀
```

<?php

/**
 * Sistema de Blog basado en Markdown
 * Lee archivos .md desde data/blog/{lang}/
 */

require_once __DIR__ . '/Parsedown.php';

/**
 * Parsea el front matter de un archivo markdown
 * 
 * @param string $content Contenido del archivo
 * @return array ['metadata' => array, 'content' => string]
 */
function parse_front_matter($content)
{
  $metadata = [];
  $body = $content;

  // Buscar front matter entre ---
  if (preg_match('/^---\s*\n(.*?)\n---\s*\n(.*)$/s', $content, $matches)) {
    $front_matter = $matches[1];
    $body = $matches[2];

    // Parsear cada línea del front matter
    $lines = explode("\n", $front_matter);
    foreach ($lines as $line) {
      if (preg_match('/^(\w+):\s*(.+)$/', trim($line), $match)) {
        $key = $match[1];
        $value = trim($match[2], ' "\'');
        $metadata[$key] = $value;
      }
    }
  }

  return [
    'metadata' => $metadata,
    'content' => $body
  ];
}

/**
 * Obtiene todos los posts del blog
 * 
 * @param string $lang Idioma (es/en)
 * @param int $limit Número máximo de posts (0 = todos)
 * @return array Array de posts ordenados por fecha descendente
 */
function get_blog_posts($lang = null, $limit = 0)
{
  global $current_lang;

  if ($lang === null) {
    $lang = $current_lang ?? 'es';
  }

  $blog_dir = __DIR__ . "/../data/blog/{$lang}";
  $posts = [];

  // Verificar si existe el directorio
  if (!is_dir($blog_dir)) {
    return $posts;
  }

  // Leer todos los archivos .md
  $files = glob($blog_dir . '/*.md');

  $parsedown = new Parsedown();

  foreach ($files as $file) {
    $content = file_get_contents($file);
    $parsed = parse_front_matter($content);

    $metadata = $parsed['metadata'];
    $markdown_content = $parsed['content'];

    // Convertir markdown a HTML
    $html_content = $parsedown->text($markdown_content);

    // Extraer slug del nombre del archivo
    $filename = basename($file, '.md');

    // Formato esperado: YYYY-MM-DD-slug
    $slug = $metadata['slug'] ?? preg_replace('/^\d{4}-\d{2}-\d{2}-/', '', $filename);

    $posts[] = [
      'slug' => $slug,
      'title' => $metadata['title'] ?? 'Sin título',
      'date' => $metadata['date'] ?? substr($filename, 0, 10),
      'category' => $metadata['category'] ?? 'General',
      'excerpt' => $metadata['excerpt'] ?? '',
      'content' => $html_content,
      'icon' => $metadata['icon'] ?? 'newspaper',
      'image' => $metadata['image'] ?? '',
      'lang' => $lang
    ];
  }

  // Ordenar por fecha descendente
  usort($posts, function ($a, $b) {
    return strtotime($b['date']) - strtotime($a['date']);
  });

  // Limitar resultados si se especifica
  if ($limit > 0) {
    $posts = array_slice($posts, 0, $limit);
  }

  return $posts;
}

/**
 * Obtiene un post específico por slug
 * 
 * @param string $slug Slug del post
 * @param string $lang Idioma
 * @return array|null Post encontrado o null
 */
function get_blog_post($slug, $lang = null)
{
  $posts = get_blog_posts($lang);

  foreach ($posts as $post) {
    if ($post['slug'] === $slug) {
      return $post;
    }
  }

  return null;
}

/**
 * Formatea una fecha en formato legible
 * 
 * @param string $date Fecha en formato YYYY-MM-DD
 * @param string $lang Idioma
 * @return string Fecha formateada
 */
function format_blog_date($date, $lang = 'es')
{
  $timestamp = strtotime($date);

  if ($lang === 'es') {
    $months = [
      1 => 'Enero',
      2 => 'Febrero',
      3 => 'Marzo',
      4 => 'Abril',
      5 => 'Mayo',
      6 => 'Junio',
      7 => 'Julio',
      8 => 'Agosto',
      9 => 'Septiembre',
      10 => 'Octubre',
      11 => 'Noviembre',
      12 => 'Diciembre'
    ];
  } else {
    $months = [
      1 => 'January',
      2 => 'February',
      3 => 'March',
      4 => 'April',
      5 => 'May',
      6 => 'June',
      7 => 'July',
      8 => 'August',
      9 => 'September',
      10 => 'October',
      11 => 'November',
      12 => 'December'
    ];
  }

  $day = date('d', $timestamp);
  $month = $months[(int)date('m', $timestamp)];
  $year = date('Y', $timestamp);

  return "$day $month $year";
}

/**
 * Obtiene el ícono SVG correspondiente
 * 
 * @param string $icon_name Nombre del ícono
 * @return string SVG del ícono
 */
function get_blog_icon($icon_name)
{
  $icons = [
    'newspaper' => '<path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"></path><path d="M18 14h-8"></path><path d="M15 18h-5"></path><path d="M10 6h8v4h-8V6Z"></path>',

    'code' => '<path d="m18 16 4-4-4-4"></path><path d="m6 8-4 4 4 4"></path><path d="m14.5 4-5 16"></path>',

    'database' => '<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v14c0 1.7 4 3 9 3s9-1.3 9-3V5"></path><path d="M3 12c0 1.7 4 3 9 3s9-1.3 9-3"></path>',

    'package' => '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>',

    'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>',

    'zap' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>',

    'layout' => '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line>',
  ];

  return $icons[$icon_name] ?? $icons['newspaper'];
}

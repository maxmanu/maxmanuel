<?php

/**
 * Sistema de Traducción Multiidioma
 * Soporta: Español (es) e Inglés (en)
 */

// Idioma por defecto
define('DEFAULT_LANG', 'es');
define('AVAILABLE_LANGS', ['es', 'en']);

// Variable global para almacenar las traducciones cargadas
$translations = [];
$current_lang = DEFAULT_LANG;

/**
 * Inicializa el sistema de traducción
 */
function init_translations()
{
  global $current_lang;

  // 1. Detectar idioma desde la URL (?lang=en)
  if (isset($_GET['lang']) && in_array($_GET['lang'], AVAILABLE_LANGS)) {
    $current_lang = $_GET['lang'];
    // Guardar en cookie por 30 días
    setcookie('lang', $current_lang, time() + (30 * 24 * 60 * 60), '/');
  }
  // 2. Detectar idioma desde cookie
  elseif (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], AVAILABLE_LANGS)) {
    $current_lang = $_COOKIE['lang'];
  }
  // 3. Detectar idioma del navegador
  elseif (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (in_array($browser_lang, AVAILABLE_LANGS)) {
      $current_lang = $browser_lang;
    }
  }

  // Cargar traducciones
  load_translations($current_lang);
}

/**
 * Carga las traducciones desde el archivo JSON
 */
function load_translations($lang)
{
  global $translations;

  $file_path = __DIR__ . "/../data/translations/{$lang}.json";

  if (file_exists($file_path)) {
    $json = file_get_contents($file_path);
    $translations = json_decode($json, true);
  } else {
    // Si no existe el archivo, cargar por defecto español
    if ($lang !== DEFAULT_LANG) {
      load_translations(DEFAULT_LANG);
    }
  }
}

/**
 * Función principal de traducción
 * 
 * @param string $key Clave de traducción (ej: 'menu.home')
 * @param array $params Parámetros para reemplazar (opcional)
 * @return string Texto traducido
 */
function t($key, $params = [])
{
  global $translations;

  // Navegar por claves anidadas (ej: 'menu.home')
  $keys = explode('.', $key);
  $value = $translations;

  foreach ($keys as $k) {
    if (isset($value[$k])) {
      $value = $value[$k];
    } else {
      // Si no existe la traducción, devolver la clave
      return $key;
    }
  }

  $text = $value;

  // Reemplazar parámetros dinámicos
  foreach ($params as $param => $val) {
    $text = str_replace("{{$param}}", $val, $text);
  }

  return $text;
}

/**
 * Obtiene el idioma actual
 */
function get_current_lang()
{
  global $current_lang;
  return $current_lang;
}

/**
 * Carga datos (CV o proyectos) según el idioma actual
 */
function load_data($type)
{
  global $current_lang;

  $file_path = __DIR__ . "/../data/{$type}/{$current_lang}.json";

  if (file_exists($file_path)) {
    $json = file_get_contents($file_path);
    return json_decode($json, true);
  }

  // Fallback al español
  $fallback_path = __DIR__ . "/../data/{$type}/" . DEFAULT_LANG . ".json";
  if (file_exists($fallback_path)) {
    $json = file_get_contents($fallback_path);
    return json_decode($json, true);
  }

  return null;
}

// Inicializar el sistema automáticamente
init_translations();

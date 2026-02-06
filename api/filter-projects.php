<?php
header('Content-Type: application/json');

// Leer el archivo JSON
$projects = json_decode(file_get_contents('../data/projects.json'), true);

// Obtener los filtros desde la petición
$technology = isset($_GET['technology']) ? $_GET['technology'] : '';
$agency = isset($_GET['agency']) ? $_GET['agency'] : '';

// Filtrar proyectos
$filteredProjects = $projects;

if (!empty($technology)) {
  $filteredProjects = array_filter($filteredProjects, function ($project) use ($technology) {
    return in_array($technology, $project['technologies']);
  });
}

if (!empty($agency)) {
  $filteredProjects = array_filter($filteredProjects, function ($project) use ($agency) {
    return $project['agency'] === $agency;
  });
}

// Reindexar el array
$filteredProjects = array_values($filteredProjects);

// Devolver los proyectos filtrados
echo json_encode($filteredProjects);

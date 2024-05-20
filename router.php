<?php

$view = isset($_GET['view']) ? htmlspecialchars($_GET['view']) : '';


switch ($view) {
    case 'asignaturas':
        include '../views/SistemaAsistencia/Asignaturas/lista_asignatura.view.php';
        break;
    case 'docentes':
        include '../views/SistemaAsistencia/Docentes/lista_docente.view.php';
        break;
    case 'primergrado':
        include '../views/SistemaAsistencia/Alumnos/segudoGrado/lista_segundogrado.php';
        break;
    case 'segundogrado':
        include '../views/SistemaAsistencia/Alumnos/primerGrado/lista_primergrado.php';
        break;
    case 'tercergrado':
        include '../views/SistemaAsistencia/Alumnos/primerGrado/lista_primergrado.php';
        break;
    case 'cuartogrado':
        include '../views/SistemaAsistencia/Alumnos/primerGrado/lista_primergrado.php';
        break;
    case 'quintogrado':
        include '../views/SistemaAsistencia/Alumnos/primerGrado/lista_primergrado.php';
        break;
    case 'sextogrado':
        include '../views/SistemaAsistencia/Alumnos/primerGrado/lista_primergrado.php';
        break;
    case 'usuario':
        include '../views/SistemaAsistencia/Usuarios/primergrado/list_asignaturas.php';
        break;
    case 'perfil':
        include '../views/SistemaAsistencia/Usuarios/perfil/perfil.php';
        break;
    default:
        echo "Página no encontrada.";
}
?>

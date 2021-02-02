<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

// Instantiate App
$app = AppFactory::create();




$app->get('/api/notificaciones', function (Request $request, Response $response) {
    $sql = "SELECT idNotificacion as 'id' ,imagen_url , mensajeNotificacion as 'mensaje' , descripcion , 
    fechaNotificacion as 'fecha' from notificaciones ORDER BY  fechaNotificacion desc";
    try {
        $db = new db();
        $db = $db->conexionDB();
        $resultado = $db->query($sql);
        if ($resultado->rowCount() > 0) {
            $vehiculos = $resultado->fetchAll(PDO::FETCH_OBJ);

            $response->getBody()->write(json_encode($vehiculos));
        } else {
            $response->getBody()->write(json_encode("No hay data"));
        }
        return $response;
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e . '}';
    }
});




$app->get('/api/notificaciones/{idnotificacion}', function (Request $request, Response $response) {
    $idNotificacion = $request->getAttribute('idnotificacion');
    $sql = "SELECT idNotificacion as 'id' , mensajeNotificacion as 'mensaje' , descripcion , fechaNotificacion as 'fecha'
     from notificaciones where idNotificacion = $idNotificacion";
    try {
        $db = new db();
        $db = $db->conexionDB();
        $resultado = $db->query($sql);
        if ($resultado->rowCount() > 0) {
            $vehiculos = $resultado->fetchAll(PDO::FETCH_OBJ);

            $response->getBody()->write(json_encode($vehiculos));
        } else {
            $response->getBody()->write(json_encode("No hay data"));
        }
        return $response;
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e . '}';
    }
});

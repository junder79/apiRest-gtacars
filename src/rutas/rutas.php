<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

// Instantiate App
$app = AppFactory::create();



// Obtener todos los vehiculos 

$app->get('/api/all', function (Request $request, Response $response) {
    $sql = "SELECT v.idvehiculo,v.nombre_vehiculo,v.descripcion_vehiculo , cv.nombre_categoria , r.resistencia,v.marca , vv.velocidad , tp.nombre_tipo_vehiculo , v.imagen_vehiculo FROM `vehiculo` as  v
    join categoria_vehiculo cv
    on cv.id_categoria = v.categoria_vehiculo
    join resistencia_vehiculo r 
    on r.idresistencia = v.resistencia
    join velocidad_vehiculo vv
    on vv.idvelocidad = v.velocidad
    JOIN tipo_vehiculo tp 
    on tp.idtipovehiculo = v.tipo_vehiculo";
    try {
        $db = new db();
        $db = $db->conexionDB();
        $resultado = $db->query($sql);
        if ($resultado->rowCount() > 0) {
            $vehiculos = $resultado->fetchAll(PDO::FETCH_OBJ);

            $response->getBody()->write(json_encode($vehiculos));
            return $response
                ->withHeader('Access-Control-Allow-Origin', 'http://gtavehicles.000webhostapp.com')
                ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
        } else {
            $response->getBody()->write(json_encode("No hay data"));
        }
        return $response;
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e . '}';
    }
});


$app->get('/api/vehiculos', function (Request $request, Response $response) {
    $sql = "SELECT v.idvehiculo ,v.nombre_vehiculo , v.imagen_vehiculo , v.descripcion_vehiculo , cv.nombre_categoria , rv.resistencia , v.marca , vv.velocidad , tv.nombre_tipo_vehiculo
    from vehiculo v
    join categoria_vehiculo cv 
    on cv.id_categoria = v.categoria_vehiculo
    join resistencia_vehiculo rv 
    on rv.idresistencia = v.resistencia
    join velocidad_vehiculo vv 
    on vv.idvelocidad = v.velocidad
    join tipo_vehiculo tv 
    on tv.idtipovehiculo = v.tipo_vehiculo
    where v.categoria_vehiculo = 1";
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

// Obtener todos los aviones

$app->get('/api/aviones', function (Request $request, Response $response) {
    $sql = "SELECT v.idvehiculo ,v.nombre_vehiculo , v.imagen_vehiculo , v.descripcion_vehiculo , cv.nombre_categoria , rv.resistencia , v.marca , vv.velocidad , tv.nombre_tipo_vehiculo
    from vehiculo v
    join categoria_vehiculo cv 
    on cv.id_categoria = v.categoria_vehiculo
    join resistencia_vehiculo rv 
    on rv.idresistencia = v.resistencia
    join velocidad_vehiculo vv 
    on vv.idvelocidad = v.velocidad
    join tipo_vehiculo tv 
    on tv.idtipovehiculo = v.tipo_vehiculo
    where v.categoria_vehiculo = 3";
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

// Obtener todos los helicopteros

$app->get('/api/helicopteros', function (Request $request, Response $response) {
    $sql = "SELECT v.idvehiculo ,v.nombre_vehiculo , v.imagen_vehiculo , v.descripcion_vehiculo , cv.nombre_categoria , rv.resistencia , v.marca , vv.velocidad , tv.nombre_tipo_vehiculo
    from vehiculo v
    join categoria_vehiculo cv 
    on cv.id_categoria = v.categoria_vehiculo
    join resistencia_vehiculo rv 
    on rv.idresistencia = v.resistencia
    join velocidad_vehiculo vv 
    on vv.idvelocidad = v.velocidad
    join tipo_vehiculo tv 
    on tv.idtipovehiculo = v.tipo_vehiculo
    where v.categoria_vehiculo = 4";
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

// Obtener todos los Extraños
$app->get('/api/extranos', function (Request $request, Response $response) {
    $sql = "SELECT v.idvehiculo ,v.nombre_vehiculo , v.imagen_vehiculo , v.descripcion_vehiculo , cv.nombre_categoria , rv.resistencia , v.marca , vv.velocidad , tv.nombre_tipo_vehiculo
    from vehiculo v
    join categoria_vehiculo cv 
    on cv.id_categoria = v.categoria_vehiculo
    join resistencia_vehiculo rv 
    on rv.idresistencia = v.resistencia
    join velocidad_vehiculo vv 
    on vv.idvelocidad = v.velocidad
    join tipo_vehiculo tv 
    on tv.idtipovehiculo = v.tipo_vehiculo
    where v.categoria_vehiculo = 5";
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



// Obtener todos los Botes
$app->get('/api/botes', function (Request $request, Response $response) {
    $sql = "SELECT v.idvehiculo ,v.nombre_vehiculo , v.imagen_vehiculo , v.descripcion_vehiculo , cv.nombre_categoria , rv.resistencia , v.marca , vv.velocidad , tv.nombre_tipo_vehiculo
    from vehiculo v
    join categoria_vehiculo cv 
    on cv.id_categoria = v.categoria_vehiculo
    join resistencia_vehiculo rv 
    on rv.idresistencia = v.resistencia
    join velocidad_vehiculo vv 
    on vv.idvelocidad = v.velocidad
    join tipo_vehiculo tv 
    on tv.idtipovehiculo = v.tipo_vehiculo
    where v.categoria_vehiculo = 2";
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


// Obtener todos las Motos
$app->get('/api/motos', function (Request $request, Response $response) {
    $sql = "SELECT v.idvehiculo ,v.nombre_vehiculo , v.imagen_vehiculo , v.descripcion_vehiculo , cv.nombre_categoria , rv.resistencia , v.marca , vv.velocidad , tv.nombre_tipo_vehiculo
    from vehiculo v
    join categoria_vehiculo cv 
    on cv.id_categoria = v.categoria_vehiculo
    join resistencia_vehiculo rv 
    on rv.idresistencia = v.resistencia
    join velocidad_vehiculo vv 
    on vv.idvelocidad = v.velocidad
    join tipo_vehiculo tv 
    on tv.idtipovehiculo = v.tipo_vehiculo
    where v.categoria_vehiculo = 6";
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



// Obtener detalle del Vehiculo 

$app->get('/api/vehiculos/{id}', function (Request $request, Response $response) {

    $idVehiculo =  $request->getAttribute('id');

    $sql = "SELECT v.idvehiculo , v.marca, v.nombre_vehiculo , v.imagen_vehiculo , v.descripcion_vehiculo , r.resistencia , cv.nombre_categoria , vv.velocidad FROM `vehiculo` v 
    join categoria_vehiculo cv 
    on cv.id_categoria = v.categoria_vehiculo
    join resistencia_vehiculo r 
    on r.idresistencia = v.resistencia
    join velocidad_vehiculo vv 
    on vv.idvelocidad = v.velocidad
    where v.idvehiculo = $idVehiculo";
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



$app->post('/api/nuevovehiculo', function (Request $request, Response $response) {


    $parametros = $request->getParsedBody();

    $nombre = $parametros['nombre'];
    $imagen = $parametros['imagen'];
    $descripcion = $parametros['descripcion'];
    $categoria = $parametros['categoria'];
    $resistencia = $parametros['resistencia'];
    $marca = $parametros['marca'];
    $velocidad = $parametros['velocidad'];
    $tipo = $parametros['tipo'];


    $sql = "INSERT INTO `vehiculo` (`idvehiculo`, `nombre_vehiculo`, `imagen_vehiculo`, `descripcion_vehiculo`, `categoria_vehiculo`, `resistencia`, `marca`, `velocidad`, `tipo_vehiculo`) 
    VALUES (NULL, :nombre, :imagen, :descripcion, :categoria, :resistencia, :marca, :velocidad, :tipo)";


    try {
        $db = new db();
        $db = $db->conexionDB();
        $resultado = $db->prepare($sql);
        $resultado->bindParam(':nombre', $nombre);
        $resultado->bindParam(':imagen', $imagen);
        $resultado->bindParam(':descripcion', $descripcion);
        $resultado->bindParam(':categoria', $categoria);
        $resultado->bindParam(':resistencia', $resistencia);
        $resultado->bindParam(':marca', $marca);
        $resultado->bindParam(':velocidad', $velocidad);
        $resultado->bindParam(':tipo', $tipo);

        $resultado->execute();
        $status = $response->getStatusCode();
        return $response
            ->withHeader('Access-Control-Allow-Origin', 'http://gtavehicles.000webhostapp.com')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e . '}';
    }
});


$app->post('/api/eliminar', function (Request $request, Response $response) {

    $parametros = $request->getParsedBody();

    $idVehiculo = $parametros['id'];
    $sql = "DELETE from vehiculo WHERE idvehiculo = $idVehiculo";
    try {
        $db = new db();
        $db = $db->conexionDB();
        $resultado = $db->prepare($sql);

        $resultado->execute();
        $status = $response->getStatusCode();
        return $response
            ->withHeader('Access-Control-Allow-Origin', 'http://gtavehicles.000webhostapp.com')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    } catch (PDOException $e) {
        echo '{"error":{"text":' . $e . '}';
    }
});





//------------ RUTAS DE NOTIFICACIONES --------------------------


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


/* --------- AUTENTICACION CON USUARIO ---------------- */

$app->post('/api/login', function (Request $request, Response $response) {

    $parametros = $request->getParsedBody();

    $nombreUsuario = $parametros['nombreUsuario'];
    $password = $parametros['password'];
    include_once('../config/password_encriptar_desencriptar.php');
    $Password = new password();
    $key = "1235@";
    $sql_get_datos = "SELECT password , nombreUsuario from usuario where nombreUsuario = '$nombreUsuario' ";
    $sql_get_datos = mysqli_query($conexion, $sql_get_datos);
    $sql_get_datos = mysqli_fetch_array($sql_get_datos);
    $sql_get_datos = $sql_get_datos["nombreUsuario"];
    $passow_D =  $Password->decrypt($sql_get_datos, $key);
    if ($passow_D == $contrasena) {
        //LOGEADO
    } else {
    }
    // $sql = "DELETE from vehiculo WHERE idvehiculo = $idVehiculo";
    // try {
    //     $db = new db();
    //     $db = $db->conexionDB();
    //     $resultado = $db->prepare($sql);

    //     $resultado->execute();
    //     $status = $response->getStatusCode();
    //     return $response
    //     ->withHeader('Access-Control-Allow-Origin', 'http://gtavehicles.000webhostapp.com')
    //     ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
    //     ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
    // } catch (PDOException $e) {
    //     echo '{"error":{"text":' . $e . '}';

    // }
});

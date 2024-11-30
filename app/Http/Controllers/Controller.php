<?php

namespace App\Http\Controllers;
use OpenApi\Attributes as OA;

#[
    OA\Info(version:"1.0.0",description: "API Desarrollada por Erick Leonardo Cruz Gil para la UFG", title:"Documentacion de API de Erick Leonardo Cruz Gil"),
    OA\Server(url:"http://localhost:8000",description:"Servidor Local de Desarrollo"),
    OA\Server(url:"http://localhost:8000",description:"Servidor para pruebas"),
    OA\Server(url:"http://localhost:8000",description:"Servidor de Producción"),
    OA\SecurityScheme(securityScheme:"bearerAuth",type:"http",name:"Authorization", in:"header",scheme:"bearer")

]

abstract class Controller
{
    //
}

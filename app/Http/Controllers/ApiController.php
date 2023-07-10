<?php

namespace App\Http\Controllers;

use App\Models\ApiLog;


use GuzzleHttp\Client;



class ApiController 
{
    //funcion para traer todos los usuarios y tambien los datos del usuario seleccionado
public function getApiResponse($id)
{
    $url = 'https://jsonplaceholder.typicode.com/users/'.$id;
    $client = new Client();
    $response = $client->get($url);
    $jsondata  = $response->getBody();

    $data = json_decode($jsondata, true);
   
   

    $getStatusCode=  $response->getStatusCode();
  
   $this->logs($url,$jsondata,$getStatusCode);
         
  return $data;
        
  
}



//funcion para traer las publicaciones del usuario seleccionado
public function getApiResponsePost($id)
{
    $url ='https://jsonplaceholder.typicode.com/posts?userId='.$id;
    $client = new Client();
    $response = $client->get($url);
    $jsondata  = $response->getBody();

    $data = json_decode($jsondata, true);
   
    $getStatusCode=  $response->getStatusCode();
  
    $this->logs($url,$jsondata,$getStatusCode);
         
  return $data;
        
  
}


//funcion para traer la publicacion seleccionada
public function getApiResponsepostSelect($id)
{
    $url = 'https://jsonplaceholder.typicode.com/posts/'.$id;
    $client = new Client();
    $response = $client->get($url);
    $jsondata  = $response->getBody();

    $data = json_decode($jsondata, true);
   
   
    $getStatusCode=  $response->getStatusCode();
  
    $this->logs($url,$jsondata,$getStatusCode);
         
  return $data;
        
  
}
//funcion para traer los comentarios de la publicacion seleccionada
public function getApiResponseComments($id)
{
    $url = 'https://jsonplaceholder.typicode.com/posts/'.$id.'/comments';
    $client = new Client();
    $response = $client->get($url);
    $jsondata  = $response->getBody();

    $data = json_decode($jsondata, true);
   
   
    $getStatusCode=  $response->getStatusCode();
  
    $this->logs($url,$jsondata,$getStatusCode);
         
  return $data;
        
  
}
//funcion para registrar los logs de cada conexion
public function logs($url,$jsondata,$getStatusCode){

    // Registrar el log de la conexión
  $log = new ApiLog();
  $log->url = $url;
  $log->method = 'GET';
  $log->request_body = ''; // No se envió cuerpo en la solicitud GET
  $log->response_body = $jsondata;
  $log->status_code = $getStatusCode;
  $log->save();
}

    
}


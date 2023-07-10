<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\ApiController;

class WelcomeController 
{
    public function index()
    {
        // Instanciar el controlador de la API
        $apiController = new ApiController('');

        // Llamar al método adecuado en el controlador de la API
        $responseData = $apiController->getApiResponse("");

        // Pasar los datos a la vista
        return view('api_response', ['data' => $responseData]);
    }

    public function show($id)
    {
        // Instanciar el controlador de la API
        $apiController = new ApiController();

        // Llamar al método adecuado en el controlador de la API
        $responseData = $apiController->getApiResponse($id);

        $id = $responseData['id'];

        $responsePost = $apiController->getApiResponsePost($id);
       
        foreach ($responsePost as  $value) {

            $idpost =$value['id'];

            $responseComenst =  $apiController->getApiResponseComments($idpost);
        
            $cantidad = count($responseComenst);
        }
       
       
        // Pasar los datos a la vista
        return view('usuarios', ['usuario' => $responseData,
        'data' => $responsePost,'cantidad' => $cantidad]);
        
    }

    public function post($id)
    {
        $apiController = new ApiController('');
       
        $responseData = $apiController->getApiResponsepostSelect($id);

        $user = $responseData['userId'];
        $responseDataUsua = $apiController->getApiResponse($user);
        // Pasar los datos a la vista

        $responseComenst =  $apiController->getApiResponseComments($id);
        return view('post', ['data' => $responseData,'Comenst' => $responseComenst,'usuario' => $responseDataUsua]);
        
    }

    
    public function datos($id)
    {
        $apiController = new ApiController('');
       
        $responseData = $apiController->getApiResponse($id);

        return view('datos', ['usuario' => $responseData]);
        
    }


    


}

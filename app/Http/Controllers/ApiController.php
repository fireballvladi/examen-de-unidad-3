<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function Librerias(){
        /*$cliente = new \GuzzleHttp\Client();
        $response = new $cliente->request('GET','https://www.gandhi.com.mx/storelocator');
        $datos= json_decode($response->getBody()->getContents(), true);

        /*$personajes = [];

        foreach ($datos['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'especie' => $personaje['species'],
                'origen' => $personaje['origin']['name'],
                'imagen' => $personaje['image'],
                'estatus' => $personaje['status'],
                'genero' => $personaje['gender']
            ];
        }*/

        return view('library');
    }
}

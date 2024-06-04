<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Musicas;

class PlayerController extends Controller
{

    public function index(){

        $lista = Musicas::all();

        // var_dump($lista).exit();

        if(count($lista) <= 0){
            $lista = new Musicas();
            $lista->title = "I Want You Back";
            $lista->artist = "jakson fives";
            $lista->imageUrl = "https://raw.githubusercontent.com/sbezerrarafa/encontro-com-feras/main/assets/jackson-fives.jpeg";
            $lista->audioUrl = "https://github.com/sbezerrarafa/encontro-com-feras/raw/main/assets/jackson-fives.mp3";
            $lista->save();

            $lista = new Musicas();
            $lista->title = "Pra onde eu irei?";
            $lista->artist = "Morada";
            $lista->imageUrl = "https://raw.githubusercontent.com/sbezerrarafa/encontro-com-feras/main/assets/morada.png";
            $lista->audioUrl = "https://github.com/sbezerrarafa/encontro-com-feras/raw/main/assets/Pra-onde-eu-irei.mp3";
            $lista->save();
        }

        //Buscar todos
        // $lista = Musicas::all();

        //Bucar por id
        // $lista = Musicas::find(2);

        //Deletar por id
        //Antes de deletar, verificar se existe
        // if($lista){
        //     $lista->delete();
        // }

       
        return response()->json($lista);

    }

    public function buscar($id){
        $lista = Musicas::find($id);

        return response()->json($lista);

    }

    public function salvar(){}

    public function atualizar($id){
        $lista = Musicas::find($id);

        if(!$lista){
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }

        $lista->title = "Snuff";
        $lista->artist = "Corey Talor";
        $lista->imageUrl = "https://github.com/Francisco-lira/Player-musica-js/blob/main/imagens/snuff.jpg";
        $lista->audioUrl = "https://github.com/Francisco-lira/Player-musica-js/blob/main/musicas/Corey%20Taylor%20-%20Snuff.mp3";
        $lista->save();
    }

    public function deletar($id){
        $lista = Musicas::find($id);
        if($lista){
                $lista->delete();
                if(!$lista){
                    return response()->json(['sucess' => 'registro deletado']);
                }
             }


    }


  }

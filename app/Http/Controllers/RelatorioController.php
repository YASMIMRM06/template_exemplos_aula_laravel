<?php

namespace App\Http\Controllers;
use illminate\Support\View;
use Dompdf\Dompdf
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    function emiritirRelatorio(){
        $dompdf =new Dompdf();
        $dados = ['analise e desenvolvimento de sistemas', 
                  'alunos'=>['joao','luana';'russi'],
                  'duração'=> 4
                ];//dados mocados

        $html = View::make('relatorio.curso',['dados' => $dados])->render();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4','landscape');

        $dompdf->render();

        $dompdf->stream();
        

    }
}

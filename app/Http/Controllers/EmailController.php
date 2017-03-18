<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;
use DB;

class EmailController extends Controller
{
    //
    public function enviar(Request $request)
    {
        

        $nome = $request->input('nome');
         $email = $request->input('email');
         $assunto = $request->input('assunto');
        $mensagem = $request->input('mensagem');

        Mail::send('emails.fale-conosco', ['nome' => $nome, 'email' => $email, 'assunto' => $assunto, 'mensagem' => $mensagem], function ($message)
        {

            $message->from('site@fatecbb.edu.br', 'Site Fatec Bebedouro');

            $message->to('site@fatecbb.edu.br');
			$message->subject("Mensagem enviada do site");
        });

       return redirect('/fale-conosco')->with('message', 'Mensagem enviada com sucesso!')->with('message-type', 'success');;
    }
    
   
    
    public function missingMethod($params = array()){
        
        return "Erro 404 nao achei a página";
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chamados;
use App\Models\Usuario;
use App\Models\Banco;
use App\Models\User;
use App\Models\relacione;


class ChamadoController extends Controller
{

    public function banco_chamados(Request $request){

      $relacionado = Relacione::join('banco','banco.id', '=', 'relacione.banco')
      ->join('users', 'banco.user_id', '=', 'users.id')
      ->where('relacione.id_objeto',Auth::user()->id)
      ->select('users.name','banco.nome_banco','banco.id')
      ->get();
      //dd($b);

      $dono = Banco::where('user_id',Auth::user()->id)
      ->join('users', 'banco.user_id', '=', 'users.id')
      ->select('users.name','banco.nome_banco','banco.id')
      ->get();
      session(['previousUrl' => url()->previous()]);

    return view("banco_chamados")->with(['dono' => $dono, 'relacionado' => $relacionado]);
    }

    public function chamados_view($id){

      $chamados_relacionados = Chamados::join('relacione', 'relacione.banco', '=', 'chamados.banco')
      ->where('chamados.banco',$id)
    ->select('chamados.*')
    ->get();
    //dd($chamados_relacionados);


      $chamados = Chamados::where('user_id',Auth::user()->id)
      ->where('banco',$id)
      ->get();
      session(['previousUrl' => url()->previous()]);

      return view("chamados_view")->with(['chamados' => $chamados, 'id' => $id,'chamados_relacionados' => $chamados_relacionados]);
    }

    public function chamado_visualizar($id){
      $chamados_relacione = Chamados::join('relacione','relacione.banco','=','chamados.banco')
      ->where('chamados.user_id','relacione.dono_banco')
      ->get();
//dd($chamados_relacione);

      $chamados = Chamados::where('user_id',Auth::user()->id)
      ->where('id',$id)
      ->get();
      //dd($chamados);
      session(['previousUrl' => url()->previous()]);

    return view("chamado_visualizar")->with(['chamados' => $chamados, 'id' => $id,'chamados_relacione' => $chamados_relacione]);
    }

    public function editar_chamado_form($id){
      $chamados = Chamados::where('user_id',Auth::user()->id)
      ->where('id',$id)
      ->get();
      session(['previousUrl' => url()->previous()]);

    return view("editar_chamado_form",['id', $id])->with('chamados',$chamados);
    }

    public function cadastrar_chamado_form($id){
      session(['previousUrl' => url()->previous()]);
    return view("cadastrar_chamado_form",['id', $id])->with('id',$id);
    }

    public function parceiros_view($id){

    $o = Banco::where('user_id',Auth::user()->id)->get();

      $b = Relacione::join('banco','banco.id', '=', 'relacione.banco')
      ->where('relacione.id_objeto',Auth::user()->id)
      ->select('banco.*')
      ->get();
      //dd($b);



      session(['previousUrl' => url()->previous()]);
    return view("parceiros_view",['id', $id])->with('id',$id);
    }

    public function cadastrar_parceiro_form($id){
      $banco = Banco::where('id',$id)->select('user_id')->first();
      session(['previousUrl' => url()->previous()]);
    return view("cadastrar_parceiro_form",['id', $id])->with(['id' => $id, 'banco' => $banco]);
    }







    public function editar_chamado(Request $request, $id){

      Chamados::where('id', $id)->update([
          'nome_chamado' => $request->get('nome_chamado'),
          'email' => $request->get('email'),
          'responsavel' => $request->get('responsavel'),
          'chamado' => $request->get('chamado'),
          'prioridade' => $request->get('prioridade'),
      ]);
  
      return redirect()->route("chamado.visualizar", [$id]);
  }
  
    public function cadastrar_chamado(Request $request){
      $s = new Chamados;
      $s->user_id = Auth::user()->id;
      $s->nome_chamado = $request->get("nome_chamado");
      $s->email = $request->get("email");
      $s->responsavel = $request->get("responsavel");
      $s->chamado = $request->get("chamado");
      $s->prioridade = $request->get("prioridade");
      $s->banco = $request->get("id");
      $s->save();

      return redirect()->route("chamados.view",[$request->get("id")]);   
     }

    public function cadastrar_usuario(Request $request){
      $s = new User;
      $s->email = $request->get("email");
      $s->name = $request->get("name");
      $s->save();
    return view("login");
    }

    public function cadastrar_banco(Request $request){
      $y = new Banco;
      $y->user_id = Auth::user()->id;
      $y->nome_banco = $request->get('nome_banco');
      $y->save();
    return redirect()->route("banco.chamados");
    }

    public function cadastrar_parceiro(Request $request){

      $user = User::where('email',$request->get('email'))->select('id')->first();

      $r = new Relacione;
      $r->user_id = Auth::user()->id;
      $r->id_objeto = $user->id;
      $r->banco = $request->get("id");
      $r->dono_banco = $request->get("id_dono");
      $r->save();
  
    return redirect()->route("banco.chamados");
    }


    public function excluir_banco($id){
      Banco::where('id',$id)->delete();
    return redirect()->route("banco.chamados");
    }

    public function excluir_chamado($id,$banco){
      Chamados::where('id',$id)->delete();  
    return redirect()->route("chamados.view",[$banco]);
    }


    


}

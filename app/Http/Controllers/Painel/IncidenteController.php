<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// IMPORTAÇÕES DO FIREBASE
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class IncidenteController extends Controller
{
    //CONTROLE DE URI
    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        //HELPER PARA DEBUGAR
        //dd($this->request->route());
        //dd($this->request->route()->uri());
    }

    public function index()
    {
        //CONTROLE PARA URL
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];

        return view('Painel.Incidentes.index', compact('urlAtual'));
    }

    public function list()
    {
        //CONTROLE PARA URL
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];
        $urlAnterior = $exploder[1];


        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $database = $factory->createDatabase();

        // CAPTURANDO A REFERENCIA RAIZ DO BANCO
        $ref = $database->getReference('incidentes');

        // PREENCHENDO UMA LISTA COM OS DADOS PARA PODER EXIBIR
        $incidentes = $ref->getValue();

        foreach ($incidentes as $incidente) {
            $all_incidente[] = $incidente;
        }

        return view('Painel.Incidentes.list', compact('all_incidente','urlAtual','urlAnterior'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //CONTROLE PARA URL
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[3];
        $urlAnterior = $exploder[2];
        $urlAnterior2 = $exploder[1];

        return view('Painel.Incidentes.create', compact('urlAtual','urlAnterior','urlAnterior2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $database = $factory->createDatabase();

        // CAPTURANDO A REFERENCIA RAIZ DO BANCO
        $ref = $database->getReference('incidentes');

        $key = $ref->push()->getKey();

        $ref->getChild($key)->set([
            '_id'=>$key,
            'tipo'=>$request->input('tipo'),
            'bairro'=>$request->input('bairro'),
            'descricao'=>$request->input('descricao'),
            'logradouro'=>$request->input('logradouro')

        ]);

        return redirect('Painel/Incidentes/list')->with("sucesso",'Salvo com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //CONTROLE PARA URL
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[3];
        $urlAnterior = $exploder[2];
        $urlAnterior2 = $exploder[1];

        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $database = $factory->createDatabase();

        // CAPTURANDO A REFERENCIA RAIZ DO BANCO
        $ref = $database->getReference('incidentes');

        $incidente = $ref->getChild($id)->getValue();

        return view('Painel.Incidentes.edit', compact('incidente','urlAtual','urlAnterior','urlAnterior2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //CONTROLE PARA URL
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[3];
        $urlAnterior = $exploder[2];
        $urlAnterior2 = $exploder[1];

        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $database = $factory->createDatabase();

        // CAPTURANDO A REFERENCIA RAIZ DO BANCO
        $ref = $database->getReference('incidentes');

        $incidente = $ref->getChild($id)->getValue();

        return view('Painel.Incidentes.edit', compact('incidente','urlAtual','urlAnterior','urlAnterior2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $database = $factory->createDatabase();

        // CAPTURANDO A REFERENCIA RAIZ DO BANCO
        $ref = $database->getReference('incidentes');

        $ref->getChild($id)->update([
            '_id'=>$id,
            'tipo'=>$request->input('tipo'),
            'bairro'=>$request->input('bairro'),
            'descricao'=>$request->input('descricao'),
            'logradouro'=>$request->input('logradouro')
        ]);

        return redirect('Painel/Incidentes/list')->with("sucesso",'Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $database = $factory->createDatabase();

        // CAPTURANDO A REFERENCIA RAIZ DO BANCO
        $ref = $database->getReference('incidentes');

        $ref->getChild($id)->remove();
        return redirect('Painel/Incidentes/list')->with("sucesso",'Excluido com sucesso!');

    }

    public function relatorio(){

    }

    public function mapa(){
        //CONTROLE PARA URL
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[2];
        $urlAnterior = $exploder[1];

        return view('Painel.Incidentes.mapa', compact('urlAtual','urlAnterior'));
    }

    public function grafico(){

    }
}

<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class PainelController extends Controller
{
    public function index()
    {
        // Contando a quantidade de registros de incidentes
        $factory = (new Factory)->withServiceAccount(__DIR__.'/FirebaseKey.json');
        $database = $factory->createDatabase();

        $filhosIncidente = $database->getReference('incidentes')->getChildKeys();
        $totalIncidente = 0;

        foreach ($filhosIncidente as $filhoIncidente) {
            $totalIncidente = $totalIncidente+1;
        }

        $filhosUsuario = $database->getReference('usuarios')->getChildKeys();
        $totalUsuario = 0;

        foreach ($filhosUsuario as $filhoUsuario) {
            $totalUsuario = $totalUsuario+1;
        }

        return view('painel.dashboard', compact('totalIncidente','totalUsuario'));

        return redirect()->action('painel.layout.sidebar_lateral', compact('totalIncidente','totalUsuario'));
    }
}

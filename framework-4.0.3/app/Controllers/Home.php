<?php namespace App\Controllers;

use App\Models\CategoriaModel;
use App\Models\EntradaModel;
use App\Models\PaginaModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new CategoriaModel($db);
		$model2 = new EntradaModel($db);
        $datos = $model->findAll();
        $entradas = $model2->findAll();
        $datos = array('datos' => $datos,'entradas' => $entradas);
		return view('frontend/entradas', $datos);
	}

	//--------------------------------------------------------------------

}

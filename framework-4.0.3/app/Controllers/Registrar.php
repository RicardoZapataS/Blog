<?php namespace App\Controllers;

use App\Models\UsuarioModel;

class registrar extends BaseController
{
    public function index()
    {
        echo  view('auth/registrar');
    }

    public function guardar()
    {
        $this->session->remove('authUser');
        $this->session->remove('errores');
        $model = new UsuarioModel($db);
        $data = array(
            'nombre'=> $this->request->getPostGet('nombre'),
            'correo'=> $this->request->getPostGet('correo'),
            'contraseña'=> $this->request->getPostGet('contraseña')
        );
        $datos = $model->insert($data);
        if($datos){
            $data = $model->find($datos);
            $this->session->set(array('authUser'=> $data));
            if(!strpos($_SERVER['HTTP_REFERER'], 'registrar') && strpos($_SERVER['HTTP_REFERER'], base_url())){
                return redirect()->to($_SERVER['HTTP_REFERER']);
            }else
                return redirect()->to(base_url() . '/');
        }else{
            var_dump($model->errors);
        }   
    }
}

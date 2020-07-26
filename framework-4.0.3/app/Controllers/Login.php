<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class login extends BaseController
{
    public function index()
    {
        echo  view('auth/login');
    }

    public function verificar()
    {
        $this->session->remove('authUser');
        $this->session->remove('errores');
        $correo = $this->request->getPostGet('correo');
        $contraseña =  $this->request->getPostGet('contraseña');
        $model = new UsuarioModel($db);
        $datos = $model->where(array('correo' => $correo,'contraseña' => $contraseña))->findAll();
        if($datos){
            $this->session->set(array('authUser'=> $datos[0]));
            if(!strpos($_SERVER['HTTP_REFERER'], 'login') && strpos($_SERVER['HTTP_REFERER'], base_url())){
                return redirect()->to($_SERVER['HTTP_REFERER']);
            }else
                return redirect()->to(base_url() . '/');
            
        }else{
            $this->session->set(array('errores'=> 'Las credenciales insertadas no son validas'));
            return redirect()->to(base_url() . '/login');
        }
    }

    public function cerrar(){
        $this->session->remove('authUser');
        $this->session->remove('errores');
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}

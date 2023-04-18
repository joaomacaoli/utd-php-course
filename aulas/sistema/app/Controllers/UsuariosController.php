<?php

namespace App\Controllers;

use App\Libraries\Datatables; // Datatables
use App\Controllers\LoginController;
use App\Models\RelatoriosModel;
use App\Models\UsuariosModel;
use App\Models\FiliaisModel;
use App\Models\SetoresModel;
use App\Models\LoginModel;
use CodeIgniter\I18n\Time;

class UsuariosController extends BaseController
{

    private $model = array();
    private $session = null;

    
    public function __construct(){
        $this->model = new UsuariosModel;
    }


    public function index()
    {

        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        # Objetos criados para o controlador atual
        $datatable = new DataTables();
        $login = new LoginModel();

        $dados = $login->where("ID_USER", $_SESSION['sistemacontratos']['id_usuario'])->findAll();

        # Retorno de dados para a view
        $data['title'] = "Perfil";
        $data['result'] = $dados;

        
        # Rendereização dos escripts de JS E CSS
        $this->setJs($datatable->render()['js']);
        $this->setCss($datatable->render()['css']);
        $this->setJs(base_url() . "/public/services/relatorios/usuarios.js");

        # Carregamento da view
        echo $this->load("perfil", "index", $data);

    }

    public function lista()
    {

        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }

        # Objetos criados para o controlador atual
        $datatable = new DataTables();
        

        $dados = $this->model->orderBy("USER_NAME")->findAll();

        # Retorno de dados para a view
        $data['title'] = "Lista de Usuarios";
        $data['result'] = $dados;

        
        # Rendereização dos escripts de JS E CSS
        $this->setJs($datatable->render()['js']);
        $this->setCss($datatable->render()['css']);
        $this->setJs(base_url() . "/public/services/relatorios/usuarios.js");

        # Carregamento da view
        echo $this->load("usuarios", "lista", $data);

    }

    public function adicionar()
    {

        if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        
        $filiais = new FiliaisModel;
        $setores = new SetoresModel;

        $data['setores'] = $setores->orderBy("setor_nome")->findAll();
        $data['filiais'] = $filiais->getFiliaisClube();
        
        $data['title'] = "Adicionar Usuario";
        # Carregamento da view
        echo $this->load("usuarios", "adicionar", $data);

    }

    public function editar($id){

         if(!LoginController::isLogged()){
            return redirect()->to("/logar");
        }
        
        $filiais = new FiliaisModel;

        $data['usuario'] = $this->model->where("ID_USER", $id)->first();        
        $data['filialUsuario'] = ($data['usuario']['USER_FILIAL'] != NULL) ? $filiais->getFilialDados($data['usuario']['USER_FILIAL']) : "";
        $data['filiais'] = $filiais->getFiliaisClube();
        $data['title'] = "Editar Usuario";
        # Carregamento da view
        echo $this->load("usuarios", "editar", $data);

    }

    public function save(){

        //print_r($_POST);
        if(!empty($_POST['USER_PASSWORD'])){
            $_POST['USER_PASSWORD'] = sha1($_POST['USER_PASSWORD']);
        }else{
            unset($_POST['USER_PASSWORD']);
        }

        # Atualizando os dados do elemento
        $this->model->save($_POST);
        $this->setMessage("success", "Dados salvos com sucesso!");
        return redirect()->to('/usuarios/lista');
    }

}

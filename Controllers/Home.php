<?php

class Home extends Controllers{

public function __construct(){
    parent::__construct();


}
public function home(){
   
    $data['tag_page'] = "Home";
    $data['page_title'] = "Pagina principal";
    $data['page_name'] = "home";
    $data['page_content'] = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, sequi.";
    

    $this->views->getView($this,"home",$data);

}

public function insertar(){
    $data = $this->model->setUser("darik",32);
    $data = $this->model->setUser("sas",15);
    print_r($data);
}

public function verUsuario($id){
    $data = $this->model->getUser($id);
    print_r($data);
}

public function actualizar(){
    $data = $this->model->updateUser(1,"bastian",20);
    print_r($data);
}

public function verUsuarios(){
    $data = $this->model->getUsers();
    print_r($data);
}

public function eliminarUsuario($id){
    $data = $this->model->deleteUser($id);
    print_r($data);
}


}



?>
<?php
class UserController{

    function create(){
        //Entradas
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        //Processamento ou Persistencia
        $user = new User(null, $name, $email, $pass);
        $id = $user->create();
        //Saida
        $result['message'] = "Cadastrado com sucesso!";
        $result['user']['id'] = $id;
        $result['user']['name'] = $this->name;
        $result['user']['email'] = $this->email;
        $result['user']['pass'] = $this->pass;
        $response = new Output();
        $response->out($result);
    }

    function delete(){
        $id = $_POST['id'];
        $user = new User($id, null, null, null);
        $user->delete();
        $result['message'] = "Cadastrado com sucesso!";
        $result['user']['id'] = $id;
        $response = new Output();
        $response->out($result);
    }

    function update(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $user = new User($id, $name, $email, $pass);
        $user->update();
        $result['message'] = "Cadastrado com sucesso!";
        $result['user']['id'] = $id;
        $result['user']['name'] = $this->name;
        $result['user']['email'] = $this->email;
        $result['user']['pass'] = $this->pass;
        $response = new Output();
        $response->out($result, 404);
    }
    function selectAll(){
        $user = new User($id, null, null, null);
        $result = $user->selectAll();
        $response = new Output();
        $response->out($result, 404);
    }
}
?>
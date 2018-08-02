<?php
    class homeController extends controller {

        public function index() {
            $dados = array();

           

            if(isset($_POST['nome']) && !empty($_POST['nome'])){
            	if(isset($_POST['email']) && !empty($_POST['email'])){
            		$nome = addslashes($_POST['nome']);
            		$email = addslashes($_POST['email']);
            		$phone = addslashes($_POST['phone']);

            		$s = new Stakeholders();
            		$s->addStakeholder($nome, $email, $phone);
               		echo '<h4 style="text-align:center;">Dados enviados com sucesso, Obrigado !</h4>';
   
            	}
            } 

            
            $this->loadView('home', $dados);
        }
    }
?>
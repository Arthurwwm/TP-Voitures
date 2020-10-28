<?php
    require_once 'views/view.php';
    require_once 'models/message.php';

    class ControlerLivreor{
        private $messages;

        public function __construct(){
            $this->messages = new Message();
        }
        public function messages(){
            
            if(isset($_GET['page'])){
                $this->page = $_GET['page'];
            } else{
                $this->page = 1;
            }
            
            $nbPages = ceil(($this->messages->countMessages()/15)<1?1:$this->messages->countMessages()/15);

            $messages= $this->messages->getMessagesPage($this->page);
            $view = new Vue('Livreor');
            $view->render(array('messages'=>$messages, 'nbPages'=>$nbPages));
        }
        public function submit($pseudo,$msg,$note){
            $this->messages->addMessage($pseudo,$msg,$note);
            header('Location: index.php?action=livreor');
        }

    }
<?php

class PostsController extends AppController{

    public $components = array('Session');

     public function add($id){

        if($this->request->is('post')){
            $this->Post->create();

            $this->request->data['Post']['topic_id'] = $id;

            if ($this->Post->save($this->request->data)) {

                $this->Session->setFlash('The Post has been created');

                $this->redirect('index');
                
            }
        }
        $this->set('topics', $this->Post->Topic->find('list'));
    }
    public function view($id){

        $data = $this->Post->findById($id);
        $this->set('post', $data);

    }
    public function index(){

        $data = $this->Post->find('all');
        $this->set('posts', $data);

        // $this ->set('framework', 'CakePHP');

    }
}



?>
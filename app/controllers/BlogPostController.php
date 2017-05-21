<?php
class BlogsPostController extends Controller {
 
    function index()
    {
        $post = new Post($this->db);
        $this->f3->set('posts',$post->all());
        $this->f3->set('page_head','Post List');        
        $this->f3->set('view','user/list.htm');
    }
    
    function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $user = new User($this->db);
            $user->add();
     
            $this->f3->reroute('/');
     
        } else
        {
            $this->f3->set('page_head','Create User');
            $this->f3->set('view','user/create.htm');
        }
    }
    
   
    
    public function update()
    {
        $user = new User($this->db);
     
        if($this->f3->exists('POST.update'))
        {
            $user->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/');
     
        } else
        {
            $user->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('user',$user);
            $this->f3->set('page_head','Update User');
            $this->f3->set('view','user/update.htm');
        }
    }
    
    function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $user = new User($this->db);
            $user->delete($this->f3->get('PARAMS.id'));
        }
     
        $this->f3->reroute('/');
    }
}

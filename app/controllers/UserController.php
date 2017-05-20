<?php



class UserController extends Controller {

	function render() {
	
       /*
       $template = new Template;
       echo $template->render('login.htm');
       */
       echo \Template::instance()->render('login.htm');
	
	}
	
	
	
	function index()
    {
        $user = new User($this->db);
        $this->f3->set('users',$user->all());
        $this->f3->set('page_head','User List');        
        $this->f3->set('view','list.htm');
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
    
    function authenticate(){
        
        $username = $this->f3->get('POST.username');
        $password = $this->f3->get('POST.password');
        
        //construct a new instance of a user model
        $user = new User($this->db);
        $user->getByName($username);
        
        
        //dry() checks if the SQL mapper is empty
        if($user->dry()){
           $this->f3->reroute('/login');
        }
        else{
            $this->f3->reroute('/');
        }
    
        
        
    }
	
	
	function aboutUs()
	{
	
       /*
       $template = new Template;
       echo $template->render('login.htm');
       */
       echo \Template::instance()->render('about-us.php');
	}
     
	
	}



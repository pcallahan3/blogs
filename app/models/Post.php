<?php


class Post extends DB\SQL\MAPPER
{
    
    public function __construct(DB\SQL $db)
    {
        parent::__construct($db, 'blog_posts');
    }
    
    public function all()
    {
        $this->load();
        return $this->query;
    }
    
    public function add()
    {
        $this->copyFrom('POST');
        $this->save();
    }

    public function getById($id)
    {
        $this->load(array('id=?',$id));
        $this->copyTo('POST');
    }

    public function edit($id)
    {
        $this->load(array('id=?',$id));
        $this->copyFrom('POST');
        $this->update();
    }

    public function delete($id)
    {
        $this->load(array('id=?',$id));
        $this->erase();
    }
    
}
<?php


class User extends DB\SQL\MAPPER
{
    //constructor for a new instance of a user model
    public function __construct(DB\SQL $db)
    {
        //replace with table name in DB
        parent::__construct($db, 'users');
    }
    
    public function all()
    {
        $this->load();
        return $this->query;
    }
    
    public function getByName($name)
    {
        $this->load(array('username=?', $name));
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
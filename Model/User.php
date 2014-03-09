<?php
class User
{
    protected $uid;
    protected $username;
    protected $password;
    protected $mail;
    protected $Address;
    protected $company;
    protected $permissions;
    protected $sites;
    protected $role;
    protected $access_level;
//==============================

    //Adds user to database
    function add()
    {
        //TO-DO
    }
    
    //loads user by uid
    function load($uid)
    {
        //TO-DO
    }
    
    //loads user by username
    function loadByUsername($username)
    {
        //TO-DO
    }
    
    
    //update user data and update it in database
    function update()
    {
        //TO-DO
    }
    
    //Delete user from database
    function delete()
    {
        //TO-DO
    }
    
    //convert users to array
    function toArray()
    {
        //TO-DO
    }
    
    
}
?>
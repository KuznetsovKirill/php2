<?php
session_start();

class retObj
{
    public $obj;

    /**
     * @param $obj
     * @return int
     */
    public function Ret($obj)
    {
        if ($_POST['login']=null){
            return 0;
        }
        else {return $this->$obj;}
        }
    }


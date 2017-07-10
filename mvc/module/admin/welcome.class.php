<?php
class welcome extends main{
    function wel(){
        $this->smarty->display("welcome.html");
    }
}
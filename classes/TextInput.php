<?php

include_once __DIR__."/HtmlElement.php";

class TextInput extends HtmlElement
{
    public function render() 
    {
        echo "<input type='text' name='{$this->key}' value='{$this->value}'>";
    }
}


?>
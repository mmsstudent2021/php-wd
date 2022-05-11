<?php

class TextFilter {

    public $text;

    public function __construct($inputText)
    {
        $this->text = $inputText;
    }

    public function makeTrim($toRemove=" ",$mode="default"){
        if($mode==="l"){
            $this->text = ltrim($this->text,$toRemove);
        }elseif ($mode==="r"){
            $this->text = rtrim($this->text,$toRemove);
        }else{
            $this->text = trim($this->text,$toRemove);
        }
        return $this;
    }

    public function makeEntity(){
        $this->text = htmlentities($this->text,ENT_QUOTES);
        return $this;
    }

    public function makeStripSlash(){
        $this->text = stripslashes($this->text);
        return $this;
    }
}
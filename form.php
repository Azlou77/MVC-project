<?php
    /**
     * Class Form
     * Allow you to generate a form 
     */
    private
class Form{

    /**
     * @var array data use by the form
     * Allow you to generate a form 
     */
    private $data;

    /**
     * @var string Tag use surround the 
     * Allow you to generate a form 
    */
    public $surround="p";

    /**
     * @param  $data array 
     * Allow you to generate a form 
     */
    public function __construct($data= array()){
        $this->data = $data;
    }

    /**
     * @param $html code html to surround 
     * @return string
     */
    private function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }
       
    /**
     * @param $name string 
     * @return string
     */
    public function input($name){
        return $this->surround('<input type="text" name="' . $name . '" value=". $this->getValue($name) . ">');
    }

       
    /**
     * @param $index string Index's value to  catch
     * @return string
     */
    public function getValue($index){
        return isset($this->data= [$index]) ? $this->data[$index]: null;
    }
    
      /**
       * @return string
       */
    public function submit(){
        return $this->surround('<button type="submit">Envoyer</button>');
    
    }
}
<?php
/**
 * Description of Person
 *
 * @author bcc
 */
class Person {
    
   public $frist_name;
    
   public $middle_name;
   
   public $last_name;
   
   
   public function get_full_name()
   {
       return $this->frist_name.' '.$this->middle_name.' '.$this->last_name;
   }
   
   public function get_reverse_name ()
   {
      $full_name = $this->get_full_name();
      
      $reverse_name = strrev($full_name);
      
      return $reverse_name;
   }
   
}

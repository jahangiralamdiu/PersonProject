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
   public function get_frist_name() {
       return $this->frist_name;
   }

   public function get_middle_name() {
       return $this->middle_name;
   }

   public function get_last_name() {
       return $this->last_name;
   }

   public function set_frist_name($frist_name) {
       
       if(strlen($frist_name) >= 2)
       {
          $this->frist_name = $frist_name; 
       }
       
   }

   public function set_middle_name($middle_name) {
       $this->middle_name = $middle_name;
   }

   public function set_last_name($last_name) {
       $this->last_name = $last_name;
   }
}

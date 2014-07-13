<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmployeeSalaryCalculator
 *
 * @author bcc
 */
class EmployeeSalaryCalculator {
    
    public $employee_name;
    
    public $basic_amount;
    
    public $house_rentin_percentage;
    
    public $medical_allowencein_percentage;
    
    public function get_total_salary ()
    {
        $house_rent_amount = ($this->basic_amount * $this->house_rentin_percentage)/100;
        
        $medical_allowence_amount = ($this->basic_amount * $this->medical_allowencein_percentage)/100;
        
        $total_salary_amount = $this->basic_amount + $house_rent_amount + $medical_allowence_amount;
        
        return $total_salary_amount;
    }
    
    
    
}

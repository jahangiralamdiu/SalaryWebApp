<!DOCTYPE html>

<html>
    
    <head>
        
        <meta charset="UTF-8">
        
        <title>Salary Web App</title>
        
    </head>
    
    <body>
        
        <form action="index.php" method="GET">
            
            Employee Name : <input type="text" name="employeeNameText"><br/>
            
            Basic Amount : <input type="text" name="basicSalaryText"><br/>
            
            House Rent : <input type="text" name="houseRentText">% of Basic<br/>
            
            Medical Allowance: <input type="text" name="medicalAllowenceText"> % of Basic<br/>
            
            <input type="submit" value="Show Me Salary "  name="showSalaryButton">
            
        </form>
  
        <?php
        
        require_once 'employeesalarycalculator.php';
        
        if(isset($_GET ['showSalaryButton']))
            
        {
            $employeeSalaryCalculator = new EmployeeSalaryCalculator();
            
            $employeeSalaryCalculator ->employee_name = $_GET['employeeNameText'];
            
            $employeeSalaryCalculator->basic_amount = $_GET['basicSalaryText'];
            
            $employeeSalaryCalculator->house_rentin_percentage = $_GET['houseRentText'];
            
            $employeeSalaryCalculator->medical_allowencein_percentage = $_GET['medicalAllowenceText'];
            
            echo  $employeeSalaryCalculator ->employee_name.', your total salary is : '.$employeeSalaryCalculator ->get_total_salary().' taka' ;
            
        }       
       
                
       
        ?>
        
    </body>
    
</html>

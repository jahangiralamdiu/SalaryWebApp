<!DOCTYPE html>

<html>
    
    <head>
        
        <meta charset="UTF-8">
        
        <title>Salary Web App</title>
        
        <style type="text/css">
            
            h3
            {
                font-weight: bold;
                color: royalblue;
            }
            
            #calc          
            {
                margin-top: 50px;
                margin-left: 100px;
            }
            
        </style>
        
    </head>
    
    <body> 
        
        <div id="calc">
                
        <form action="index.php" method="GET">
            
            <h3>Employee Salary Calculator</h3>
            
            <table>
                
                <tr>
                    <td>Employee Name :</td>
                    
                    <td><input type="text" name="employeeNameText"></td>
                </tr>
                
                <tr>
                    <td>Basic Amount :</td>
                    
                    <td><input type="text" name="basicSalaryText"></td>
                </tr>
                
                <tr>
                    <td>House Rent :</td>
                    
                    <td><input type="text" name="houseRentText">% of Basic</td>
                </tr>
                
                <tr>
                    <td>Medical Allowance :</td>
                    
                    <td><input type="text" name="medicalAllowenceText"> % of Basic</td>
                </tr>
                
                <tr>                    
                    
                    <td><input type="submit" value="Show Me Salary "  name="showSalaryButton"></td>
                
                </tr>
            
            </table>
            
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
            
   </div>
        
    </body>
    
</html>

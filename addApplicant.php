
<!-- PHP Script -->
<?php

include 'config.php';
$message = "";

if(isset($_POST['submit']))
{
//save data

//name,age,cnic,cell,email,address
$name=$_POST['name'];
$age=$_POST['age'];
$cnic=$_POST['cnic'];
$cell=$_POST['cell'];
$email=$_POST['email'];
$address=$_POST['address'];


                     $query="INSERT INTO `registrationform`(`Applicant_Name`, `Applicant_Age`, `Applicant_CNIC`, `CellNo`, `Email`, `Address`) VALUES ('$name','$age','$cnic','$cell','$email','$address')";

                     $result = mysqli_query($con, $query);



                     $message = "Applicant is  added successfully";
        
    
                    }

    



?>




<!-- GUI -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Applicant</title>
</head>
<body>
 <h1>Add New Applicant</h1>
 <b> <a style="color: #336600; text-decoration: none;" href="index.php">Back</a></b>
<form method="post" action="addApplicant.php" >
                    <div class="center">
                        <table>

                            <tr>
                                <td>Enter applicant name </td>
                                <td><input type="text" name="name" required> <span class="error">*</span> </td>
                            </tr>
                            
                            <tr>
                                <td>Enter applicant age</td>
                                <td><input type="number" name="age" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>Enter applicant CNIC Number </td>
                                <td><input type="number" name="cnic" required> <span class="error">*</span> </td>
                            </tr>
                            
                            <tr>
                                <td>Enter Cell Number</td>
                                <td><input type="number" name="cell" required> <span class="error">*</span> </td>
                            </tr>
                            <tr>
                                <td>Enter applicant email </td>
                                <td><input type="email" name="email" required> <span class="error">*</span> </td>
                            </tr>
                            
                            <tr>
                                <td>Enter applicant address</td>
                                <td><input type="text" name="address" required> <span class="error">*</span> </td>
                            </tr>
                            
                            <tr>
                                <td> </td>
                                <td> <button type="submit" name="submit"> Submit </button> </td>
                            </tr>
                        </table>
                        <?php
                        echo $message;
                        ?>
                    </div>
                </form>

  
</body>
</html>
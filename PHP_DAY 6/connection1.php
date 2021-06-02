<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_intern";
//connection Function
$connection = mysqli_connect($host,$username,$passwd,$dbname);

$q = mysqli_query($connection, "insert into tbl_student(st_id,st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_bloodgroup)
        values('3','Shraddha','Female','05-05-2000','shraddha123@gmail.com','741852963','AA-18','S2609','ank','B-')")
            or die("Error".mysqli_error($connection));
                
if($q)
    {
    echo "<script>alert('Record Added');</script>";
    }
?>
 <html>
        <body>
           <form method="post">
               Id : <input type="text" name="txt1"/><br>
            Name : <input type="text" name="txt2"/><br>
            Gender: <select name="txt3">
                <option>Male</option>
                <option>Female</option>
            </select>
           D.O.B : <input type="number" name="txt4"/><br>
           email : <input type="text and number" name="txt5"/><br>
           Mobile no :<input type="number" name="txt6"/><br>
           Address  : <input type="text" name="txt7"/><br>
           Password : <input type="text and number" name="txt8"/><br>
           area : <input type="text and number" name="txt9"/><br>
           Bloodgroup : <input type="text" name="txt10"/><br>
            
            <input type="submit"/>
           </form>
         </body>
       </html>



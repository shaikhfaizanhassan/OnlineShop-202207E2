<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="" method="post">
            <table class="table">
                <tr>
                    <td>Category Name</td>
                    <td><input type="text" name="txtcat" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btnsave" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
        <?php 
            if(isset($_POST["btnsave"]))
            {
                $catname = $_POST["txtcat"];
                $sql = mysqli_query($con,"insert into category (cname)
                values ('$catname')");

                if($sql)
                {
                    echo "$catname Save";
                }
                else
                {
                    echo "Data Not Save";
                }
            }
        ?>
  
</body>
</html>
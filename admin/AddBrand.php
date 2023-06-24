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
    <div class="card">
        <div class="card-header">
            <h5>Add New Brand</h5>
        </div>
        <div class="card-body table-border-style">
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Brand</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="txtbrand">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
               
             
                <button type="submit" name="btnsave" class="btn  btn-primary">Submit</button>
            </form>

            <?php 
            if(isset($_POST["btnsave"]))
            {
                $brandname = $_POST["txtbrand"];
                $sql = mysqli_query($con,"insert into brand (bname)
                values ('$brandname')");

                if($sql)
                {
                    echo "$brandname Save";
                }
                else
                {
                    echo "Data Not Save";
                }
            }
        ?>
        </div>

    </div>

</body>

</html>
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
    <div class="container">
        <div class="card-body">


        </div>
    <div class="card">
                    <div class="card-header">
                        <h5>View Brand</h5>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Brand Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                $fetch = mysqli_query($con,"select * from brand");
                while($row = mysqli_fetch_array($fetch))
                {
            ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    
                </td>
                
            </tr>

            <?php } ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                
            </div>




    
</body>
</html>
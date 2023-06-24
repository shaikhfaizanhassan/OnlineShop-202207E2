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
            <h5>Add New Product</h5>
        </div>
        <div class="card-body table-border-style">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="txtname">
                 
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email" name="txtprice">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Select Category</label>
                    <select name="selectcat" id="" class="form-control">
                    <?php 
                        $fetchCat = mysqli_query($con,"select * from category");
                        while($crow = mysqli_fetch_array($fetchCat))
                        {     
                    ?>  
                    <option value="<?php echo $crow[0] ?>"><?php echo $crow[1] ?></option>
                    
                    <?php } ?>
                        
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Select Brand</label>
                    <select name="selectbrand" id="" class="form-control">
                    <?php 
                        $fetchbrand = mysqli_query($con,"select * from brand");
                        while($brow = mysqli_fetch_array($fetchbrand))
                        {     
                    ?>  
                    <option value="<?php echo $brow[0] ?>"><?php echo $brow[1] ?></option>
                    
                    <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="txtdesc" id="" cols="30" rows="10" class="form-control">
                    </textarea>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Select Image</label>
                    <input type="file" name="filename" class="form-control">
                </div>
                
               
             
                <button type="submit" name="btnsave" class="btn  btn-primary">Submit</button>
            </form>

            <?php 
            if(isset($_POST["btnsave"]))
            {
                $pname              = $_POST["txtname"];
                $pprice             = $_POST["txtprice"];
                $pcatid             = $_POST["selectcat"];
                $pbrandid           = $_POST["selectbrand"];
                $pdesc              = $_POST["txtdesc"];
                $pimagename         = $_FILES["filename"]["name"];
                $imgtemporylocation = $_FILES["filename"]["tmp_name"];
                
                move_uploaded_file($imgtemporylocation,"pimages/".$pimagename);
                $sql = mysqli_query($con,"INSERT INTO `product`(`pname`, `pprice`, `pCatID`, `PBrandID`, `pdesc`, `pimage`) VALUES ('$pname','$pprice','$pcatid','$pbrandid','$pdesc','$pimagename')");

                if($sql)
                {
                    echo "$pname Save";
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
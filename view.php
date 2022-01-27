<html>

<head>
    <title>View</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <h1>View Details</h1>
    <div class="frame view">
        <div class="row">
            <div class="col-lg-3">
                <form method="post" action="backend.php">
                    <div class="form-row">
                        <input class="form-control" type="hidden" name="id" id="id">
                        <input class="form-control" type="text" name="studentid" id="studentid" placeholder="Enter Student Id" required>
                    </div>
                    <div class="form-row">
                        <input class="form-control" type="text" name="name" id="name" placeholder="Enter Student Name">
                    </div>
                    <div class="form-row">
                        <input class="form-control" type="text" name="bio" id="bio" placeholder="Enter Bio Marks">
                    </div>
                    <div class="form-row">
                        <input class="form-control" type="text" name="phy" id="phy" placeholder="Enter Physics Marks">
                    </div>
                    <div class="form-row">
                        <input class="form-control" type="text" name="chem" id="chem" placeholder="Enter Chemistry Marks">
                    </div>
                    <div class="form-row">
                        <button id="submit" name="submit" type="submit" class="btn btn-success form-control">Submit</button>
                    </div>
                    
                
                </form>
            </div>
            <div class="divide"><div class="divider"></div></div>
            <div class="col-lg-8">
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Bio</th>
                        <th>Physics</th>
                        <th>Chemistry</th>
                        <th><i class="far fa-edit"></i></th>
                        <th><i style="color:red;" class="fas fa-trash-alt"></i></th>
                    </thead>
                    <tbody>
                        <?php
                            require('config.php');
                            $query="SELECT * FROM `marks`";
                            $result=mysqli_query($conn,$query);
                            while($row=mysqli_fetch_array($result)){
                                
                            
                        ?>
                        <tr>
                            <td style="display:none"><?php echo $row['id']; ?></td>
                            <td><?php echo $row['studentid']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['bio']; ?></td>
                            <td><?php echo $row['phy']; ?></td>
                            <td><?php echo $row['chem']; ?></td>
                            <td><button class="btn btn-primary edit">Update</button></td>
                            <td><a name="btn-delete" class="btn btn-danger" href="backend.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            
            </div>
        
        </div>
    </div>
    
    <!----Modal--->
    
   

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
    <script>
        $(document).ready(function(){
           $('.edit').on('click',function(){
               $('#submit').html('Edit');
               $tr=$(this).closest('tr');
               $data=$tr.children('td').map(function(){
                  return $(this).text(); 
               });
               
               $('#id').val($data[0]);
               $('#studentid').val($data[1]);
               $('#name').val($data[2]);
               $('#bio').val($data[3]);
               $('#chem').val($data[4]);
               $('#phy').val($data[5]);
              
               
           }) 
        });
    
    </script>


</body>

</html>

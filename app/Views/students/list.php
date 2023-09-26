<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Student Records</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="my-3 text-center">
                    <h4> Student Information
                        <hr class="text-denger">
                    </h4>

                </div>
                <div class="card rounded">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-8">
                                <a href="<?php echo base_url('student/create')?>" 
                                class="btn btn-primary btn-sm rounded mb-2">Add Data</a>
                            </div>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered mb-0">
                                <thead>
                                  

                                    <tr>
                                        <th style="min-width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Course</th>
                                        <th class="text-center" colspan="2">Action</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                      <?php if(!empty($students)){

                                        foreach($students as $student){
                                        ?>
                                    <tr>
                                        <td><?php echo $student['id']; ?></td>
                                        <td><?php echo $student['name']; ?></td>
                                        <td> <?php echo $student['phone']; ?></td>
                                        <td><?php echo $student['email']; ?></td>
                                        <td><?php echo $student['course']; ?></td>
                                        <td class="text-center">
                                        <a href="<?php echo base_url('student/read/'. $student['id']);?>" class="btn btn-primary rounded mx-1">View</a>
                                            <a href="<?php echo base_url('student/edit/'. $student['id']);?>" class="btn btn-primary rounded mx-1">Edit</a>
                                            <a href="#" onclick="deleteConfirm(<?php echo $student['id']?>)" class="btn btn-danger rounded mx-1">Delete</a>
                                        </td>
                                    </tr>
                                    <?php }
                                 } else { ?>
                                        <tr>
                                            <td colspan="6">Records not Founds</td>
                                            
                                        </tr>
                                        <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteConfirm(id){
            //alert(id)
            if(confirm("are you sure want to delete?")){
                window.location.href='<?php echo base_url('student/delete/')?>/'+id; 
            }
        }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
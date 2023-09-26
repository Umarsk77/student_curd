<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Add Records</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="my-3 text-center">
                    <h4> Add Student Information
                        <hr class="text-denger">
                    </h4>

                </div>
                <div class="card rounded">
                    <div class="card-body">
                        <form name="create_s" id="create_s" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control <?php echo (isset($validation)&& $validation->hasError('name'))?'is-invalid':''; ?>" value="<?php echo set_value('name');?>">
                            <?php
                             if(isset($validation)&& $validation->hasError('name')){
                              echo '<p class="invalid-feedback">'. $validation->getError('name') .'</p>';  
                             }
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control <?php echo (isset($validation)&& $validation->hasError('phone'))?'is-invalid':''; ?> " value="<?php echo set_value('phone');?>">
                            <?php
                             if(isset($validation)&& $validation->hasError('phone')){
                              echo '<p class="invalid-feedback">'. $validation->getError('phone') .'</p>';  
                             }
                            ?>

                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control <?php echo (isset($validation)&& $validation->hasError('email'))?'is-invalid':''; ?>" value="<?php echo set_value('email');?>">
                            <?php
                             if(isset($validation)&& $validation->hasError('email')){
                              echo '<p class="invalid-feedback">'. $validation->getError('email') .'</p>';  
                             }
                            ?>
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <input type="text" name="course" id="course" class="form-control " value="">

                        </div>

                        <button type="submit" class="btn btn-primary">submit </button>

                        </form>
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
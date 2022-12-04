<?php
    session_start();
    require 'config.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
    <title>Admin | Courses</title>
</head>
  <body>

    <div class="container mt-4">
    <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Courses
                            <a href="admin-courses.php" class="btn btn-primary float-end">Add courses</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thread>
                                <tr>
                                    <th>ID</th>
                                    <th>Course Name</th>
                                    <th>Course Code</th>
                                    <th>Instructor</th>
                                    <th>Price</th>
                                </tr>
                            </thread>
                            <tbody>  
                                <?php
                                    $query ="SELECT * FROM courses";
                                    $query_run = mysqli_query($db, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $course)
                                        {
                                
                                            //echo $couse['course'];
                                            ?>
                                            <tr>
                                                <td><?= $course['id']; ?></td>
                                                <td><?= $course['crsID']; ?></td>
                                                <td><?= $course['crsame']; ?></td>
                                                <td><?= $course['crsInstructor']; ?></td>
                                                <td><?= $course['crsPrice']; ?></td>
                                                <td><?= $course['crsDesc']; ?></td>
                                                <td>
                                                    <a href="courses_view.php?id=<?= $course['id']; ?>" name="displayCourse" class="btn btn-info btn-sm">View</a>
                                                    <a href="courses_edit.php?id=<?= $course['id']; ?>" name="editCourse" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="admin_functions.php" method="POST" class="d-inline">
                                                        <button type="submit" name="deleteCourse" value="<?=$course['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </form>
                                            </tr>
                                            <?php
                                             
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

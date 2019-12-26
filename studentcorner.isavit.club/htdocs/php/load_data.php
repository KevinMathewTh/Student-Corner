<?php 

include_once 'dbh.inc.php';

$sql = "SELECT project_id,name,imgname FROM project ORDER BY project_id DESC WHERE project_id > ".$_POST["last_project_id"].";LIMIT 2";
$result = mysqli_query($conn,$sql);
$result_check = mysqli_num_rows($result);

if ($result_check > 0) {
  while ($row = mysqli_fetch_array($result)) {
    $project_id = $row['project_id'];
?>

    <div class="col-md-3 col-sm-6 col-xs-6" id="load_data">
                            <div class="projects">
                                
                                <a href='#' class="projects-img">
                                    <img src="images/<?php echo "$row[imgname]" ?>" alt="">
                                    <i class="projects-link-icon fa fa-link"></i>
                                </a>
                                <a class="projects-title" href="'project.php?name={$row['name']}'> {$row['name']}"><?php echo "<a href='project.php?name={$row['name']}'> {$row['name']}</a><br>\n"; ?></a>
                                <div class="projects-details">
                                    
                                    <span class="projects-price projects-like">like</span>
                                </div>
                            </div>
                        </div>
<?php
  }
} else {
  echo "No projects to display";
}

 ?>
                   </div>
                    <div class="row">
                          <div id="remove_row"></div>
                            <!-- pagination -->
                            <div class="col-md-12">
                                <button name="btn-more" id="btn_more" data_vid="<?php echo $project_id; ?>" class="btn btn-success form-control">More</button>
                            </div>
                            <!-- pagination -->
                            </div>
                        </div>
                        <!-- /row -->

 ?>
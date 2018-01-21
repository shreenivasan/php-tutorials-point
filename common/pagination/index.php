<?php
//include pagination class file
include_once 'dbConfig.php';
include_once 'Pagination.class.php';

$limit = 5;
$offset = !empty($_GET['page'])?(($_GET['page']-1)*$limit):0;

//get number of rows
$queryNum = $db->query("SELECT COUNT(*) as postNum FROM posts");
$resultNum = $queryNum->fetch_assoc();
$rowCount = $resultNum['postNum'];

//initialize pagination class
$pagConfig = array(
    'baseURL'=>'http://localhost/php_pagination/index.php',
    'totalRows'=>$rowCount,
    'perPage'=>$limit
);
$pagination =  new Pagination($pagConfig);

//get rows
$query = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $offset,$limit");

if($query->num_rows > 0){ ?>
    <div class="posts_list">
    <?php while($row = $query->fetch_assoc()){ ?>
        <div class="list_item"><a href="javascript:void(0);"><?php echo $row["title"]; ?></a></div>
    <?php } ?>
    </div>
    <!-- display pagination links -->
    <?php echo $pagination->createLinks(); ?>
<?php } ?>
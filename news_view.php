<?php
$conn = mysqli_connect("localhost", "root", "", "collage_db");
$result = mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latest News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<!-- Include Sidebar -->
<?php include("admin_sidebar.php"); ?>

<!-- Main Content -->
<div class="main-content">

    <h2 class="mb-4">Latest News</h2>

    <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        
        <div class="col-md-4 mb-4">
            <div class="card shadow">

                <?php if($row['image']) { ?>
                    <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" style="height:200px; object-fit:cover;">
                <?php } ?>

                <div class="card-body">
                    <h5><?php echo $row['title']; ?></h5>
                    <p><?php echo substr($row['description'],0, 100); ?>...</p>
                    <small class="text-muted"><?php echo $row['created_at']; ?></small>
                    
                    <br>
					<a href="news_detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Read More</a>

                    <a href="delete_news.php?id=<?php echo $row['id']; ?>" 
                       class="btn btn-danger btn-sm mt-2"
                       onclick="return confirm('Are you sure you want to delete this news?')">
                       Delete
                    </a>
                </div>

            </div>
        </div>

        <?php } ?>
    </div>

</div>

</body>
</html>
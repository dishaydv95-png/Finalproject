<?php
$conn = mysqli_connect("localhost", "root", "", "collage_db");
$result=  mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>All News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>

<div class="container my-5">
    <h2 class="text-center mb-4">All News</h2>

    <div class="row">

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <div class="col-md-4 mb-4">
            <div class="card shadow">

                <!-- 🖼 Image -->
                <?php if($row['image']) { ?>
                    <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top">
                <?php } ?>

                <div class="card-body">
                    <h5><?php echo $row['title']; ?></h5>

                    <p>
                        <?php echo substr($row['description'], 0, 100); ?>...
                    </p>

                    <small class="text-muted"><?php echo $row['created_at']; ?></small>

                    <br><br>

                    <a href="news_detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">
                        Read More
                    </a>
                </div>

            </div>
        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>
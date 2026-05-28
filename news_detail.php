<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$result=  mysqli_query($conn, "SELECT * FROM news WHERE id=$id");
$row =  mysqli_fetch_assoc($result);
?>
	
<!DOCTYPE html>
<html>
<head>
    <title>News Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .news-img {
            max-height: 400px;
            object-fit: cover;
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<div class="container my-5">

    <button onclick="history.back()" class="btn btn-secondary mb-3">← Back</button>

    <div class="card shadow p-4">


		   <h2>📰 <?php echo $row['title']; ?></h2>
			
			<p class="text-muted"><?php echo date("d M Y", strtotime( $row['created_at'])); ?></p>
			
			<hr>
			
			<!--image-->
			<?php if($row['image']) { ?>
            <img src="uploads/<?php echo $row['image']; ?>" class="news-img mb-3">
        <?php } ?>
		
		  <!--Description-->
			<p style="font-size:18px;">
			    <?php echo substr( $row['description'],0, 100); ?>...
			</p>
			
		</div>
    </div>


</body>
</html>
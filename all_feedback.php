<?php
$conn = mysqli_connect("localhost","root","","collage_db");

$result = mysqli_query($conn,
"SELECT * FROM feedback ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Feedback</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
        }

        .feedback-card{
            background:white;
            padding:25px;
            border-radius:12px;
            transition:0.3s;
            height:100%;
        }

        .feedback-card:hover{
            transform:translateY(-5px);
            box-shadow:0 10px 25px rgba(0,0,0,0.15);
        }

        .rating{
            color:#ffc107;
            font-size:18px;
        }

    </style>

</head>

<body>

<div class="container my-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>⭐ All Student Feedback</h2>

        <a href="Home.php" class="btn btn-secondary">
            ← Back
        </a>

    </div>

    <div class="row g-4">

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <div class="col-md-4">

            <div class="feedback-card shadow">

                <h5>
                    👨‍🎓 <?php echo $row['name']; ?>
                </h5>

                <!-- Rating -->
                <div class="rating mb-2">

                    <?php
                    for($i=1;$i<=5;$i++){

                        if($i <= $row['rating']){
                            echo "⭐";
                        }else{
                            echo "☆";
                        }

                    }
                    ?>

                </div>

                <p>
                    "<?php echo $row['message']; ?>"
                </p>

                <small class="text-muted">
                    <?php echo $row['created_at']; ?>
                </small>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>
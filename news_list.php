<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "collage_db");

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result=  mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC LIMIT 3");
?>
	
	<style>
	.news-card {
    border: none;
    border-radius: 12px;
    transition: 0.3s;
}
.news-card {
    border-left: 5px solid #0d6efd;
}
.news-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.news-card .card-title {
    font-weight: 600;
    color: #0d6efd;
}

.news-card .btn {
    border-radius: 20px;
}
</style>
</head>
<body>

<!--news form-->
<div class="container my-5">
 <h3 class="text-center mb-5 fw-bold">Latest News</h3>
  <div class="row g-4">
     
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
	 <div class="col-md-4" data-aos="fade-up">
    <div class="card shadow news-card h-100">
	
        
        <div class="card-body">
		   <h5 class="card-title"> 
		       📰 <?php echo $row['title']; ?>
			</h5>
			
			<p class="text-muted small">
			    <?php echo date("d M Y", strtotime( $row['created_at'])); ?>
			</p>
			
			<p class="card-text">
			    <?php echo substr( $row['description'],0, 100); ?>...
			</p>
			
			<a href="news_detail.php?id=<?php echo $row['id']; ?>"
			   class="btn btn-primary btn-sm">
			   Read More →
			 </a>
		   
		</div>
    </div>
</div>
 <?php } ?>
 
 </div>
 
 <div class="text-center mt-4">
    <a href="all_news.php" class="btn btn-outline-primary px-4">View All News
	</a>
  </div>
  </div>
 
 <!-- Dark mode js -->
<script src="js/darkmode.js"></script>


</body>
</html>
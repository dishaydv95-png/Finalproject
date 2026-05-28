<style>
	  body{
		  margin:0;
	  }
	  
	  /* Sidebar */
	  .sidebar{
		  width: 230px;
		  height: 100vh;
		  position: fixed;
		  background: #212529;
		  padding-top: 20px;
	  }
	  
	  .sidebar a{
		  display: block;
		  color: #ccc;
		  padding: 12px 20px;
		  text-decoration: none;
	  }
	  
	  .sidebar a:hover{
		  background: #0d6efd;
		  color: #fff;
	  }
	  
	  .sidebar h4{
		  color: white;
		  text-align: center;
		  margin-bottom: 20px;
	  }
	   
	   .sidebar .active{
		   background: #0d6efd;
	   }
	   /* Content */
	   .main-content {
		   margin-left: 230px;
		   padding: 20px;
	   }
	  
	</style>
	
	<!--Sidebar-->
<div class="sidebar">
   <h4>Admin Panel</h4>
   
   <a href="admin.php" class="active">🏠 Dashboard</a>
    <a href="view_enquiry.php">📩 Enquiry</a>
	 <a href="view_admission.php">🎓 Admission</a>
	<a href="view_feedback.php">⭐ Feedback</a>
	<a href="news_view.php">📰 News</a>
	<a href="news_form.html">News Insert</a>
	
	<hr style="border-top: 1px solid #555;">
	
	<a href="Home.php">🌐 Go Website</a>
	<a href="Home.php" style="color :#ff6b6b;">🚪 Logout</a>
</div><!-- end of sidebar container-->
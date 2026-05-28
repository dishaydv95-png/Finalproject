<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICMS College - Home</title>
	
	<!-- css for dark mode -->
	<link rel="stylesheet" href="css/darkmode.css">
	
	<!-- css for social icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

       .hero {
            background: url('https://images.unsplash.com/photo-1562774053-701939374585') no-repeat center center/cover;
            height: 90vh;
            display: flex;
            align-items: center;
            color: white;
        }
		.overlay {
         background: rgba(0,0,0,0.7);
         width: 100%;
         padding: 80px 20px;
         }
        .card img {
            height: 200px;
            object-fit: cover;
        }
		/*nev menu*/
.navbar {
    padding: 12px 0;
}

.navbar-brand {
    font-size: 22px;
}

.nav-link {
    font-size: 15px;
    margin-right: 10px;
    transition: 0.3s;
}

.nav-link:hover {
    color: #ffc107 !important;
}

.dropdown-menu {
    border-radius: 10px;
    border: none;
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

.dropdown-item:hover 
{
    background: #0d6efd;
    color: white;
}

.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
}

.dropdown-menu {
    border-radius: 10px;
    border: none;
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}

.dropdown-item:hover {
    background: #0d6efd;
    color: white;
}

.card {
        transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
         transform: translateY(-10px);
         box-shadow: 0 10px 25px rgba(0,0,0,0.2);
         }
		 .company-logo img{
		   height: 60px;
		   object-fit: contain;
		   }
	/*footer*/
.footer {
    background: linear-gradient(135deg, #0d1b2a, #1b263b);
    color: #fff;
    padding: 50px 0 20px;
}

.footer-title {
    font-weight: bold;
    margin-bottom: 15px;
}

.footer p {
    margin: 5px 0;
    color: #ccc;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 8px;
}

.footer-links a {
    color: #ccc;
    text-decoration: none;
    transition: 0.3s;
	
}

.footer-links a:hover {
    color: #ffc107;
    padding-left: 5px;
}

.social-icons a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    margin-right: 8px;
    border-radius: 50%;
    background: #0d6efd;
    color: white;
    transition: 0.3s;
}

.social-icons a:hover {
    background: #ffc107;
    color: black;
    transform: translateY(-3px);
}

.footer hr {
    border-color: rgba(255,255,255,0.2);
    margin: 30px 0;
}
		/* footer */

		
		footer a 
		{
			text-decoration: none;
		}

		footer a:hover 
		{
		text-decoration: underline;
		}
		.card {
        transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
         transform: translateY(-10px);
         box-shadow: 0 10px 25px rgba(0,0,0,0.2);
         }
 
		
		/* DARK MODE TEXT FIX */
.dark-mode {
  background-color: #121212;
  color: #ffffff;
}

/* Make sure ALL text is visible */
.dark-mode h1,
.dark-mode h2,
.dark-mode h3,
.dark-mode p,
.dark-mode a {
  color: #ffffff;
}

/* APPLY NOW BUTTON FIX */
.apply-btn {
  background-color: #ffc107;
  color: #000;
  border: none;
}

/* Keep button visible in dark mode */
.dark-mode .apply-btn {
  background-color: #ffc107;
  color: #000;
}

/* If you're using Bootstrap (.btn-warning) */
.dark-mode .btn-warning {
  background-color: #ffc107 !important;
  color: #000 !important;
  border: none;
}
/*chatbot css*/
#chatbot-btn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: #0d6efd;
    color: white;
    padding: 15px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 20px;
}

#chatbox {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 20px;
    width: 300px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.2);
}

.chat-header {
    background: #0d6efd;
    color: white;
    padding: 10px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
}

#chat-messages {
    height: 250px;
    overflow-y: auto;
    padding: 10px;
}

.chat-input {
    display: flex;
}

.chat-input input {
    flex: 1;
    border: none;
    padding: 10px;
}

.chat-input button {
    background: #0d6efd;
    color: white;
    border: none;
    padding: 10px;
}
		
		
    </style>
	
	
	
	<!-- style sheet for fade-in on scroll -->
	<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>

<!-- nav menu -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">

    <a class="navbar-brand fw-bold" href="Home.php">ICMS College</a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto align-items-lg-center">

        <!-- Home -->
        <li class="nav-item">
          <a class="nav-link active" href="Home.php">Home</a>
        </li>

        <!-- About -->
        <li class="nav-item">
          <a class="nav-link" href="Aboutus.html">About</a>
        </li>

        <!-- Academics Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Academics</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Cources.html">Courses</a></li>
            <li><a class="dropdown-item" href="Admission.html">Admissions</a></li>
            <li><a class="dropdown-item" href="Fees.html">Fees</a></li>
          </ul>
        </li>

        <!-- Campus Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Campus</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Campus.html">Facilities</a></li>
            <li><a class="dropdown-item" href="Gallery.html">Gallery</a></li>
          </ul>
        </li>

        <!-- Students Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Students</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Placement.html">Placements</a></li>
            <li><a class="dropdown-item" href="Recruiters.html">Recruiters</a></li>
            <li><a class="dropdown-item" href="Student_Portfolio.html">Portfolio</a></li>
          </ul>
        </li>

        <!-- More Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Contact.html">Contact</a></li>
            <li><a class="dropdown-item" href="Feedback.html">Feedback</a></li>
            <li><a class="dropdown-item" href="FAQ.html">FAQ</a></li>
            <li><a class="dropdown-item" href="faculty.html">Faculty</a></li>
			<li><a class="dropdown-item" href="facultyLogin.html">Faculty Login</a></li>
          </ul>
        </li>

        <!-- Login -->
        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button">
        Login
    </a>

    <ul class="dropdown-menu">
        <li>
            <a class="dropdown-item" href="login.html">
                👨‍💼 Admin Login
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="facultyLogin.html">
                👨‍🏫 Faculty Login
            </a>
        </li>
    </ul>
</li>

        <!-- Dark Mode -->
        <li class="nav-item ms-lg-3">
          <button onclick="toggleDarkMode()" class="btn btn-outline-light btn-sm">
            🌙 Dark Mode
          </button>
        </li>

      </ul>
    </div>
  </div>
</nav>
     

  
  

<!-- Hero -->
<section class="hero">
    <div class="text-center" data-aos="fade-down">
       
    </div>
</section>

<!-- About -->
<div class="container my-5" data-aos="fade-up">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2>About Our College</h2>
            <p>
                ICMS College is a premier institution dedicated to academic excellence and skill-based education.
                We offer a wide range of undergraduate and diploma programs designed to prepare students for successful careers.
            </p>
            <p>
                With experienced faculty, modern infrastructure, and industry-relevant curriculum, we ensure holistic development of students.
            </p>
            <a href="aboutus.html" class="btn btn-primary">Read More</a>
        </div>
        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="img-fluid rounded shadow">
        </div>
    </div>
</div>

<!-- Courses -->
<div class="container my-5">
    <h2 class="text-center mb-4" data-aos="fade-up">Popular Courses</h2>
    <div class="row g-4">

        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c">
                <div class="card-body">
                    <h5>BCA</h5>
                    <p>Learn programming and software development.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f">
                <div class="card-body">
                    <h5>B.Com</h5>
                    <p>Master accounting, finance, and business.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="card shadow">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f">
                <div class="card-body">
                    <h5>BBA</h5>
                    <p>Develop leadership and management skills.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Stats -->
<div class="bg-primary text-white text-center p-5" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-3" data-aos="zoom-in"><h3 class="counter" data-target="5000">0</h3><p>Students</p></div>
            <div class="col-md-3" data-aos="zoom-in"><h3 class="counter" data-target="100">0</h3><p>Faculty</p></div>
            <div class="col-md-3" data-aos="zoom-in"><h3 class="counter" data-target="95">0</h3><p>Placement</p></div>
			<!-- Visitors count -->
			<?php
			$conn = mysqli_connect("localhost","root","","collage_db");

			$today = date("Y-m-d");

			// Check if today's record exists
			$check = mysqli_query($conn, "SELECT * FROM visitors WHERE visit_date='$today'");

			if(mysqli_num_rows($check) == 0)
			{
				mysqli_query($conn, "INSERT INTO visitors (visit_date) VALUES ('$today')");
			}

			$result = mysqli_query($conn, "SELECT COUNT(*) as total FROM visitors");
			$data = mysqli_fetch_assoc($result);
			?>
			<div class="col-md-3" data-aos="zoom-in"><h3 class="counter" data-target="<?php 	echo $data['total']; ?>">0</h3>
				<p>Website Visitors</p>
			</div>
        </div>
    </div>
</div>

<!-- Facilities -->
<div class="container my-5">
    <h2 class="text-center mb-4" data-aos="fade-up">Our Facilities</h2>
    <div class="row g-4">

        <div class="col-md-3" data-aos="flip-left" data-aos-delay="100">
            <div class="card shadow text-center p-3">
                <h5>📚 Library</h5>
            </div>
        </div>

        <div class="col-md-3" data-aos="flip-left" data-aos-delay="200">
            <div class="card shadow text-center p-3">
                <h5>💻 Computer Lab</h5>
            </div>
        </div>

        <div class="col-md-3" data-aos="flip-left" data-aos-delay="300">
            <div class="card shadow text-center p-3">
                <h5>🏀 Sports</h5>
            </div>
        </div>

        <div class="col-md-3" data-aos="flip-left" data-aos-delay="300">
            <div class="card shadow text-center p-3">
                <h5>🎓 Smart Classes</h5>
            </div>
        </div>

    </div>
</div>

<?php include("news_list.php"); ?>

<!-- Feeback -->
<?php
$conn = mysqli_connect("localhost","root","","collage_db");
$result = mysqli_query($conn,
"SELECT * FROM feedback ORDER BY id DESC LIMIT 3");
?>
<section class="container my-5">
    <h2 class="text-center mb-4">
        ⭐ Student Feedback
    </h2>
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
                <!-- Message -->
                <p>
                    "<?php echo substr($row['message'],0,100); ?>..."
                </p>
            </div>
        </div>
        <?php } ?>
    </div>

    <!-- VIEW MORE BUTTON -->
    <div class="text-center mt-4">
        <a href="all_feedback.php" class="btn btn-outline-primary">
           View More Feedback →
        </a>
    </div>
</section>
<!--feedback end-->

<!-- Testimonials -->
<div class="bg-light py-5" data-aos="fade-up">
    <div class="container text-center">
        <h2>What Students Say</h2>
        <p>"ICMS College helped me build my career. Highly recommended!"</p>
        <p><strong>- Rahul Sharma</strong></p>
    </div>
</div>

<!-- Companies-->
<div class="container my-5" data-aos="fade-up">
  <h2 class="text-center mb-4">Our Recruiters</h2>
  
  
  <div class="row text-center company-logo">
	<div class="col-md-2"><img src="images\recruiters\1.jpeg"></div>
	<div class="col-md-2"><img src="images\recruiters\2.jpeg"></div>
	<div class="col-md-2"><img src="images\recruiters\3.jpeg"></div>
	<div class="col-md-2"><img src="images\recruiters\4.jpeg"></div>
	<div class="col-md-2"><img src="images\recruiters\5.jpeg"></div>
	<div class="col-md-2"><img src="images\recruiters\6.jpeg"></div>
 </div>
 </div>
  
		



<!-- Gallery Preview -->
<div class="container my-5">
    <h2 class="text-center mb-4" data-aos="fade-up">Gallery</h2>
    <div class="row g-3">
        <div class="col-md-3" data-aos="zoom-in"><img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644" class="img-fluid rounded"></div>
        <div class="col-md-3" data-aos="zoom-in"><img src="https://images.unsplash.com/photo-1509062522246-3755977927d7" class="img-fluid rounded"></div>
        <div class="col-md-3" data-aos="zoom-in"><img src="https://images.unsplash.com/photo-1498079022511-d15614cb1c02" class="img-fluid rounded"></div>
        <div class="col-md-3" data-aos="zoom-in"><img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" class="img-fluid rounded"></div>
    </div>
</div>

<!-- CTA -->
<div class="bg-primary text-white text-center p-5" data-aos="fade-up">
    <h2>Admissions Open 2026</h2>
    <p>Enroll today and secure your future</p>
    <a href="Enqueryform.html" class="btn btn-light">Apply Now</a>
</div>

<footer class="footer">
    <div class="container">
        <div class="row gy-4">

            <!-- College Info -->
            <div class="col-md-4">
                <h4 class="footer-title">ICMS College</h4>
                <p>Providing quality education and shaping future leaders.</p>

                <!-- Social Icons -->
                <div class="social-icons mt-3">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://x.com/"><i class="fab fa-twitter" target="_blank"></i></a>
                    <a href="https://in.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/@programmingera7667" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Contact -->
            <div class="col-md-4">
                <h4 class="footer-title">Contact Us</h4>
				<ul class="footer-links">
                 <li>📞 <a href="tel:+918126863163" class="text-white">+91-8126863163</a></li>
                 <li>📧 <a href="mailto:marif1831@gmail.com" class="text-white">info@icmscollege.com</a></li>
                 <li>📍 <a href="Contact.html" class="text-white">Dehradun, India</a></li>
				</ul>
            </div>

            <!-- Links -->
            <div class="col-md-4">
                <h4 class="footer-title">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Aboutus.html">About</a></li>
                    <li><a href="Contact.html">Contact</a></li>
                    <li><a href="Admission.html">Admissions</a></li>
                </ul>
            </div>

        </div>

        <hr>

        <div class="text-center">
            <p>© 2026 ICMS College | All Rights Reserved</p>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Javascript for dynamic counter -->
<script>
const counters = document.querySelectorAll('.counter');

const startCounting = (counter) => {
    const target = +counter.getAttribute('data-target');
    let count = 0;
    const speed = target / 100;
	
    const duration = 2000;
    const stepTime = 20;
    const steps = duration / stepTime;
    const increment = target / steps;

    const updateCount = () => {
        if (count < target) {
            count += speed;
            counter.innerText = Math.floor(count);
            setTimeout(updateCount, 20);
        } else {
            counter.innerText = target + "+";
        }
    };

    updateCount();
};

// Trigger on scroll
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            startCounting(entry.target);
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

counters.forEach(counter => {
    observer.observe(counter);
});
</script>

<!-- Javascript for fade-in on scroll -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>

<!-- Dark mode js -->
<script src="js/darkmode.js"></script>

<!-- Chatbot Button -->
<div id="chatbot-btn" onclick="toggleChat()">💬</div>

<!-- Chatbox -->
<div id="chatbox">
    <div class="chat-header">
        ICMS Assistant
        <span onclick="toggleChat()">✖</span>
    </div>

    <div id="chat-messages"></div>

    <div class="chat-input">
        <input type="text" id="userInput" placeholder="Ask something..." onkeypress="handleKey(event)">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>
<script>
function toggleChat() {
    let chat = document.getElementById("chatbox");
    chat.style.display = chat.style.display === "block" ? "none" : "block";
}

function handleKey(e) {
    if (e.key === "Enter") sendMessage();
}

function sendMessage() {
    let input = document.getElementById("userInput");
    let msg = input.value.trim();
    if (msg === "") return;

    addMessage("You", msg);

    let reply = getBotReply(msg.toLowerCase());
    setTimeout(() => addMessage("Bot", reply), 500);

    input.value = "";
}

function addMessage(sender, text) {
    let chat = document.getElementById("chat-messages");
    chat.innerHTML += `<p><b>${sender}:</b> ${text}</p>`;
    chat.scrollTop = chat.scrollHeight;
}

function getBotReply(msg) {

    // Greeting
    if (
        msg.includes("hi") ||
        msg.includes("hello") ||
        msg.includes("hey") ||
        msg.includes("good morning") ||
        msg.includes("good evening")
    ) {
        return "Hello 👋 Welcome to ICMS College! How can I help you today?";
    }

    // Course related
    if (msg.includes("course"))
        return "We offer courses like BCA, BBA, B.Com, DCA, Web Designing, Tally etc.";

    // BCA specific
    if (msg.includes("bca"))
        return "BCA is a 3-year course focused on programming, databases, and software development.";

    // Admission
    if (msg.includes("admission"))
        return "Admissions are open! Visit the Admission page.";

    // Fee
    if (msg.includes("fee"))
        return "Fees depend on the course. Please check the Fees page.";

    // Contact
    if (msg.includes("contact") || msg.includes("phone"))
        return "Call us at +91-8126863163";

    return "Sorry, I didn't understand. Try asking about courses, admission, or fees.";
}
</script>

</body>
</html>
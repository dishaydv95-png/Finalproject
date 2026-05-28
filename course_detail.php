<?php
$course = $_GET['course'];

// Course Data (simple static, can later connect DB)
$courses = [
    "BCA" => [
        "name" => "Bachelor of Computer Applications",
        "duration" => "3 Years (6 Semesters)",
        "eligibility" => "12th Pass",
        "fees" => "₹50,000/year",
        "career" => "Software Developer, Web Developer",
        "description" => "Learn programming, DBMS, networking, and software development.",
        "image" => "https://images.unsplash.com/photo-1519389950473-47ba0277781c"
    ],
    "B.Com" => [
        "name" => "Bachelor of Commerce",
        "duration" => "3 Years (6 Semesters)",
        "eligibility" => "12th Commerce",
        "fees" => "₹40,000/year",
        "career" => "Accountant, Banker",
        "description" => "Learn accounting, finance, taxation.",
        "image" => "https://images.unsplash.com/photo-1554224155-6726b3ff858f"
    ],
    "BBA" => [
        "name" => "Bachelor of Business Administration",
        "duration" => "3 Years (6 Semesters)",
        "eligibility" => "12th Pass",
        "fees" => "₹45,000/year",
        "career" => "Manager, Entrepreneur",
        "description" => "Develop leadership and business skills.",
        "image" => "https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
    ],
	"DCA" => [
        "name" => "Diploma in Computer Application",
        "duration" => "1 Year (2 Semesters)",
        "eligibility" => "12th Pass",
        "fees" => "₹20,000/year",
        "career" => "Computer Operator, Data Entry Operator, Accountant",
        "description" => "Learn Computer Application like working of Microsoft Word, Microsoft Excel, Microsoft PowerPoint Microsoft Access, Internet, Email, Tally etc.",
        "image" => "images/Courses/ok.jpeg"
    ],
	"Excel and Data Analysis" => [
        "name" => "Advanced Excel & Data Analysis",
        "duration" => "1 Year (2 Semesters)",
        "eligibility" => "12th Pass",
        "fees" => "₹15,000/year",
        "career" => "Accountant, Data Analyst, Bussiness Anylist",
        "description" => "Learn Microsoft Excel in Details and Learn Analysis of Data to get Useful Information From The Data.",
        "image" => "https://images.unsplash.com/photo-1551288049-bebda4e38f71"
    ],
	"TALLY" => [
        "name" => "Tally with GST",
        "duration" => "1 Year (2 Semesters)",
        "eligibility" => "12th Pass",
        "fees" => "₹20,000/year",
        "career" => "Accountant, Tax Consultant, Tax Analyst.",
        "description" => "Learn Tally Prime along with GST, Service Tax, TDS, TCS and other types of Tax Details along with Basic Account Entries.",
        "image" => "images/Courses/TALLY.jpg"
    ],
	"GraphicsDesign" => [
        "name" => "Graphics Design",
        "duration" => "1 Year (2 Semesters)",
        "eligibility" => "12th Pass",
        "fees" => "₹25,000/year",
        "career" => "Graphics Designer, Animator, Video Editor, Photo Editor",
        "description" => "Learn Graphics Design Tool Like Photoshop, CorelDraw, Illustrator, InDesign, PremierPro, Canva",
        "image" => "images/Courses/graphic.jpg"
    ],
	"ACCA" => [
        "name" => "Advance Certificate In Computer Application",
        "duration" => "6 Months (1 Semesters)",
        "eligibility" => "10/12th Pass",
        "fees" => "₹10,000/Full Course",
        "career" => "Computer Operator, Data Entry Operator",
        "description" => "Learn working of Microsoft Office Word, Excel, PowerPoint, Access, Internet, Email, Windows Tools.",
        "image" => "images/Courses/image2.jpeg"
    ],
	"CCA" => [
        "name" => "Certificate In Computer Application",
        "duration" => "3 Months",
        "eligibility" => "10/12th Pass",
        "fees" => "₹8,000/Full Course",
        "career" => "Junior Computer Operator, Data Entry Operator",
        "description" => "Learn working of Microsoft Office Word, Excel, PowerPoint, Access, Internet, Email, Windows Tools.",
       "image" => "images/Courses/diploma.jpeg"
    ],
	"WebDesign" => [
        "name" => "Website Design and Development",
        "duration" => "1 Year (2 Semsters)",
        "eligibility" => "12th Pass",
        "fees" => "₹28,000/Per Year",
        "career" => "Website Designer, Web Developer, Test Analyst, App Developer",
        "description" => "Learn Website Development, Website Designing by Using HTML, CSS, JavaScript, bootstrap, JQuery, Node JS and DataBase Like MySQL,",
        "image" => "images/Courses/web designing.jpeg"
    ],
	"PGDCA" => [
        "name" => "Post Graduate Diploma in Computer Application",
        "duration" => "2 Year (4 Semsters)",
        "eligibility" => "12th Pass",
        "fees" => "₹19,000/Per Year",
        "career" => "Senior Computer Operator, Senior Accountant, Data Entry Supervisor",
        "description" => "Learn Complete Microsoft Office, Internet and Email, Working of Windows and System Tools in Depth.",
       "image" => "images/Courses/ok2.jpeg"
    ],
	"Programming" => [
        "name" => "Programming or Coding",
        "duration" => "2 Year (4 Semsters)",
        "eligibility" => "12th Pass",
        "fees" => "₹25,000/Per Year",
        "career" => "Programmer, Software Developer, Website Developer",
        "description" => "Learn Programming Like Java, Python, PHP, C & C++, HTML, CSS, JavaScript, Data Structure, MySQL, Access etc.",
        "image" => "images/Courses/programming.jpg"
    ]
];

$data = $courses[$course];
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $data['name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container my-5">

    <div class="row">

        <!-- Image -->
        <div class="col-md-6">
            <img src="<?php echo $data['image']; ?>" class="img-fluid rounded shadow">
        </div>

        <!-- Details -->
        <div class="col-md-6">
            <h2><?php echo $data['name']; ?></h2>

            <p><?php echo $data['description']; ?></p>

            <ul class="list-group mb-3">
                <li class="list-group-item"><b>Duration:</b> <?php echo $data['duration']; ?></li>
                <li class="list-group-item"><b>Eligibility:</b> <?php echo $data['eligibility']; ?></li>
                <li class="list-group-item"><b>Fees:</b> <?php echo $data['fees']; ?></li>
                <li class="list-group-item"><b>Career:</b> <?php echo $data['career']; ?></li>
            </ul>

            <!-- Apply Button -->
            <a href="Admission.html?course=<?php echo $course; ?>" class="btn btn-success btn-lg">
                Apply for this Course
            </a>

        </div>

    </div>

</div>

</body>
</html>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "collage_db");
$result = mysqli_query($conn, "SELECT * FROM notes ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Notes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .main {
            margin-left: 240px;
            padding: 20px;
        }

        .topbar {
            background: white;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
        }

        .table-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .table th {
            background: #0d6efd;
            color: white;
        }

        .action-btn i {
            margin-right: 5px;
        }
    </style>
</head>

<body>

<?php include("sidebar.php"); ?>

<div class="main">

    <!-- TOPBAR -->
    <div class="topbar mb-4">
        <h5>📚 All Notes</h5>
        <a href="upload_notes.php" class="btn btn-primary btn-sm">+ Upload New</a>
    </div>

    <!-- SEARCH -->
    <div class="mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="Search notes...">
    </div>

    <!-- TABLE -->
    <div class="table-card">

        <table class="table table-bordered table-hover text-center" id="notesTable">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Course</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            <?php $i=1; while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><span class="badge bg-success"><?php echo $row['course']; ?></span></td>

                <td>
                    <a href="uploads/<?php echo $row['file']; ?>" target="_blank" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i> View
                    </a>
                </td>

                <td>
                    <a href="uploads/<?php echo $row['file']; ?>" download class="btn btn-success btn-sm action-btn">
                        <i class="fas fa-download"></i>
                    </a>

                    <a href="delete_note.php?id=<?php echo $row['id']; ?>" 
                       class="btn btn-danger btn-sm action-btn"
                       onclick="return confirm('Delete this file?')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

<!-- SEARCH SCRIPT -->
<script>
document.getElementById("searchInput").addEventListener("keyup", function() {
    let value = this.value.toLowerCase();
    let rows = document.querySelectorAll("#notesTable tbody tr");

    rows.forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(value) ? "" : "none";
    });
});
</script>

</body>
</html>
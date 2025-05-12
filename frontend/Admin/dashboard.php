<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/styles.css">
<link rel="icon" href="resources/images/favicon.svg">
<script src="https://kit.fontawesome.com/8a9d95834d.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "include/topbar.php"?>
    <div class="container">
    <hr>
    <main>

        <div class="actions">
            <div class="row1">
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/add_teacher.php';">
                <div class="action-icon"><img src="../../resources/images/current_semester.svg" alt="Add Teacher"></div>
                <div class="action-label">Add Teacher</div>
            </div>
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/add_class.php';">
                <div class="action-icon"><img src="../../resources/images/add.svg" alt="Add Class"></div>
                <div class="action-label">Add Class</div>
            </div>
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/add_subject.php';">
                <div class="action-icon"><img src="../../resources/images/subject.svg" alt="Add Subject"></div>
                <div class="action-label">Add Subject</div>
            </div>
            </div>
            <div class="row2">
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/edit_teacher.php';">
                <div class="action-icon"><img src="../../resources/images/current_semester.svg" alt="Edit Teacher"></div>
                <div class="action-label">Edit Teacher</div>
            </div>
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/edit_class.php';">
                <div class="action-icon"><img src="../../resources/images/add.svg" alt="Edit class"></div>
                <div class="action-label">Edit Class</div>
            </div>
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/edit_subject.php';">
                <div class="action-icon"><img src="../../resources/images/subject.svg" alt="Edit Subject "></div>
                <div class="action-label">Edit Subject</div>
            </div>
            </div>
            <div class="row3">
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/add_student.php';">
                <div class="action-icon"><img src="../../resources/images/student.svg" alt="Add Student"></div>
                <div class="action-label">Add Student</div>
            </div>
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/add_faculty.php';">
                <div class="action-icon"><img src="../../resources/images/previous_semester.svg" alt="Add Faculty"></div>
                <div class="action-label">Add Faculty</div>
            </div>
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/add_programme.php';">
                <div class="action-icon"><img src="../../resources/images/programme.svg" alt="Add Program"></div>
                <div class="action-label">Add Program</div>
            </div>
            </div>
            <div class="row4">
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/edit_student.php';">
                <div class="action-icon"><img src="../../resources/images/student.svg" alt="Edit Student"></div>
                <div class="action-label">Edit Student</div>
            </div>
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/edit_faculty.php';">
                <div class="action-icon"><img src="../../resources/images/previous_semester.svg" alt="Edit Faculty"></div>
                <div class="action-label">Edit Faculty</div>
            </div>
            <div class="action-box" onclick="window.location.href = 'http://localhost:8000/frontend/Admin/edit_programme.php';">
                <div class="action-icon"><img src="../../resources/images/programme.svg" alt="Edit Program"></div>
                <div class="action-label">Edit Program</div>
            </div>
            </div>

    </main>
</div>
</div>
</body>

</html>

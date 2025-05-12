<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="../../frontend/Teacher/css/styles.css">
    <link rel="icon" href="resources/images/favicon.svg">
    <title>Attendance System</title>
    <script src="https://kit.fontawesome.com/8a9d95834d.js" crossorigin="anonymous"></script>
</head>
    <body>
        <?php include "include/topbar.php"?>
        <div class="wrapper">
        <?php  include "include/sidebar.php" ?>
    <main>
    </main>
        <?php /*include "include/footer.php"*/ ?>
    <div class="container">
        <h1>Dashboard</h1>
        <div class="breadcrumb">&gt; Home / Dashboard</div>

        <div class="actions">
            <div class="action-box" onclick="alert('Take Attendance clicked')">
                <div class="action-icon"><img src="..\..\resources\images\take.svg" alt="ATTENDANCE"></div>
                <div class="action-label">Take Attendance</div>
            </div>
            <div class="action-box" onclick="alert('View Attendance clicked')">
                <div class="action-icon"><img src="..\..\resources\images\view.svg" alt="VIEW"
                        height=60*60></div>
                <div class="action-label">View Attendance</div>
            </div>
            <div class="action-box" onclick="alert('My Classes clicked')">
                <div class="action-icon"><img src="..\..\resources\images\class.svg" alt="Class"
                        height=60*60></div>
                <div class="action-label">My Classes</div>
            </div>
            <div class="action-box" onclick="alert('Add Class clicked')">
                <div class="action-icon"><img src="../../resources\images\add.svg" alt=""></div>
                <div class="action-label">Add Class</div>
            </div>
        </div>

        <div class="section-title">Classes this Semester</div>
        <table>
            <thead>
                <tr>
                    <th>Subject code</th>
                    <th>Subject name</th>
                    <th>Number of classes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CMP 330</td>
                    <td>Operating System</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>CMP 326</td>
                    <td>Theory of computation</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>CMP 241</td>
                    <td>Computer Graphics</td>
                    <td>11</td>
                </tr>
                <tr>
                    <td>CMP 332</td>
                    <td>Computer Architecture</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>MTH 220</td>
                    <td>Probability and Statistics</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>MTH 230</td>
                    <td>Numerical Method</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>CMP 481</td>
                    <td>Information System</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>EL3</td>
                    <td>Elective III</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>CMP 490</td>
                    <td>Project III</td>
                    <td>7</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    </body>
</html>

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
    <title>View Attendance</title>
</head>
    <body>
        <?php include "include/topbar.php"?>
    <div class="wrapper">
        <?php  include "include/sidebar.php" ?>
<div class="container">
        <h2>View Attendance > Current Semester</h2>
        <hr>
        <div class="filters">
            <div>
                <label for="Faculty">Faculty</label>
                <select id="faculty" required>
                    <option value="" disabled selected>Select Faculty</option>
                    <option>BE Computer</option>
                    <option>BE Civil</option>
                    <option>BCA</option>
                    <option>BBA</option>
                </select>
            </div>
            <div>
                <label for="Semester">Semester</label>
                <select id="semester" required>
                    <option value="" disabled selected>Select Semester</option>
                    <option>1<sup>st</sup></option>
                    <option>2<sup>nd</sup></option>
                    <option>3<sup>rd</sup></option>
                    <option>4<sup>th</sup></option>
                    <option>5<sup>th</sup></option>
                    <option>6<sup>th</sup></option>
                    <option>7<sup>th</sup></option>
                    <option>8<sup>th</sup></option>
                </select>
            </div>
            <div>
                <label for="subject">Subject</label>
                <select id="subject" required>
                    <option value="" disabled selected>Select Subject</option>
                    <option>DSAP</option>
                </select>
            </div>
            <div>
                <label for="Date">Date</label>
                <input type="date" id="date" required>
            </div>
        </div>


        <div style="display: flex; justify-content: space-between;">
            <span>Subject: Digital Signal Analysis and Processing</span>
            <span><label for="S-date">Start Date:</label>
                <input id="s-date" type="date" required>
            </span>
        </div>

        <div style="display: flex; justify-content: space-between;">
            <span>Course Code: ELE 111</span>
            <span><label for="E-date">End Date:</label>
                <input id="e-date" type="date" required>
            </span>
        </div>

        <table>
            <thead>
                <tr>
                    <th rowspan="2">SN</th>
                    <th rowspan="2">Name</th>
                    <th rowspan="2">Roll Number</th>
                    <th colspan="15">Day</th>
                    <th rowspan="2">Total Lecture Conducted</th>
                    <th rowspan="2">Total Lecture Attended</th>
                    <th rowspan="2">Attendance %</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="action-buttons">
            <button>Edit</button>
            <button>Export</button>
            <button>Print</button>
        </div>
    </div>
</div>
    <main>
    </main>
        <?php /*include "include/footer.php"*/ ?>
    </body>
</html>
    

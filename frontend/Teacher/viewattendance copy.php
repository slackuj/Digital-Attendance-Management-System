<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Attendance</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
        }

        .sidebar {
            background-color: #C39C9C;
            color: rgb(16, 11, 11);
            padding: 20px;
            width: 250px;
            min-height: 100vh;
            /* Make sidebar full height */
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            color: #351d1d;
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 15px;
        }

        .sidebar a {
            display: flex;
            /* Use Flexbox for alignment */
            align-items: center;
            /* Vertically align items */
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar a img {
            width: 20px;
            /* Set a fixed width for the images */
            height: 20px;
            /* Set a fixed height for the images */
            margin-right: 10px;
            /* Add spacing between image and text */
        }

        .sidebar a:hover {
            background-color: #555;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .container {
            background-color: #E7C8C8;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #0b2135;
            text-align: left;
            margin-right: 10px;
        }

        hr {
            border: 1px solid #3e0f0f;
            margin-bottom: 20px;
        }

        .filters {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            align-items: center;
        }

        .filters>div {
            display: flex;
            flex-direction: column;
        }

        .filters label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .filters select,
        .filters input[type="date"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 200px;
            /* Adjust width as needed */
        }

        .filters select option:disabled {
            color: #999;
        }

        .filters input[type="date"] {
            width: 150px;
            /* Adjust width as needed */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        thead th {
            background-color: #B9B9B9;
            color: white;
            font-weight: bold;
            padding: 10px;
            text-align: center;
            border: 1px solid #140a0a;
        }

        tbody td {
            padding: 8px;
            text-align: center;
            border: 1px solid #1c0808;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .action-buttons button {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .action-buttons button:hover {
            background-color: #4cae4c;
        }

        .action-buttons button:nth-child(2) {
            background-color: #f0ad4e;
        }

        .action-buttons button:nth-child(2):hover {
            background-color: #eea236;
        }

        .action-buttons button:nth-child(3) {
            background-color: #d9534f;
        }

        .action-buttons button:nth-child(3):hover {
            background-color: #c9302c;
        }

        /* Specific styles for the subject and date information */
        .container>div:nth-child(4),
        .container>div:nth-child(5) {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 8px 0;
            font-size: 14px;
            color: #666;
        }

        .container>div:nth-child(4) span:first-child,
        .container>div:nth-child(5) span:first-child {
            font-weight: bold;
        }

        .container>div:nth-child(4) span:last-child label,
        .container>div:nth-child(5) span:last-child label {
            margin-right: 5px;
        }

        .container>div:nth-child(4) span:last-child input[type="date"],
        .container>div:nth-child(5) span:last-child input[type="date"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 120px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Attendance System</h2>
        <hr>
        <ul>

            <li><a href=""><img src="view\resources\Dashboard.svg" alt="Dashboard Icon">Dashboard</a> </li>
            <li><a href=""><img src="view\resources\Take attendance.svg" alt="Take Attendance Icon">Take
                    Attendance</a></li>
            <li><a href=""><img src="view\resources\view attendance.svg" alt="View Attendance Icon">View
                    Attendance</a></li>
            <li><a href="">&nbsp &nbsp &nbsp<img src="view\resources\current semester.svg"
                        alt="Current Semester Icon">Current Semester</a></li>
            <li><a href="">&nbsp &nbsp &nbsp<img src="view\resources\Previous semester.svg"
                        alt="Previous Semester Icon">Previous Semester</a></li>
            <li><a href=""><img src="view\resources\Setting.svg" alt="Settings Icon">Settings</a></li>
        </ul>
    </div>

    <div class="container">
        <h2>View Attendance | Previous Semester</h2>
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
    
</body>

</html>
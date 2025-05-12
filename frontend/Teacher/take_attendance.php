<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="css/styles.css">
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
    <div class="container" />
        <?php /*include "include/footer.php"*/ ?>
    <div class="header">
      <h2>Take Attendance </h2>
    </div>
    <div class="filters">
      <select>
          <option value="" disabled selected> </option>
          <option value="">BE Computer</option>
          <option value="">BCA</option>
          <option value="">BE civil</option>
          <option value="">BBA</option>
      </select>
      <select>
          <option disabled selected></option>
          <option>First Semester</option>
          <option>Second Semester</option>
          <option>Third Semester</option>
          <option>Fourth Semester</option>
          <option>Fifth Semester</option>
          <option>Sixth Semester</option>
          <option>Seventh Semester</option>
          <option>Eighth Semester</option>
      </select>
      <select>
          <option disabled selected></option>
          <option>C</option>
          <option>C++</option>
          <option>JAVA</option>
          <option>DBMS</option>
          <option>DSA</option>
          <option>OS</option>
          <option>DSAP</option>
          <option>AI</option>
          <option>EDC</option>
          <option>LC</option>
          <option>CG</option>
          <option>PT</option>
          <option>MU</option>
          <option>CA</option>
      </select>


      <div class="dates">

      </div>

      <div class="subject-info">
        <span>Subject : Digital Signal Analysis and Processing</span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp
        <span><strong>Date : <input type="date"></strong></span> <br>
        <span>Course Code : ELE 111</span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
        &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
    </div>
  </div>

    <table>
      <thead>
        <tr>
          <th>Student Name</th>
          <th>Roll Number</th>
          <th>Attendance</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="attendance-body">
        <!-- JavaScript will populate this -->
      </tbody>
    </table>

    <div class="bottom-buttons">
      <button onclick="editTable()">Edit</button>
      <button onclick="verifyTable()">Verify</button>
    </div>
  </div>
  </div>

  <script>
    const data = [
      { name: 'Veda kumar', roll: '001', status: 'Present' },
      { name: 'Ishani kumari', roll: '002', status: 'Present' },
      { name: 'Lalita bhatta', roll: '003', status: 'Present' },
      { name: 'Alok joshi', roll: '004', status: 'Absent' },
      { name: 'Som Rana', roll: '005', status: 'Present' },
      { name: 'Lalita Bhandari', roll: '006', status: 'Present' },
      { name: 'kabiraj kalauni', roll: '007', status: 'Absent' },
      { name: 'Surya saud', roll: '008', status: 'Present' },
      { name: 'Umesh Joshi', roll: '009', status: 'Leave' },
      { name: 'Yuvraj kalauni', roll: '010', status: 'Present' },
      { name: 'Lia chris', roll: '011', status: 'Present' },
      { name: 'Dinesh Bhatt', roll: '012', status: 'Absent' },
      { name: 'Ram Bhatta', roll: '013', status: 'Present' },
      { name: 'Ravi Khadak', roll: '014', status: 'Present' },

    ];

    const tbody = document.getElementById('attendance-body');
    data.forEach((student) => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
        <td>${student.name}</td>
        <td>${student.roll}</td>
        <td class="${student.status.toLowerCase()}">${student.status}</td>
        <td class="actions"><a href="#">Reject</a></td>
      `;
      tbody.appendChild(tr);
    });

    function editTable() {
      alert('Edit function triggered');
    }

    function verifyTable() {
      alert('Attendance verified');
    }
  </script>
</body>
</html>

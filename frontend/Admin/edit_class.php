<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Attendance System - Current Semester</title>
  <script src="https://kit.fontawesome.com/8a9d95834d.js" crossorigin="anonymous"></script>
<link href="css/edit.css" rel="stylesheet">
</head>
<body>
  <div class="container">
  <main>
  <div class="header">
    <h2>Edit Class</h2>
  </div>
      <div class="searchBar">
    <input type="text" placeholder="search by Name" name="searchText">
    </div>
  <table>
    <thead>
      <tr>
        <th>SN</th>
        <th>subject name</th>
        <th>Course code</th>
        <th>Faculty</th>
        <th>Programme</th>
        <th>Semester</th>
        <th>teacher</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- Sample Empty Rows -->

      <tr>

        <td>1</td>
        <td>Progarmming in C </td>
        <td>CMP 321</td>
        <td>Science and Technology</td>
        <td>BE Computer</td>
        <td>8th semester</td>
        <td>Ravi sir</td>
        <td>Edit</td>
      </tr>

      <tr>
      <td>2</td>
      <td>C++</td>
      <td>CMP 852</td>
      <td>Science and Technology</td>
      <td>BE Computer</td>
      <td>8th semester</td>
      <td>Sunil sir</td>
      <td>Edit</td>
      </tr>

       <tr>
      <td>3</td>
      <td>Accounting</td>
      <td>Management</td>
      <td>BBA</td>
      <td>3rd semester</td>
      <td></td>
      <td>kalauni sir</td>
      <td>Edit</td>
      </tr>

      <tr>
      <td>4</td>
      <td> </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Joshi sir</td>
      <td></td>
      </tr>

      <tr>

      <td>5</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Bhandari sir</td>
      <td></td>
      </tr >

      <tr>
      <td>6</td>
      <td>Structure</td>
      <td>Science and Technology</td>
      <td>BE Civil</td>
      <td>3rd semester</td>
      <td></td>
      <td></td>
      <td>Edit</td>
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
        </tr>

        <tr>
          <td>8</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Edit</td>
          </tr>


     </tbody>
  </table>

  <div class="button-container">
    <button onclick="exportTable()">Cancel</button>
    <button onclick="saveChanges()">Save</button>
  </div>
</main>
</div>

  <script>
    function exportTable() {
      alert('Cancel not implemented yet.');
    }
    function saveChanges(){
      alert('Save not implemented yet.');
    }
  </script>

</body>

</html>

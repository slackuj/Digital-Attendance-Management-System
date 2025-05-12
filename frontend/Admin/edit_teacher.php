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
    <h2>Edit Teacher</h2>
  </div>
          <div class="searchBar">
    <input type="text" placeholder="search by Name" name="searchText">
    </div>
  <table>
    <thead>
      <tr>
        <th>SN</th>
        <th>Teacher Name</th>
        <th>Teacher ID</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- Sample Empty Rows -->

      <tr>

        <td>1</td>
        <td>Yuvraj kalauni</td>
        <td>21070040</td>
        <td>Yuvraj@gmail.com</td>
        <td>123</td>
        <td>9868564208</td>
        <td>Edit</td>
      </tr>

      <tr>
      <td>2</td>
      <td>Surya saud</td>
      <td>21070029</td>
      <td>Surya@gamil.com</td>
      <td>456</td>
      <td>9843521717</td>
      <td>Edit</td>
      </tr>

       <tr>
      <td>3</td>
      <td>Puspa raj</td>
      <td>21070029</td>
      <td>Puspa@gamil.com</td>
      <td>789</td>
      <td>9848416945</td>
      <td>Edit</td>
      </tr>

      <tr>
      <td>4</td>
      <td>Umesh joshi</td>
      <td>21070039</td>
      <td>Umesh@gamil.com</td>
      <td>987</td>
      <td>9840859551</td>
      <td>Edit</td>
      </tr>

      <tr>

      <td>5</td>
      <td>Renu Joshi</td>
      <td>21070027</td>
      <td>Renu@gmail.com</td>
      <td>654</td>
      <td>9843521717</td>
      <td>Edit</td>
      </tr >

      <tr>
      <td>6</td>
      <td>Rekha</td>
      <td>2107002</td>
      <td>Rekha@gamil.com</td>
      <td>321</td>
      <td>9868564208</td>
      <td>Edit</td>
      </tr>

      <tr>
        <td>7</td>
        <td>Dip</td>
        <td>2107007</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>

        <tr>
          <td>8</td>
          <td>Surya</td>
          <td>21070028</td>
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

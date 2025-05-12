<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/8a9d95834d.js" crossorigin="anonymous"></script>
<link href="css/edit.css" rel="stylesheet">
  <meta charset="UTF-8">
  <title>Edit Programme</title>
</head>
<body>
  <div class="container">
  <main>
  <div class="header">
    <h2>Edit Programme</h2>
  </div>
    <div class="searchBar">
    <input type="text" placeholder="search by Name" name="searchText">
    </div>


  <table>
    <thead>
      <tr>
        <th>SN</th>

        <th>Faculty</th>
        <th>Programme</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      <!-- Sample Empty Rows -->

      <tr>
        <td>1</td>
        <td>Science and Technology</td>
        <td>BE computer</td>
        <td>Edit</td>
      </tr>

      <tr>
      <td>2</td>
      <td>Science and Technology</td>
      <td>BCA</td>
      <td>Edit</td>
      </tr>

       <tr>
      <td>3</td>
      <td>Science and Technology</td>
      <td>BE civil</td>
      <td>Edit</td>
      </tr>

      <tr>
      <td>4</td>
      <td>Science and Technology </td>
      <td>BBA</td>
      <td>Edit</td>
      </tr>

      <tr>

      <td>5</td>
      <td>Renu </td>
      <td>Joshi</td>
      <td>Edit</td>
      </tr >

      <tr>
      <td>6</td>
      <td>Rekha</td>
      <td></td>
      <td>Edit</td>
      </tr>

      <tr>
        <td>7</td>
        <td>Dip</td>
        <td></td>
        <td></td>

        </tr>

        <tr>
          <td>8</td>
          <td>Surya</td>
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

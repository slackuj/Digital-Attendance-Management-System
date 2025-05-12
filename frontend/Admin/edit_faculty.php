<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Faculty</title>
  <script src="https://kit.fontawesome.com/8a9d95834d.js" crossorigin="anonymous"></script>
<link href="css/edit.css" rel="stylesheet">
</head>
<body>
  <div class="container">
  <main>
  <div class="header">
    <h2>Edit Faculty</h2>
  </div>
  <div class="searchBar">
    <input type="text" placeholder="search by Name" name="searchText">
    </div>
  <table>
    <thead>
      <tr>
        <th>SN</th>

        <th>Faculty</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      <!-- Sample Empty Rows -->

      <tr>
        <td>1</td>

        <td>BE computer</td>
        <td>Edit</td>
      </tr>

      <tr>
      <td>2</td>

      <td>BCA</td>
      <td>Edit</td>
      </tr>

       <tr>
      <td>3</td>

      <td>BE civil</td>
      <td>Edit</td>
      </tr>

      <tr>
      <td>4</td>

      <td>BBA</td>
      <td>Edit</td>
      </tr>

      <tr>

      <td>5</td>

      <td>Joshi</td>
      <td>Edit</td>
      </tr >

      <tr>
      <td>6</td>

      <td></td>
      <td>Edit</td>
      </tr>

      <tr>
        <td>7</td>

        <td></td>
        <td></td>

        </tr>

        <tr>
          <td>8</td>
          <td>Surya</td>

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

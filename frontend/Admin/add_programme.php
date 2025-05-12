<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add New Student</title>
  <link rel="stylesheet" href="css/addNew.css" />
</head>
<body>
  <div class="container">
    <h1>Add New Programme</h1>
    <form class="form">
      <label for="faculty">Faculty</label>
      <select id="faculty">
        <option value=""disabled selected> </option>
      <option value="">Science and Technology</option>
      <option value="">Management</option>
      </select>
      <label for="Program ">Program </label>
      <input type="text" id="Program" placeholder="Program name"  />
      <div class="buttons">
        <button type="button" class="cancel">Cancel</button>
        <button type="submit" class="create">Create</button>
      </div>
    </form>
  </div>
</body>
</html>

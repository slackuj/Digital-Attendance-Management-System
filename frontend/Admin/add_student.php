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
    <h1>Add New Student</h1>
    <form class="form">
      <label for="fname">First Name</label>
      <input type="text" id="fname" placeholder="First Name"  />

      <label for="lname">Last Name</label>
      <input type="text" id="lname" placeholder="Last Name" />

      <label for="roll">Roll Number</label>
      <input type="text" id="roll" placeholder="Roll Number"  />

      <label for="email">E-mail</label>
      <input type="email" id="email" placeholder="E-mail" >

      <label for="password">Password</label>
      <input type="password" name="password" >

      <label for="faculty">Faculty</label>
      <select id="faculty">
        <option value=""disabled selected> </option>
      <option value="">Science and Technology</option>
      <option value="">Management</option>

      </select>

      <label for="programme">Programme</label>
      <select id="programme">
        <option value=""disabled selected> </option>
      <option value="">BE Computer</option>
      <option value="">BCA</option>
      <option value="">BE civil</option>
      <option value="">BBA</option>
      </select>

      <label for="semester">Semester</label>
      <select id="semester">
        <option disabled selected></option>
        <option >First Semester</option>
        <option >Second Semester</option>
        <option >Third Semester</option>
        <option >Fourth Semester</option>
        <option >Fifth Semester</option>
        <option >Sixth Semester</option>
        <option >Seventh Semester</option>
        <option >Eighth Semester</option>
      </select>

      <div class="buttons">
        <button type="button" class="cancel">Cancel</button>
        <button type="submit" class="create">Create</button>
      </div>
    </form>
  </div>
</body>
</html>

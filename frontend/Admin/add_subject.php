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
    <h1>Add New Subject</h1>
    <form class="form">

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

      <label for="subject name">Subject Name</label>
      <input type="text" id="subject" placeholder="Subject name"  />

      <label for="Course">Course Name</label>
      <input type="Course" id="Course" placeholder="Course name" />

      <label for="Course">Course Credit</label>
      <input type="text" id="Course" placeholder="Course name"  />


      <div class="buttons">
        <button type="button" class="cancel">Cancel</button>
        <button type="submit" class="create">Create</button>
      </div>
    </form>
  </div>
</body>
</html>

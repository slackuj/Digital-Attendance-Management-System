<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add New Teacher</title>
  <link rel="stylesheet" href="css/addNew.css" />
</head>
<body>
  <div class="container">
    <h1>Add New Teacher</h1>
    <form class="form">
      <label for="fname">First Name</label>
      <input type="text" id="fname" placeholder="First Name"  />

      <label for="lname">Last Name</label>
      <input type="text" id="lname" placeholder="Last Name"  />

      <label for="email">E-mail</label>
      <input type="email" id="email" placeholder="E-mail" >

      <label for="password">Password</label>
      <input type="password" name="password" >

      <div class="buttons">
        <button type="button" class="cancel">Cancel</button>
        <button type="submit" class="create">Create</button>
      </div>
    </form>
  </div>
</body>
</html>

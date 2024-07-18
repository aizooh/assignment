<!DOCTYPE html>
<html>
  <head>
    <title>Obituary Form</title>
    <style>
      form {
    width: 500px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;

}

label {
    display: block;
    margin-bottom: 5px;
    color:#4D2B11;

}

input, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    color:#663A17;
}

.btn {
  width:150px;
    background-color: #995722;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    align-items: center;
    margin-left: 170px;
    margin-top: 20px;
}

.btn:hover {
    background-color: #3e8e41;
}
h1{

  text-transform:uppercase;
  align-items:center;
  text-align:center;
  color:#331D0C;
}
.heading{
  color:#331D0C;
}

    </style>
  </head>
  <body>
    <h1 class="heading">Welcome to the Obituary Management Platform</h1>

    <form id="obituaryForm" method="POST" action="submit_obituary" enctype='multipart/form-data'>
    @csrf
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required />

      <label for="dateOfBirth">Date of Birth:</label>
      <input type="date" id="dateOfBirth" name="dateofBirth" required />

      <label for="dateOfDeath">Date of Death:</label>
      <input type="date" id="dateOfDeath" name="dateOfDeath" required />

      <label for="content">Content:</label>
      <textarea id="content" name="content" required></textarea>

      <label for="author">Author:</label>
      <input type="text" id="author" name="author" required />

      <input type="submit" class='btn' />
    </form>
    <script src="script.js"></script>
  </body>
</html> 

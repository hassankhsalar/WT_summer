<html>
  <head>
  <title>My Home</title>
  </head>
  <body>
  <h1>Home</h1>
  <form action="../control/process.php" method="POST">
  <table>
  <tr>
  <td>First Name</td>
  <td><input type="text" placeholder=""name="fname"></td></tr>
  <tr>
  <td>Last Name</td>
  <td><input type="text" placeholder=""name="fname"></td></tr>
  <tr>
  <td>Age</td>
  <td><input type="text" placeholder=""name="age"></td></tr>
 
  <tr><td>Designation</td>
  <td><input type="radio"name="designation"value="junior">junior programmer
  <input type="radio"name="designation" value="senior">senior programmer
  <input type="radio"name="designation"value="project">project lead</td></tr>
 
  <tr><td>Preferred Language</td>
  <td><input type="checkbox" id="java" name="java" value="java">
<label for="java">Java</label>
<input type="checkbox" id="php" name="php" value="php">
<label for="php">PHP</label>
<input type="checkbox" id="C++" name="C++" value="C++">
<label for="C++">C++</label></td></tr>
 
  <tr>
  <td>Email</td>
  <td><input type="text" placeholder="Email"name="email"></td></tr>
 
  <tr><td>Enter Password</td>
  <td><input type="password" placeholder="Password"name="password"></td></tr>
 
  <tr><td>choose file</td>
  <td><input type="file" id="myFile" name="filename"></td></tr>
 
  <tr><td><input type="submit" name="submit"value="submit"></td>
  <td><input type="submit" name="submit"value="reset"></td></tr>
  </table>
  </form>
  </body>
  </html>
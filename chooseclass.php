<html>
  <head>
    <title>Student Information</title>
  </head>
  <style>
    .course{
    width:90px;
    }
  </style>
  <script type="text/javascript" src="tablemaker.js">
  </script>
  <form id = "classmaker" method="POST" action="edit.php" name = "classmaker">
  <body>

    Number of Semesters needed:
    <input type="text" id="numSemesters" />

    <br>
    Max courses per semester:
    <input type="text" id="numCourses" />

    <input type="button" onclick="myClass()" value="Create the table"/>

    <h1 align="center">
    My Schedule
    </h1>
    <table id="schedule" border="2" align="Center" width="55%">
    </table>

    <table id="schedule2" border="2" align="Center" width="50%">
    </table>

    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <form action = "studentpdf.php">
        <input type = "submit" name = "Student PDF" value = "Execute">
  </form>
  </body>
  </html>

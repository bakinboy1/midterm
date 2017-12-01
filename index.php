
<?php
$username='seren888';
$password='';

$db= mysqli_connect('localhost', $username, $password,'courseDB');
    // Get name for current category


/////////////////////////////////////////////////////////////////////////
$semesterID1='1';
 $query1 = "

SELECT `semesters`.`semesterName`,
`CRN`.`crnCode`,
`CRN`.`section`,
`CRN`.`courseID`,
`CRN`.`semesterID`,
`CRN`.`day`,
`CRN`.`time`,
`CRN`.`location`,
`CRN`.`instructorID`,
`instructors`.`fName`,
`instructors`.`lName`,
`courses`.`subjectName`,
`courses`.`courseName`,
`courses`.`credits`,
`courses`.`courseDescription`,

`semesters`.`semesterName`,
`CRN`.`crnCode`,
`CRN`.`section`,
`CRN`.`day`,
`CRN`.`time`,
`CRN`.`location`,
`courses`.`subjectName`,
`courses`.`courseName`,
`courses`.`credits`,
`courses`.`courseDescription`,
`instructors`.`fName`,
`instructors`.`lName`,
`semesters`.`semesterID`

 FROM semesters , `CRN` , `instructors` , `courses`
WHERE CRN.semesterID=semesters.semesterID
AND semesters.semesterID= ?
AND CRN.courseID=courses.courseID
AND CRN.instructorID= instructors.instructorID
 
  ";

 $stmt = $db->prepare($query1);
 $stmt->bind_param('i', $semesterID1);
 $stmt->execute();
$stmt->store_result();
 $stmt->bind_result($semesterName,
  $crnCode,
  $section,
  $courseID, 
   $semesterID,
   $day,
 $time,
 $location,
 $instructorID,
 $fName,
 $lName,
  $subjectName,
  $courseName,
  $credits,
 $courseDescription,
 
 $semesterName,
  $crnCode,
  $section,
   $day,
 $time,
 $location,
 $subjectName,
  $courseName,
  $credits,
 $courseDescription,
 $fName,
 $lName,
 $semesterID
 
 );
//use this method to display results

 

 ///////////////////////////////////////////////////////////////////////
 $semesterID2='2';
 $query2 = "
 SELECT `semesters`.`semesterName`,
`CRN`.`crnCode`,
`CRN`.`section`,
`CRN`.`courseID`,
`CRN`.`semesterID`,
`CRN`.`day`,
`CRN`.`time`,
`CRN`.`location`,
`CRN`.`instructorID`,
`instructors`.`fName`,
`instructors`.`lName`,
`courses`.`subjectName`,
`courses`.`courseName`,
`courses`.`credits`,
`courses`.`courseDescription`,

`semesters`.`semesterName`,
`CRN`.`crnCode`,
`CRN`.`section`,
`CRN`.`day`,
`CRN`.`time`,
`CRN`.`location`,
`courses`.`subjectName`,
`courses`.`courseName`,
`courses`.`credits`,
`courses`.`courseDescription`,
`instructors`.`fName`,
`instructors`.`lName`,
`semesters`.`semesterID`

 FROM semesters , `CRN` , `instructors` , `courses`
WHERE CRN.semesterID=semesters.semesterID
AND semesters.semesterID= ?
AND CRN.courseID=courses.courseID
AND CRN.instructorID= instructors.instructorID
 
 ";

 $stmt2 = $db->prepare($query2);
 $stmt2->bind_param('i', $semesterID2);
 $stmt2->execute();
$stmt2->store_result();
 $stmt2->bind_result($$semesterName,
  $crnCode,
  $section,
  $courseID, 
   $semesterID,
   $day,
 $time,
 $location,
 $instructorID,
 $fName,
 $lName,
  $subjectName,
  $courseName,
  $credits,
 $courseDescription,
 
 $semesterName,
  $crnCode,
  $section,
   $day,
 $time,
 $location,
 $subjectName,
  $courseName,
  $credits,
 $courseDescription,
 $fName,
 $lName,
 $semesterID);

 //$stmt->close();
 ///////////////////////////////////////////////////////////////////
  $semesterID3='3';
 $query3 = "
 SELECT `semesters`.`semesterName`,
`CRN`.`crnCode`,
`CRN`.`section`,
`CRN`.`courseID`,
`CRN`.`semesterID`,
`CRN`.`day`,
`CRN`.`time`,
`CRN`.`location`,
`CRN`.`instructorID`,
`instructors`.`fName`,
`instructors`.`lName`,
`courses`.`subjectName`,
`courses`.`courseName`,
`courses`.`credits`,
`courses`.`courseDescription`,

`semesters`.`semesterName`,
`CRN`.`crnCode`,
`CRN`.`section`,
`CRN`.`day`,
`CRN`.`time`,
`CRN`.`location`,
`courses`.`subjectName`,
`courses`.`courseName`,
`courses`.`credits`,
`courses`.`courseDescription`,
`instructors`.`fName`,
`instructors`.`lName`,
`semesters`.`semesterID`

 FROM semesters , `CRN` , `instructors` , `courses`
WHERE CRN.semesterID=semesters.semesterID
AND semesters.semesterID= ?
AND CRN.courseID=courses.courseID
AND CRN.instructorID= instructors.instructorID
 
 ";

 $stmt3 = $db->prepare($query3);
 $stmt3->bind_param('i', $semesterID3);
 $stmt3->execute();
$stmt3->store_result();
 $stmt3->bind_result($semesterName,
  $crnCode,
  $section,
  $courseID, 
   $semesterID,
   $day,
 $time,
 $location,
 $instructorID,
 $fName,
 $lName,
  $subjectName,
  $courseName,
  $credits,
 $courseDescription,
 
 $semesterName,
  $crnCode,
  $section,
   $day,
 $time,
 $location,
 $subjectName,
  $courseName,
  $credits,
 $courseDescription,
 $fName,
 $lName,
 $semesterID);

// $stmt->close();
 ///////////////////////////////////////////////////////////////
 $db->close();
//////////////////////////////////////////////////////////////////

?>
<!DOCTYPE html>
<head>
    <title>Midterm</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<div class="container">
      <!-- Example row of columns -->
      
      <script>
          function myFunction1() {
    var x = document.getElementById("myDIV1");
  
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
      </script>
      <script>
          function myFunction2() {
    var x = document.getElementById("myDIV2");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
      </script>
      <script>
          function myFunction3() {
    var x = document.getElementById("myDIV3");
   
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
      </script>
      
      <div class="row">
        <div class="col-md-4">
          <h2>Spring</h2>
          <p>Click to display all classes available for Summer  </p>
          <p><button onclick="myFunction1()">Show Available Courses</button></p>
          <div id="myDIV1" style="display:none;">
          <?php echo "<p><strong>Semester: ".$semesterName1."</strong>";?>
          <table class ="t1">
                <tr>
                    <th>Course ID</th>
                    <th>Semester</th>
                    <th>Course Name</th>
                    <th>Course Description</th>
                    <th>Credits</th>
                    <th>section</th>
                    <th>subject</th>
                    <th>day</th>
                    <th>time</th>
                    <th>location</th>
                    <th>Professor</th>

                </tr>
              
                <tr>
                    <?php
                     while ($stmt->fetch()){
     echo("<tr><td>". $courseID ."</td><td>"
     . $semesterName ."</td><td>"
     . $courseName ."</td><td>"
     . $courseDescription ."</td><td>"
     . $credits ."</td><td>"
     . $section ."</td><td>"
     . $subjectName ."</td><td>"
     . $day ."</td><td>"
     . $time ."</td><td>"
     . $location ."</td><td>"
     . $fName. " "
     . $lName ."</td><td>"
     );
  
 }
  $stmt->close();
 ?>
                    
                    
                </tr>
               
            </table>
          </div>
        </div>
        
        
        <div class="col-md-4">
          <h2>Summer</h2>
          <p>Click to display all classes available for Summer  </p>
          <p><button onclick="myFunction2()">Show Available Courses</button></p>
          <div id="myDIV2" style="display:none;">
          <?php echo "<p><strong>Semester: ".$semesterName2."</strong>";?>
          <table class ="t1">
                <tr>
                    <th>Course ID</th>
                    <th>Semester</th>
                    <th>Course Name</th>
                    <th>Course Description</th>
                    <th>Credits</th>
                    <th>section</th>
                    <th>subject</th>
                    <th>day</th>
                    <th>time</th>
                    <th>location</th>
                    <th>Professor</th>

                </tr>
                
                <tr>
                   <?php
                   
                     while ($stmt2->fetch()){
    echo("<tr><td>". $courseID ."</td><td>"
     . $semesterName ."</td><td>"
     . $courseName ."</td><td>"
     . $courseDescription ."</td><td>"
     . $credits ."</td><td>"
     . $section ."</td><td>"
     . $subjectName ."</td><td>"
     . $day ."</td><td>"
     . $time ."</td><td>"
     . $location ."</td><td>"
     . $fName. " "
     . $lName  ."</td><td>"
     );
 }
  $stmt2->close();
 ?>
                    
                </tr>
              
            </table>
          </div>
        </div>
        
        
        <div class="col-md-4">
          <h2>Fall</h2>
          <p>Click to display all classes available for Fall</p>
          <p><button onclick="myFunction3()">Show Available Courses</button></p>
          <div id="myDIV3" style="display:none;">
          <?php echo "<p><strong>Semester: ".$semesterName3."</strong>";?>
          <table class ="t1">
                <tr>
                    <th>Course ID</th>
                    <th>Semester</th>
                    <th>Course Name</th>
                    <th>Course Description</th>
                    <th>Credits</th>
                    <th>section</th>
                    <th>subject</th>
                    <th>day</th>
                    <th>time</th>
                    <th>location</th>
                    <th>Professor</th>
                    

                </tr>
                
                <tr>
              <?php
                     while ($stmt3->fetch()){
     echo("<tr><td>". $courseID ."</td><td>"
     . $semesterName ."</td><td>"
     . $courseName ."</td><td>"
     . $courseDescription ."</td><td>"
     . $credits ."</td><td>"
     . $section ."</td><td>"
     . $subjectName ."</td><td>"
     . $day ."</td><td>"
     . $time ."</td><td>"
     . $location ."</td><td>"
     . $fName. " "
     . $lName ."</td><td>"
     );
 }
  $stmt3->close();
 ?>
                </tr>
                
            </table>
          </div>
          
          
        </div>
      </div>

      <hr>

      <footer>
        <p>© Company 2017</p>
      </footer>
    </div>
    </body>
    </html>
    
<?php
require_once('database.php');
 ?>
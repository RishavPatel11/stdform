<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h1>STUDENT DETAILS</h1><BR><br>
         NAME: <input type="text" name="name">
         ID  : <input type="number" name="id">   
         ROLL: <input type="text" name="roll"><br><br>
         COURSE:<input type="text" name="course">
         UNIVERSITY:<input type="text" name="uni"><br><br>
         PART :<input type="number" name="part">
         SESSION:<input  type="number" name="ses"><br>
          <input type="submit" name="sbt">  
    <?php
       $con = mysqli_connect('localhost','root','','dos');
       if(isset($_POST['sbt']))
       {
        $NAME=$_POST['name'];
        $ID=$_POST['id'];
        $ROLL=$_POST['roll'];
        $COURSE=$_POST['course'];
        $UNIVERSITY=$_POST['uni'];
        $PART=$_POST['part'];
        $SESSION=$_POST['ses'];
        

        $query="INSERT INTO details(name,id,roll,course,university,part,session)values('$NAME',' $ID','$ROLL','$COURSE','$UNIVERSITY','$PART','$SESSION')";
        $execute=mysqli_query($con,$query);
       }
    ?>
    </form>
    
</body>
</html>
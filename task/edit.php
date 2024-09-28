<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    
   <?php
    
    $conn=mysqli_connect("localhost","root","","task")  or die("Connection Failed");
  
    $stu_id = $_GET['id'];
        
   $sql="SELECT * FROM student WHERE sid={$stu_id}";
    
    $result=mysqli_query($conn,$sql) or die("Query Unsuccessful");
    
   if(mysqli_num_rows($result) > 0 ) {
        
       while($row = mysqli_fetch_assoc($result)){   
    ?>
    
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
      </div>
      <div class="form-group">
          <label>Date</label>
           <input type="text" name="sclass" value="<?php echo $row['sclass']; ?>"/>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    
    <?php 
       } 
      }
    ?>
</div>
</div>
</body>
</html>

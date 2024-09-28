<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>From</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>To</label>
			  <input type="text" name="fadd" /><br>
			         
        </div>
             <div class="form-group">
                <label>Select Date</label>
                <input type="date" name="class"/>
          
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>


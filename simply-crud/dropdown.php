<?php

require_once __DIR__.'/dbconnect.php';

$sql = "SELECT * FROM department";

$result_Set = mysqli_query($conn,$sql);

?>
<html>
    <head></head>
    <body>
        <form action="">
            Select Department:
            <select name="department" id="">
                <option value="">Select</option>
                <?php if(mysqli_num_rows($result_Set)>0): ?>
                    <?php while($department = mysqli_fetch_assoc($result_Set)): ?>
                        <option value="<?php echo $department['id']?>">
                        <?php echo $department['name']; ?>
                        </option>
                        <?php endwhile; ?>
                        <?php endif; ?>
            </select>
        </form>
    </body>
</html>
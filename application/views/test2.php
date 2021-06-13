<?php if (isset($_SESSION['status'])) { ?>
        <div class=" alert alert-success" role="alert">
            <?php echo $_SESSION['status'];  ?>
        </div>
        <?php unset($_SESSION['status']); ?>
    <?php  } ?>






    <h1>test2</h1>
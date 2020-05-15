<?php require("templates/header.php"); ?>

<?php  
  
?>

    <main>
        <div class="profile-box">
            <div>
                <h3>Profile</h3><br>
                <h4>Username: <?php echo $_SESSION['username']; ?></h4>
                <h4>Email: <?php echo $_SESSION['email']; ?></h4><br>
            </div>

            <div>
                <form action="#" method="POST">
                    <input class="submit" type="submit" name="edit" value="Edit">
                </form>
            </div>
        </div>
    </main>

<?php require("templates/footer.php"); ?>




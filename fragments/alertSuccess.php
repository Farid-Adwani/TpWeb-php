<?php
if (isset($_SESSION["connected"])) {

?>
    <div class="container-container-fluid ">
        <div class="alert alert-success text-center">
            <?php echo $_SESSION["connected"] ?>
        </div>
    </div>

<?php unset($_SESSION['connected']);
}
?>
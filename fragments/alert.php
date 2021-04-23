<?php 
    if(isset($_SESSION['errorMessage'])){
?>

        <div class="container_fluid">
        <div class="alert alert-danger">
    <?php echo $_SESSION['errorMessage'] ?>
</div>
        </div>
<?php unset($_SESSION['errorMessage']); 
 }
 ?>
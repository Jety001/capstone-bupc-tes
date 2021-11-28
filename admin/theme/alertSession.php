 <style>
    .swal2-popup {
            font-size: 18px !important;
    }
</style>
<?php
    if (isset($_SESSION['status'])) {
        ?>
            <script>
                    Swal.fire({
                    icon: '<?php echo $_SESSION['icon'] ?>',
                    text: '<?php echo $_SESSION['text'] ?>',
                    width: '30rem',
                    showConfirmButton: false,
                    timer: 1600
                })
            </script>
        <?php
        unset($_SESSION['status']);
    }
?>
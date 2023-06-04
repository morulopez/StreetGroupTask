<div>
    <?php
        if (isset($_FILES['myfile'])) {
            require_once 'classes/HomeOwnerProcessor.php'; 

            $myFile = $_FILES['myfile'];

            // Verificar si no hubo errores durante la carga del archivo
            if ($myFile['error'] === UPLOAD_ERR_OK) {
                echo "<h2>Data Processed</h2>";
                $tmpFile = $myFile['tmp_name'];
                $processor = new HomeownerProcessor();
                $processor->processName($tmpFile);
                echo "<div class='data_list'>";
                echo $processor->printData();
            } else {
                echo "Something went wrong";
            }
            echo "</div>";
        }
    ?>
</div>
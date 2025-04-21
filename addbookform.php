<?php
            include 'inc/connection.php';
            session_start();
            if (isset($_POST["submit"])) {

                $image_name=$_FILES['f1']['name'];
                // $file_name=$_FILES['file']['name'];
                $temp = explode(".", $image_name);
                // $temp2 = explode(".", $file_name);
                $newfilename = round(microtime(true)) . '.' . end($temp);
                // $newfilename2 = round(microtime(true)) . '.' . end($temp2);
                $imagepath="books-image/".$newfilename;
                // $filepath="books-file/".$newfilename2;
                move_uploaded_file($_FILES["f1"]["tmp_name"],$imagepath);
                // move_uploaded_file($_FILES["file"]["tmp_name"],$filepath);

                mysqli_query($link, "insert into add_book values('','$_POST[booksname]','$imagepath','$_POST[bauthorname]','$_POST[bpubname]','$_POST[bprice]','$_POST[bquantity]','$_POST[bavailability]','$_SESSION[username]')");

            }
        ?>
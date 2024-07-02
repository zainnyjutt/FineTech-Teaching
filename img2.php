<?php
                $l = "localhost";
                $r = "root";
                $p = "";
                $d = "zhiab";

                $link = mysqli_connect($l, $r, $p, $d);
                $image=$_POST['image'];

              $n="INSERT INTO `image`(`image`) VALUES ('$image')";

              
$n=mysqli_query($link,$n);


                ?>
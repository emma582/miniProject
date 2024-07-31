<?php
            $connect = mysqli_connect("localhost","root","","wisdom");
            $result = mysqli_query($connect,"select * from notes_table");
            echo "<table border=1><tr> <th> Year </th> <th> Subject</th><th>Files</th></tr>";
            foreach($result as $row)
            {
             echo "<tr><td>" . $row['year'] . "</td>";
              echo "<td>" . $row['subject'] . "</td>";
             echo "<td>" . $row['file'] . "</td></tr>";
            
            }
            echo "</table>";
            echo "Connection is successful";
            ?>    
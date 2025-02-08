<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
    </head>
    <body>
        <form method="POST" >
            <table>
                <tr>
                    <td>name : </td>
                    <td> <input type="text" name='name'></td>
                </tr>
                <tr>
                    <td>firstname : </td>
                    <td> <input type="text" name='firstname'></td>
                </tr>
                <tr>
                    <td>email : </td>
                    <td> <input type="email" name='email'></td>
                </tr>
               <tr>
                    <td>module : </td>
                    <td> 
                        <input type="checkbox" name="mod[]" value ="3"> INFO_250 <br>
                        <input type="checkbox" name="mod[]" value ="4"> INFO_240 <br>
                        <input type="checkbox" name="mod[]" value ="5"> INFO_160 <br>
                        <input type="checkbox" name="mod[]" value ="6"> INFO_260<br>
                        <input type="checkbox" name="mod[]" value ="7"> GEST_110<br>
                        <input type="checkbox" name="mod[]" value ="8"> GEST_120<br>
                        <input type="checkbox" name="mod[]" value ="9"> GEST_220<br>
                        <input type="checkbox" name="mod[]" value ="10"> COMM_110<br>
                        <input type="checkbox" name="mod[]" value ="11"> COMM_120<br>
                        <input type="checkbox" name="mod[]" value ="12"> COMM_130<br>
                    </td>
                </tr>
            </table>
            <input type="submit" value ="save">
        </form>

        <?php
        

       

        ?>
    </body>
</html>
<!-- © 2025 RaHaTex - Tous droits réservés. -->
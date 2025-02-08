<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8"/>
    </head>
    <body>
        <form method="POST" >
            <table>
                <tr>
                    <td>Objet : </td>
                    <td> <input type="text" name='objet'></td>
                </tr>
                <tr>
                    <td>contenue : </td>
                    <td> <input type="text" name='contenu'></td>
                </tr>
                <tr>
                    <td>date : </td>
                    <td> <input type="date" name='date'></td>
                </tr>
               <tr>
                    <td>Etudiants : </td>
                    <td> 
                        <input type="checkbox" name="et[]" value ="25"> Teddy <br>
                        <input type="checkbox" name="et[]" value ="26"> Kazuki <br>
                        <input type="checkbox" name="et[]" value ="27"> Miravo <br>
                        <input type="checkbox" name="et[]" value ="28"> Henintsoa <br>
                        <input type="checkbox" name="et[]" value ="29"> Asina <br>
                        
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
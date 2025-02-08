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
               <td>categorie : </td>
                    <td> 
                        
                        <select name="id_mo">
                            <option value ="3"> INFO_250</option>
                            <option value ="4"> INFO_240</option>
                            <option value ="5"> INFO_160 </option>
                            <option value ="6"> INFO_260</option>  
                            <option value ="7"> GEST_110</option>  
                            <option value ="8"> GEST_120</option>  
                            <option value ="9"> GEST_220</option>  
                            <option value ="10"> COMM_110</option>  
                            <option value ="11"> COMM_120</option>  
                            <option value ="12"> COMM_130</option>  
                        </select>
                         
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
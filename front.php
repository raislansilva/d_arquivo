<?php

 $arquivos = ['arquivo1', 'arquivo2'];



?>

<html>

    <table style="width:50%">
        <tr>
            <th>Arquivos</th>
            <th>matriz</th> 
        </tr>

         <?php foreach($arquivos as $arquivo){ ?>
                <tr>
                    <td><a><?php echo $arquivo ?></a></td>

                    <?php if(file_exists('matriz')){ ?>  
                    
                        <?php switch($arquivo) { 
                                case "arquivo1":
                                echo '<td><a href="index.php?arquivo=notificacao_RADAR.indd" title="notificacao_RADAR.indd">baixar</a></td>';
                                break;
                                case "arquivo2":
                                echo '<td><a href="index.php?arquivo=notificacao_TALÃO.indd" title="notificacao_TALÃO.indd">baixar</a></td>';
                                break;
                        } ?>

                    <?php } ?>  
            
                </tr>
        <?php } ?>

    </table>
</html>
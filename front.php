<?php

$arquivos = ['NOTIFIC07052014.12190','NOTIFIC07052014.12190R'];

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
                        <?php
                            $id = $arquivo;
                            $array = explode('.',$arquivo); 
                            $ref = $array[1];
                            $n_arquivo =  $id[0].$ref;
                        ?>
                    
                        <?php switch($n_arquivo) { 
                                case "N12190R":
                                echo '<td><a href="index.php?arquivo=notificacao_RADAR.indd" title="notificacao_RADAR.indd">baixar</a></td>';
                                break;
                                case "N12190":
                                echo '<td><a href="index.php?arquivo=notificacao_TALÃO.indd" title="notificacao_TALÃO.indd">baixar</a></td>';
                                break;
                        } ?>

                    <?php } ?>  
            
                </tr>
        <?php } ?>

    </table>
</html>
<?php
    
    $con = new PDO("mysql:dbname=arquivoB; host=localhost","root","");

    $stmt = $con->prepare("SELECT arquivo FROM boleto where id=1");
    $result = $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $url;

    foreach($result as $res){
       $url = $res['arquivo']; 
    }

    
    //echo $url;
     
    /*// Aqui vale qualquer coisa, desde que seja um diretório seguro :)
    define('DIR_DOWNLOAD', '../xampp/htdocs/img/');
    // Vou dividir em passos a criação da variável $arquivo pra ficar mais fácil de entender, mas você pode juntar tudo
    $arquivo = $_GET['arquivo'];
    // Retira caracteres especiais
    $arquivo = filter_var($arquivo, FILTER_SANITIZE_STRING);
    // Retira qualquer ocorrência de retorno de diretório que possa existir, deixando apenas o nome do arquivo
    $arquivo = basename($arquivo);
    // Aqui a gente só junta o diretório com o nome do arquivo
    $caminho_download = DIR_DOWNLOAD . $arquivo;
    // Verificação da existência do arquivo
    if (!file_exists($caminho_download))
    die('Arquivo não existe!');
    header('Content-type: octet/stream');
    // Indica o nome do arquivo como será "baixado". Você pode modificar e colocar qualquer nome de arquivo
    header('Content-disposition: attachment; filename="'.$arquivo.'";'); 
    // Indica ao navegador qual é o tamanho do arquivo
    header('Content-Length: '.filesize($caminho_download));
    // Busca todo o arquivo e joga o seu conteúdo para que possa ser baixado
    readfile($caminho_download);
    exit;*/


    
    //$url="../../../Users/raisl/Downloads/Documents/10.pdf";


    if (file_exists($url)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($url).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($url));
        readfile($url);
        exit;
    }else{
        echo "Arquivo Não existe";
    }
?>


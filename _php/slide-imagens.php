<?php

require_once 'connect.php';

$sql = "SELECT `nome`, `imgHighlight`, `sinopse` FROM `livro` WHERE `imgHighlight` != ''";
$query = $conn->query($sql);

if ( $query->num_rows > 0 ) {

    $count = 0;
    $class = null;
    $index = 0;

    while ( ($result = $query->fetch_assoc()) && ($index < $query->num_rows) ) {

        if( $count==0 ){
            $class = 'first slide';
            $count++;
        } else
            $class = 'slide';

        if (strlen($result['sinopse']) > 230)
            $cortaTexto = substr($result['sinopse'], 0, 230) . '... <a href="#" style="font-weight: 400;">leia mais.</a>';
        else
            $cortaTexto = $result['sinopse'];

        echo '
            <div class="'.$class.'">
                <div class="highlight-text">
                    <h2>'.$result['nome'].'</h2>
                    <div class="highlight-text-desc">
                        <p>'.$cortaTexto.'</p>
                    </div>
                </div>
                <div class="highlight-image">
                    <img src="data:image/jpeg;base64,'.base64_encode( $result['imgHighlight'] ).'"/>
                </div>
            </div>

            ';

        $index++;
    }

}

?>
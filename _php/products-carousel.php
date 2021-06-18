<?php

require_once 'connect.php';

$sql = "SELECT * FROM `livro`";
$query = $conn->query($sql);

if ( $query->num_rows > 0 ) {

    $index = 0;

    while ( ($result = $query->fetch_assoc()) && ($index < $query->num_rows) ) {
        echo '
            <div class="product">
                <img src="data:image/jpeg;base64,'.base64_encode( $result['capa'] ).'" class="case"/>
                <div class="product-info">
                    <div class="title"><a href="#">'.$result['nome'].'</a></div>
                    <div class="author">'.$result['autor'].'</div>
                    <div class="price">R$ '.number_format((float)$result['preço'], 2, ',', '').'</div>
                </div>
            </div>

            ';

        $index++;
    }

}

?>
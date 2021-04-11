<?php
    $url = file_get_contents('https://www.amazon.es/Toshiba-Canvio-Basics-Port%C3%A1til-Pulgadas/dp/B07994QL95/ref=sr_1_2?brr=1&dchild=1&qid=1618096242&rd=1&s=computers&sr=1-2');

    $dom = new DOMDocument();
    @$dom->loadHTML($url);
    $divs = $dom->getElementsByTagName( 'span' );
 
foreach( $divs as $div ){
    if( $div->getAttribute( 'class' ) === 'a-size-large product-title-word-break' ){
        $title = $div->nodeValue;
    }
    if( $div->getAttribute( 'class' ) === 'a-size-medium a-color-price priceBlockBuyingPriceString' ){
            $price = $div->nodeValue;
            break;
        }
    }

    echo 'Title: '. $title;
    echo '<br>';
    echo 'Price:' . $price;
?>

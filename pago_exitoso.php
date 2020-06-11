<h1>Pago exitoso</h1>

<!--

https://www.tusitio.com/success.php?collection_id=[PAYMENT_ID]&collection_status=approved&external_reference=[EXTERNAL_REFERENCE]&payment_type=credit_card&preference_id=[PREFERENCE_ID]&site_id=[SITE_ID]&processing_mode=aggregator&merchant_account_id=null

https://jcvels-mp-commerce-php.herokuapp.com/pago_exitoso.php?collection_id=7061124949&collection_status=approved&external_reference=jcvels@uvcoding.com.ar&payment_type=credit_card&merchant_order_id=1525562813&preference_id=469485398-4984e333-b55f-4b3c-a245-7b696971fae2&site_id=MLA&processing_mode=aggregator&merchant_account_id=null


-->

<p>
    <?php
        echo "PAYMENT_ID = " . $_GET['collection_id'] . "<br>";
        echo "STATUS = " . $_GET['collection_status'] . "<br>";
        echo "EXTERNAL_REFERENCE = " . $_GET['external_reference'] . "<br>";
        echo "PAYMENT_TYPE = " . $_GET['payment_type'] . "<br>";
        echo "PREFERENCE_ID = " . $_GET['preference_id'] . "<br>";
        echo "SITE_ID = " . $_GET['site_id'] . "<br>";
        echo "PROCESSING_MODE = " . $_GET['processing_mode'] . "<br>";
        echo "MERCHANT-ACCOUNT_ID = " . $_GET['merchant_account_id'] . "<br>";
    ?>
</p>
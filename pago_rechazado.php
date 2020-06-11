<h1>Pago exitoso</h1>

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
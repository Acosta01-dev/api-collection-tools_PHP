<?php

// API URL for retrieving cryptocurrency prices
$url = "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,monero&vs_currencies=usd";

// Fetching data from the API
$response = @file_get_contents($url);

if ($response === false) {
    die('Error fetching data from the API');
}

$data = json_decode($response, true);

if ($data === null) {
    die('Error decoding JSON');
}

// Extracting individual cryptocurrency prices
$bitcoinPrice = $data['bitcoin']['usd'];
//$ethereumPrice = $data['ethereum']['usd'];
$moneroPrice = $data['monero']['usd'];

?>

<div class="card m-3 d-flex justify-content-center " style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
        <!-- Bitcoin logo image -->
        <img src="https://logodownload.org/wp-content/uploads/2017/06/bitcoin-logo-1-1.png"  class="img-fluid rounded-start " style="margin:1rem; width:6rem; height:6rem;" alt=".">
        </div>
        <div class="col-md-8">
            <div class="card-body">

               <!-- Card title -->
                <h5 class="card-title">Bitcoin</h5>

                 <!-- Card content -->
                <p class="card-text">
                    <?php echo "Current Bitcoin price: "; ?>
                    
                    <!-- Display Bitcoin price with a badge -->
                    <span class='badge text-bg-success '> U$D
                        <?php echo $bitcoinPrice ?>
                    </span>
                </p>
                <p class="card-text"><small class="text-muted"></small></p>
            </div>
        </div>
    </div>
</div>

<div class="card m-3 d-flex justify-content-center " style="max-width: 540px;">
    <div class="row g-0"> 
        <!-- Monero logo image -->
        <div class="col-md-4">
            <img src="https://cryptologos.cc/logos/monero-xmr-logo.png" class="img-fluid rounded-start " style="margin:1rem; width:6rem; height:6rem;" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <!-- Card title -->
                <h5 class="card-title">Monero</h5>
                <!-- Card content -->
                <p class="card-text">
                    <?php echo "Current Monero price: "; ?>
                    <!-- Display Monero price with a badge -->
                    <span class='badge text-bg-success '> U$D
                        <?php echo $moneroPrice ?>
                    </span>
                </p>
                <p class="card-text"><small class="text-muted"></small></p>
            </div>
        </div>
    </div>
</div>

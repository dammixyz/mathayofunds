<script>
    $(window).on('load', function () {
        $('div#themes_panel').hide();
    })
    //If you want to copyText from Element
    function copyBitcoinBlockchain(elementID) {
        let element = document.getElementById(elementID); //select the element
        let elementText = element.textContent; //get the text content from the element
        copyText(elementText); //use the copyText function below
        toastr.success('wallet address copied successfully');
        //toastr.options.preventDuplicates = true;
        toastr.options.progressBar = true;
    }
    //If you want to copyText from Element
    function copyBitcoinPaxful(elementID) {
        let element = document.getElementById(elementID); //select the element
        let elementText = element.textContent; //get the text content from the element
        copyText(elementText); //use the copyText function below
        toastr.success('wallet address copied successfully');
        //toastr.options.preventDuplicates = true;
        toastr.options.progressBar = true;
    }
    //If you want to copyText from Element
    function copyEthereumBlockchain(elementID) {
        let element = document.getElementById(elementID); //select the element
        let elementText = element.textContent; //get the text content from the element
        copyText(elementText); //use the copyText function below
        toastr.success('wallet address copied successfully');
        //toastr.options.preventDuplicates = true;
        toastr.options.progressBar = true;
    }
    //If you only want to put some Text in the Clipboard just use this function
    // and pass the string to copied as the argument.
    function copyText(text) {
        navigator.clipboard.writeText(text);
    }
    $(document).ready(function () {
        $('#bankPayment').hide();
        $('#walletPayment').hide();
    })

    $('#walletBank').change(function(){
        //alert();
        if ($(this).val() === "wallet"){
            $('#bankPayment').hide();
            $('#walletPayment').show();
        }
        else if ($(this).val() === "bank"){
            $('#walletPayment').hide();
            $('#bankPayment').show();
        }
    })

    //First upload
    var firstUpload = new FileUploadWithPreview('bitcoinProofSell')
/*
    var firstUpload = new FileUploadWithPreview('bitcoinProofBuy')
*/
    $(document).ready(function () {
        $('#image-preview-placeholder-bitcoin-sell').hide()
        $('#close_image_preview-bitcoin-sell').hide()
        $('#image-preview-placeholder-bitcoin-buy').hide()
        $('#close_image_preview-bitcoin-buy').hide()
        $('#bitcoin-trade-sell').hide()
        $('#ethereum-trade-sell').hide()
        $('#bitcoin-trade-buy').hide()
        $('#ethereum-trade-buy').hide()
        $('#bitcoin-platform').hide()
        $('#ethereum-platform').hide()
        $('#buy-bitcoin-platform').hide()
        $('#buy-ethereum-platform').hide()
    })
    /*Sell Bitcoin*/
    $('#payment_proof-bitcoin-sell').change(function () {
        $('#image-preview-placeholder-bitcoin-sell').show()
        $('#close_image_preview-bitcoin-sell').show()
    })

    $('#close_image_preview-bitcoin-sell').click(function () {
        $('#image-preview-placeholder-bitcoin-sell').hide()
        $('#close_image_preview-bitcoin-sell').hide()
    })
    $("#coin_type_sell").change(function() {
        var id = $(this).find('option:selected').attr('id')
        if (id === 'Bitcoin-sell'){
            $('#bitcoin-trade-sell').show()
            $('#ethereum-trade-sell').hide()
            $('#bitcoin-platform').show()
            $('#ethereum-platform').hide()
        }
        else if (id === 'Ethereum-sell'){
            $('#ethereum-trade-sell').show()
            $('#bitcoin-trade-sell').hide()
            $('#bitcoin-platform').hide()
            $('#ethereum-platform').show()
        }
    });

    $("#coins_type_buy").change(function() {
        var id = $(this).find('option:selected').attr('id')
        if (id === 'Bitcoin-buy'){
            $('#bitcoin-trade-buy').show()
            $('#ethereum-trade-buy').hide()
            $('#buy-bitcoin-platform').show()
            $('#buy-ethereum-platform').hide()
        }
        else if (id === 'Ethereum-buy'){
            $('#bitcoin-trade-buy').hide()
            $('#ethereum-trade-buy').show()
            $('#buy-bitcoin-platform').hide()
            $('#buy-ethereum-platform').show()
        }
    });
    /*Buy Bitcoin*/
    $('#payment_proof-bitcoin-buy').change(function () {
        $('#image-preview-placeholder-bitcoin-buy').show()
        $('#close_image_preview-bitcoin-buy').show()
    })
    $('#close_image_preview-bitcoin-buy').click(function () {
        $('#image-preview-placeholder-bitcoin-buy').hide()
        $('#close_image_preview-bitcoin-buy').hide()
    })
    $("#coin_type_buy").change(function() {
        var id = $(this).find('option:selected').attr('id')
        if (id === 'bitcoin-buy'){
            $('#bitcoin-trade-buy').show()
            $('#ethereum-trade-buy').hide()
        }
        else if (id === 'ethereum-buy'){
            $('#ethereum-trade-buy').show()
            $('#bitcoin-trade-buy').hide()
        }
    });

    $(window).on('load', function () {
        $('div#themes_panel').hide();
    })

</script>

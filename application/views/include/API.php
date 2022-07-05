
<div class=" container">
    <div class=" row">
        <div class=" col-sm-2"></div>
        <div class=" col-sm-8">
            <?php echo form_open('#') ?>
            <div class=" form_group">
                <label>Click on the link </label>
                <script src="https://js.paystack.co/v1/inline.js"></script>
                <button class=" btn btn-success" type="button" onclick="payWithPaystack()"> Pay </button>
            </div>
            
        </form>
        </div>
    </div>
</div>

<script>
function payWithPaystack(){
    
    var handler = PaystackPop.setup({
      key: 'paste your key here',
      email: 'linux@gmail.com',
      amount: 10000,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }

</script>
<div id="generate-mmp-cert" class="modal modal-fixed-footer">
	<div style="border-bottom: 3px solid #F44336; margin-top: 15px; z-index: 100000;">
      <h4 class="center">Condemnation Slip</h4>
    </div>
    <div class="modal-content">
      <div class="row">
        <div id="generate-arv-form" class="col s12">
          <form class="col s12">
            <div class="input-field col m6">
              <input name="Dealer_Name" id="Dealer_Name" type="text" class="validate">
              <label for="Dealer_Name">Name of Pet</label>
            </div>
            <div class="input-field col m6">
              <input name="Meat_Destination" id="Meat_Destination" type="number" class="validate">
              <label for="Meat_Destination">ID No.</label>
            </div>
            <div class="input-field col m6">
              <input name="Date_Issue" id="Date_Issue" type="number" class="validate">
              <label for="Date_Issue">ID No.</label>
            </div>
            <div class="input-field col m6">
              <input name="Time_Issue" id="Time_Issue" type="number" class="validate">
              <label for="Time_Issue">ID No.</label>
            </div>
            <div class="input-field col m6">
              <input name="Shipment_Date" id="Shipment_Date" type="number" class="validate">
              <label for="Shipment_Date">ID No.</label>
            </div>
            <div class="input-field col m6">
              <input name="Transport_Type" id="Transport_Type" type="number" class="validate">
              <label for="Transport_Type">ID No.</label>
            </div>
            <div class="input-field col m6">
              <input name="Plate_No" id="Plate_No" type="number" class="validate">
              <label for="Plate_No">ID No.</label>
            </div>

            <div class="input-field col m6">
              <select name="Meat_Type">
                <option value="" disabled selected>Choose</option>
                <option value="beef">Beef</option>
                <option value="pork">Pork</option>
              </select>
              <label>Meat Types</label>         
            </div>
            <div class="input-field col m6">
              <input name="Quantity" id="Quantity" type="text" class="validate">
              <label for="Quantity">Quantity</label>
            </div>
            <div class="input-field col m6">
              <input name="Weight" id="Weight" type="text" class="validate">
              <label for="Weight">Weight</label>
            </div>
            <div class="input-field col m6">
              <input name="Batch_No" id="Batch_No" type="text" class="validate">
              <label for="Batch_No">Batch_No</label>
            </div>
            <div class="input-field col m6">
              <input name="Expiry_Date" id="Expiry_Date" type="text" class="validate">
              <label for="Expiry_Date">Expiry_Date</label>
            </div>

            <div class="modal-footer">
              <a href="fillup-dogreg.php" class="waves-effect waves-light btn red" id="view">Generate</a>
            </div>
          </form>
       </div>

      </div>
    </div>
  </div>  
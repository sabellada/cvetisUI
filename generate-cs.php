<div id="generate-cs" class="modal modal-fixed-footer">
	<div style="border-bottom: 3px solid #F44336; margin-top: 15px; z-index: 100000;">
      <h4 class="center">Condemnation Slip</h4>
    </div>
    <div class="modal-content">
      <div class="row">
        <div id="generate-arv-form" class="col s12">
          <form class="col s12">
            <div class="input-field col m6">
              <input name="ME_Name" id="ME_Name" type="text" class="validate">
              <label for="ME_Name">Name of Meat Establishment</label>
            </div>
            <div class="input-field col m6">
              <input name="Address" id="Address" type="number" class="validate">
              <label for="Address">Address</label>
            </div>
            <div class="input-field col m6">
              <input name="Date_Issued" id="Date_Issued" type="number" class="validate">
              <label for="Date_Issued">Date</label>
            </div>
            <div class="input-field col m6">
              <input name="Time_Issued" id="Time_Issued" type="number" class="validate">
              <label for="Time_Issued">Time</label>
            </div>
            <div class="input-field col m6">
                <select>
                  <option value="" disabled selected>Choose</option>
                  <option value="beef">Beef</option>
                  <option value="pork">Pork</option>
                </select>
                <label>Food Animal/ Meat/ Meat Products</label>         
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
              <input name="Condemn_Cause" id="Condemn_Cause" type="text" class="validate">
              <label for="Condemn_Cause">Cause of Condemnation</label>
            </div>
            <div class="modal-footer">
              <a href="fillup-dogreg.php" class="waves-effect waves-light btn red" id="view">Generate</a>
            </div>
          </form>
       </div>

      </div>
    </div>
  </div>  
<div id="generate-pslr" class="modal modal-fixed-footer">
	<div style="border-bottom: 3px solid #F44336; margin-top: 15px; z-index: 100000;">
      <h4 class="center">Condemnation Slip</h4>
    </div>
    <div class="modal-content">
      <div class="row">
        <div id="generate-arv-form" class="col s12">
          <form class="col s12">
            <div class="input-field col m6">
              <input name="Dealer_Name" id="Dealer_Name" type="text" class="validate">
              <label for="Dealer_Name">Dealer Name</label>
            </div>
            <div class="input-field col m6">
              <input name="Transfer" id="Transfer" type="number" class="validate">
              <label for="Transfer">Transfer to</label>
            </div>
            <div class="input-field col m6">
              <input name="Date" id="Date" type="number" class="validate">
              <label for="Date">Date</label>
            </div>
            <div class="input-field col m6">
              <input name="Address" id="Address" type="number" class="validate">
              <label for="Address">Address</label>
            </div>
            <div class="input-field col m6">
              <input name="Origin" id="Origin" type="number" class="validate">
              <label for="Origin">Point of Origin</label>
            </div>
            <div class="input-field col m6">
              <select name="Species_Type">
                <option value="" disabled selected>Choose</option>
                <option value="beef">Beef</option>
                <option value="pork">Pork</option>
              </select>
              <label>Species</label>         
            </div>
            <div class="input-field col m6">
              <select name="Species_Type">
                <option value="" disabled selected>Choose</option>
                <option value="beef">Beef</option>
                <option value="pork">Pork</option>
              </select>
              <label>Gender</label>         
            </div>
            <div class="input-field col m6">
              <input name="Age" id="Age" type="text" class="validate">
              <label for="Age">Age</label>
            </div>
            <div class="input-field col m6">
              Documents Presented
              <input type="checkbox" name="Shipping_Docu" value="COLC" />
              <label for="COLC">COLC</label>

              <input type="checkbox" name="Shipping_Docu" value="TOLC" />
              <label for="TOLC">TOLC</label>

              <input type="checkbox" name="Shipping_Docu" value="VHC" />
              <label for="VHC">VHC</label>

              <input type="checkbox" name="Shipping_Docu" value="others" />
              <label for="others">Others</label>
            </div>
            <div class="input-field col m6">
              <select name="Preg_Diagnosis">
                <option value="" disabled selected>Choose</option>
                <option value="beef">Positive</option>
                <option value="pork">Negative</option>
              </select>   
              <label>Pregnancy Diagnosis</label>
            </div>
            <div class="modal-footer">
              <a href="fillup-dogreg.php" class="waves-effect waves-light btn red" id="view">Generate</a>
            </div>
          </form>
       </div>

      </div>
    </div>
  </div>  
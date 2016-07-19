<div id="generate-arv" class="modal modal-fixed-footer">
	<div style="border-bottom: 3px solid #F44336; margin-top: 15px; z-index: 100000;">
      <h4 class="center">Anti Rabies Vaccination Certificate</h4>
    </div>
    <div class="modal-content">
      <div class="row">
        <div id="generate-arv-form" class="col s12">
          <form class="col s12">
            <div class="input-field col m6">
              <!--
              <?php
                include("province.php");
              ?>
              -->
              <label>Province</label>
            </div>
            <div class="input-field col m6">
              <!--
              <?php
                include("municipality.php");
              ?>
              -->
              <label>Province</label>
            </div>
            <div class="input-field col m6">
              <input name="Pet_Name" id="Pet_Name" type="text" class="validate">
              <label for="Pet_Name">Name of Pet</label>
            </div>
            <div class="input-field col m6">
              <input id="last_name" type="number" class="validate">
              <label for="last_name">ID No.</label>
            </div>
            <div class="input-field col m6">
              <select name="Pet_Species">
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Dog</option>
                <option value="2">Cat</option>
              </select>            
          	</div>
            <div class="input-field col m6">
              <select name="Pet_Breed">
                <option value="" disabled selected>Choose</option>
                <option value="Affenpinscher">Affenpinscher</option>
                <option value="Afghan-Hound" >Afghan Hound</option>
                <option value="Airedale-Terrier" >Airedale Terrier</option>
                <option value="Akita" >Akita</option>
                <option value="Alaskan-Malamute" >Alaskan Malamute</option>
                <option value="American-Cocker-Spaniel" >American Cocker Spaniel</option>
                <option value="American-Eskimo-Dog-(Miniature)" >American Eskimo Dog (Miniature)</option>
                <option value="American-Eskimo-Dog-(Standard)" >American Eskimo Dog (Standard)</option>
                <option value="American-Eskimo-Dog-(Toy)" >American Eskimo Dog (Toy)</option>
                <option value="American-Foxhound" >American Foxhound</option>
                <option value="American-Staffordshire-Terrier" >American Staffordshire Terrier</option>
                <option value="American-Water-Spaniel" >American Water Spaniel</option>
                <option value="Anatolian-Shepherd" >Anatolian Shepherd</option>
                <option value="Australian-Cattle-Dog" >Australian Cattle Dog</option>
                <option value="Australian-Shepherd" >Australian Shepherd</option>
                <option value="Australian-Terrier" >Australian Terrier</option>
                <option value="Basenji" >Basenji</option>
                <option value="Basset-Hound" >Basset Hound</option>
                <option value="Beagle" >Beagle</option>
                <option value="Bearded-Collie" >Bearded Collie</option>
                <option value="Bedlington-Terrier" >Bedlington Terrier</option>
                <option value="Belgian-Malinois" >Belgian Malinois</option>
                <option value="Belgian-Sheepdog" >Belgian Sheepdog</option>
                <option value="Belgian-Tervuren" >Belgian Tervuren</option>
                <option value="Bernese-Mountain-Dog" >Bernese Mountain Dog</option>
                <option value="Bichon-Frise" >Bichon Frise</option>
                <option value="Black-and-Tan-Coonhound" >Black and Tan Coonhound</option>
                <option value="Bloodhound" >Bloodhound</option>
                <option value="Border-Collie" >Border Collie</option>
                <option value="Border-Terrier" >Border Terrier</option>
                <option value="Borzoi" >Borzoi</option>
                <option value="Boston-Terrier" >Boston Terrier</option>
                <option value="Bouvier-des-Flandres" >Bouvier des Flandres</option>
                <option value="Boxer" >Boxer</option>
                <option value="Briard" >Briard</option>
                <option value="Brittany" >Brittany</option>
                <option value="Brussels-Griffon" >Brussels Griffon</option>
                <option value="Bull-Terrier" >Bull Terrier</option>
                <option value="Bulldog" >Bulldog</option>
                <option value="Bullmastiff" >Bullmastiff</option>
                <option value="Cairn-Terrier" >Cairn Terrier</option>
                <option value="Canaan-Dog" >Canaan Dog</option>
                <option value="Cardigan-Welsh-Corgi" >Cardigan Welsh Corgi</option>
                <option value="Cavalier-King-Charles-Spaniel" >Cavalier King Charles Spaniel</option>
                <option value="Chesapeake-Bay-Retriever" >Chesapeake Bay Retriever</option>
                <option value="Chihuahua" >Chihuahua</option>
                <option value="Chinese-Crested-Dog" >Chinese Crested Dog</option>
                <option value="Chinese-Shar-Pei" >Chinese Shar-Pei</option>
                <option value="Chow-Chow" >Chow Chow</option>
                <option value="Clumber-Spaniel" >Clumber Spaniel</option>
                <option value="Collie" >Collie</option>
                <option value="Curly-Coated-Retriever" >Curly-Coated Retriever</option>
                <option value="Dachshund-(Standard)" >Dachshund (Standard)</option>
                <option value="Dachsund-(Miniature)" >Dachsund (Miniature)</option>
                <option value="Dalmatian" >Dalmatian</option>
                <option value="Dandie-Dinmont-Terrier" >Dandie Dinmont Terrier</option>
                <option value="Doberman-Pinscher" >Doberman Pinscher</option>
                <option value="English-Cocker-Spaniel" >English Cocker Spaniel</option>
                <option value="English-Foxhound-" >English Foxhound </option>
                <option value="English-Setter" >English Setter</option>
                <option value="English-Springer-Spaniel" >English Springer Spaniel</option>
                <option value="English-Toy-Spaniel" >English Toy Spaniel</option>
                <option value="Field-Spaniel" >Field Spaniel</option>
                <option value="Finnish-Spitz" >Finnish Spitz</option>
                <option value="Flat-Coated-Retriever" >Flat-Coated Retriever</option>
                <option value="French-Bulldog" >French Bulldog</option>
                <option value="German-Shepherd-Dog" >German Shepherd Dog</option>
                <option value="German-Shorthaired-Pointer" >German Shorthaired Pointer</option>
                <option value="German-Wirehaired-Pointer" >German Wirehaired Pointer</option>
                <option value="Giant-Schnauzer" >Giant Schnauzer</option>
                <option value="Golden-Retriever" >Golden Retriever</option>
                <option value="Gordon-Setter" >Gordon Setter</option>
                <option value="Great-Dane" >Great Dane</option>
                <option value="Great-Pyrenees" >Great Pyrenees</option>
                <option value="Greater-Swiss-Mountain-Dog" >Greater Swiss Mountain Dog</option>
                <option value="Greyhound" >Greyhound</option>
                <option value="Harrier" >Harrier</option>
                <option value="Havanese" >Havanese</option>
                <option value="Ibizan-Hound" >Ibizan Hound</option>
                <option value="Irish-Setter" >Irish Setter</option>
                <option value="Irish-Terrier" >Irish Terrier</option>
                <option value="Irish-Water-Spaniel" >Irish Water Spaniel</option>
                <option value="Irish-Wolfhound" >Irish Wolfhound</option>
                <option value="Italian-Greyhound" >Italian Greyhound</option>
                <option value="Jack-Russell-Terrier" >Jack Russell Terrier</option>
                <option value="Japanese-Chin" >Japanese Chin</option>
                <option value="Keeshond" >Keeshond</option>
                <option value="Kerry-Blue-Terrier" >Kerry Blue Terrier</option>
                <option value="Komondor" >Komondor</option>
                <option value="Kuvasz" >Kuvasz</option>
                <option value="Labrador-Retriever" >Labrador Retriever</option>
                <option value="Lakeland-Terrier" >Lakeland Terrier</option>
                <option value="Lhasa-Apso" >Lhasa Apso</option>
                <option value="Lowchen" >Lowchen</option>
                <option value="Maltese" >Maltese</option>
                <option value="Manchester-Terrier-(Standard)" >Manchester Terrier (Standard)</option>
                <option value="Manchester-Terrier-(Toy)" >Manchester Terrier (Toy)</option>
                <option value="Mastiff" >Mastiff</option>
                <option value="Miniature-Bull-Terrier" >Miniature Bull Terrier</option>
                <option value="Miniature-Pinscher" >Miniature Pinscher</option>
                <option value="Miniature-Schnauzer" >Miniature Schnauzer</option>
                <option value="Newfoundland" >Newfoundland</option>
                <option value="Norfolk-Terrier" >Norfolk Terrier</option>
                <option value="Norwegian-Elkhound" >Norwegian Elkhound</option>
                <option value="Norwich-Terrier" >Norwich Terrier</option>
                <option value="Old-English-Sheepdog" >Old English Sheepdog</option>
                <option value="Otterhound" >Otterhound</option>
                <option value="Papillon" >Papillon</option>
                <option value="Pekingese" >Pekingese</option>
                <option value="Pembroke-Welsh-Corgi" >Pembroke Welsh Corgi</option>
                <option value="Petit-Basset-Griffon-Vendeen" >Petit Basset Griffon Vendeen</option>
                <option value="Pharaoh-Hound" >Pharaoh Hound</option>
                <option value="Pointer" >Pointer</option>
                <option value="Pomeranian" >Pomeranian</option>
                <option value="Poodle-(Miniature)" >Poodle (Miniature)</option>
                <option value="Poodle-(Standard)" >Poodle (Standard)</option>
                <option value="Poodle-(Toy)" >Poodle (Toy)</option>
                <option value="Portuguese-Water-Dog" >Portuguese Water Dog</option>
                <option value="Pug" >Pug</option>
                <option value="Puli" >Puli</option>
                <option value="Rhodesian-Ridgeback" >Rhodesian Ridgeback</option>
                <option value="Rottweiler" >Rottweiler</option>
                <option value="Saint-Bernard" >Saint Bernard</option>
                <option value="Saluki-(or-Gazelle-Hound)" >Saluki (or Gazelle Hound)</option>
                <option value="Samoyed" >Samoyed</option>
                <option value="Schipperke" >Schipperke</option>
                <option value="Scottish-Deerhound" >Scottish Deerhound</option>
                <option value="Scottish-Terrier" >Scottish Terrier</option>
                <option value="Sealyham-Terrier" >Sealyham Terrier</option>
                <option value="Shetland-Sheepdog" >Shetland Sheepdog</option>
                <option value="Shiba-Inu" >Shiba Inu</option>
                <option value="Shih-Tzu" >Shih Tzu</option>
                <option value="Siberian-Husky" >Siberian Husky</option>
                <option value="Silky-Terrier" >Silky Terrier</option>
                <option value="Skye-Terrier" >Skye Terrier</option>
                <option value="Smooth-Fox-Terrier" >Smooth Fox Terrier</option>
                <option value="Soft-Coated-Wheaten-Terrier" >Soft Coated Wheaten Terrier</option>
                <option value="Spinone-Italiano" >Spinone Italiano</option>
                <option value="Staffordshire-Bull-Terrier" >Staffordshire Bull Terrier</option>
                <option value="Standard-Schnauzer" >Standard Schnauzer</option>
                <option value="Sussex-Spaniel" >Sussex Spaniel</option>
                <option value="Tibetan-Spaniel" >Tibetan Spaniel</option>
                <option value="Tibetan-Terrier" >Tibetan Terrier</option>
                <option value="Vizsla" >Vizsla</option>
                <option value="Weimaraner" >Weimaraner</option>
                <option value="Welsh-Springer-Spaniel" >Welsh Springer Spaniel</option>
                <option value="Welsh-Terrier" >Welsh Terrier</option>
                <option value="West-Highland-White-Terrier" >West Highland White Terrier</option>
                <option value="Whippet" >Whippet</option>
                <option value="Wire-Fox-Terrier" >Wire Fox Terrier</option>
                <option value="Wirehaired-Pointing-Griffon" >Wirehaired Pointing Griffon</option>
                <option value="Yorkshire-Terrier" >Yorkshire Terrier</option>
              </select>
            </div>
            <div class="input-field col m4">
              <input name="Pet_Birth" id="Pet_Birth" type="date" class="datepicker">
              <label for="Pet_Birth">Birthdate</label>
            </div>
            <div class="input-field col m4">
              <input name="Pet_Age" id="Pet_Age" type="number" class="validate">
              <label for="Pet_Age">Age</label>
            </div>
            <div class="input-field col m4">
              <select name="Pet_Gender">
              	<option value="" selected disabled>Choose</option>
              	<option value="male">Male</option>
              	<option value="female">Female</option>
              </select>
            </div>
            <div class="input-field col m6">
              <input name="Pet_Mark" id="Pet_Mark" type="text" class="validate">
              <label for="Pet_Mark">Markings</label>
            </div>
            <div class="input-field col m6">
              <input name="Contact_No" id="Contact_No" type="number" class="validate">
              <label for="Contact_No">Telephone Number</label>
            </div>
            <div class="input-field col m6">
              <input name="Owner_Name" id="Owner_Name" type="text" class="validate">
              <label for="Owner_Name">Name of Owner</label>
            </div>
            <div class="input-field col m6">
              <input name="Address" id="Address" type="text" class="validate">
              <label for="Address">Address</label>
            </div>
            <div class="modal-footer">
              <a href="fillup-dogreg.php" class="waves-effect waves-light btn red" id="view">Generate</a>
            </div>
          </form>
       </div>

      </div>
    </div>
  </div>  
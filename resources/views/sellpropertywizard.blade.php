<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo asset('css/stylesheet.css')?>" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <section>
            <div class="wizard">
                <div class="wizard-inner">
                    <div>
                        <span class="setup-position-one guide-heading-text">Property Type</span>
                        <span class="setup-position-two guide-heading-text">Location</span>
                        <span class="setup-position-three guide-heading-text">Property Detail</span>
                        <span class="setup-position-four guide-heading-text">Feature</span>
                        <span class="setup-position-five guide-heading-text">Add Image</span>
                        <span class="setup-position-six guide-heading-text">Contact Details</span>
                    </div>
                    <div class="inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="">1</i>
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="">2</i>
                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="">3</i>
                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                            <span class="round-tab">
                                <i class="">4</i>
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="Step 5">
                            <span class="round-tab">
                                <i class="">5</i>
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Step 6">
                            <span class="round-tab">
                                <i class="">6</i>
                            </span>
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>

                <form role="form">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <h3>Step 1</h3><br>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
                                    <label class="custom-control-label" for="defaultGroupExample1">Option 1</label>
                                </div>
                                <div><b>Purpose</b><br>
                                    <div class="custom-control custom-radio">
                                    <input class="mt-2 custom-control-input" type="radio" id="1" name="purpose" value="forSale"
                                           onclick="showBedroomAndBathroomFields(value)"> For Sale
                                    </div>
                                    <input class="mt-2 ml-1" type="radio" id="2" name="purpose" value="forRent"
                                           onclick="showBedroomAndBathroomFields(value)"> Rent<br>
                                </div>
                            </div>
                            <div class="form-group">
                                <div><b>Property Type</b><br>
                                    <input class="mt-2" type="radio" id="1" name="propertyType" value="home"
                                           onclick="showPropertyType(value)"> Home
                                    <input class="mt-2 ml-3" type="radio" id="2" name="propertyType" value="plots"
                                           onclick="showPropertyType(value)"> Plots
                                    <input class="mt-2 ml-3" type="radio" id="3" name="propertyType" value="commercial"
                                           onclick="showPropertyType(value)"> Commercial<br>
                                </div>
                                <div class="ml-5 mt-2" id="propertyTypeHome" style="display: none">
                                    <div class="row">
                                        <input class="mt-2" type="radio" id="1" name="propertyTypeHome" value="house"> House
                                        <input class="mt-2 ml-5" type="radio" id="2" name="propertyTypeHome" value="flat"> Flat
                                        <input class="mt-2 ml-5" type="radio" id="3" name="propertyTypeHome" value="upperPortion"> Upper
                                        Portion<br>
                                    </div>
                                    <div class="row">
                                        <input class="mt-2" type="radio" id="4" name="propertyTypeHome" value="lowerPortion"> Lower portion
                                        <input class="mt-2 ml-3" type="radio" id="5" name="propertyTypeHome" value="farmHouse"> Farm House
                                        <input class="mt-2 ml-3" type="radio" id="6" name="propertyTypeHome" value="room"> Room<br>
                                    </div>
                                    <div class="row">
                                        <input class="mt-2" type="radio" id="7" name="propertyTypeHome" value="pentHouse"> Penthouse
                                    </div>
                                </div>
                                <div class="ml-5 mt-2" id="propertyTypePlots" style="display: none">
                                    <div class="row">
                                        <input class="mt-2" type="radio" id="1" name="propertyTypePlots" value="residentialPlot">
                                        Residential Plot
                                        <input class="mt-2 ml-3" type="radio" id="2" name="propertyTypePlots" value="commercialPlot">
                                        Commercial Plot
                                        <input class="mt-2 ml-3" type="radio" id="3" name="propertyTypePlots" value="agriculturalLand">
                                        Agricultural Land<br>
                                    </div>
                                    <div class="row">
                                        <input class="mt-2" type="radio" id="4" name="propertyTypePlots" value="industrialLand"> Industrial
                                        Land
                                        <input class="mt-2 ml-3" type="radio" id="5" name="propertyTypePlots" value="plotFile"> Plot File
                                        <input class="mt-2 ml-5" type="radio" id="6" name="propertyTypePlots" value="plotForm"> Plot
                                        Form<br>
                                    </div>
                                </div>
                                <div class="ml-5 mt-2" id="propertyTypeCommercial" style="display: none">
                                    <div class="row">
                                        <input class="mt-2" type="radio" id="1" name="propertyTypeCommercial" value="office"> Office
                                        <input class="mt-2 ml-4" type="radio" id="2" name="propertyTypeCommercial" value="shop"> Shop
                                        <input class="mt-2 ml-5" type="radio" id="3" name="propertyTypeCommercial" value="wareHouse">
                                        Warehouse<br>
                                    </div>
                                    <div class="row">
                                        <input class="mt-2" type="radio" id="4" name="propertyTypeCommercial" value="factory"> Factory
                                        <input class="mt-2 ml-3" type="radio" id="5" name="propertyTypeCommercial" value="building">
                                        Building
                                        <input class="mt-2 ml-4" type="radio" id="6" name="propertyTypeCommercial" value="othr"> Other<br>
                                    </div>
                                    <div class="row">
                                        <input class="mt-2" type="radio" id="7" name="propertyTypeHome" value="pentHouse"> Penthouse
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-primary next-step" >Next</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2">
                            <h3>Step 2</h3>
                            <div class="form-group">
                                <label>City :</label>
                                <select type="text" class="form-control w-25" id="city" name="city">
                                    <option value="">--Please Select City--</option>
                                    <option value="Islamabad">Islamabad</option>
                                    <option value="" disabled>Punjab Cities</option>
                                    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                    <option value="Ahmadpur East">Ahmadpur East</option>
                                    <option value="Ali Khan Abad">Ali Khan Abad</option>
                                    <option value="Alipur">Alipur</option>
                                    <option value="Arifwala">Arifwala</option>
                                    <option value="Attock">Attock</option>
                                    <option value="Bhera">Bhera</option>
                                    <option value="Bhalwal">Bhalwal</option>
                                    <option value="Bahawalnagar">Bahawalnagar</option>
                                    <option value="Bahawalpur">Bahawalpur</option>
                                    <option value="Bhakkar">Bhakkar</option>
                                    <option value="Burewala">Burewala</option>
                                    <option value="Chillianwala">Chillianwala</option>
                                    <option value="Chakwal">Chakwal</option>
                                    <option value="Chichawatni">Chichawatni</option>
                                    <option value="Chiniot">Chiniot</option>
                                    <option value="Chishtian">Chishtian</option>
                                    <option value="Daska">Daska</option>
                                    <option value="Darya Khan">Darya Khan</option>
                                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                    <option value="Dhaular">Dhaular</option>
                                    <option value="Dina">Dina</option>
                                    <option value="Dinga">Dinga</option>
                                    <option value="Dipalpur">Dipalpur</option>
                                    <option value="Faisalabad">Faisalabad</option>
                                    <option value="Fateh Jhang">Fateh Jang</option>
                                    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                    <option value="Gojra">Gojra</option>
                                    <option value="Gujranwala">Gujranwala</option>
                                    <option value="Gujrat">Gujrat</option>
                                    <option value="Gujar Khan">Gujar Khan</option>
                                    <option value="Hafizabad">Hafizabad</option>
                                    <option value="Haroonabad">Haroonabad</option>
                                    <option value="Hasilpur">Hasilpur</option>
                                    <option value="Haveli">Haveli</option>
                                    <option value="Lakha">Lakha</option>
                                    <option value="Jalalpur">Jalalpur</option>
                                    <option value="Jattan">Jattan</option>
                                    <option value="Jampur">Jampur</option>
                                    <option value="Jaranwala">Jaranwala</option>
                                    <option value="Jhang">Jhang</option>
                                    <option value="Jhelum">Jhelum</option>
                                    <option value="Kalabagh">Kalabagh</option>
                                    <option value="Karor Lal Esan">Karor Lal Esan</option>
                                    <option value="Kasur">Kasur</option>
                                    <option value="Kamalia">Kamalia</option>
                                    <option value="Kamoke">Kamoke</option>
                                    <option value="Khanewal">Khanewal</option>
                                    <option value="Khanpur">Khanpur</option>
                                    <option value="Kharian">Kharian</option>
                                    <option value="Khushab">Khushab</option>
                                    <option value="Kot Adu">Kot Adu</option>
                                    <option value="Jauharabad">Jauharabad</option>
                                    <option value="Lahore">Lahore</option>
                                    <option value="Lalamusa">Lalamusa</option>
                                    <option value="Layyah">Layyah</option>
                                    <option value="Liaquat Pur">Liaquat Pur</option>
                                    <option value="Lodhran">Lodhran</option>
                                    <option value="Malakwal">Malakwal</option>
                                    <option value="Mamoori">Mamoori</option>
                                    <option value="Mailsi">Mailsi</option>
                                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                    <option value="mian Channu">Mian Channu</option>
                                    <option value="Mianwali">Mianwali</option>
                                    <option value="Multan">Multan</option>
                                    <option value="Murree">Murree</option>
                                    <option value="Muridke">Muridke</option>
                                    <option value="Mianwali Bangla">Mianwali Bangla</option>
                                    <option value="Muzaffargarh">Muzaffargarh</option>
                                    <option value="Narowal">Narowal</option>
                                    <option value="Okara">Okara</option>
                                    <option value="Renala Khurd">Renala Khurd</option>
                                    <option value="Pakpattan">Pakpattan</option>
                                    <option value="Pattoki">Pattoki</option>
                                    <option value="Pir Mahal">Pir Mahal</option>
                                    <option value="Qaimpur">Qaimpur</option>
                                    <option value="Qila Didar Singh">Qila Didar Singh</option>
                                    <option value="Rabwah">Rabwah</option>
                                    <option value="Raiwind">Raiwind</option>
                                    <option value="Rajanpur">Rajanpur</option>
                                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                    <option value="Rawalpindi">Rawalpindi</option>
                                    <option value="Sadiqabad">Sadiqabad</option>
                                    <option value="Safdarabad">Safdarabad</option>
                                    <option value="Sahiwal">Sahiwal</option>
                                    <option value="Sangla Hill">Sangla Hill</option>
                                    <option value="Sarai Alamgir">Sarai Alamgir</option>
                                    <option value="Sargodha">Sargodha</option>
                                    <option value="Shakargarh">Shakargarh</option>
                                    <option value="Sheikhupura">Sheikhupura</option>
                                    <option value="Sialkot">Sialkot</option>
                                    <option value="Sohawa">Sohawa</option>
                                    <option value="Soianwala">Soianwala</option>
                                    <option value="Siranwali">Siranwali</option>
                                    <option value="Talagang">Talagang</option>
                                    <option value="Taxila">Taxila</option>
                                    <option value="Toba Tek  Singh">Toba Tek Singh</option>
                                    <option value="Vehari">Vehari</option>
                                    <option value="Wah Cantonment">Wah Cantonment</option>
                                    <option value="Wazirabad">Wazirabad</option>
                                    <option value="" disabled>Sindh Cities</option>
                                    <option value="Badin">Badin</option>
                                    <option value="Bhirkan">Bhirkan</option>
                                    <option value="Rajo Khanani">Rajo Khanani</option>
                                    <option value="Chak">Chak</option>
                                    <option value="Dadu">Dadu</option>
                                    <option value="Digri">Digri</option>
                                    <option value="Diplo">Diplo</option>
                                    <option value="Dokri">Dokri</option>
                                    <option value="Ghotki">Ghotki</option>
                                    <option value="Haala">Haala</option>
                                    <option value="Hyderabad">Hyderabad</option>
                                    <option value="Islamkot">Islamkot</option>
                                    <option value="Jacobabad">Jacobabad</option>
                                    <option value="Jamshoro">Jamshoro</option>
                                    <option value="Jungshahi">Jungshahi</option>
                                    <option value="Kandhkot">Kandhkot</option>
                                    <option value="Kandiaro">Kandiaro</option>
                                    <option value="Karachi">Karachi</option>
                                    <option value="Kashmore">Kashmore</option>
                                    <option value="Keti Bandar">Keti Bandar</option>
                                    <option value="Khairpur">Khairpur</option>
                                    <option value="Kotri">Kotri</option>
                                    <option value="Larkana">Larkana</option>
                                    <option value="Matiari">Matiari</option>
                                    <option value="Mehar">Mehar</option>
                                    <option value="Mirpur Khas">Mirpur Khas</option>
                                    <option value="Mithani">Mithani</option>
                                    <option value="Mithi">Mithi</option>
                                    <option value="Mehrabpur">Mehrabpur</option>
                                    <option value="Moro">Moro</option>
                                    <option value="Nagarparkar">Nagarparkar</option>
                                    <option value="Naudero">Naudero</option>
                                    <option value="Naushahro Feroze">Naushahro Feroze</option>
                                    <option value="Naushara">Naushara</option>
                                    <option value="Nawabshah">Nawabshah</option>
                                    <option value="Nazimabad">Nazimabad</option>
                                    <option value="Qambar">Qambar</option>
                                    <option value="Qasimabad">Qasimabad</option>
                                    <option value="Ranipur">Ranipur</option>
                                    <option value="Ratodero">Ratodero</option>
                                    <option value="Rohri">Rohri</option>
                                    <option value="Sakrand">Sakrand</option>
                                    <option value="Sanghar">Sanghar</option>
                                    <option value="Shahbandar">Shahbandar</option>
                                    <option value="Shahdadkot">Shahdadkot</option>
                                    <option value="Shahdadpur">Shahdadpur</option>
                                    <option value="Shahpur Chakar">Shahpur Chakar</option>
                                    <option value="Shikarpaur">Shikarpaur</option>
                                    <option value="Sukkur">Sukkur</option>
                                    <option value="Tangwani">Tangwani</option>
                                    <option value="Tando Adam Khan">Tando Adam Khan</option>
                                    <option value="Tando Allahyar">Tando Allahyar</option>
                                    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                    <option value="Thatta">Thatta</option>
                                    <option value="Umerkot">Umerkot</option>
                                    <option value="Warah">Warah</option>
                                    <option value="" disabled>Khyber Cities</option>
                                    <option value="Abbottabad">Abbottabad</option>
                                    <option value="Adezai">Adezai</option>
                                    <option value="Alpuri">Alpuri</option>
                                    <option value="Akora Khattak">Akora Khattak</option>
                                    <option value="Ayubia">Ayubia</option>
                                    <option value="Banda Daud Shah">Banda Daud Shah</option>
                                    <option value="Bannu">Bannu</option>
                                    <option value="Batkhela">Batkhela</option>
                                    <option value="Battagram">Battagram</option>
                                    <option value="Birote">Birote</option>
                                    <option value="Chakdara">Chakdara</option>
                                    <option value="Charsadda">Charsadda</option>
                                    <option value="Chitral">Chitral</option>
                                    <option value="Daggar">Daggar</option>
                                    <option value="Dargai">Dargai</option>
                                    <option value="Darya Khan">Darya Khan</option>
                                    <option value="dera Ismail Khan">Dera Ismail Khan</option>
                                    <option value="Doaba">Doaba</option>
                                    <option value="Dir">Dir</option>
                                    <option value="Drosh">Drosh</option>
                                    <option value="Hangu">Hangu</option>
                                    <option value="Haripur">Haripur</option>
                                    <option value="Karak">Karak</option>
                                    <option value="Kohat">Kohat</option>
                                    <option value="Kulachi">Kulachi</option>
                                    <option value="Lakki Marwat">Lakki Marwat</option>
                                    <option value="Latamber">Latamber</option>
                                    <option value="Madyan">Madyan</option>
                                    <option value="Mansehra">Mansehra</option>
                                    <option value="Mardan">Mardan</option>
                                    <option value="Mastuj">Mastuj</option>
                                    <option value="Mingora">Mingora</option>
                                    <option value="Nowshera">Nowshera</option>
                                    <option value="Paharpur">Paharpur</option>
                                    <option value="Pabbi">Pabbi</option>
                                    <option value="Peshawar">Peshawar</option>
                                    <option value="Saidu Sharif">Saidu Sharif</option>
                                    <option value="Shorkot">Shorkot</option>
                                    <option value="Shewa Adda">Shewa Adda</option>
                                    <option value="Swabi">Swabi</option>
                                    <option value="Swat">Swat</option>
                                    <option value="Tangi">Tangi</option>
                                    <option value="Tank">Tank</option>
                                    <option value="Thall">Thall</option>
                                    <option value="Timergara">Timergara</option>
                                    <option value="Tordher">Tordher</option>
                                    <option value="" disabled>Balochistan Cities</option>
                                    <option value="Awaran">Awaran</option>
                                    <option value="Barkhan">Barkhan</option>
                                    <option value="Chagai">Chagai</option>
                                    <option value="Dera Bugti">Dera Bugti</option>
                                    <option value="Gwadar">Gwadar</option>
                                    <option value="Harnai">Harnai</option>
                                    <option value="Jafarabad">Jafarabad</option>
                                    <option value="Jhal Magsi">Jhal Magsi</option>
                                    <option value="Kacchi">Kacchi</option>
                                    <option value="Kalat">Kalat</option>
                                    <option value="Kech">Kech</option>
                                    <option value="Kharan">Kharan</option>
                                    <option value="Khuzdar">Khuzdar</option>
                                    <option value="Killa Abdullah">Killa Abdullah</option>
                                    <option value="Killa Saifullah">Killa Saifullah</option>
                                    <option value="Kohlu">Kohlu</option>
                                    <option value="Lasbela">Lasbela</option>
                                    <option value="Lehri">Lehri</option>
                                    <option value="Loralai">Loralai</option>
                                    <option value="Mastung">Mastung</option>
                                    <option value="Musakhel">Musakhel</option>
                                    <option value="Nasirabad">Nasirabad</option>
                                    <option value="Nushki">Nushki</option>
                                    <option value="Panjgur">Panjgur</option>
                                    <option value="Pishin valley">Pishin Valley</option>
                                    <option value="Quetta">Quetta</option>
                                    <option value="Sherani">Sherani</option>
                                    <option value="Sibi">Sibi</option>
                                    <option value="Sohbatpur">Sohbatpur</option>
                                    <option value="Washuk">Washuk</option>
                                    <option value="Zhob">Zhob</option>
                                    <option value="Ziarat">Ziarat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Location :</label>
                                <input class="form-control w-25" id="location" name="location" type="text">
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Next</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step3">
                            <h3>Step 3</h3>
                            <div class="form-group">
                                <label>Property Title :</label>
                                <input class="form-control w-25" id="propertyTitle" name="propertyTitle" type="text">
                            </div>
                            <div class="form-group">
                                <label>Description :</label>
                                <textarea class="form-control w-25" style="resize: none;" id="description" rows="2" cols="25"
                                          name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Price :</label>
                                <input class="form-control w-25" id="price" name="price" type="number">
                            </div>
                            <div class="form-group">
                                <label>Land Area :</label>
                                <div class="row">
                                    <input class="form-control w-25 ml-3" id="landArea" name="landArea" type="number">
                                    <label class="ml-3 mt-2">Unit: </label>
                                    <select type="text" class="form-control ml-2" style="width: 15%!important;" id="unit" name="unit">
                                        <option value="">--Please Select--</option>
                                        <option value="squareFeet">Square Feet</option>
                                        <option value="squareyards">Square Yards</option>
                                        <option value="squareMeters">Square Meters</option>
                                        <option value="marla">Marla</option>
                                        <option value="kanal">Kanal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="bedroomField" style="display: none">
                                <label>Bedrooms :</label>
                                <select type="text" class="form-control w-25" id="bedrooms" name="bedrooms">
                                    <option value="">--Please Select--</option>
                                    <option value="1 bedroom">1</option>
                                    <option value="2 bedroom">2</option>
                                    <option value="3 bedroom">3</option>
                                    <option value="4 bedroom">4</option>
                                    <option value="5 bedroom">5</option>
                                    <option value="6 bedroom">6</option>
                                    <option value="7 bedroom">7</option>
                                    <option value="8 bedroom">8</option>
                                    <option value="9 bedroom">9</option>
                                    <option value="10 bedroom">10</option>
                                </select>
                            </div>
                            <div class="form-group" id="bathroomField" style="display: none">
                                <label>Bathrooms :</label>
                                <select type="text" class="form-control w-25" id="bathroom" name="bathroom">
                                    <option value="">--Please Select--</option>
                                    <option value="1 bathrooms">1</option>
                                    <option value="2 bathrooms">2</option>
                                    <option value="3 bathrooms">3</option>
                                    <option value="4 bathrooms">4</option>
                                    <option value="5 bathrooms">5</option>
                                    <option value="6 bathrooms">6</option>
                                    <option value="7 bathrooms">7</option>
                                    <option value="8 bathrooms">8</option>
                                    <option value="9 bathrooms">9</option>
                                    <option value="10 bathrooms">10</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Expire after :</label>
                                <select type="text" class="form-control w-25" id="expiryDate" name="expiryDate">
                                    <option value="">--Please Select--</option>
                                    <option value="Less than 1 year">1 month</option>
                                    <option value="1 year">3 months</option>
                                    <option value="2 year">6 months</option>
                                </select>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                {{--<li><button type="button" class="btn btn-default next-step">Skip</button></li>--}}
                                <li><button type="button" class="btn btn-primary btn-info-full next-step">Next</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step4">
                            <h3>Step 4</h3>
                            <p>This is step 4</p>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                {{--<li><button type="button" class="btn btn-default next-step">Skip</button></li>--}}
                                <li><button type="button" class="btn btn-primary btn-info-full next-step">Next</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step5">
                            <h3>Step 5</h3>
                            <div class="form-group">Select image to upload :<br>
                                <input class="mt-2" type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                {{--<li><button type="button" class="btn btn-default next-step">Skip</button></li>--}}
                                <li><button type="button" class="btn btn-primary btn-info-full next-step">Next</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <h3>Complete</h3>
                            <p>You have successfully completed all steps.</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>

<script>

    function showBedroomAndBathroomFields(value) {
        if (value === 'forSale' || value === 'forRent') {
            document.getElementById('bedroomField').style.display = 'block';
            document.getElementById('bathroomField').style.display = 'block';
        }
    }

    function showPropertyType(value) {
        if (value === 'home') {
            document.getElementById('propertyTypeHome').style.display = 'block';
            document.getElementById('propertyTypePlots').style.display = 'none';
            document.getElementById('propertyTypeCommercial').style.display = 'none';
        } else if (value === 'plots') {
            document.getElementById('propertyTypePlots').style.display = 'block';
            document.getElementById('propertyTypeHome').style.display = 'none';
            document.getElementById('propertyTypeCommercial').style.display = 'none';
        } else {
            document.getElementById('propertyTypeCommercial').style.display = 'block';
            document.getElementById('propertyTypeHome').style.display = 'none';
            document.getElementById('propertyTypePlots').style.display = 'none';
        }
    }

    $(document).ready(function () {
        //Initialize tooltips
        // $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
</script>

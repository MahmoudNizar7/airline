@extends('front.app')
@section('style')
    <style>
        input[type=date] {
            font-size: 10px;
            height: 50px;
        }
        #nationality1{
            height: 50px;
            size: 15px;
            text-align: center;
        }
    </style>
@stop
@section('content')

    <div class="content-homepage">

        <div class="content-homepage">

            <div class="content-header-homepage gradient-overlay ">
                <div class="container">
                    <h2>{{ __('site.trips') }}</h2>
                </div>
            </div>

            <div class="content-body-homepage">
                <div class="container">
                    <div class="content-warper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">

                        <form action="{{ route('client_trips.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                            <input type="hidden" name="adults_no" value="{{ $adults }}">
                            <input type="hidden" name="children_no" value="{{ $children }}">
                            <input type="hidden" name="baby_no" value="{{ $baby }}">

                            @if($adults > 0)
                                <h3 class="two-line-heading text-center" style="margin-bottom:30px;">{{ __('site.adults') }}</h3>

                                @for($no = 0 ; $no < $adults; $no++ )

                                    <div class="form-group row ">

                                        <div class="col-lg-2">
                                            <label for="first_name">{{ __('site.first_name') }}</label>
                                            <input class="form-control @error('adults.first_name.'.$no) is-invalid @enderror" name="adults[first_name][]" id="first_name" type="text" value="">
                                            @error('adults.first_name.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="last_name">{{ __('site.last_name') }}</label>
                                            <input class="form-control @error('adults.first_name.'.$no) is-invalid @enderror" name="adults[last_name][]" id="last_name" type="text" value="" >
                                            @error('adults.last_name.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="bod">{{ __('site.birth_of_date') }}</label>
                                            <input class="form-control @error('adults.bod.'.$no) is-invalid @enderror" name="adults[bod][]" id="bod" type="date" value="" max="{{ now()->toDateString() }}" required>
                                            @error('adults.bod.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="bod">{{ __('site.nationality') }}</label>
                                            <select name="adults[nationality][]" class="form-control @error('adults.nationality.'.$no) is-invalid @enderror" id="nationality1" required>
                                                <option value="">{{ __('site.choose_country') }}</option>
                                                <option value="Afghan">{{ __("site.Afghan") }}</option>
                                                <option value="Albanian">{{ __("site.Albanian") }}</option>
                                                <option value="Algerian">{{ __("site.Algerian") }}</option>
                                                <option value="American">{{ __("site.American") }}</option>
                                                <option value="Andorran">{{ __("site.Andorran") }}</option>
                                                <option value="Angolan">{{ __("site.Angolan") }}</option>
                                                <option value="Antiguans">{{ __("site.Antiguans") }}</option>
                                                <option value="Argentinean">{{ __("site.Argentinean") }}</option>
                                                <option value="Armenian">{{ __("site.Armenian") }}</option>
                                                <option value="Australian">{{ __("site.Australian") }}</option>
                                                <option value="Austrian">{{ __("site.Austrian") }}</option>
                                                <option value="Azerbaijani">{{ __("site.Azerbaijani") }}</option>
                                                <option value="Bahamian">{{ __("site.Bahamian") }}</option>
                                                <option value="Bahraini">{{ __("site.Bahraini") }}</option>
                                                <option value="Bangladeshi">{{ __("site.Bangladeshi") }}</option>
                                                <option value="Barbadian">{{ __("site.Barbadian") }}</option>
                                                <option value="Barbudans">{{ __("site.Barbudans") }}</option>
                                                <option value="Batswana">{{ __("site.Batswana") }}</option>
                                                <option value="Belarusian">{{ __("site.Belarusian") }}</option>
                                                <option value="Belgian">{{ __("site.Belgian") }}</option>
                                                <option value="Belizean">{{ __("site.Belizean") }}</option>
                                                <option value="Beninese">{{ __("site.Beninese") }}</option>
                                                <option value="Bhutanese">{{ __("site.Bhutanese") }}</option>
                                                <option value="Bolivian">{{ __("site.Bolivian") }}</option>
                                                <option value="Bosnian">{{ __("site.Bosnian") }}</option>
                                                <option value="Brazilian">{{ __("site.Brazilian") }}</option>
                                                <option value="British">{{ __("site.British") }}</option>
                                                <option value="Bruneian">{{ __("site.Bruneian") }}</option>
                                                <option value="Bulgarian">{{ __("site.Bulgarian") }}</option>
                                                <option value="Burkinabe">{{ __("site.Burkinabe") }}</option>
                                                <option value="Burmese">{{ __("site.Burmese") }}</option>
                                                <option value="Burundian">{{ __("site.Burundian") }}</option>
                                                <option value="Cambodian">{{ __("site.Cambodian") }}</option>
                                                <option value="Cameroonian">{{ __("site.Cameroonian") }}</option>
                                                <option value="Canadian">{{ __("site.Canadian") }}</option>
                                                <option value="Cape Verdean"> {{ __("site.Cape Verdean") }}</option>
                                                <option value="Central African"> {{ __("site.Central African") }}</option>
                                                <option value="Chadian">{{ __("site.Chadian") }}</option>
                                                <option value="Chilean">{{ __("site.Chilean") }}</option>
                                                <option value="Chinese">{{ __("site.Chinese") }}</option>
                                                <option value="Colombian">{{ __("site.Colombian") }}</option>
                                                <option value="Comoran">{{ __("site.Comoran") }}</option>
                                                <option value="Congolese">{{ __("site.Congolese") }}</option>
                                                <option value="Costa Rican"> {{ __("site.Costa Rican") }}</option>
                                                <option value="Croatian">{{ __("site.Croatian") }}</option>
                                                <option value="Cuban">{{ __("site.Cuban") }}</option>
                                                <option value="Cypriot">{{ __("site.Cypriot") }}</option>
                                                <option value="Czech">{{ __("site.Czech") }}</option>
                                                <option value="Danish">{{ __("site.Danish") }}</option>
                                                <option value="Djibouti">{{ __("site.Djibouti") }}</option>
                                                <option value="Dominican">{{ __("site.Dominican") }}</option>
                                                <option value="Dutch">{{ __("site.Dutch") }}</option>
                                                <option value="East Timorese"> {{ __("site.East Timorese") }}</option>
                                                <option value="Ecuadorean">{{ __("site.Ecuadorean") }}</option>
                                                <option value="Egyptian">{{ __("site.Egyptian") }}</option>
                                                <option value="Emirian">{{ __("site.Emirian") }}</option>
                                                <option value="Equatorial Guinean"> {{ __("site.Equatorial Guinean") }}</option>
                                                <option value="Eritrean">{{ __("site.Eritrean") }}</option>
                                                <option value="Estonian">{{ __("site.Estonian") }}</option>
                                                <option value="Ethiopian">{{ __("site.Ethiopian") }}</option>
                                                <option value="Fijian">{{ __("site.Fijian") }}</option>
                                                <option value="Filipino">{{ __("site.Filipino") }}</option>
                                                <option value="Finnish">{{ __("site.Finnish") }}</option>
                                                <option value="French">{{ __("site.French") }}</option>
                                                <option value="Gabonese">{{ __("site.Gabonese") }}</option>
                                                <option value="Gambian">{{ __("site.Gambian") }}</option>
                                                <option value="Georgian">{{ __("site.Georgian") }}</option>
                                                <option value="German">{{ __("site.German") }}</option>
                                                <option value="Ghanaian">{{ __("site.Ghanaian") }}</option>
                                                <option value="Greek">{{ __("site.Greek") }}</option>
                                                <option value="Grenadian">{{ __("site.Grenadian") }}</option>
                                                <option value="Guatemalan">{{ __("site.Guatemalan") }}</option>
                                                <option value="Guinea-Bissauan">-{{ __("site.Guinea-Bissauan") }}</option>
                                                <option value="Guinean">{{ __("site.Guinean") }}</option>
                                                <option value="Guyanese">{{ __("site.Guyanese") }}</option>
                                                <option value="Haitian">{{ __("site.Haitian") }}</option>
                                                <option value="Herzegovinian">{{ __("site.Herzegovinian") }}</option>
                                                <option value="Honduran">{{ __("site.Honduran") }}</option>
                                                <option value="Hungarian">{{ __("site.Hungarian") }}</option>
                                                <option value="Icelander">{{ __("site.Icelander") }}</option>
                                                <option value="Indian">{{ __("site.Indian") }}</option>
                                                <option value="Indonesian">{{ __("site.Indonesian") }}</option>
                                                <option value="Iranian">{{ __("site.Iranian") }}</option>
                                                <option value="Iraqi">{{ __("site.Iraqi") }}</option>
                                                <option value="Irish">{{ __("site.Irish") }}</option>
                                                <option value="Italian">{{ __("site.Italian") }}</option>
                                                <option value="Ivorian">{{ __("site.Ivorian") }}</option>
                                                <option value="Jamaican">{{ __("site.Jamaican") }}</option>
                                                <option value="Japanese">{{ __("site.Japanese") }}</option>
                                                <option value="Jordanian">{{ __("site.Jordanian") }}</option>
                                                <option value="Kazakhstani">{{ __("site.Kazakhstani") }}</option>
                                                <option value="Kenyan">{{ __("site.Kenyan") }}</option>
                                                <option value="Kittian and Nevisian">{{ __("site.Kittian and Nevisian") }}</option>
                                                <option value="Kuwaiti">{{ __("site.Kuwaiti") }}</option>
                                                <option value="Kyrgyz">{{ __("site.Kyrgyz") }}</option>
                                                <option value="Laotian">{{ __("site.Laotian") }}</option>
                                                <option value="Latvian">{{ __("site.Latvian") }}</option>
                                                <option value="Lebanese">{{ __("site.Lebanese") }}</option>
                                                <option value="Liberian">{{ __("site.Liberian") }}</option>
                                                <option value="Libyan">{{ __("site.Libyan") }}</option>
                                                <option value="Liechtensteiner">{{ __("site.Liechtensteiner") }}</option>
                                                <option value="Lithuanian">{{ __("site.Lithuanian") }}</option>
                                                <option value="Luxembourger">{{ __("site.Luxembourger") }}</option>
                                                <option value="Macedonian">{{ __("site.Macedonian") }}</option>
                                                <option value="Malagasy">{{ __("site.Malagasy") }}</option>
                                                <option value="Malawian">{{ __("site.Malawian") }}</option>
                                                <option value="Malaysian">{{ __("site.Malaysian") }}</option>
                                                <option value="Maldivan">{{ __("site.Maldivan") }}</option>
                                                <option value="Malian">{{ __("site.Malian") }}</option>
                                                <option value="Maltese">{{ __("site.Maltese") }}</option>
                                                <option value="Marshallese">{{ __("site.Marshallese") }}</option>
                                                <option value="Mauritanian">{{ __("site.Mauritanian") }}</option>
                                                <option value="Mauritian">{{ __("site.Mauritian") }}</option>
                                                <option value="Mexican">{{ __("site.Mexican") }}</option>
                                                <option value="Micronesian">{{ __("site.Micronesian") }}</option>
                                                <option value="Moldovan">{{ __("site.Moldovan") }}</option>
                                                <option value="Monacan">{{ __("site.Monacan") }}</option>
                                                <option value="Mongolian">{{ __("site.Mongolian") }}</option>
                                                <option value="Moroccan">{{ __("site.Moroccan") }}</option>
                                                <option value="Mosotho">{{ __("site.Mosotho") }}</option>
                                                <option value="Motswana">{{ __("site.Motswana") }}</option>
                                                <option value="Mozambican">{{ __("site.Mozambican") }}</option>
                                                <option value="Namibian">{{ __("site.Namibian") }}</option>
                                                <option value="Nauruan">{{ __("site.Nauruan") }}</option>
                                                <option value="Nepalese">{{ __("site.Nepalese") }}</option>
                                                <option value="New Zealander">{{ __("site.New Zealander") }}</option>
                                                <option value="Ni-Vanuatu"> {{ __("site.Ni-Vanuatu") }}</option>
                                                <option value="Nicaraguan">{{ __("site.Nicaraguan") }}</option>
                                                <option value="Nigerien">{{ __("site.Nigerien") }}</option>
                                                <option value="North Korean">{{ __("site.North Korean") }}</option>
                                                <option value="Northern Irish"> {{ __("site.Northern Irish") }}</option>
                                                <option value="Norwegian">{{ __("site.Norwegian") }}</option>
                                                <option value="Omani">{{ __("site.Omani") }}</option>
                                                <option value="Pakistani">{{ __("site.Pakistani") }}</option>
                                                <option value="Palauan">{{ __("site.Palauan") }}</option>
                                                <option value="Palestinian">{{ __("site.Palestinian") }}</option>
                                                <option value="Panamanian">{{ __("site.Panamanian") }}</option>
                                                <option value="Papua New Guinean">{{ __("site.Papua New Guinean") }}</option>
                                                <option value="Paraguayan">{{ __("site.Paraguayan") }}</option>
                                                <option value="Peruvian">{{ __("site.Peruvian") }}</option>
                                                <option value="Polish">{{ __("site.Polish") }}</option>
                                                <option value="Portuguese">{{ __("site.Portuguese") }}</option>
                                                <option value="Qatari">{{ __("site.Qatari") }}</option>
                                                <option value="Romanian">{{ __("site.Romanian") }}</option>
                                                <option value="Russian">{{ __("site.Russian") }}</option>
                                                <option value="Rwandan">{{ __("site.Rwandan") }}</option>
                                                <option value="Saint Lucian">{{ __("site.Saint Lucian") }}</option>
                                                <option value="Salvadoran">{{ __("site.Salvadoran") }}</option>
                                                <option value="Samoan">{{ __("site.Samoan") }}</option>
                                                <option value="San Marinese">{{ __("site.San Marinese") }}</option>
                                                <option value="Sao Tomean">{{ __("site.Sao Tomean") }}</option>
                                                <option value="Saudi">{{ __("site.Saudi") }}</option>
                                                <option value="Scottish">{{ __("site.Scottish") }}</option>
                                                <option value="Senegalese">{{ __("site.Senegalese") }}</option>
                                                <option value="Serbian">{{ __("site.Serbian") }}</option>
                                                <option value="Seychellois">{{ __("site.Seychellois") }}</option>
                                                <option value="Sierra Leonean">{{ __("site.Sierra Leonean") }}</option>
                                                <option value="Singaporean">{{ __("site.Singaporean") }}</option>
                                                <option value="Slovakian">{{ __("site.Slovakian") }}</option>
                                                <option value="Slovenian">{{ __("site.Slovenian") }}</option>
                                                <option value="Solomon Islander">{{ __("site.Solomon Islander") }}</option>
                                                <option value="Somali">{{ __("site.Somali") }}</option>
                                                <option value="South African">{{ __("site.South African") }}</option>
                                                <option value="South Korean">{{ __("site.South Korean") }}</option>
                                                <option value="Spanish">{{ __("site.Spanish") }}</option>
                                                <option value="Sri Lankan">{{ __("site.Sri Lankan") }}</option>
                                                <option value="Sudanese">{{ __("site.Sudanese") }}</option>
                                                <option value="Surinamer">{{ __("site.Surinamer") }}</option>
                                                <option value="Swazi">{{ __("site.Swazi") }}</option>
                                                <option value="Swedish">{{ __("site.Swedish") }}</option>
                                                <option value="Swiss">{{ __("site.Swiss") }}</option>
                                                <option value="Syrian">{{ __("site.Syrian") }}</option>
                                                <option value="Taiwanese">{{ __("site.Taiwanese") }}</option>
                                                <option value="Tajik">{{ __("site.Tajik") }}</option>
                                                <option value="Tanzanian">{{ __("site.Tanzanian") }}</option>
                                                <option value="Thai">{{ __("site.Thai") }}</option>
                                                <option value="Togolese">{{ __("site.Togolese") }}</option>
                                                <option value="Tongan">{{ __("site.Tongan") }}</option>
                                                <option value="Trinidadian or Tobagonian">{{ __("site.Trinidadian or Tobagonian") }}</option>
                                                <option value="Tunisian">{{ __("site.Tunisian") }}</option>
                                                <option value="Turkish">{{ __("site.Turkish") }}</option>
                                                <option value="Tuvaluan">{{ __("site.Tuvaluan") }}</option>
                                                <option value="Ugandan">{{ __("site.Ugandan") }}</option>
                                                <option value="Ukrainian">{{ __("site.Ukrainian") }}</option>
                                                <option value="Uruguayan">{{ __("site.Uruguayan") }}</option>
                                                <option value="Uzbekistani">{{ __("site.Uzbekistani") }}</option>
                                                <option value="Venezuelan">{{ __("site.Venezuelan") }}</option>
                                                <option value="Vietnamese">{{ __("site.Vietnamese") }}</option>
                                                <option value="Welsh">{{ __("site.Welsh") }}</option>
                                                <option value="Yemenite">{{ __("site.Yemenite") }}</option>
                                                <option value="Zambian">{{ __("site.Zambian") }}</option>
                                                <option value="Zimbabwean">{{ __("site.Zimbabwean") }}</option>
                                            </select>
                                            @error('adults.nationality.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="passport_no">{{ __('site.passport_number') }}</label>
                                            <input class="form-control @error('adults.passport_no.'.$no) is-invalid @enderror" name="adults[passport_no][]" id="passport_no" type="text" value="" required>
                                            @error('adults.passport_no.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="passport_ex_date" style="font-size:12px">{{ __('site.passport_ex_date') }}</label>
                                            <input class="form-control @error('adults.passport_ex_date.'.$no) is-invalid @enderror" name="adults[passport_ex_date][]" id="passport_ex_date" type="date" value="" required>
                                            @error('adults.passport_ex_date.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                @endfor
                            @endif

                            @if($children > 0)
                                <hr>
                                <h3 class="two-line-heading text-center" style="margin-bottom:30px;">{{ __('site.children') }}</h3>
                                @for($no = 0 ; $no < $children; $no++ )

                                    <div class="form-group row ">

                                        <div class="col-lg-2">
                                            <label for="first_name">{{ __('site.first_name') }}</label>
                                            <input class="form-control @error('children.first_name.'.$no) is-invalid @enderror" name="children[first_name][]" id="first_name" type="text" value="" required>
                                            @error('adults.first_name.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="last_name">{{ __('site.last_name') }}</label>
                                            <input class="form-control @error('children.last_name.'.$no) is-invalid @enderror" name="children[last_name][]" id="last_name" type="text" value="" required>
                                            @error('children.last_name.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="bod">{{ __('site.birth_of_date') }}</label>
                                            <input class="form-control @error('children.bod.'.$no) is-invalid @enderror" name="children[bod][]" max="{{ now()->toDateString() }}" id="bod" type="date" value="" required>
                                            @error('children.bod.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label >{{ __('site.nationality') }}</label>
                                            <select name="children[nationality][]" class="form-control @error('children.nationality.'.$no) is-invalid @enderror" id="nationality1">
                                                <option value="">اختر الدولة</option>
                                                <option value="afghan">Afghan</option>
                                                <option value="albanian">Albanian</option>
                                                <option value="algerian">Algerian</option>
                                                <option value="american">American</option>
                                                <option value="andorran">Andorran</option>
                                                <option value="angolan">Angolan</option>
                                                <option value="antiguans">Antiguans</option>
                                                <option value="argentinean">Argentinean</option>
                                                <option value="armenian">Armenian</option>
                                                <option value="australian">Australian</option>
                                                <option value="austrian">Austrian</option>
                                                <option value="azerbaijani">Azerbaijani</option>
                                                <option value="bahamian">Bahamian</option>
                                                <option value="bahraini">Bahraini</option>
                                                <option value="bangladeshi">Bangladeshi</option>
                                                <option value="barbadian">Barbadian</option>
                                                <option value="barbudans">Barbudans</option>
                                                <option value="batswana">Batswana</option>
                                                <option value="belarusian">Belarusian</option>
                                                <option value="belgian">Belgian</option>
                                                <option value="belizean">Belizean</option>
                                                <option value="beninese">Beninese</option>
                                                <option value="bhutanese">Bhutanese</option>
                                                <option value="bolivian">Bolivian</option>
                                                <option value="bosnian">Bosnian</option>
                                                <option value="brazilian">Brazilian</option>
                                                <option value="british">British</option>
                                                <option value="bruneian">Bruneian</option>
                                                <option value="bulgarian">Bulgarian</option>
                                                <option value="burkinabe">Burkinabe</option>
                                                <option value="burmese">Burmese</option>
                                                <option value="burundian">Burundian</option>
                                                <option value="cambodian">Cambodian</option>
                                                <option value="cameroonian">Cameroonian</option>
                                                <option value="canadian">Canadian</option>
                                                <option value="cape verdean">Cape Verdean</option>
                                                <option value="central african">Central African</option>
                                                <option value="chadian">Chadian</option>
                                                <option value="chilean">Chilean</option>
                                                <option value="chinese">Chinese</option>
                                                <option value="colombian">Colombian</option>
                                                <option value="comoran">Comoran</option>
                                                <option value="congolese">Congolese</option>
                                                <option value="costa rican">Costa Rican</option>
                                                <option value="croatian">Croatian</option>
                                                <option value="cuban">Cuban</option>
                                                <option value="cypriot">Cypriot</option>
                                                <option value="czech">Czech</option>
                                                <option value="danish">Danish</option>
                                                <option value="djibouti">Djibouti</option>
                                                <option value="dominican">Dominican</option>
                                                <option value="dutch">Dutch</option>
                                                <option value="east timorese">East Timorese</option>
                                                <option value="ecuadorean">Ecuadorean</option>
                                                <option value="egyptian">Egyptian</option>
                                                <option value="emirian">Emirian</option>
                                                <option value="equatorial guinean">Equatorial Guinean</option>
                                                <option value="eritrean">Eritrean</option>
                                                <option value="estonian">Estonian</option>
                                                <option value="ethiopian">Ethiopian</option>
                                                <option value="fijian">Fijian</option>
                                                <option value="filipino">Filipino</option>
                                                <option value="finnish">Finnish</option>
                                                <option value="french">French</option>
                                                <option value="gabonese">Gabonese</option>
                                                <option value="gambian">Gambian</option>
                                                <option value="georgian">Georgian</option>
                                                <option value="german">German</option>
                                                <option value="ghanaian">Ghanaian</option>
                                                <option value="greek">Greek</option>
                                                <option value="grenadian">Grenadian</option>
                                                <option value="guatemalan">Guatemalan</option>
                                                <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                <option value="guinean">Guinean</option>
                                                <option value="guyanese">Guyanese</option>
                                                <option value="haitian">Haitian</option>
                                                <option value="herzegovinian">Herzegovinian</option>
                                                <option value="honduran">Honduran</option>
                                                <option value="hungarian">Hungarian</option>
                                                <option value="icelander">Icelander</option>
                                                <option value="indian">Indian</option>
                                                <option value="indonesian">Indonesian</option>
                                                <option value="iranian">Iranian</option>
                                                <option value="iraqi">Iraqi</option>
                                                <option value="irish">Irish</option>
                                                <option value="israeli">Israeli</option>
                                                <option value="italian">Italian</option>
                                                <option value="ivorian">Ivorian</option>
                                                <option value="jamaican">Jamaican</option>
                                                <option value="japanese">Japanese</option>
                                                <option value="jordanian">Jordanian</option>
                                                <option value="kazakhstani">Kazakhstani</option>
                                                <option value="kenyan">Kenyan</option>
                                                <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                <option value="kuwaiti">Kuwaiti</option>
                                                <option value="kyrgyz">Kyrgyz</option>
                                                <option value="laotian">Laotian</option>
                                                <option value="latvian">Latvian</option>
                                                <option value="lebanese">Lebanese</option>
                                                <option value="liberian">Liberian</option>
                                                <option value="libyan">Libyan</option>
                                                <option value="liechtensteiner">Liechtensteiner</option>
                                                <option value="lithuanian">Lithuanian</option>
                                                <option value="luxembourger">Luxembourger</option>
                                                <option value="macedonian">Macedonian</option>
                                                <option value="malagasy">Malagasy</option>
                                                <option value="malawian">Malawian</option>
                                                <option value="malaysian">Malaysian</option>
                                                <option value="maldivan">Maldivan</option>
                                                <option value="malian">Malian</option>
                                                <option value="maltese">Maltese</option>
                                                <option value="marshallese">Marshallese</option>
                                                <option value="mauritanian">Mauritanian</option>
                                                <option value="mauritian">Mauritian</option>
                                                <option value="mexican">Mexican</option>
                                                <option value="micronesian">Micronesian</option>
                                                <option value="moldovan">Moldovan</option>
                                                <option value="monacan">Monacan</option>
                                                <option value="mongolian">Mongolian</option>
                                                <option value="moroccan">Moroccan</option>
                                                <option value="mosotho">Mosotho</option>
                                                <option value="motswana">Motswana</option>
                                                <option value="mozambican">Mozambican</option>
                                                <option value="namibian">Namibian</option>
                                                <option value="nauruan">Nauruan</option>
                                                <option value="nepalese">Nepalese</option>
                                                <option value="new zealander">New Zealander</option>
                                                <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                <option value="nicaraguan">Nicaraguan</option>
                                                <option value="nigerien">Nigerien</option>
                                                <option value="north korean">North Korean</option>
                                                <option value="northern irish">Northern Irish</option>
                                                <option value="norwegian">Norwegian</option>
                                                <option value="omani">Omani</option>
                                                <option value="pakistani">Pakistani</option>
                                                <option value="palauan">Palauan</option>
                                                <option value="panamanian">Panamanian</option>
                                                <option value="papua new guinean">Papua New Guinean</option>
                                                <option value="paraguayan">Paraguayan</option>
                                                <option value="peruvian">Peruvian</option>
                                                <option value="polish">Polish</option>
                                                <option value="portuguese">Portuguese</option>
                                                <option value="qatari">Qatari</option>
                                                <option value="romanian">Romanian</option>
                                                <option value="russian">Russian</option>
                                                <option value="rwandan">Rwandan</option>
                                                <option value="saint lucian">Saint Lucian</option>
                                                <option value="salvadoran">Salvadoran</option>
                                                <option value="samoan">Samoan</option>
                                                <option value="san marinese">San Marinese</option>
                                                <option value="sao tomean">Sao Tomean</option>
                                                <option value="saudi">Saudi</option>
                                                <option value="scottish">Scottish</option>
                                                <option value="senegalese">Senegalese</option>
                                                <option value="serbian">Serbian</option>
                                                <option value="seychellois">Seychellois</option>
                                                <option value="sierra leonean">Sierra Leonean</option>
                                                <option value="singaporean">Singaporean</option>
                                                <option value="slovakian">Slovakian</option>
                                                <option value="slovenian">Slovenian</option>
                                                <option value="solomon islander">Solomon Islander</option>
                                                <option value="somali">Somali</option>
                                                <option value="south african">South African</option>
                                                <option value="south korean">South Korean</option>
                                                <option value="spanish">Spanish</option>
                                                <option value="sri lankan">Sri Lankan</option>
                                                <option value="sudanese">Sudanese</option>
                                                <option value="surinamer">Surinamer</option>
                                                <option value="swazi">Swazi</option>
                                                <option value="swedish">Swedish</option>
                                                <option value="swiss">Swiss</option>
                                                <option value="syrian">Syrian</option>
                                                <option value="taiwanese">Taiwanese</option>
                                                <option value="tajik">Tajik</option>
                                                <option value="tanzanian">Tanzanian</option>
                                                <option value="thai">Thai</option>
                                                <option value="togolese">Togolese</option>
                                                <option value="tongan">Tongan</option>
                                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                <option value="tunisian">Tunisian</option>
                                                <option value="turkish">Turkish</option>
                                                <option value="tuvaluan">Tuvaluan</option>
                                                <option value="ugandan">Ugandan</option>
                                                <option value="ukrainian">Ukrainian</option>
                                                <option value="uruguayan">Uruguayan</option>
                                                <option value="uzbekistani">Uzbekistani</option>
                                                <option value="venezuelan">Venezuelan</option>
                                                <option value="vietnamese">Vietnamese</option>
                                                <option value="welsh">Welsh</option>
                                                <option value="yemenite">Yemenite</option>
                                                <option value="zambian">Zambian</option>
                                                <option value="zimbabwean">Zimbabwean</option>
                                            </select>
                                            @error('children.nationality.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="passport_no">{{ __('site.passport_number') }}</label>
                                            <input class="form-control @error('children.passport_no.'.$no) is-invalid @enderror" name="children[passport_no][]" id="passport_no" type="text" value="" required>
                                            @error('children.passport_no.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="passport_ex_date" style="font-size:12px">{{ __('site.passport_ex_date') }}</label>
                                            <input class="form-control @error('children.passport_ex_date.'.$no) is-invalid @enderror" name="children[passport_ex_date][]" id="passport_ex_date" type="date" value="" required>
                                            @error('children.passport_ex_date.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                @endfor
                            @endif

                            @if($baby > 0)
                                <hr>
                                <h3 class="two-line-heading text-center" style="margin-bottom:30px;">{{ __('site.baby') }}</h3>
                                @for($no = 0 ; $no < $baby; $no++ )

                                    <div class="form-group row ">

                                        <div class="col-lg-2">
                                            <label for="first_name">{{ __('site.first_name') }}</label>
                                            <input class="form-control @error('baby.first_name.'.$no) is-invalid @enderror" name="baby[first_name][]" id="first_name" type="text" value="" required>
                                            @error('baby.first_name.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="last_name">{{ __('site.last_name') }}</label>
                                            <input class="form-control @error('baby.last_name.'.$no) is-invalid @enderror" name="baby[last_name][]" id="last_name" type="text" value="" required>
                                            @error('baby.last_name.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="bod">{{ __('site.birth_of_date') }}</label>
                                            <input class="form-control @error('baby.bod.'.$no) is-invalid @enderror" name="baby[bod][]" max="{{ now()->toDateString() }}" id="bod" type="date" value="" required>
                                            @error('baby.bod.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label>{{ __('site.nationality') }}</label>
                                            <select name="baby[nationality][]" class="form-control @error('baby.nationality.'.$no) is-invalid @enderror" id="nationality1">
                                                <option value="">اختر الدولة</option>
                                                <option value="afghan">Afghan</option>
                                                <option value="albanian">Albanian</option>
                                                <option value="algerian">Algerian</option>
                                                <option value="american">American</option>
                                                <option value="andorran">Andorran</option>
                                                <option value="angolan">Angolan</option>
                                                <option value="antiguans">Antiguans</option>
                                                <option value="argentinean">Argentinean</option>
                                                <option value="armenian">Armenian</option>
                                                <option value="australian">Australian</option>
                                                <option value="austrian">Austrian</option>
                                                <option value="azerbaijani">Azerbaijani</option>
                                                <option value="bahamian">Bahamian</option>
                                                <option value="bahraini">Bahraini</option>
                                                <option value="bangladeshi">Bangladeshi</option>
                                                <option value="barbadian">Barbadian</option>
                                                <option value="barbudans">Barbudans</option>
                                                <option value="batswana">Batswana</option>
                                                <option value="belarusian">Belarusian</option>
                                                <option value="belgian">Belgian</option>
                                                <option value="belizean">Belizean</option>
                                                <option value="beninese">Beninese</option>
                                                <option value="bhutanese">Bhutanese</option>
                                                <option value="bolivian">Bolivian</option>
                                                <option value="bosnian">Bosnian</option>
                                                <option value="brazilian">Brazilian</option>
                                                <option value="british">British</option>
                                                <option value="bruneian">Bruneian</option>
                                                <option value="bulgarian">Bulgarian</option>
                                                <option value="burkinabe">Burkinabe</option>
                                                <option value="burmese">Burmese</option>
                                                <option value="burundian">Burundian</option>
                                                <option value="cambodian">Cambodian</option>
                                                <option value="cameroonian">Cameroonian</option>
                                                <option value="canadian">Canadian</option>
                                                <option value="cape verdean">Cape Verdean</option>
                                                <option value="central african">Central African</option>
                                                <option value="chadian">Chadian</option>
                                                <option value="chilean">Chilean</option>
                                                <option value="chinese">Chinese</option>
                                                <option value="colombian">Colombian</option>
                                                <option value="comoran">Comoran</option>
                                                <option value="congolese">Congolese</option>
                                                <option value="costa rican">Costa Rican</option>
                                                <option value="croatian">Croatian</option>
                                                <option value="cuban">Cuban</option>
                                                <option value="cypriot">Cypriot</option>
                                                <option value="czech">Czech</option>
                                                <option value="danish">Danish</option>
                                                <option value="djibouti">Djibouti</option>
                                                <option value="dominican">Dominican</option>
                                                <option value="dutch">Dutch</option>
                                                <option value="east timorese">East Timorese</option>
                                                <option value="ecuadorean">Ecuadorean</option>
                                                <option value="egyptian">Egyptian</option>
                                                <option value="emirian">Emirian</option>
                                                <option value="equatorial guinean">Equatorial Guinean</option>
                                                <option value="eritrean">Eritrean</option>
                                                <option value="estonian">Estonian</option>
                                                <option value="ethiopian">Ethiopian</option>
                                                <option value="fijian">Fijian</option>
                                                <option value="filipino">Filipino</option>
                                                <option value="finnish">Finnish</option>
                                                <option value="french">French</option>
                                                <option value="gabonese">Gabonese</option>
                                                <option value="gambian">Gambian</option>
                                                <option value="georgian">Georgian</option>
                                                <option value="german">German</option>
                                                <option value="ghanaian">Ghanaian</option>
                                                <option value="greek">Greek</option>
                                                <option value="grenadian">Grenadian</option>
                                                <option value="guatemalan">Guatemalan</option>
                                                <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                <option value="guinean">Guinean</option>
                                                <option value="guyanese">Guyanese</option>
                                                <option value="haitian">Haitian</option>
                                                <option value="herzegovinian">Herzegovinian</option>
                                                <option value="honduran">Honduran</option>
                                                <option value="hungarian">Hungarian</option>
                                                <option value="icelander">Icelander</option>
                                                <option value="indian">Indian</option>
                                                <option value="indonesian">Indonesian</option>
                                                <option value="iranian">Iranian</option>
                                                <option value="iraqi">Iraqi</option>
                                                <option value="irish">Irish</option>
                                                <option value="israeli">Israeli</option>
                                                <option value="italian">Italian</option>
                                                <option value="ivorian">Ivorian</option>
                                                <option value="jamaican">Jamaican</option>
                                                <option value="japanese">Japanese</option>
                                                <option value="jordanian">Jordanian</option>
                                                <option value="kazakhstani">Kazakhstani</option>
                                                <option value="kenyan">Kenyan</option>
                                                <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                <option value="kuwaiti">Kuwaiti</option>
                                                <option value="kyrgyz">Kyrgyz</option>
                                                <option value="laotian">Laotian</option>
                                                <option value="latvian">Latvian</option>
                                                <option value="lebanese">Lebanese</option>
                                                <option value="liberian">Liberian</option>
                                                <option value="libyan">Libyan</option>
                                                <option value="liechtensteiner">Liechtensteiner</option>
                                                <option value="lithuanian">Lithuanian</option>
                                                <option value="luxembourger">Luxembourger</option>
                                                <option value="macedonian">Macedonian</option>
                                                <option value="malagasy">Malagasy</option>
                                                <option value="malawian">Malawian</option>
                                                <option value="malaysian">Malaysian</option>
                                                <option value="maldivan">Maldivan</option>
                                                <option value="malian">Malian</option>
                                                <option value="maltese">Maltese</option>
                                                <option value="marshallese">Marshallese</option>
                                                <option value="mauritanian">Mauritanian</option>
                                                <option value="mauritian">Mauritian</option>
                                                <option value="mexican">Mexican</option>
                                                <option value="micronesian">Micronesian</option>
                                                <option value="moldovan">Moldovan</option>
                                                <option value="monacan">Monacan</option>
                                                <option value="mongolian">Mongolian</option>
                                                <option value="moroccan">Moroccan</option>
                                                <option value="mosotho">Mosotho</option>
                                                <option value="motswana">Motswana</option>
                                                <option value="mozambican">Mozambican</option>
                                                <option value="namibian">Namibian</option>
                                                <option value="nauruan">Nauruan</option>
                                                <option value="nepalese">Nepalese</option>
                                                <option value="new zealander">New Zealander</option>
                                                <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                <option value="nicaraguan">Nicaraguan</option>
                                                <option value="nigerien">Nigerien</option>
                                                <option value="north korean">North Korean</option>
                                                <option value="northern irish">Northern Irish</option>
                                                <option value="norwegian">Norwegian</option>
                                                <option value="omani">Omani</option>
                                                <option value="pakistani">Pakistani</option>
                                                <option value="palauan">Palauan</option>
                                                <option value="panamanian">Panamanian</option>
                                                <option value="papua new guinean">Papua New Guinean</option>
                                                <option value="paraguayan">Paraguayan</option>
                                                <option value="peruvian">Peruvian</option>
                                                <option value="polish">Polish</option>
                                                <option value="portuguese">Portuguese</option>
                                                <option value="qatari">Qatari</option>
                                                <option value="romanian">Romanian</option>
                                                <option value="russian">Russian</option>
                                                <option value="rwandan">Rwandan</option>
                                                <option value="saint lucian">Saint Lucian</option>
                                                <option value="salvadoran">Salvadoran</option>
                                                <option value="samoan">Samoan</option>
                                                <option value="san marinese">San Marinese</option>
                                                <option value="sao tomean">Sao Tomean</option>
                                                <option value="saudi">Saudi</option>
                                                <option value="scottish">Scottish</option>
                                                <option value="senegalese">Senegalese</option>
                                                <option value="serbian">Serbian</option>
                                                <option value="seychellois">Seychellois</option>
                                                <option value="sierra leonean">Sierra Leonean</option>
                                                <option value="singaporean">Singaporean</option>
                                                <option value="slovakian">Slovakian</option>
                                                <option value="slovenian">Slovenian</option>
                                                <option value="solomon islander">Solomon Islander</option>
                                                <option value="somali">Somali</option>
                                                <option value="south african">South African</option>
                                                <option value="south korean">South Korean</option>
                                                <option value="spanish">Spanish</option>
                                                <option value="sri lankan">Sri Lankan</option>
                                                <option value="sudanese">Sudanese</option>
                                                <option value="surinamer">Surinamer</option>
                                                <option value="swazi">Swazi</option>
                                                <option value="swedish">Swedish</option>
                                                <option value="swiss">Swiss</option>
                                                <option value="syrian">Syrian</option>
                                                <option value="taiwanese">Taiwanese</option>
                                                <option value="tajik">Tajik</option>
                                                <option value="tanzanian">Tanzanian</option>
                                                <option value="thai">Thai</option>
                                                <option value="togolese">Togolese</option>
                                                <option value="tongan">Tongan</option>
                                                <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                <option value="tunisian">Tunisian</option>
                                                <option value="turkish">Turkish</option>
                                                <option value="tuvaluan">Tuvaluan</option>
                                                <option value="ugandan">Ugandan</option>
                                                <option value="ukrainian">Ukrainian</option>
                                                <option value="uruguayan">Uruguayan</option>
                                                <option value="uzbekistani">Uzbekistani</option>
                                                <option value="venezuelan">Venezuelan</option>
                                                <option value="vietnamese">Vietnamese</option>
                                                <option value="welsh">Welsh</option>
                                                <option value="yemenite">Yemenite</option>
                                                <option value="zambian">Zambian</option>
                                                <option value="zimbabwean">Zimbabwean</option>
                                            </select>
                                            @error('baby.nationality.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="passport_no">{{ __('site.passport_number') }}</label>
                                            <input class="form-control @error('baby.passport_no.'.$no) is-invalid @enderror" name="baby[passport_no][]" id="passport_no" type="text" value="" required>
                                            @error('baby.passport_no.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="col-lg-2">
                                            <label for="passport_ex_date" style="font-size:12px">{{ __('site.passport_ex_date') }}</label>
                                            <input class="form-control @error('baby.passport_ex_date.'.$no) is-invalid @enderror" name="baby[passport_ex_date][]" id="passport_ex_date" type="date" value="" required>
                                            @error('baby.passport_ex_date.'.$no) <span class="text-danger error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                @endfor
                            @endif

                            <hr>
                          <h6 class=" text-center" style="margin-bottom:30px;">{{ __('site.reservation_type') }}</h6>
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <input class="@error('type') is-invalid @enderror" name="type" id="type" type="radio" value="1"  required>
                                    <label for="type">{{ __('site.confirmed_reservation') }}</label>
                                </div>
                                <div class="col-lg-4">
                                    <input class="@error('type') is-invalid @enderror" name="type" id="type" type="radio" value="0"   required>
                                    <label for="type">{{ __('site.initial_reservation') }}</label>
                                </div>
                                @error('type') <span class="text-danger error">{{ $message }}</span> @enderror
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-subscripe btn-hover" data-toggle="modal" data-target="#myModal" ><i class="icon-checked ml-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>{{ __('site.reserve_now') }}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

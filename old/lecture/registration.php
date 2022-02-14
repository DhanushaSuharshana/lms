<?php
include '../class/include.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Registration   </title> 
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/signup-2.min.css"> 
        <link href="css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="reg-bck">
        <form  method="POST" id="form"  >
            <div class="signup" style="max-width: 650px!important;" id="register_form">
                <div class="signup-body">
                    <a class="signup-brand" href="../index.php">
                        <center>
                            <img class="img-responsive" src="img/logo.png" alt="Ecollege.lk">
                        </center>
                    </a>
                    <p class="signup-heading">
                        <em>Lecture Registration</em>
                    </p> 

                    <div class="signup-form">

                        <div class="row gutter-xs">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="first-name" >Full Name</label>
                                    <input id="full_name" class="form-control" type="text" name="full_name"   class="form-
                                           control" data-field="full_name" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email"  data-field="email" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="age" >Age</label>
                                    <input id="age" class="form-control" type="text" name="age"   class="form-control" data-field="age" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nic_number" >NIC Number / Passport No</label>
                                    <input id="nic_number" class="form-control" type="text" name="nic_number" maxlength="10"  class="form-control" data-field="nic_number"  >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone" >Phone Number</label>
                                    <input id="phone_number" class="form-control phone-inputmask" type="text" name="phone_number"  maxlength="10" class="form-control" data-field="phone_number" placeholder="077xxxxxxx" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-xs"> 
                            <div class="col-sm-12">
                                <label for="birth_day" >Date of Birth</label>
                            </div>
                            <div class="col-sm-2">
                                <label for="birth_day" >Date</label>
                                <div class="form-group"> 
                                    <select  class="custom-select" name="date">
                                        <option> --  Date --</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>                                        
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="birth_day" >Month</label>
                                <div class="form-group"> 
                                    <select   class="custom-select"  name="month">
                                        <option> --  Month --</option>
                                        <option value="Jan">Jan</option>
                                        <option value="Feb">Feb</option>
                                        <option value="Mar">Mar</option>
                                        <option value="Apr">Apr</option>
                                        <option value="May">May</option>
                                        <option value="Jun">Jun</option>
                                        <option value="Jul">Jul</option>
                                        <option value="Aug">Aug</option>
                                        <option value="Sep">Sep</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label for="birth_day" >Year</label>
                                <div class="form-group"> 
                                    <select  class="custom-select"  name="year">
                                        <option> --  Year --</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                    </select>

                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="age" >Address</label>
                                    <input id="address" class="form-control" type="text" name="address"  > 

                                </div>
                            </div>

                        </div> 

                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="gender" >District </label>

                                    <select  class="custom-select" id="district" name="district" required="">
                                        <option value="">-- Select your District -- </option>
                                        <?php
                                        foreach (District::all() as $district) {
                                            ?>
                                            <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>   
                                            <?php
                                        }
                                        ?> 
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="age" >City</label>
                                    <select class="custom-select" name="city" id="city-bar">
                                        <option value="" selected="selected"> -- Select your city -- </option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-xs">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="age" >School</label>
                                    <input id="school" class="form-control" type="text" name="school"  data-field="school" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="age" >College / Tuition Class</label>
                                    <input id="collage" class="form-control" type="text" name="collage">

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="password" class="control-label">Experience (How much years) </label> 
                                    <input  id="experience" class="form-control" type="number" name="experience" id="labelPassword"   min="0"  >

                                </div>
                            </div> 

                        </div>
                        <div class="row gutter-xs">

                            <div class="form-group">
                                <label for="mediums" >Mediums </label></br>
                                <div class="col-sm-9">
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="1" >
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Sinhala </span>
                                    </label>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="2" >
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Tamil </span>
                                    </label>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="3" >
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">English </span>
                                    </label>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="4">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Arabic </span>
                                    </label>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="5"  >
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Hindi </span>
                                    </label>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="6"  id="other">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Other </span>
                                    </label>

                                </div>
                                <div class="col-sm-3" style="display: none" id="other_bar">
                                    <label class="custom-control custom-control-primary custom-checkbox "> 
                                        <div class="form-group">
                                            <input id="collage" class="form-control" type="text" name="mediums[]"> 
                                        </div>
                                    </label>
                                </div>

                            </div>


                        </div>

                        <div class="row gutter-xs">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="gender" >IT literacy </label> <br>
                                    <div class="col-md-5">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="1" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">I can operate digital equipments </span>
                                        </label>

                                    </div>
                                    <div class="col-md-6">   

                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="2" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">I can use Internet browsing & email </span>
                                        </label>
                                    </div>

                                    <div class="col-md-5">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="3" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">I can Type setting </span>
                                        </label>
                                    </div>
                                    <div class="col-md-7">
                                        <label class="custom-control custom-control-primary custom-checkbox"  >
                                            <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="4" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">No It literacy (don’t worry about I will support you) </span>
                                        </label> 
                                    </div> 
                                </div>
                            </div> 
                        </div>
                        <hr>
                        <div class="row gutter-xs">
                            <div class="col-sm-12">
                                <div class="form-group"> 
                                    <label for="gender" >Equipment Facilities</label></br>     
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="1" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Internet connection </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="2" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Desktop / Laptop </span>
                                        </label>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="3">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Tablet computer </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox"  >
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="4">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Smart phone</span>
                                        </label>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="6">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Recording instruments</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="5">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Video camera</span>
                                        </label>
                                    </div>

                                </div>
                            </div> 
                        </div>
                        <hr>
                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="gender" >Educated Level (Select option) </label>
                                    <select id="form-control-21" class="custom-select" name="education_level">
                                        <option value="" selected="selected"> -- Select your Educated Level -- </option>
                                        <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                        <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                        <option value="3">Bachelor's degree / උපාධිය</option>
                                        <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                        <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                        <option value="6">Diploma / ඩිප්ලෝමා</option>
                                        <option value="7">Certificate / සහතිකපත් </option>
                                        <option value="8">Professional / වෘත්තීමය</option>
                                        <option value="9">Other / වෙනත් </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label> 
                                    <input  id="password" class="form-control" type="password" name="password" id="labelPassword"     data-field="password" placeholder="Enter your Password">
                                    <div class="valid-message" ></div>  
                                </div>
                            </div>  
                        </div> 

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left text-danger btn-padding font-size-new" id="message"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">  </div>
                            <div class="col-md-6">    

                                <button class="btn btn-primary btn-block" type="submit" id="next">Next</button>  </div>
                            <div class="col-md-3"> 

                            </div>
                        </div>

                    </div>

                    <div class="signup-footer" style="margin-top: 10px;">
                        Already have an account? <a href="login.php">Log in</a>
                    </div> 
                </div> 
            </div>
            <div class="signup" style="max-width: 650px!important;display: none; " id="agreement_form">
                <div class="signup-body">
                    <a class="signup-brand" href="../index.php">
                        <center>
                            <img class="img-responsive" src="img/logo.png" alt="Ecollege.lk">
                        </center>
                    </a>
                    <p class="signup-heading">
                        <em>Lecture Agreement</em>
                    </p>  
                    <div class="signup-form" style="height: 500px;overflow-y: auto;">
                        <p style="font-size: 20px;text-align: center;"><u>  දේශකයන්ගේ එකගතා ගිවිසුම </u> </p> 
                        <p style="font-size: 16px;text-align: justify;"> 
                            මෙම වෙබ් අඩවිය ඔස්සේ ඉදිරිපත් කළ  යුත්තේ තමාගේම දේශන, නිබන්ධන හා විෂයානු බද්ධ ඉගෙනුම් ඉගැන්වීම් ක්‍රියාවලීන් පමණි.

                            බුද්ධිමය දේපළ අණ පණත් යටතේ වෙනත් අයෙකු විසින් අයිතිවාසිකම් කියන කිසිම කරුණක් හෝ දේශනයක් හෝ නිබන්ධනයක් නිසි අවසරයකින් තොරව උපුටාගෙන ඇතුලත් කිරීම සපුරා තහනම්ය.
                            මෙම වෙබ් අඩවියේ මා විසින් අඩංගු කරන දේශන, නිබන්ධන හෝ නිර්මාණය කරන සියළු තොරතුරු හෝ විෂයානුබද්ධ කරුණු හෝ ඉගෙනුම් ඉගැන්වීම් ක්‍රියාවලිය, ශ්‍රී ලංකාවේ රජය විසින් අනුමත විෂය නිර්දේශයන්ට අනුව පමණක් සකස් කළ තොරතුරු හෝ දේශන හෝ ඉගෙනුම් ඉගැන්වීම් ක්‍රියාවලීන් පමණක් බවට සහතික වෙමි.
                            එමෙන්ම මා විසින් ඉදිරිපත් කරන දේශන, නිබන්ධන හෝ නිර්මාණ හෝ තොරතුරු හෝ ඉගෙනුම් ඉගැන්වීම් ක්‍රියාවලීන් සම්බන්ධව www.ecollege.lk වෙබ් අඩවිය හෝ  ecollege ආයතනය කිසිදු වගකීමක් භාර නොගන්නා බවත් දනිමි. යම් කිසි අවස්ථාවක නීතිමය ප්‍රශ්නයක් මතු වුවහොත් හෝ මා  විසින් මෙම වෙබ් අඩවිය හරහා ඉදිරිපත් කරන කුමන හෝ කරුණක් සම්බන්ධයෙන් පැහැදිලි කිරීමක් ඉල්ලා සිටින ඕනෑම ආයතනයකට හෝ පුද්ලයෙකුට ඒ සම්බන්ධව පැහැදිලි කිරීමේ හෝ නීතිය ඉදිරියේ පෙනී සිට වග උත්තර බැදීමට මා මෙයින් බැදී සිටී.
                            තවද මෙම වෙබ් අඩවියේ පවතින පහසුකම් භාවිත කරමින් කිසිදු නීතිවිරෝදී ක්‍රියාවක යෙදීම හෝ මානව හිමිකම් උල්ලංඝනය වන කුමන හෝ ක්‍රියාවක යෙදීම සපුරා තහනම් බව පිළිගනිමි.</p>
                        <p style="font-size: 16px;text-align: justify;">අසත්‍ය තොරතුරු පැතිරවීම, හුවමාරු කර ගැනීම, මිනිස් අයිතිවාසිකම් උල්ලංඝනය වන කුමන හෝ ක්‍රියාවක යෙදීම ද සපුරා තහනම් බව දනිමි
                            තවද ප්‍රජාතන්ත්‍රවාදී සමාජවාදී ශ්‍රී ලංකා ජනරජයේ හෝ ගොලීය වශයෙන් සම්මත නීති රීතීන්ට අනුකූලව කටයුතු කරන බවටත්  www.ecollege.lk ආයතනයේ සියළු නීතිරීතීන්ට හා රෙගුලාසි වලට යටත්ව කටයුතු කිරීමටත් මෙයින් එකග වෙමි.
                            www.ecollege.lk ආයතනීය වේබ් අඩවිය වෙත මවිසින් දේශකයකු වශයෙන් සපයන සේවාව වෙනුවෙන් මාගේ ගිණුමේ ලියාපදිංචි සිසුන් විසින් ගෙවන මාසික ගෙවීම් වලින් 20% ක් www.ecollege.lk ආයතනයට ගෙවීමට මෙයින්      එකග වන අතර මා වෙත අය විය යුතු ඉතිරි 80% ක මුදල මාවිසින් ලබාදී ඇති බැංකු ගිණුමට බැරවන්නේ මෙම  වෙබ් අඩවියේ ලියාපදිංචි දින සිට සෑම දින 35කට වරක් බවත් ඒ සදහා මෙයින් එකග වන බවත් මෙයින් ප්‍රකාශ කර සිටිමි.</p>



                        <p style="font-size: 20px;text-align: center;"><u>  Account Suspension and Termination</u></p>
                        <p style="font-size: 14px;text-align: justify;"> 
                            This section explains how you and www.ecollege.lk may terminate this relationship. Key updates:
                            Terminations. Our Terms now include more details about when we might need to terminate our Agreement with bad actors. We provide a greater commitment to give notice when we take such action and what you can do to appeal if you think we’ve got it wrong. We’ve also added instructions for you, if you decide you no longer want to use the Service.
                        </p>
                        <p style="font-size: 20px;text-align: center;"><u>     Policies and Safety </u></p>
                        <p style="font-size: 14px;text-align: justify;"> 
                            When you use www.ecollege.lk, you join a community of people from all over the world. Every cool, new community feature on www.ecollege.lk involves a certain level of trust. Millions of users respect that trust and we trust you to be responsible too. Following the guidelines below helps to keep www.ecollege.lk learn for everyone.
                            You might not like everything you see on www.ecollege.lk. If you think content is inappropriate, use the flagging feature to submit it for review by our www.ecollege.lk staff. Our staff carefully reviews flagged content 24 hours a day, 7 days a week to determine whether there’s a violation of our Community Guidelines.
                        </p>
                        <p style="font-size: 20px;text-align: center;"><u>Copyright</u></p>   

                        <p style="font-size: 14px;text-align: justify;"> 
                            Respect copyright. Only upload videos that you made or that you're authorized to use. This means don't upload videos you didn't make, or use content in your videos that someone else owns the copyright to, such as music tracks, snippets of copyrighted programs, or videos made by other users, without necessary authorizations. Visit our Copyright Center for more information. 
                        </p>
                        <p style="font-size: 20px;text-align: center;"><u>Working Introduction</u></p> 
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/TxP_c9PFevg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <label class="custom-control custom-control-primary custom-checkbox" style="margin-bottom:20px;margin-top: 10px;"  >
                            <input class="custom-control-input" type="checkbox" id="agreement">
                            <span class="custom-control-indicator" style="border-color: #ff0707!important;"></span>
                            <span class="custom-control-label" style="font-size: 16px;">Please Accept our <span style="color: #f7a033"> Agreement </span> Before you login </span>
                        </label>
                        <div class="row" style="margin:0px;">

                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" type="submit" id="black"  >Back</button> 
                            </div>

                            <div class="col-md-4">  </div>
                            <div class="col-md-4">
                                <button class="btn btn-primary btn-block" type="submit"  id="register"  >Sign up</button> 
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../assets/js/dobpicker.js" type="text/javascript"></script>


        <script>
            $(document).ready(function () {

                $('#other').click(function () {
                    if ($(this).prop("checked") == true) {
                        $("#other_bar").show();
                    } else if ($(this).prop("checked") == false) {

                        $("#other_bar").hide();

                    }
                });
            });

        </script>


        <script>
            $(document).ready(function () {
                $.dobPicker({
                    daySelector: '#dobday', /* Required */
                    monthSelector: '#dobmonth', /* Required */
                    yearSelector: '#dobyear', /* Required */
                    dayDefault: 'Day', /* Optional */
                    monthDefault: 'Month', /* Optional */
                    yearDefault: 'Year', /* Optional */
                    minimumAge: 12, /* Optional */
                    maximumAge: 80 /* Optional */
                });
            });
        </script>

        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/signup-1.min.js"></script> 
        <script src="js/jquery.formValid.js" type="text/javascript"></script>
        <script src="ajax/js/registration.js" type="text/javascript"></script>
        <script src="ajax/js/city.js" type="text/javascript"></script>
        <script src="js/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
        <script src="js/mask.init.js" type="text/javascript"></script>
    </body>
</html>
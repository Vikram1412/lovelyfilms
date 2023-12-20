<?php
error_reporting(0);
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
include("includes/config.php");
session_start();
if(!empty($_SESSION)){
    session_unset($_SESSION['whoAreYou']);
    session_unset($_SESSION['firstName']);
    session_unset($_SESSION['lastName']);
    session_destroy();
    header("location:register");
}

$sql_height = mysqli_query($conn, "SELECT ID, Height FROM tbl_height WHERE 1");
$sql_state = mysqli_query($conn, "SELECT id, name FROM tbl_state WHERE 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<title>Lovely Films</title>
<link href="css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="css/select2.min.css" rel="stylesheet" media="all">
<link href="css/main_rg.css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>

<style type="text/css">
.select2-container--default .select2-selection--multiple {
	height: 50px;
	border: none;
	background:linear-gradient(to right, rgb(190 188 187) 0%, rgba(190 188 187) 50%, rgba(190 188 187) 99%, rgba(190 188 187) 100%);
}
.checkbox {
	width: 20px;
	height: 20px;
	float: left;
	margin-right: 10px;
}
#image_preview{
    padding: 0px;
}
#image_preview img{
    width: 100px;
    height: 120px;
    padding: 5px;
}
.error{color: red; font-style: italic;}
.myDiv{display:none;}

.er_alert2{color: #db0707;}

#loader {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  background: rgba(0,0,0,0.75) url(images/loading.gif) no-repeat center center;
  z-index: 10000;
}

form{
    background-color:white;
}
#maindiv{
    width:960px; 
    margin:10px auto; 
    padding:10px;
    font-family: 'Droid Sans', sans-serif;
}
#formdiv{
    width:500px; 
    float:left; 
    text-align: center;
}
/*form{
    padding: 40px 20px;
    box-shadow: 0px 0px 10px;
    border-radius: 2px;
}*/
h2{
    margin-left: 30px;
}
.upload{
    background-color:#ff0000;
    border:1px solid #ff0000;
    color:#fff;
    border-radius:5px;
    padding:10px;
    text-shadow:1px 1px 0px green;
    box-shadow: 2px 2px 15px rgba(0,0,0, .75);
}
.upload:hover{
    cursor:pointer;
    background:#c20b0b;
    border:1px solid #c20b0b;
    box-shadow: 0px 0px 5px rgba(0,0,0, .75);
}
#file{
    color:green;
    padding:5px; border:1px dashed #123456;
    background-color: #f9ffe5;
}
#upload{
    margin-left: 45px;
}

#noerror{
    color:green;
    text-align: left;
}
#error{
    color:red;
    text-align: left;
}
#img{ 
    width: 27px;
    border: none; 
    height:27px;
    margin-left: -20px;
    margin-bottom: 91px;
}

.abcd{
    text-align: center;
}

.abcd img{
    height:100px;
    width:100px;
    padding: 5px;
    border: 1px solid rgb(232, 222, 189);
}
b{
    color:red;
}
#formget{
    float:right; 

}

</style>
</head>

<body>
<?php 

include('header.php');

include('header.php');

// this variable initiate for every pages title
$page_title ="Apply for get";
include('second-header.php');

?>
<div class="page-wrapper bg-gra-03 p-b-50 bg-rg" >
  <div class="wrapper wrapper--w790">
    <div class="card card-5">
      <div class="card-heading">
        <h2 class="title">Application Form</h2>
      </div>
      <div class="card-body">
        <form action="processSubmission" method="POST" id="FormRegisterDetail" name="FormRegisterDetail" enctype="multipart/form-data">
        <!-- <form id="FormRegisterDetail" name="FormRegisterDetail" method="post" autocomplete="off" enctype="multipart/form-data"> -->
          <div class="form-row">
            <div class="name">Who are You?</div>
            <div class="value">
              <div class="input-group">
                  <select class="input--style-5" name="txtWhoAreYou" id="txtWhoAreYou">
                    <option selected="selected" value="">Select</option>
                    <option value="Actor">Actor</option>
                    <option value="Actress">Actress</option>
                    <option value="Singer">Singer</option>
                    <option value="Dancer">Dancer</option>
                    <option value="Anchor">Anchor</option>
                    <option value="Camera Man">Camera Man</option>
                    <option value="Technical Assistant">Technical Assistant</option>
                    <option value="Script Writing">Script Writing</option>
                    <option value="Director">Director</option>
                    <option value="Art Director">Art Director</option>
                    <option value="Casting Director">Casting Director</option>
                    <option value="Producer">Producer</option>
                    <option value="Action Master">Action Master</option>
                    <option value="Dialogue Delivery">Dialogue Delivery</option>
                    <option value="Costume Director">Costume Director</option>
                    <option value="Sound Recordist">Sound Recordist</option>
                    <option value="Others">Others</option>
                  </select><br><br>
                  <span id="txtWhoAreYoutResultOther"></span>
                  <span id="err_txtWhoAreYou" style="display:none" class="er_alert2"></span>
              </div>
              
            </div>
          </div>
          <div class="form-row m-b-55">
            <div class="name">Name</div>
            <div class="value">
              <div class="row row-space">
                <div class="col-lg-6">
                  <div class="input-group-desc">
                    <input class="input--style-5" type="text" name="txtFirstName" id="txtFirstName" placeholder="First Name" onblur="this.value=this.value.toUpperCase()">
                    <span id="err_txtFirstName" style="display:none" class="er_alert2"></span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group-desc">
                    <input class="input--style-5" type="text" name="txtLastName" id="txtLastName" placeholder="Last Name" onblur="this.value=this.value.toUpperCase()">
                    <span id="err_txtLastName" style="display:none" class="er_alert2"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Date of Birth</div>
            <div class="value">
              <div class="input-group">
                <input class="input--style-5" style="line-height:20px;" type="text" name="txtDateofBirth" id="txtDateofBirth" placeholder="Date of Birth" maxlength="10">
                <span id="err_txtDateofBirth" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Height</div>
            <div class="value">
              <div class="input-group">
                <select name="txtHeight" id="txtHeight" class="input--style-5">
                  <option selected="selected" value="">Select Height</option>
                    <?php while($row = mysqli_fetch_array($sql_height)){ ?>
                    <option value="<?php echo $row['ID'];?>"><?php echo $row['Height'];?></option>
                    <?php } ?>
                </select>
                <span id="err_txtHeight" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Weight (KG)</div>
            <div class="value">
              <div class="input-group">
                <input class="input--style-5" type="text" name="txtWeight" id="txtWeight" maxlength="3" placeholder="Weight (KG)" onblur="this.value=this.value.toUpperCase()">
                <span id="err_txtWeight" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <label class="name">Gender</label>
            <div class="value">
              <label class="radio-container m-r-45">Male
                <input type="radio" name="txtGender" id="txtGender" value="Male">
                <span class="checkmark"></span>
              </label>
              <label class="radio-container m-r-55">Female
                <input type="radio" name="txtGender" id="txtGender" value="Female">
                <span class="checkmark"></span>
              </label>
              <label class="radio-container">Transgender 
                <input type="radio" name="txtGender" id="txtGender" value="Transgender">
                <span class="checkmark"></span>
              </label>
              <span id="err_txtGender" style="display:none" class="er_alert2"></span>
            </div>
            
          </div>
          <div class="form-row">
            <label class="name">Have you <br />CINTAA membership?</label>
            <div class="value">
              <label class="radio-container m-r-55">Yes
                <input type="radio" name="txtCINTAAMembership" id="txtCINTAAMembership" value="Yes">
                <span class="checkmark"></span>
              </label>
              <label class="radio-container m-r-55">No
                <input type="radio" name="txtCINTAAMembership" id="txtCINTAAMembership" value="No">
                <span class="checkmark"></span>
              </label>
              <label class="radio-container">Others
                <input type="radio" name="txtCINTAAMembership" id="txtCINTAAMembership" value="Others">
                <span class="checkmark"></span>
              </label>
              <span id="err_txtCINTAAMembership" style="display:none" class="er_alert2"></span>
            </div>
            
          </div>
          <div class="form-row">
            <div class="name">State</div>
            <div class="value">
              <div class="input-group">
                  <select name="txtState" id="txtState" onChange="getCity(this.value);" class="input--style-5">
                    <option selected="selected" value="">Select State</option>
                    <?php while($row = mysqli_fetch_array($sql_state)){ ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                  </select>
                  <span id="err_txtState" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">District</div>
            <div class="value">
              <div class="input-group">
                  <select name="txtDistrict" id="txtDistrict"  class="input--style-5">
                    <option selected="selected" value="">Select District</option>
                  </select>
                  <span id="err_txtDistrict" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Address</div>
            <div class="value">
              <div class="input-group">
                <textarea class="input--style-5" style="height:70px;" name="txtAddress" id="txtAddress" placeholder="Address" onblur="this.value=this.value.toUpperCase()"></textarea>
                <span id="err_txtAddress" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Education and Qualifications</div>
            <div class="value">
              <div class="input-group">
                <textarea class="input--style-5" style="height:70px;" name="txtEduQualifications" id="txtEduQualifications" placeholder="Education and Qualifications" onblur="this.value=this.value.toUpperCase()"></textarea>
              	<span id="err_txtEduQualifications" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Experience</div>
            <div class="value">
              <div class="input-group">
                  <select name="txtExperience" id="txtExperience" class="input--style-5">
                    <option selected="selected" value="">Select Experience</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10+</option>
                  </select>
                  <span id="err_txtExperience" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Languages</div>
            <div class="value">
              <div class="input-group">
                 <div id="slectpicker" class="rs-select2 js-select-simple select--no-search"> 
                  <select name="txtLanguages[]" id="txtLanguages" multiple>
                    <option value="">Select Languages</option>
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Bengali">Bengali</option>
                    <option value="Marathi">Marathi</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Gujarati">Gujarati</option>
                    <option value="Urdu">Urdu</option>
                    <option value="Kannada">Kannada</option>
                    <option value="Odia">Odia</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Bhojpuri">Bhojpuri</option>
                    <option value="Other">Other</option>
                  </select>
                   <div class="select-dropdown"></div> 
                   <span id="err_txtLanguages" style="display:none" class="er_alert2"></span>
                 </div> 
              </div>
                <div id="showOne" class="full mt-5 myDiv" >
                    <div class="input-group-desc">
                        <input class="input--style-5" type="text" name="txtLanguagesName" id="txtLanguagesName">
                    </div>
                </div>
            </div>
          </div>
          <div class="form-row p-t-20">
            <label class="name">EXPERIENCE In To</label>
            <div class="value">
              <label class="checkbox-container m-r-55">Films
                <input class="checkbox" type="checkbox" name="txtExperienceInTo[]" id="txtExperienceInTo" value="Films">
              </label>
              <label class="checkbox-container m-r-55">Television
                <input class="checkbox" type="checkbox" name="txtExperienceInTo[]" id="txtExperienceInTo" value="Television">
              </label>
              <label class="checkbox-container m-r-55">Theatre
                <input class="checkbox" type="checkbox" name="txtExperienceInTo[]" id="txtExperienceInTo" value="Theatre">
              </label>
              <label class="checkbox-container">Other
                <input class="checkbox" type="checkbox" name="txtExperienceInTo[]" id="txtExperienceInTo" value="Other">
              </label>
              <span id="err_txtExperienceInTo" style="display:none" class="er_alert2"></span>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Email</div>
            <div class="value">
              <div class="input-group">
                <input class="input--style-5" type="email" name="txtEmail" id="txtEmail" placeholder="Email" onblur="this.value=this.value.toUpperCase()">
                <span id="err_txtEmail" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Contact Number</div>
            <div class="value">
              <div class="input-group">
                <input class="input--style-5" type="text" name="txtMobile" id="txtMobile" maxlength="10" placeholder="Contact Number">
                <span id="err_txtMobile" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>

          <div class="form-row after-add-more">
          	<label class="name">Video Url</label>
		    <div class="value">                                
		        <div class="form-group">
		             <input class="input--style-5" type="url" name="txtVideoUrl[]" id="txtVideoUrl" placeholder="Video URL">
		             <span id="err_txtVideoUrl" style="display:none" class="er_alert2"></span>
		        </div>
		    </div>

		    <div class="col-md-12">
		        <div class="change" style="float: right;">
		            <input type="button" class="add-more" value="+Add More">
		        </div>
		    </div>
		</div>

<!-- <div class="form-row after-add-more-image">
          <div class="form-row">
            <div class="name">Upload Photo</div>
            <div class="value">
              <div class="input-group">
                <input type="file" id="txtUploadFile" name="txtUploadFile"/>
                
                <span id="profilePicError" class="error"></span>
                <label class="label--desc">Note- Please upload a Professional Photograph for Further Activation of your account.</label><br><br><br>
                <div id="image_preview"></div>
                <span id="err_txtUploadFile_1" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>

<div class="col-md-12">
            <div class="change" style="float: right;">
                <input type="button" class="add-more-image" value="+Add More">
            </div>
        </div>
</div> -->

          <div class="form-row">
          <div class="form-row">
            <div class="name">Upload Photo</div>
            <div class="value">
              <div class="input-group">
                <div id="filediv"><input name="file[]" type="file" id="file"/></div><br/>
                <input type="button" id="add_more" class="upload" value="Add More Files"/>
                
                <span id="profilePicError" class="error"></span>
                <label class="label--desc1">Note- Please upload a Professional Photograph for Further Activation of your account.</label><br><br><br>
                <div id="image_preview"></div>
                <span id="err_txtUploadFile_1" style="display:none" class="er_alert2"></span>
              </div>
            </div>
          </div>
          





          <div class="form-row">
              <div class="name"> </div>
              <div class="value">
            <input class="checkbox" style="background:rgba(0,0,0,.6);" type="checkbox" name="txttermsAndCondition" id="txttermsAndCondition">
            <span class="float:right; color:##252525; font-size:12px !important;">Click here to Accept Terms and condition </span> 
            <span id="err_txttermsAndCondition" style="display:none" class="er_alert2"></span>
              <div style="width:100%; float:left;  margin-top:25px;">
            <!-- <button class="btn btn-danger" type="submit">Next</button> -->
            <div id="loader"></div>
            <input class="btn btn-danger" type="button" name="DetailsSubmitBtn" id="DetailsSubmitBtn" value="Save & Next" autocomplete="off"><br><br>
          </div>
          </div>
            </div>
        
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php');?>

<script type="text/javascript">

 $(document).ready(function(){
   $('#txtLanguages').on('change', function(){
        $.each($(this).val(), function( key, value ) {
            var language = value;
            if(language=='Other'){
                $("div.myDiv").hide();
                $("#showOne").show();
                
            }
        });
   });
});

function getCity(val){
  $.ajax({
  type: "POST",
  url: "ajax_update.php",
  data:'state_id='+val,
    success: function(data){
      $("#txtDistrict").html(data);
    }
  });
}

$('#txtUploadFile1').change(function () {
	var total_file=document.getElementById("txtUploadFile").files.length;
	$('#image_preview').html("");
	if(total_file <= 5){
	    var fileExtension = ['jpeg', 'jpg', 'png'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            $("#err_txtUploadFile_1").html("Only formats are allowed : "+fileExtension.join(', '));
            $("#err_txtUploadFile_1").css("display", "block");
            $("#txtUploadFile").val("");
        }else{
            for(var i=0;i<total_file;i++){
        		var form_data = new FormData();
        	    form_data.append('txtUploadFile', this.files[i]);
        	    $.ajax({
        	        url: "uploadFile.php?id=time()",
        	        data: form_data,
        	        type: 'POST',
        	        contentType: false,
        	        processData: false,
        	        success: function (data) {
        	            //console.log(data + "Aftab");
        	            $('#image_preview').append("<img src='tmpUploads/" + data + "'>");
        	        }
        	    });
            }
            $("#err_txtUploadFile_1").html("");
            $("#err_txtUploadFile_1").css("display", "block");
        }
	}else{
	    $("#txtUploadFile").val("");
	    $("#err_txtUploadFile_1").html("Sorry, you cannot upload more than five (5) image.");
	    $("#err_txtUploadFile_1").css("display", "block");
	}
	
});


jQuery(function($){ 
  $("#txtDateofBirth").datepicker({
    dateFormat :'dd/mm/yy',
    changeMonth: true,
    changeYear: true,
    maxDate: "+0M +0D",
    yearRange: '-100:-0',
  });
})

/*$("#profilePic").change(function () {
    var fileExtension = ['jpeg', 'jpg', 'png'];
    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
        $("#err_txtUploadFile").text("Only formats are allowed : "+fileExtension.join(', '));
        $("#profilePic").val("");
    }else{
        $("#err_txtUploadFile").text("");
    }
});*/

$(document).ready(function(){
    var pattern = /[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi;
    $('#FirstName,#LastName').keyup(function(){
        var firstName = $(this).val();
        var isSplChar = pattern.test(firstName);
        if(isSplChar){
            var no_spl_char = firstName.replace(pattern, '');
            $(this).val(no_spl_char);
        }
    });

    $('#txtMobile').blur(function(e) {
        if (validatePhone('contactNumber')) {
            $('#err_txtMobile').html('Valid Mobile Number');
            $('#err_txtMobile').css('color', 'green');
        }
        else {
            $('#err_txtMobile').html('Invalid Mobile Number');
            $('#err_txtMobile').css('color', 'red');
        }
    });

    function validatePhone(contactNumber) {
        var a = document.getElementById(contactNumber).value;
        var filter = /[1-9]{1}[0-9]{9}/;
        if(a.length <= 10){
            if (filter.test(a)) {
                return true;
            }
            else {
                return false;
            }
          }else{
          return false;
        }
    }

    $(document).ready(function() {
	    $("body").on("click",".add-more",function(){ 
	        var html = $(".after-add-more").first().clone();
	        $(html).find(".change").html("<label for=''></label><input type='button' class='remove' value='- Remove'>");
	        $(".after-add-more").last().after(html);	       
	    });

	    $("body").on("click",".remove",function(){ 
	        $(this).parents(".after-add-more").remove();
	    });
	});

    $(document).ready(function() {
      $("body").on("click",".add-more-image",function(){ 
          var html = $(".after-add-more-image").first().clone();
          $(html).find(".change").html("<label for=''></label><input type='button' class='remove' value='- Remove'>");
          $(".after-add-more-image").last().after(html);         
      });

      $("body").on("click",".remove",function(){ 
          $(this).parents(".after-add-more-image").remove();
      });
  });


    $("#txtWhoAreYou").on('change',function(){
      $('#loader').show();
      $("#txtWhoAreYoutResultOther").hide();
      var txtWhoAreYou = $("#txtWhoAreYou").val();
      if(txtWhoAreYou=="Others"){
            $("#txtWhoAreYoutResultOther").show();
            $("#txtWhoAreYoutResultOther").html('<label for="cars"></label><input class="input--style-5" name="txtWhoAreYouOther" type="text" id="txtWhoAreYouOther" style="width:458px;" placeholder="Enter Who Are You">');
          }
          else{
            $("#txtWhoAreYoutResultOther").hide();
            //$("#qualificationResult").html(data);
          }
          
          $('#loader').hide();
    });


})

history.pushState(null, null, location.href);
window.onpopstate = function () {
    history.go(1);
};


var abc = 0; //Declaring and defining global increement variable

$(document).ready(function() {

//To add new input file field dynamically, on click of "Add More Files" button below function will be executed
    $('#add_more').click(function() {
        $(this).before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                $("<input/>", {name: 'file[]', type: 'file', id: 'file'}),        
                $("<br/><br/>")
                ));
    });

//following function will executes on change event of file input to select different file 
$('body').on('change', '#file', function(){
            if (this.files && this.files[0]) {
                 abc += 1; //increementing global variable by 1
        
        var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
               
          var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
               
          $(this).hide();
                $("#abcd"+ abc).append($("<img/>", {id: 'img', src: 'x.png', alt: 'delete'}).click(function() {
                $(this).parent().parent().remove();
                }));
            }
        });

//To preview image     
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };

    $('#upload').click(function(e) {
        var name = $(":file").val();
        if (!name)
        {
            alert("First Image Must Be Selected");
            e.preventDefault();
        }
    });
});



</script>
<script src="js/select2.min.js"></script> 
<script src="js/global.js"></script>
<script src="js/function.js"></script>
<script src="js/jquery.validate.min.js"></script>
</body>
</html>

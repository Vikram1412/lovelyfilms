$(document).ready(function(){
    var reg_validation;
    $('#DetailsSubmitBtn').click(function(){
        var reg_validation              = 0;
        var txtWhoAreYou                = $("#txtWhoAreYou").val();
        var txtWhoAreYouOther           = $("#txtWhoAreYouOther").val();
        var txtFirstName                = $("#txtFirstName").val();
        var txtLastName                 = $("#txtLastName").val();
        var txtDateofBirth              = $("#txtDateofBirth").val();
        var txtHeight                   = $("#txtHeight").val();
        var txtWeight                   = $("#txtWeight").val();
        var txtGender                   = $('input[name="txtGender"]:checked').val();
        var txtCINTAAMembership         = $('input[name="txtCINTAAMembership"]:checked').val();
        var txtState                    = $("#txtState").val();
        var txtDistrict                 = $("#txtDistrict").val();
        var txtAddress                  = $("#txtAddress").val();
        var txtEduQualifications        = $("#txtEduQualifications").val();
        var txtExperience               = $("#txtExperience").val();
        var txtLanguages                = $('#txtLanguages').val();
        var txtLanguagesName            = $("#txtLanguagesName").val();
        var txtExperienceInTo           = $("#txtExperienceInTo").prop('checked');
        var txtEmail                    = $("#txtEmail").val();
        var txtMobile                   = $("#txtMobile").val();
        var txtVideoUrl                 = $("#txtVideoUrl").val();
        var txtUploadFile               = $("#txtUploadFile").val();
        var txttermsAndCondition        = $("#txttermsAndCondition").prop('checked');  
        //var txtExperienceInTo           = $('input[name="txtExperienceInTo"]:checked').val();

        //alert(txtExperienceInTo + "=txtExperienceInTo");

        if(txtWhoAreYou == ""){
            $("#err_txtWhoAreYou").html("Please select Who Are You");
            $("#err_txtWhoAreYou").css("display", "block");
            $("#txtWhoAreYou").focus();
            $('html, body').animate({ scrollTop: $("#txtWhoAreYou").offset().top }, 500);
            reg_validation = 1;
        }
        else if(txtWhoAreYou == "Others" && txtWhoAreYouOther == ""){
            $("#err_txtWhoAreYou").html("Please enter Who Are You");
            $("#err_txtWhoAreYou").css("display", "block");
            $("#txtWhoAreYouOther").focus();
            $('html, body').animate({ scrollTop: $("#txtWhoAreYouOther").offset().top }, 500);
            reg_validation = 1;
        }
        else{
            $("#err_txtWhoAreYou").html("");
        }

        if(txtFirstName == ""){
            $("#err_txtFirstName").html("Please Enter First Name");
            $("#err_txtFirstName").css("display", "block");
            $("#txtFirstName").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtFirstName").html("");
        }

        if(txtLastName == ""){
            $("#err_txtLastName").html("Please Enter Last Name");
            $("#err_txtLastName").css("display", "block");
            $("#txtLastName").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtLastName").html("");
        }

        if(txtDateofBirth == ""){
            $("#err_txtDateofBirth").html("Please select Date of Birth");
            $("#err_txtDateofBirth").css("display", "block");
            reg_validation = 1;
        }
        else{
            $("#err_txtDateofBirth").html("");
        }

        if(txtHeight == "" && (txtWhoAreYou == 'Actor' || txtWhoAreYou == 'Actress')){
            $("#err_txtHeight").html("Please select Height");
            $("#err_txtHeight").css("display", "block");
            $("#txtHeight").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtHeight").html("");
        }

        if(txtWeight == "" && (txtWhoAreYou == 'Actor' || txtWhoAreYou == 'Actress')){
            $("#err_txtWeight").html("Please enter Weight");
            $("#err_txtWeight").css("display", "block");
            $("#txtWeight").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtWeight").html("");
        }

        if(typeof txtGender === "undefined"){
            $("#err_txtGender").html("Please select Gender");
            $("#err_txtGender").css("display", "block");
            $("#txtGender").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtGender").html("");
        }

        if(typeof txtCINTAAMembership === "undefined"){
            $("#err_txtCINTAAMembership").html("Please select CINTAA Membership");
            $("#err_txtCINTAAMembership").css("display", "block");
            $("#txtCINTAAMembership").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtCINTAAMembership").html("");
        }

        if(txtState == ""){
            $("#err_txtState").html("Please select State");
            $("#err_txtState").css("display", "block");
            $("#txtState").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtState").html("");
        }

        if(txtDistrict == ""){
            $("#err_txtDistrict").html("Please select District");
            $("#err_txtDistrict").css("display", "block");
            $("#txtDistrict").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtDistrict").html("");
        }

        if(txtAddress == ""){
            $("#err_txtAddress").html("Please enter Address");
            $("#err_txtAddress").css("display", "block");
            $("#txtAddress").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtAddress").html("");
        }

        if(txtEduQualifications == ""){
            $("#err_txtEduQualifications").html("Please enter Education and Qualifications");
            $("#err_txtEduQualifications").css("display", "block");
            $("#txtEduQualifications").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtEduQualifications").html("");
        }

        if(txtExperience == ""){
            $("#err_txtExperience").html("Please select Experience");
            $("#err_txtExperience").css("display", "block");
            $("#txtExperience").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtExperience").html("");
        }

        if(txtLanguages == ""){
            $("#err_txtLanguages").html("Please select Languages");
            $("#err_txtLanguages").css("display", "block");
            $("#txtLanguages").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtLanguages").html("");
        }

        //alert(txtExperienceInTo + "=txtExperienceInTo");

        if(txtExperienceInTo == false){
            $("#err_txtExperienceInTo").html("Please select Experience In To");
            $("#err_txtExperienceInTo").css("display", "block");
            $("#txtExperienceInTo").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtExperienceInTo").html("");
        }


        if(txtEmail == ""){
            $("#err_txtEmail").html("Please enter Email");
            $("#err_txtEmail").css("display", "block");
            $("#txtEmail").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtEmail").html("");
        }

        if(txtMobile == ""){
            $("#err_txtMobile").html("Please enter Mobile");
            $("#err_txtMobile").css("display", "block");
            $("#txtMobile").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtMobile").html("");
        }

        if(txtVideoUrl == ""){
            $("#err_txtVideoUrl").html("Please enter Video Url");
            $("#err_txtVideoUrl").css("display", "block");
            $("#txtVideoUrl").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtVideoUrl").html("");
        }

        if(txtUploadFile == ""){
            $("#err_txtUploadFile_1").html("Please select photo");
            $("#err_txtUploadFile_1").css("display", "block");
            $("#txtUploadFile").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txtUploadFile_1").html("");
        }

        if(txttermsAndCondition == false){
            $("#err_txttermsAndCondition").html("Please Accept Terms and condition");
            $("#err_txttermsAndCondition").css("display", "block");
            $("#txttermsAndCondition").focus();
            reg_validation = 1;
        }
        else{
            $("#err_txttermsAndCondition").html("");
        }
        
        if(reg_validation == 0) {
            var siteurl   = $('#url').val();
            var FormValue  = $("#FormRegisterDetail").serialize();
            if(confirm('Are you sure the data entered in is correct. If yes click "OK". Otherwise click "CANCEL"')) {
                $('#loader').show();
                $("#FormRegisterDetail" ).submit();
            }
            
        }
        reg_validation = 0;
    });


    $('#txtWhoAreYou, #txtFirstName, #txtLastName, #txtDateofBirth, #txtHeight, #txtWeight, #txtGender, #txtCINTAAMembership, #txtState, #txtDistrict, #txtAddress, #txtEduQualifications,  #txtExperience, #txtLanguages, #txtExperienceInTo, #txtEmail, #txtMobile, #txtVideoUrl, #txtUploadFile, #txttermsAndCondition').on('change', function() {
        var txtattrid = $(this).attr('id');
        if(txtattrid!=""){
            $("#err_"+ txtattrid).css("display", "none");
        }
    });
    

})


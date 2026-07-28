$(".allowonlyAlphabets").on("keypress keyup blur", function (event) {
    $(this).val($(this).val().replace(/[^A-Za-z\s]/g, ''));
    if ((event.which != 65 || $(this).val().indexOf('.') != -1) && (event.which < 65 || event.which > 122)) {
        event.preventDefault();
    }
});
//Allow only Number with decimal
$(".allownumericwithdecimal").on("keypress keyup blur", function (event) {
    //this.value = this.value.replace(/[^0-9\.]/g,'');
    $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
});
//Allow only Number  without decimal
$(".allownumericwithoutdecimal").on("keypress keyup blur", function (event) {
    var thisval = $(this).val($(this).val().replace(/[^\d].+/, ""));
    var len = thisval.val();
    if ((event.which < 48 || event.which > 57 || len.length >= 12)) {
        event.preventDefault();
    }
});
//Allow Number with Three Digits
$(".decimalwiththreedigits").on("keypress keyup blur", function (event) {
    //this.value = this.value.replace(/[^0-9\.]/g,'');
    var thisval = $(this).val($(this).val().replace(/[^\d].+/, ""));
    var len = thisval.val();
    $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
    if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57 || len.length >= 3)) {
        event.preventDefault();
    }
});

function OnlyNumbers(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31
        && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
//function preventBack() { window.history.forward(); }
//setTimeout("preventBack()", 0);
//window.onunload = function () { null };
function onlyAlphabets(event) {

    var charCode = event.keyCode;

    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 8)

        return true;
    else
        return false;
}
function mobilevalidation(value, id) {
    $(".num").keypress(function (test){
if (test.which != 8 && test.which != 0 && (test.which < 48 || test.which > 57)) {
return false;
}
}); 
    errors = 0;
    var first_array = Array('6', '7', '8', '9');
    if (value.length <= 1) {

        for (i = 0; i < first_array.length; i++) {
            if (value == first_array[i]) {
                errors++;
            }
        }
    }
    else {
        var pattern = /^[6-9]{1}[0-9]{1,9}$/;
        if (pattern.test(value)) {
            errors++;
        }
    }
    if (errors > 0) {
        return true;
    }
    else {
        $("#" + id).val('');
    }
}

//var renderRecaptcha = function () {
//    grecaptcha.render('ReCaptchContainer', {
//        'sitekey': _site_key,
//        'callback': reCaptchaCallback,
//        theme: 'light', //light or dark    
//        type: 'image',// image or audio    
//        size: 'normal'//normal or compact    
//    });
//};

//var reCaptchaCallback = function (response) {
//    if (response !== '') {
//        $('#spnCaptcha').css('color', 'green').html('Success');
//    }
//};





function IsMobileNumber(event) {
    var mob = /^[1-9]{1}[0-9]{9}$/;
  //  var pattern = /^[6-9][0-9]{9}$/;

    if (!mob.test(event.value)) {
        txtmobile.focus();
        document.getElementById("txtmobile").focus();
        if (document.getElementById("lblmobile") != undefined) {
        document.getElementById("lblmobile").innerHTML = "Please enter a valid Mobile Number of 10 digits.";
        }
        else {
            $("#txtmobile").addClass('validation_error');
        }
        return false;
    }
    //if (!pattern.test(event.value)) {
    //    txtmobile.focus();
    //    document.getElementById("txtmobile").focus();
    //    document.getElementById("lblmobile").innerHTML = "Please enter a valid Mobile Number starting between 6 to 9.";

    //    return false;
    //}
    else {
        if (document.getElementById("lblmobile") != undefined) {

            document.getElementById("lblmobile").innerHTML = "";
        }
        else {
            $("#txtmobile").removeClass('validation_error');

        }
        return true;
    }


}

function checkEmail(event) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(event.value)) {
        if (document.getElementById("lblemail") != undefined) {
            document.getElementById("txtemail").focus();
            document.getElementById("lblemail").innerHTML = "Please enter a valid Email Id.";
        }
        else {
            $("#txtemail").addClass('validation_error');
        }
        return false;
    }
    else {
        if (document.getElementById("lblemail") != undefined) {

            document.getElementById("lblemail").innerHTML = "";
        }
        else {
            $("#txtemail").removeClass('validation_error');

        }
        return true
    }
}
    function custom_phone(id) {
        $("#" + id).intlTelInput({
            // whether or not to allow the dropdown
            allowDropdown: true,

            // if there is just a dial code in the input: remove it on blur, and re-add it on focus
            autoHideDialCode: false,

            // add a placeholder in the input with an example number for the selected country
            autoPlaceholder: "polite",

            // modify the auto placeholder
            customPlaceholder: "Mobile No",

            // append menu to specified element
            dropdownContainer: null,

            // don't display these countries
            excludeCountries: [],

            // format the input value during initialisation and on setNumber
            formatOnDisplay: true,

            // geoIp lookup function
            geoIpLookup: true,

            // inject a hidden input with this name, and on submit, populate it with the result of getNumber
            hiddenInput: "",

            // initial country
            initialCountry: "in",

            // localized country names e.g. { 'de': 'Deutschland' }
            localizedCountries: true,

            // don't insert international dial codes
            nationalMode: true,

            // display only these countries
            onlyCountries: [],

            // number type to use for placeholders
            placeholderNumberType: "MOBILE",

            // the countries at the top of the list. defaults to united states and united kingdom
            preferredCountries: [],

            // display the country dial code next to the selected flag so it's not part of the typed number
            separateDialCode: true,

            // specify the path to the libphonenumber script to enable validation/formatting
            utilsScript:
                "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/utils.js"
        });
}

function focus_requiredfields() {
    $('.required').each(function () {
        if ($(this).is("select")) {
            console.log($(this).find('option:selected').val());
            if ($(this).find('option:selected').val() =="0") {
                this.focus();
                return false;
            }
        }
        else {
            if ($(this).val() == '') {
                this.focus();
                return false;
            }
        }
    });
}
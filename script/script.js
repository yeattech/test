//Form Validation
var ErrorMsg = "";

function initialize(){
    var eForm = document.getElementById("enquiry_form");
    eForm.onsubmit = validateForm;
    displayitem()
}

function validateForm(){
    "use strict"; 
    var allOK = false;
    ErrorMsg = ""; // reset error message
    var firstOK = chkFirstName();
    var lastOK = chkLastName();
    var emailOK = chkEmail();
    var pnumberOK = chkPhoneNumber();
    var stateOK = chkState();
    var cityOK = chkCity();
    var addressOK = chkAddress();
    var postcodeOK = chkPostcode();
    var productOK = chkProduct();

    if (firstOK && lastOK && emailOK && pnumberOK && stateOK && cityOK && addressOK && postcodeOK && productOK){
        allOK = true;
    }
    else{
        alert(ErrorMsg);       //display error messages
        ErrorMsg = "";     // reset error message
        allOK = false;
    }

	var product = document.getElementById("product").value;
	sessionStorage.product = product;

    return result;
}

function chkFirstName(){
    var first_name = document.getElementById("first_name").value;
    var pattern = /^[a-zA-Z ]+$/ 
    var first_nameOK = true;
    if ((first_name.length == 0)){ 
        ErrorMsg = ErrorMsg + "Your first name cannot be blank\n"
        document.getElementById("first_name").style.borderColor = 'red';
        first_nameOK = false; 
    }
    else{
        if (!pattern.test(first_name)){
            ErrorMsg = ErrorMsg + "Your first name must only contain alphabet\n"
            document.getElementById("first_name").style.borderColor = 'red';
            first_nameOK = false;
        }
    }

    return first_nameOK;
}

function chkLastName(){
    var last_name = document.getElementById("last_name").value;
    var pattern = /^[a-zA-Z ]+$/ 
    var last_nameOK = true;
    if ((last_name.length == 0)){ 
        ErrorMsg = ErrorMsg + "Your last name cannot be blank\n"
        document.getElementById("last_name").style.borderColor = 'red';
        last_nameOK = false; 
    }
    else{
        if (!pattern.test(last_name)){
            ErrorMsg = ErrorMsg + "Your last name must only contain alphabet\n"
            document.getElementById("last_name").style.borderColor = 'red';
            last_nameOK = false;
        }
    }

    return last_nameOK;
}

function chkEmail(){
    var emailOK = false;
    var email = document.getElementById("email").value;
    var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]{1,4}$/;
    if (pattern.test(email)){
        emailOK = true;
    }
    else{ 
        emailOK = false;
        ErrorMsg = ErrorMsg + "Enter a valid email address\n"
        document.getElementById("email").style.borderColor = 'red';
    }
    return emailOK;
}

function chkPhoneNumber(){
    var phone_number = document.getElementById("phone_number").value;
    var pattern = /^[0-9.+]+$/
    var phoneOK = false;
	if (pattern.test(phone_number)){
		phoneOK = true;
	}
    else if ((phone_number.length == 0)){ 
        phoneOK = false;
        ErrorMsg = ErrorMsg + "Your phone number cannot be blank\n"
        document.getElementById("phone_number").style.borderColor = 'red';
    }
    else if (!pattern.test(phone_number)){
        phoneOK = false;
        ErrorMsg = ErrorMsg + "Your phone number must only contain number characters\n"
        document.getElementById("phone_number").style.borderColor = 'red';
    }
    return phoneOK;
}

function chkState(){
    var stateOK = false;
    var state = document.getElementById("state").value;
    if (state!="none"){
     stateOK = true;
    }
    else{
        stateOK = false;
        ErrorMsg = ErrorMsg + "Please select the state you live in\n"
        document.getElementById("state").style.borderColor = 'red';
    }
    return stateOK;
}

function chkCity(){
    var city = document.getElementById("city").value;
    var pattern = /^[a-zA-Z ]+$/ 
    var cityOK = false;

    if (pattern.test(city)){
		cityOK = true;
	}
    else if ((city.length == 0)){ 
        ErrorMsg = ErrorMsg + "Your city / town cannot be blank\n"
        document.getElementById("city").style.borderColor = 'red';
        cityOK = false; 
    }

    return cityOK;
}

function chkAddress(){
    var address = document.getElementById("address").value;
    var pattern = /^[a-zA-Z0-9 ]+$/ 
    var addressOK = false;
	if (pattern.test(address)){
		addressOK = true;
	}
    else if ((address.length == 0)){ 
        addressOK = false; 
        ErrorMsg = ErrorMsg + "Your address cannot be blank\n"
        document.getElementById("address").style.borderColor = 'red';
    }
    return addressOK;
}

function chkPostcode(){
    var postcode = document.getElementById("postcode").value;
    var pattern = /^[0-9]+$/ 
    var postcodeOK = false;
	if (pattern.test(postcode)){
		postcodeOK = true;
	}
    else if ((postcode.length == 0)){ 
        ErrorMsg = ErrorMsg + "Your postcode cannot be blank\n"
        document.getElementById("postcode").style.borderColor = 'red';
        postcodeOK = false; 
        }
    else if (!pattern.test(postcode)){
        ErrorMsg = ErrorMsg + "Your postcode must only contain number characters\n"
        document.getElementById("postcode").style.borderColor = 'red';
        postcodeOK = false;
    }

    return postcodeOK;
}

function chkProduct(){
	var selected = false;
	
	var product = document.getElementById("product").value;
	if (product!=""){
		selected = true;
	}
	else {
		selected = false;
		ErrorMsg = ErrorMsg + "Character & Mechanic cannot be blank\n";
        document.getElementById("product").style.borderColor = 'red';
	}
	return selected;
}


//transfer between pages
function displayitem(){
	document.getElementById("item").value = "RE: Enquiry on " + sessionStorage.getItem("item_id");
	document.getElementById("product").value = sessionStorage.getItem("item_id")
}

function storeitem(item_id){
	sessionStorage.setItem("item_id", item_id);

	window.location.replace("enquiry.html");
}

//transfer within pages
function storeProduct(productName){
	var options = ["Amuro Ray", "Char Aznable", "Kamille Bidan", "Judau Ashta", "Banagher Links", "RX-78-2 Gundam", "RX-93 ν Gundam", "Sazabi" , "Zeta Gundam", "ΖΖ Gundam", "Unicorn Gundam", "Kira Yamato", "Athrun Zala", "Cagalli Yula Athha", "Shinn Asuka", "Rey Za Burrel", "Strike Freedom Gundam", "∞ Justice Gundam", "Akatsuki Gundam", "Destiny Gundam", "Legend Gundam", "Setsuna F. Seiei", "Lockon Stratos (Neil Dylandy)", "Lockon Stratos (Lyle Dylandy)", "Allelujah Haptism", "Tieria Erde", "00 Raiser", "00 Qan［T］", "Gundam Zabanya", "Gundam Harute", "Raphael Gundam", "Sei Iori", "Aria von Reiji Asuna", "Tatsuya Yuuki/Meijin Kawaguchi III", "Sekai Kamiki", "Wilfrid Kijima", "Star Build Strike Gundam", "Gundam Exia Dark Matter", "Gundam Amazing Red Warrior", "Try Burning Gundam", "Transient Gundam"]
	
	options.forEach(array);
	
	function array(value){
		if (value == productName){
			sessionStorage.productIndex = options.indexOf(value);
		}
	}
}

function storeSub(){
	document.getElementById("product").selectedIndex = sessionStorage.productIndex;
	
	var product= document.getElementById("product").value;
	sessionStorage.item = product;
	document.getElementById("item").value =  sessionStorage.item;
}

function uclist(){
	var select = document.getElementById("product");
	var options = ["Amuro Ray", "Char Aznable", "Kamille Bidan", "Judau Ashta", "Banagher Links", "RX-78-2 Gundam", "RX-93 ν Gundam", "Sazabi" , "Zeta Gundam", "ΖΖ Gundam", "Unicorn Gundam"];
	
	for (var i = 0; i < options.length; i++){
		var opt = options[i];
		var el = document.createElement("option");
		el.textContent = opt;
		el.value = opt;
		select.appendChild(el);
	}
}

function list2(){
	var select = document.getElementById("product");
	var options = ["Kira Yamato", "Athrun Zala", "Cagalli Yula Athha", "Shinn Asuka", "Rey Za Burrel", "Strike Freedom Gundam", "∞ Justice Gundam", "Akatsuki Gundam", "Destiny Gundam", "Legend Gundam"];
	
	for (var i = 0; i < options.length; i++){
		var opt = options[i];
		var el = document.createElement("option");
		el.textContent = opt;
		el.value = opt;
		select.appendChild(el);
	}
}

function list3(){
	var select = document.getElementById("product");
	var options = ["Setsuna F. Seiei", "Lockon Stratos (Neil Dylandy)", "Lockon Stratos (Lyle Dylandy)", "Allelujah Haptism", "Tieria Erde", "00 Raiser", "00 Qan［T］", "Gundam Zabanya", "Gundam Harute", "Raphael Gundam"];
	
	for (var i = 0; i < options.length; i++){
		var opt = options[i];
		var el = document.createElement("option");
		el.textContent = opt;
		el.value = opt;
		select.appendChild(el);
	}
}

function list4(){
	var select = document.getElementById("product");
	var options = ["Sei Iori", "Aria von Reiji Asuna", "Tatsuya Yuuki/Meijin Kawaguchi III", "Sekai Kamiki", "Wilfrid Kijima", "Star Build Strike Gundam", "Gundam Exia Dark Matter", "Gundam Amazing Red Warrior", "Try Burning Gundam", "Transient Gundam"];
	
	for (var i = 0; i < options.length; i++){
		var opt = options[i];
		var el = document.createElement("option");
		el.textContent = opt;
		el.value = opt;
		select.appendChild(el);
	}
}

function change(){
	var product = document.getElementById("product").value;
	sessionStorage.product = product;
	document.getElementById("item").value = "RE: Enquiry on " + sessionStorage.product; 

}

window.onload = initialize;

//Back to top
window.addEventListener("scroll", function(){
    var scroll =  document.querySelector('.scrollTop');
    scroll.classList.toggle("active", window.scrollY > 200);
})

function scrollToTop(){
    window.scrollTo({
        top: 0,
    })
}


//Time Display
function display_c(){
    var refresh=1000; // Refresh rate in milli seconds
    mytime=setTimeout('display_ct()',refresh)
    }
    
    function display_ct() {
    var x = new Date()
    document.getElementById('ct').innerHTML = x;
    display_c();
     }
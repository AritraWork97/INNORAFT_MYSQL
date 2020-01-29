var empid = document.getElementById("empid");
var empcode = document.getElementById("empcode");
var sal = document.getElementById("empsal");
var form = document.getElementById("form-element");


var empname_validation = "";
var domain_validation = "";


empname.onkeypress = function() {
   return ((event.charCode > 64 && event.charCode < 91) ||(event.charCode > 96 && event.charCode < 123) || event.charCode == 95);
 }

 domain.onkeypress = function() {
    return ((event.charCode > 64 && event.charCode < 91) ||(event.charCode > 96 && event.charCode < 123));
 }

 sal.onkeypress = function() {
   return (event.charCode > 48 && event.charCode <= 57)
}

 form.onsubmit = function() {
  var empname_value = document.getElementById("empname").value;
  var domain_value = document.getElementById("empdomain").value;
  var empcode_value = document.getElementById("empcode").value;
  var sal = document.getElementById("empsal").value;

  if(empname_value.length <=1 || domain_value.length <=1 || empcode_value.length <=1 || sal.length < 25000) 
  {
     return false;
  } else {
     return true;
  }
 }
var empname = document.getElementById("empname");
var empid = document.getElementById("empid");
var emplastname = document.getElementById("emplastname");
var empmarks = document.getElementById("graduation_percentile");

var form = document.getElementById("form-element");


empname.onkeypress = function() {
   return ((event.charCode > 64 && event.charCode < 91) ||(event.charCode > 96 && event.charCode < 123) || event.charCode == 95);
 }

 emplastname.onkeypress = function() {
    return ((event.charCode > 64 && event.charCode < 91) ||(event.charCode > 96 && event.charCode < 123));
 }

 form.onsubmit = function() {
  var empname_value = document.getElementById("empname").value;
  var empid_value = document.getElementById("empid").value;
  var emplastname_value = document.getElementById("emplastname").value;
  var empmarks_value = document.getElementById("graduation_percentile").value;

  if(empname_value.length <=1 || empid_value.length <5 || emplastname_value.length <5
      || (empmarks_value > 100 || empmarks_value < 0))
  {
     return false;
  } else {
     return true;
  }
 }
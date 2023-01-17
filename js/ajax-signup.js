function signup_data() {
  var form_element = document.getElementsByClassName("input");
  var input = new FormData();
  
  for (var count = 0; count < form_element.length; count++) {
    input.append(form_element[count].name, form_element[count].value);
  }
  
  document.getElementById("submit").disabled = true;
  var ajax_request = new XMLHttpRequest();
  ajax_request.open("POST", "includes/process_data.inc.php");
  ajax_request.send(input);
  
  ajax_request.onreadystatechange = function() {
    if (ajax_request.readyState == 4 && ajax_request.status == 200) {
      document.getElementById("submit").disabled = false;
  
      var response = JSON.parse(ajax_request.responseText);
  
      if (response.success != "") {
        document.getElementById("user_signup").reset();
        document.getElementById("message").innerHTML = response.success;
        setTimeout(function() {
          document.getElementById("message").innerHTML = "";
        }, 10000);

        document.getElementById("fullName_error").innerHTML = "";
        document.getElementById("homeAddress_error").innerHTML = "";
        document.getElementById("emailAdd_error").innerHTML = "";
        document.getElementById("passWord_error").innerHTML = "";
        document.getElementById("passWord2_error").innerHTML = "";
      } 
      else {  // THIS WILL DISPLAY VALIDATION ERROR
        document.getElementById("fullName_error").innerHTML = response.fullName_error;
        document.getElementById("homeAddress_error").innerHTML = response.homeAddress_error;
        document.getElementById("emailAdd_error").innerHTML = response.emailAdd_error;
        document.getElementById("passWord_error").innerHTML = response.passWord_error;
        document.getElementById("passWord2_error").innerHTML = response.passWord2_error;
      }
    }
  };
}
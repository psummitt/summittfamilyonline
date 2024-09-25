const $ = selector => document.querySelector(selector);

const joinList = evt => {
    // get user entries from text boxes
    const inputEmail1 = $("#inputEmail1").value;
    const inputEmail2 = $("#inputEmail2").value;
    const emailTopic = $("#emailTopic").value;
    const message = $("#message").value;

    
    // check user entries
    let isValid = true;
    if (inputEmail1 == "") { 
        $("#email_1_error").textContent = "Email is required.";
        isValid = false;
    } else { 
        $("#email_1_error").textContent = ""; 
    }

    if (inputEmail1 != inputEmail2) { 
        $("#email_2_error").textContent = "Emails must match.";
        isValid = false;
    } else { 
        $("#email_2_error").textContent = ""; 
    }

    if (emailTopic == "") {
        $("#emailTopic_error").textContent = "A Topic is required.";
        isValid = false;
    } else { 
        $("#emailTopic_error").textContent = ""; 
    }

    if (message == "") {
        $("#message_error").textContent = "A message is required.";
        isValid = false;
    } else { 
        $("#message_error").textContent = ""; 
    }

    // cancel form submit if any user entries are invalid
    if ( !isValid ) {
        evt.preventDefault(); 
    }
};

const clearForm = () => {
    // clear text boxes
    $("#inputEmail_1").value = " ";
    $("#inputEmail_2").value = " ";
    $("#emailTopic").value = " ";
    $("#message").value = " ";

    // clear span elements
    $("#inputEmail_1_error").textContent = " ";
    $("#inputEmail_2_error").textContent = " ";
    $("#emailTopic_error").textContent = " ";
    $("#message_error").value = " "; 

    // set focus on first text box after resetting the form
    //$("#inputEmail_1").focus();
};

document.addEventListener("DOMContentLoaded", () => {
    // hook up click events for both buttons
    $("#join_list").addEventListener("click", joinList);
    //$("#clear_form").addEventListener("click", clearForm);

    // set focus on first text box after the form loads
    //$("#inputEmail_1").focus();
});

/* window.onload = function() {
    $("join_list").onclick = joinList;
    $("#inputEmail_1").focus();
}*/
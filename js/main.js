///////////////////
// Dropdown login
/////////////////// 
button_signin = document.getElementById("button-signin").
onclick = function() {myFunction1()};

function myFunction1() {
document.getElementById("signin-dropdown").classList.toggle("show");
}

////////////////////////
// Dropdown filter bags
////////////////////////
button_category = document.getElementById("button-category").
onclick = function() {myFunction2()};

function myFunction2() {
document.getElementById("category-dropdown").classList.toggle("show");
}

////////////////////////
// AJAX
////////////////////////

// Activate buttons with EventListener //

// Button GET-PICS-ALL //
document.getElementById("get-pics-all").addEventListener
("click", getPics);

function getPics(){
    console.log("button with id get-pics-all clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-all.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-BACK //


function getPicsBack(){
    console.log("button with id get-pics-back clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-back.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:

    document.getElementById("product-row-1").innerHTML = 
    this.responseText;  
    document.getElementById("get-pics-back").addEventListener
    ("click", getPicsBack);   
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-BELT //
// document.getElementById("get-pics-belt").addEventListener
// ("click", getPicsBack);

function getPicsBelt(){
    console.log("button with id get-pics-belt clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-belt.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
    document.getElementById("get-pics-belt").addEventListener
("click", getPicsBack);
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-DUFFLE //
// document.getElementById("get-pics-duffle").addEventListener
// ("click", getPicsDuffle);

function getPicsDuffle(){
    console.log("button with id get-pics-back clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-duffle.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
    document.getElementById("get-pics-duffle").addEventListener
("click", getPicsDuffle);
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-MESSENGER //
// document.getElementById("get-pics-messenger").addEventListener
// ("click", getPicsMessenger);

function getPicsMessenger(){
    console.log("button with id get-pics-back clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-messenger.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
    document.getElementById("get-pics-messenger").addEventListener("click", getPicsMessenger);
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}

// Button GET-PICS-TOTES //
// document.getElementById("get-pics-totes").addEventListener
// ("click", getPicsTotes);

function getPicsTotes(){
    console.log("button with id get-pics-back clicked");

    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-totes.php", true); 

    console.log("READYSTATE: ", xhr.readyState);  // readystate is a property of XHR
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;    
    document.getElementById("get-pics-totes").addEventListener
("click", getPicsTotes); 
            }
        }
    // IF you use Onload, then also create what to do with an error:
    xhr.onerror = function(){
    console.log("Request Error");
}
    xhr.send();  
}
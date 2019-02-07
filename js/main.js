////////////////////////
// AJAX
////////////////////////

// Activate buttons with EventListener
document.getElementById("show-all").addEventListener
("click", loadText1);

function loadText1(){
    console.log("button with id show-all clicked");

    
    // Create XHR object
    var xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/product-all.php", true); 
    console.log("READYSTATE: ", xhr.readyState);  
    xhr.onload = function() {
        console.log("READYSTATE: ", xhr.readyState);
        if(this.status == 200) {
    //   output to the DIV-id:
    document.getElementById("product-row-1").innerHTML = 
    this.responseText;     
            }
        }
    xhr.onerror = function(){
    console.log("Request Error");
}    
    xhr.send();  

}
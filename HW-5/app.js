

 

const menu = document.getElementById("fullMenu");
menu.addEventListener('submit', function() {
    
    let checkboxes = document.getElementsByTagName("input");
    let totalCost = document.getElementById("totalCost");
  
    let sum = 0;
    let fadeTime = 500; 

    for (i=0; i<checkboxes.length; i++) {
            
        if (checkboxes[i].type == 'checkbox') {

            if (checkboxes[i].checked) {
                
                //$("#totalCost").fadeOut(fadeTime);
                //$("#totalCost").fadeIn(fadeTime);

                sum = sum + parseFloat(checkboxes[i].value);
                
            }
        }
        
    }

    // set total cost
    totalCost.innerHTML = sum.toLocaleString('en-US', {
        style: 'currency',
        currency: 'USD',
    });
    event.preventDefault();

});

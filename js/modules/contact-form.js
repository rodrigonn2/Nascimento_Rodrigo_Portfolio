export function contactForm() {

    (() => {

        const form = document.querySelector("#contact_rodri"); 
        const feedBack = document.querySelector("#feedback"); 
    
        function regForm(event) {
            event.preventDefault();
            
            const thisform = event.currentTarget;
            const url = "/snd_email.php"; 
            const formdata = 
            `name=${thisform.elements.name.value}&email=${thisform.elements.email.value}&phone=${thisform.elements.phone.value}&message=${thisform.elements.message.value}`;  
            console.log(formdata);
    
            fetch(url, {
                method: "POST", 
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded" 
                },
                body: formdata 
            })
            
            .then(response => response.json())
            .then(response => {
                console.log(response); 
    
                feedBack.innerHTML = ""; 
                
               
                if (response.errors) { 
                    response.errors.forEach(error => {
                        const errorElement = document.createElement("p"); 
                        errorElement.textContent = error;
                        feedBack.appendChild(errorElement); 
                    });
                } else { 
                    form.reset(); 
                    const messageElement = document.createElement("p");
                    messageElement.textContent = response.message; 
                    feedBack.appendChild(messageElement); 
                }
                feedBack.scrollIntoView({behavior: 'smooth', block: 'end'}); 
            })
            .catch(error => {
                console.log(error);
                const errorMessage = document.createElement("p");
                errorMessage.textContent = "Whooops, it looks like you are either using an old browser or not connected to the internet."; 
                feedBack.appendChild(errorMessage); 
            });
        }
    
        form.addEventListener("submit", regForm); 
    
    })();
}

/* Had some code here to make different input fields appear or disappear but commented it out as it was not compliant
* with the unobtrusive JS design idea.
* But just saving it for future reference */

/* document.addEventListener("DOMContentLoaded", () => {

    radios= document.querySelectorAll('input[name="TypeOfListing"]')
    fullName=document.getElementById("privateUserField");
    shelterName=document.getElementById("petShelterField");
    email=document.getElementById("emailField");

    radios.forEach(radio =>{
        radio.addEventListener("change", () =>
            {
                if (radio.id === "TypePetShelter"){
                    shelterName.style.display = "block"
                    fullName.style.display = "none"
                    email.style.display = "block"
                }
                else if (radio.id === "TypeOtherUser"){
                    shelterName.style.display = "none"
                    fullName.style.display = "block"
                    email.style.display = "block"
                }
            }
        );
    });
}) */
/*
document.addEventListener("submit", function (event) {event.preventDefault()

    //forgot to add this first one to the migration, but it's not really important might just remove it
    let typeOfListing = document.querySelector('input[name="TypeOfListing"]:checked').value

    let name = document.getElementById("fullName").value;
    let email = document.getElementById("email").value;
    let address = document.getElementById("address").value;
    let city = document.getElementById("city").value;
    let postcode = document.getElementById("postcode").value;
    let petName = document.getElementById("petName").value;
    let petAge = document.getElementById("petAge").value;
    let petType = document.getElementById("type").value;
    let training = document.querySelector('input[name="training"]:checked').value
    let petDescription = document.getElementById("petDescription").value;

    //Just using placeholder image for now
    let image = "Assets/PlaceholderImg.svg"

    console.log(typeOfListing, name, email, address, city, postcode, petName, petAge, petType, training, petDescription, image);

    let entries = JSON.parse(localStorage.getItem("entries")) || [];

    entries.push({
        typeOfListing,
        name,
        email,
        address,
        city,
        postcode,
        petName,
        petAge,
        petType,
        training,
        petDescription,
        image,
    });

    localStorage.setItem("entries", JSON.stringify(entries));

    console.log(JSON.stringify(entries));
});
*/

const div = document.getElementById("ListingsContainer");
let entries = JSON.parse(localStorage.getItem("entries")) || [];

/*entries.forEach(entry => {
    const listing = document.createElement('div');
    listing.className = "Listings"; //Haven't styled this yet
    listing.innerHTML = `
        <h2>${entry.petName}</h2>
        <p>Price: ${entry.postcode}</p> <!--Uses postcode as price :P didn't have time to make it right-->
        <img src="${entry.image}" alt="${entry.petName}">
        <button class="ShowMoreButton">Show More</button>
        <button class="AdoptButton">Adopt</button>
    `; // Remember the `` at start and end

    div.append(listing);

    // didn't have time to create delete button
});*/


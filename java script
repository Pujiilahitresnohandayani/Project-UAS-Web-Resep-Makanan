function filterRecipes() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const container = document.getElementById('recipeContainer');
    const cards = container.getElementsByClassName('card');

    for (let i = 0; i < cards.length; i++) {
        const recipeTitle = cards[i].getElementsByClassName('card__text')[0].getElementsByTagName('h3')[0].innerText.toLowerCase();
        if (recipeTitle.includes(filter)) {
            cards[i].parentElement.style.display = ""; // Show the recipe card
        } else {
            cards[i].parentElement.style.display = "none"; // Hide the recipe card
        }
    }
}

// script.js
document.addEventListener('DOMContentLoaded', function() {
    // Example of adding event listeners, etc.
    console.log("JavaScript loaded");
});

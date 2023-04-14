// Get the add category button and the pop-up form
var addCategoryButton = document.querySelector("#add-category-button");
var popupForm = document.querySelector("#add-category-form");

// Get the cancel button and the form
var cancelButton = document.querySelector("#cancel-button");
var form = document.querySelector("#category-form");

// When the add category button is clicked, show the pop-up form
addCategoryButton.addEventListener("click", function(event) {
    event.preventDefault();
    popupForm.classList.add("show-popup-form");
});

// When the cancel button is clicked or the user clicks outside the form, hide the pop-up form
cancelButton.addEventListener("click", function(event) {
    event.preventDefault();
    popupForm.classList.remove("show-popup-form");
});

window.addEventListener("click", function(event) {
    if (event.target == popupForm) {
        popupForm.classList.remove("show-popup-form");
    }
});

// When the form is submitted, add the new category to the sidebar
form.addEventListener("submit", function(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Get the category name and description from the form
    var name = document.querySelector("#category-name").value;
    var description = document.querySelector("#category-description").value;

    // Create a new li element for the category
    var li = document.createElement("li");

    // Set the text content of the li element
    li.textContent = name;

    // If a description was provided, add it as a data attribute to the li element
    if (description) {
        li.setAttribute("data-description", description);
    }

    // Add the li element to the sidebar
    var sidebar = document.querySelector("#sidebar");
    sidebar.appendChild(li);

    // Hide the pop-up form
    popupForm.classList.remove("show-popup-form");

    // Reset the form fields
    form.reset();
});
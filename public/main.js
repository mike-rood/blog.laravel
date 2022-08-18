function toggleVisibility(elementId, buttonId) {
    let hideable = document.getElementById(elementId);
    let button = document.getElementById(buttonId);    
    hideable.classList.toggle('hidden');
    if (button.getAttribute('value') === 'Add new category') {
        button.setAttribute('value', 'Hide the form');
    } else {
        button.setAttribute('value', 'Add new category');
    }
}



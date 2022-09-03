function toggleVisibility(elementId, buttonId) {
    let hideable = document.getElementById(elementId);
    let button = document.getElementById(buttonId);    
    hideable.classList.toggle('hidden');
    if (button.getAttribute('value') === 'Quick create new category') {
        button.setAttribute('value', 'Hide the form');
    } else {
        button.setAttribute('value', 'Quick create new category');
    }
}

$(document).ready(function() {
    $('#summernote').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
    });
    bsCustomFileInput.init();
    $('.js-example-basic-multiple').select2();
});
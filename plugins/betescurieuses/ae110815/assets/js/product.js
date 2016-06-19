function loadImage(image) {
    var src = $(image).prop('src');
    var alt = $(image).prop('alt');
    $('#featured-image').prop('src', src).prop('alt', alt);
}
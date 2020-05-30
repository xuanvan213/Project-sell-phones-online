$('#index').submit(() => {
    checkCode();
    if ($('#index')[0].checkValidity() === false 
    	|| checkCode() === false) {
        event.preventDefault();
        event.stopPropagation();
    }
    $('#index').addClass('was-validated');
});
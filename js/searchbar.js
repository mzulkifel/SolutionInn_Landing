//Muhammad Zulkifel
//Function to Open Searchbar in Navigation Bar
function divFunction() {
    $('#mainNav').addClass('hide');
    $('#mainNav').removeClass('show');

    $('#mainNav2').addClass('show');
    $('#mainNav2').removeClass('hide');
    $('#navigationsearch').addClass('animated bounceIn');

}

//Function to close Searchbar in Navigation Bar
function closeFunction() {
    $('#mainNav2').addClass('hide');
    $('#mainNav2').removeClass('show');

    $('#mainNav').addClass('show');
    $('#mainNav').removeClass('hide');


}


//Function to run autocomplete on First Section
$('#search').on('keyup', function() {
    setTimeout(function() {
        $('#searchcompletion').addClass('show');
        $('#searchcompletion').removeClass('hide');
    }, 2);

});

//Function to turnoff autocomplete on First Section

$('#search').focusout(function() {
    $('#searchcompletion').addClass('hide');
    $('#searchcompletion').removeClass('show');
});


//Function to run autocomplete on Navigation Section
$('#navbarsearch').on('keyup', function() {
    setTimeout(function() {
        $('#searchcompletion2').addClass('show');
        $('#searchcompletion2').removeClass('hide');
    }, 2);

});

//Function to turnoff autocomplete on Navigation Section

$('#navbarsearch').focusout(function() {
    $('#searchcompletion2').addClass('hide');
    $('#searchcompletion2').removeClass('show');
});
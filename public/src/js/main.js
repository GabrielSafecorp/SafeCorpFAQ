$(function() {
    
    /*
    Autocomplete Search
    Documentation: https://github.com/devbridge/jQuery-Autocomplete
    */

    // Load countries then initialize plugin:
    $.ajax({
        url: 'assets/content/countries.txt',
        dataType: 'json'
    }).done(function (source) {

        var countriesArray = $.map(source, function (value, key) { return { value: value, data: key }; }),
            countries = $.map(source, function (value) { return value; });

        // Initialize autocomplete with custom appendTo:
        $('#autocomplete').autocomplete({
            lookup: countriesArray
        });

    });
    
    /*
    Article Voting
    */
    
    $(".vote-thanks").hide();
    
    $(".vote").click(function( event ){
        event.preventDefault();
        var $btnHeight = $(".vote").outerHeight();
        $(".vote").fadeOut(function(){
            $(".vote-thanks").css("height", $btnHeight).fadeIn();
        });
    });
    
    
});


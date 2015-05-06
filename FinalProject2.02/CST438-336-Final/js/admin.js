/**
* Created with CST 336.
* User: misarmiento
* Date: 2015-05-04
* Time: 06:36 PM
* To change this template use Tools | Templates.
*/
$(function() {
 
    Parse.$ = jQuery;
 
    // Replace this line with the one on your Quickstart Guide Page
   Parse.initialize("RohxsyYGrfbFJyo2xnetgt1mxrP0H0gRysZ4XvrV", "0en7QirXn3URQvHlUiZxBWEWTQushXy2PYVBXXKU");
    
   
 
});

 $('.form-signin').on('submit', function(e) {
 
    // Prevent Default Submit Event
    e.preventDefault();
 
    // Get data from the form and put them into variables
    var data = $(this).serializeArray(),
        username = data[0].value,
        password = data[1].value;
 
    // Call Parse Login function with those variables
    Parse.User.logIn(username, password, {
        // If the username and password matches
        success: function(user) {
            alert('Welcome!');
        },
        // If there is an error
        error: function(user, error) {
            console.log(error);
        }
    });
 
});
/**
* Created with CST 336.
* User: misarmiento
* Date: 2015-05-04
* Time: 10:07 PM
* To change this template use Tools | Templates.
*/

   // Add this line to every page, it sends objects to our database. This is the "Key".
    Parse.initialize("RohxsyYGrfbFJyo2xnetgt1mxrP0H0gRysZ4XvrV", "0en7QirXn3URQvHlUiZxBWEWTQushXy2PYVBXXKU");

    $("#logIn").click(function(){
    
    logInFun();
    });
        
    
    function logInFun(){
    
    var User = Parse.Object.extend("User");
        
    var user = new Parse.User();
        
    var username = $("#username").val();
    var password = $("#password").val();

      
    
        
    
    
     Parse.User.logIn(username, password, {
        success: function(user) {
            alert("Logged In as " + username);
            $(".success").show();
            window.location.replace("dashboard.html");
            // Do stuff after successful login.
        },
        error: function(user, error) {
            alert("error");
            alert(user + error);
            // The login failed. Check error to see why.
        }
    });  
        
      
        
        
        
        var currentUser = Parse.User.current();
        var sessionToken = Parse.User.current()._sessionToken;
                    
   
        
    
        
        document.write(currentUser);
        
    
    };
   
    

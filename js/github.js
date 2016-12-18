/**
 * github.js
 *
 * Handles github buttons for hithub apis
 */




// I've added jQuery to this pen

// When the page is ready
(function($) {

  $(document).ready(function(){

      $("#go").click(function() {
                $("#testDiv").animate({width: 400}, 300)
                .animate({height: 300}, 400)
                .animate({left: 200}, 500)
                .animate({top: "+=100", borderWidth: 10}, "slow")
            });
  });

  

    // I've added jQuery to this pen

    // When the page is ready
  $(document).ready(function(){

    // Our connection to the API
      $.ajax({
        url: 'https://api.github.com/users/rscarlett1',
        success: weGotTheData,
        error: somethingWentWrong
      });

      $("h1").prepend("Watch This! ");

      $("h1").append("<p>This loads information requested from Git Hub webside. </p>");
    
    });

function weGotTheData(response){
      
  // Look in the console for the data we got from the API
  console.log(response);
  
  // Clear what might be on the screen already
  $('#place-for-data-to-go').html('');

  // Let's loop over all the results and put them on the page
  //$.each(response, function(index, value){
    
    // Create the h1 element for the title
    $h1 = $('<h1>');
    // Add the title text to the h1 element
    $($h1).html(response.bio);
    
    // For the text
    $text = $('<p>');
    $($text).html(response.description);
    
    // The article itself
    $article = $('<article>');
    $($article).append($h1);
    $($article).append($text);
    
    // Put it on the screen
    $('#place-for-data-to-go').append($article);

    $('#place-for-data-to-go').css("border", "3px solid black");

    $('#place-for-data-to-go').css("padding", "10px");

    $()


  //});

    }

  // Couldn't connect to the API for some reason.
  // Is the URL wrong? Did we ask for information improperly?
  function somethingWentWrong(){
    $('#place-for-data-to-go').html('Could not connect to API');
  }

})( jQuery );

// I've added jQuery to this pen
(function($) {
// When the page is ready
  $(document).ready(function(){
    
    // Our connection to the API
    $.ajax({
      url: 'https://api.github.com/users/rscarlett1/repos',
      success: weGotTheData,
      error: somethingWentWrong
    });
    
  });



function weGotTheData(response){
      
  // Look in the console for the data we got from the API
  console.log(response);
  
  // Clear what might be on the screen already
  $('#place-for-data-to-go').html('');

  // Let's loop over all the results and put them on the page
  $.each(response, function(index, value){
    
    // Create the h1 element for the title
    $h1 = $('<h1>');
    // Add the title text to the h1 element
    $($h1).html(response[index].name);
    
    // For the text
    $text = $('<p>');
    $($text).html(response[index].description);
    
    // The article itself
    $article = $('<article>');
    $($article).append($h1);
    $($article).append($text);
    
    // Put it on the screen
    $('#place-for-data-to-go').append($article);
  });

}

// Couldn't connect to the API for some reason.
// Is the URL wrong? Did we ask for information improperly?
function somethingWentWrong(){
  $('#place-for-data-to-go').html('Could not connect to API');
}

})( jQuery );


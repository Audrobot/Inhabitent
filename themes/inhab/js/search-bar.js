(function($) {

  var searchInput = document.getElementById('header-search-input');
  var searchButton = document.getElementById('header-search-button');

  searchButton.onclick = function(event) {
    event.preventDefault();
    
    searchInput.classList.toggle('hide');

    $('.main-navigation .search-field').focus();

    return false;
  }


  $('.main-navigation .search-field').on('blur', function(){
    searchInput.classList.toggle('hide');
  });


  $(document).keypress(function( event ) {
    if ( event.which == 13 ) {
       event.preventDefault();
       $('.main-navigation .search-form').submit();
    }
  });
  
  // create an event for the enter key to submit form e.g.
  //  $('.search-form').submit();

  

})(jQuery);

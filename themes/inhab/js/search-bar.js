(function() {
  var searchButton = document.getElementById('header-search-button');
  searchButton.onclick = function(event) {
    event.preventDefault();
    var searchInput = document.getElementById('header-search-input');
    searchInput.classList.toggle('hide');
    return false;
  }
})();

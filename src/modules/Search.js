import $ from 'jquery'

//1. describe and create/initiate our object

class Search {
    constructor() {
        this.openButton = $(".js-search-trigger")
        this.closeButton = $(".search-overlay__close")
        this.searchOverlay = $(".search-overlay")

    // this.searchField = $("#search-term")
    this.events()
    // this.isOverlayOpen = false
    // this.isSpinnerVisible = false
    // this.previousValue
    // this.typingTimer
    
    }


//2.events
events() {
    this.openButton.on("click", this.openOverlay.bind(this))
    this.closeButton.on("click", this.closeOverlay.bind(this))
    // key pressed
    $(document).on("keyUp", "")
   
}

//3 methods (fuction, action...)

openOverlay() {
    this.searchOverlay.addClass("search-overlay--active")
    $("body").addClass("body-no-scroll");


}

closeOverlay() {
    this.searchOverlay.removeClass("search-overlay--active")
    $("body").removeClass("body-no-scroll");
}
}


export default Search



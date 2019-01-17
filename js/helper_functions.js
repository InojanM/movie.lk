function view() {

    var details = document.getElementById('view-page');

    if (details.style.display == "none") {
        details.style.display = "block";
    }
    else {
        details.style.display = "none";
    }


}

function add_movie() {

    var new_movie = document.getElementById('new_movie');
    if (new_movie.style.display === "none") {
        new_movie.style.display = "block";
    } else {
        new_movie.style.display = "none";
    }


}

function add_show_time() {
    var new_movie = document.getElementById('show_time');
    if (new_movie.style.display === "none") {
        new_movie.style.display = "block";
    } else {
        new_movie.style.display = "none";
    }
}


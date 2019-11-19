
// 1
window.onload = (e) => { document.querySelector("#search").onclick = searchButtonClicked };

// 2
let displayTerm = "";

function dataLoaded(e) {
    let xhr = e.target;
    let obj = JSON.parse(xhr.responseText);

    if (!obj.data || obj.data.length == 0) {
        document.querySelector("#status").innerHTML = "<b>No results found for '" + displayTerm + "'</b>";
        return;
    }

    let results = obj.data;
    document.querySelector("#resultamount").innerHTML = "<p><i>Here are " + results.length + " results for '" + displayTerm + "'</i></p>";
    let bigString = "";

    for (let i = 0; i < results.length; i++) {
        let smallURL = results[i].images.fixed_width_small.url;
        if (!smallURL) smallURL = "images/no-image-found.png";

        let url = results[i].url;
        let rating = results[i].rating;

        let line = `<div class='result'><img src='${smallURL}' title= '${results[i].id}'/>
                        <span><a target='_blank' href='${url}'>View on Giphy</a><p>Rating: ${rating.toUpperCase()}</p></span></div>`;

        bigString += line;
    }

    document.querySelector("#content").innerHTML = bigString;
    document.querySelector("#status").innerHTML = "<b>Success!</b>";
}

function dataError(e) {
    console.log("An error occurred");
}

function getData(url) {
    let xhr = new XMLHttpRequest();
    xhr.onload = dataLoaded;
    xhr.onerror = dataError;
    xhr.open("GET", url);
    xhr.send();
}

// 3
function searchButtonClicked() {
    let url = "https://api.giphy.com/v1/gifs/search?api_key=dc6zaTOxFJmzC";

    term = document.querySelector("#searchterm").value;
    displayTerm = term;

    term = term.trim();
    term = encodeURIComponent(term);

    if (term.length < 1) return;

    url += "&q=" + term;
    url += "&limit=" + document.querySelector("#limit").value;
    document.querySelector("#status").innerHTML = "<b>Searching for '" + displayTerm + "'</b><img src='media/spinner.gif' alt=''>";
    getData(url);
}
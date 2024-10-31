let input = document.querySelector("input");
let results = document.querySelector(".searchResult");
let url = "/api/books/search";

async function getData(url) {
    let response = await fetch(url);
    let data = await response.json();
    return data;
}

input.addEventListener("input", () => {
    getData(url).then(
        (data) =>
            function () {
                results.innerHTML = "";
                results.innerHTML = `<div>${data}</div>`;
            }
    );
});

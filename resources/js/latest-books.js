"use strict";

const url = "/api/books/latest";

async function getData(url) {
    document.getElementById("latest-books").innerHTML = "LOADING DATA";
    const response = await fetch(url);
    const data = await response.json();
    console.log(data);
    document.getElementById("latest-books").innerHTML = data
        .map((item) => {
            return `<li>${item.title}</li>
      <img src='${item.image}'>`;
        })
        .join("");
}

getData(url);

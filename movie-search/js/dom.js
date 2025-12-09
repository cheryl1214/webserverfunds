
export function renderMovie(data) {
  const resultDiv = document.getElementById("result");

  if (data.Response === "False") {
    resultDiv.innerHTML = `<p>Movie not found.</p>`;
    return;
  }

  resultDiv.innerHTML = `
    <div class="movie-title">${data.Title} (${data.Year})</div>
    <div class="movie-plot">${data.Plot}</div>
    <img src="${data.Poster}" alt="Movie Poster" style="margin-top:10px; max-width:200px;">
  `;
}

export function renderError(message) {
  document.getElementById("result").innerHTML = `<p class="error">${message}</p>`;
}
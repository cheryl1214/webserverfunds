import { fetchMovie } from "./api.js";
import { renderMovie, renderError } from "./dom.js";

document.getElementById("searchBtn").addEventListener("click", async () => {
  const movieTitle = document.getElementById("movieInput").value.trim();

  if (!movieTitle) {
    renderError("Please enter a movie title.");
    return;
  }

  try {
    const data = await fetchMovie(movieTitle);
    renderMovie(data);
  } catch {
    renderError("Something went wrong. Please try again.");
  }
});
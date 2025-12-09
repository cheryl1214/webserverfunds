import { API_KEY, BASE_URL } from "../config.js";

export async function fetchMovie(title) {
  try {
    const response = await fetch(`${BASE_URL}?apikey=${API_KEY}&t=${encodeURIComponent(title)}`);
    if (!response.ok) throw new Error("Network response was not ok");
    const data = await response.json();
    return data;
  } catch (error) {
    console.error("API fetch error:", error);
    throw error;
  }
}
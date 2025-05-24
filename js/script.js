document.addEventListener("DOMContentLoaded", function () {
  const filmContainer = document.getElementById("filmContainer");
  const apiKey = "ece0ebb5";

  // Sevdiğin filmlerin IMDb ID'leri (örnek olarak)
  const imdbIDs = ["tt3896198", "tt4154796", "tt0133093", "tt1375666"];

  imdbIDs.forEach(id => {
    fetch(`https://www.omdbapi.com/?apikey=${apiKey}&i=${id}`)
      .then(response => response.json())
      .then(data => {
        if (data.Response === "True") {
          const filmCard = `
            <div class="col-md-3">
              <div class="card h-100">
                <img src="${data.Poster}" class="card-img-top" alt="${data.Title}" />
                <div class="card-body">
                  <h5 class="card-title">${data.Title}</h5>
                  <p class="card-text">${data.Plot.substring(0, 100)}...</p>
                  <p><strong>IMDb:</strong> ${data.imdbRating}</p>
                </div>
              </div>
            </div>
          `;
          filmContainer.innerHTML += filmCard;
        } else {
          console.error("Film bulunamadı:", data.Error);
        }
      })
      .catch(error => console.error("Hata oluştu:", error));
  });
});


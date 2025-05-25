const playerSlice = () => {
    document.addEventListener("DOMContentLoaded", () => {
        const container = document.getElementById("trendingContent");

            fetch("get_songs.php")
                .then(res => res.json())
                .then(data => {
                    container.innerHTML = "";

                    data.forEach(song => {
                        const box = document.createElement("div");
                        box.className = "trending_box";
                        box.innerHTML = '<img src="img/${song.song_img}" alt="${song.song_name}">'
                                        '<h3 class="title">${song.song_name}</h3>'
                                        '<p class="singer">${song.singer}</p>';
                                        container.appendChild(box);
                    });
                })
                .catch(err => 
                    console.error("Failed to load songs", err));
    });
}

export default playerSlice;
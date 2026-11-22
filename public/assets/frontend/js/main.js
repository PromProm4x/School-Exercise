document.addEventListener('DOMContentLoaded', () => {
    const newsContainer = document.getElementById('news-container');
    
    // Sample news data
    const newsData = [
        {
            title: "Cambodia towards Cashew Empire: 3 Modern Communities Formed",
            category: "Economy",
            date: "May 27, 2026",
            image: "assets/news1.png"
        },
        {
            title: "Vietnam: Video captures car falling into river as bridge collapses",
            category: "Regional",
            date: "May 26, 2026",
            image: "assets/news2.jpg"
        },
        {
            title: "Disney faces heavy criticism over Snow White remake",
            category: "Entertainment",
            date: "May 25, 2026",
            image: "assets/news3.jpg"
        },
        {
            title: "8 years later, Lim Darareach looks more handsome than ever",
            category: "Entertainment",
            date: "May 24, 2026",
            image: "assets/news4.jpg"
        },
        {
            title: "Smart and talented! Sopheak Kosoma has these special traits",
            category: "Life & Society",
            date: "May 23, 2026",
            image: "assets/news1.png"
        },
        {
            title: "Olmo shines in Barcelona debut, helping win 2-1",
            category: "Sports",
            date: "May 22, 2026",
            image: "assets/news2.jpg"
        }
    ];

    // Function to render news cards
    function renderNews() {
        newsContainer.innerHTML = newsData.map(news => `
            <div class="col-md-6 col-lg-4">
                <a href="detail.html" class="text-decoration-none text-dark">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="${news.image}" class="card-img-top object-fit-cover" alt="${news.title}" style="height: 200px;">
                        <div class="card-body">
                            <span class="badge bg-light text-danger mb-2">${news.category}</span>
                            <h6 class="card-title text-dark mb-2">${news.title}</h6>
                            <p class="card-text small text-muted">${news.date}</p>
                        </div>
                    </div>
                </a>
            </div>
        `).join('');
    }

    renderNews();
});

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gallery</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: "Segoe UI", sans-serif;
      background: #f9f9f9;
      color: #333;
    }

    .main-gallery-section {
      padding: 60px 20px;
      max-width: 1200px;
      margin: auto;
    }

    .main-gallery-title {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 10px;
      font-weight: bold;
      color: #222;
    }

    .main-gallery-subtitle {
      text-align: center;
      color: #777;
      font-size: 1.1rem;
      margin-bottom: 40px;
    }

    .main-gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }

    .main-gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      background: #fff;
      transition: transform 0.3s ease;
    }

    .main-gallery-item img {
      width: 100%;
      height: 240px;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }

    .main-gallery-item:hover img {
      transform: scale(1.08);
    }

    .main-gallery-caption {
      position: absolute;
      bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      width: 100%;
      padding: 10px 15px;
      font-size: 1rem;
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .main-gallery-item:hover .main-gallery-caption {
      opacity: 1;
    }

    .main-gallery-button {
      display: block;
      text-align: center;
      margin: 40px auto 0;
      padding: 12px 30px;
      background-color: #0066ff;
      color: #fff;
      font-weight: bold;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease;
      max-width: fit-content;
      cursor: pointer;
      border: none;
    }

    .main-gallery-button:hover {
      background-color: #004bcc;
    }

    @media screen and (max-width: 480px) {
      .main-gallery-caption {
        font-size: 0.9rem;
        padding: 8px 12px;
      }
    }
  </style>
</head>
<body>

  <section class="main-gallery-section">
    <h2 class="main-gallery-title">Our Gallery</h2>
    <p class="main-gallery-subtitle">Take a look at some of our recent work</p>

    <div class="main-gallery-grid" id="galleryGrid">
      @foreach($images as $image)
        <div class="main-gallery-item">
          <img src="{{ asset('uploads/gallery/' . $image->filename) }}" alt="{{ $image->title }}">
          <div class="main-gallery-caption">{{ $image->title }}</div>
        </div>
      @endforeach
    </div>

    <button id="loadMoreBtn" class="main-gallery-button">Load More</button>
  </section>

  <script>
    let offset = 12;

    document.getElementById('loadMoreBtn').addEventListener('click', function () {
      fetch(`/gallery/load-more?offset=${offset}`)
        .then(response => response.json())
        .then(data => {
          if (data.html.trim() !== '') {
            document.getElementById('galleryGrid').insertAdjacentHTML('beforeend', data.html);
            offset += 6;
          } else {
            document.getElementById('loadMoreBtn').innerText = 'No More Images';
            document.getElementById('loadMoreBtn').disabled = true;
          }
        })
        .catch(err => console.error('Load more failed:', err));
    });
  </script>

</body>
</html>

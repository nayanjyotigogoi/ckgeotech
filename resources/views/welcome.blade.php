<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Know More About the Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .container.projects_know_more {
      max-width: 1200px;
      margin: auto;
      padding: 20px;
    }

    .banner.projects_know_more {
      text-align: center;
      background: linear-gradient(to right, #009688, #00796b);
      color: white;
      padding: 50px 20px;
      border-radius: 8px;
    }

    .banner.projects_know_more h1 {
      margin: 0;
      font-size: 36px;
    }

    .subtitle.projects_know_more {
      font-size: 18px;
      margin-top: 10px;
    }

    .project-content.projects_know_more {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      margin-top: 40px;
    }

    .project-left.projects_know_more {
      flex: 1 1 45%;
    }

    .project-left.projects_know_more img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .image-gallery.projects_know_more {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 20px;
    }

    .image-gallery.projects_know_more img {
      width: calc(50% - 10px);
      height: auto;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      object-fit: cover;
    }

    .project-details.projects_know_more {
      flex: 1 1 50%;
    }

    .project-details.projects_know_more h2 {
      font-size: 28px;
      margin-bottom: 10px;
    }

    .project-details.projects_know_more p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 15px;
    }

    .project-details.projects_know_more h3 {
      margin-top: 20px;
      font-size: 20px;
    }

    .back-btn.projects_know_more {
      display: inline-block;
      margin-top: 30px;
      color: #00796b;
      text-decoration: none;
      font-weight: bold;
    }

    .back-btn.projects_know_more:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 768px) {
      .project-content.projects_know_more {
        flex-direction: column;
      }

      .image-gallery.projects_know_more img {
        width: 48%;
      }
    }
  </style>
</head>

<body>
  <div class="container projects_know_more">
    <div class="banner projects_know_more">
      <h1 id="project-title">Geo Bag Erosion Control Project</h1>
      <p class="subtitle projects_know_more">A breakthrough in sustainable shoreline protection</p>
    </div>

    <div class="project-content projects_know_more">
      <div class="project-left projects_know_more">
        <img src="images/geo-bags-project.jpg" alt="Main Project Image">
        <h3>Project Gallery</h3>
        <div class="image-gallery projects_know_more">
          <img src="images/project1.jpg" alt="Geo bag project image 1">
          <img src="images/project2.jpg" alt="Geo bag project image 2">
          <img src="images/project3.jpg" alt="Geo bag project image 3">
          <img src="images/project4.jpg" alt="Geo bag project image 4">
          <img src="images/project5.jpg" alt="Geo bag project image 5">
        </div>
      </div>

      <div class="project-details projects_know_more">
        <h2>Project Overview</h2>
        <p>
          This project utilizes high-strength Geo Bags for riverbank reinforcement, protecting against erosion
          while maintaining ecological balance. The bags are filled with local soil and stacked to form a stable,
          permeable barrier that adapts to water flow and environmental stress.
        </p>

        <h3>Detailed Description</h3>
        <p>
          Geo Bags are crucial for eco-friendly shoreline protection. They are highly durable and resist erosion
          during high water flow. In this project, layers of geo bags were positioned to create a protective slope
          that reduces the impact of river currents on the bank soil.
        </p>

        <h3>Project Implementation</h3>
        <p>
          The bags were filled with locally sourced sand and sewn shut on-site. They were then arranged in a
          staggered formation, allowing water to pass while securing the soil. This method required minimal
          machinery and used primarily local manpower.
        </p>

        <h3>Outcomes</h3>
        <p>
          The project successfully reduced erosion in the affected region by over 85%. The site has remained intact
          after two seasonal floods, and vegetation has begun to reappear around the geo bags, promoting a healthier
          ecosystem.
        </p>

        <a href="/" class="back-btn projects_know_more">← Back to Projects</a>
      </div>
    </div>
  </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FTLDY0M5Z8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-FTLDY0M5Z8');
  </script>
  <!-- End Google Analytics -->

  
  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
  <div class="container">

    <h1><a href="index.html">Zain Ul Abdin Siyal</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
    <h2 id="typing-text"></h2>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link active" href="index.html">Home</a></li>
        <li><a class="nav-link" href="index.html#about">About</a></li>
        <li><a class="nav-link" href="index.html#education-experience">Resume</a></li> <!-- Renamed tab -->
        <li><a class="nav-link" href="index.html#projects">Projects & Publications</a></li>
        <li><a class="nav-link" href="index.html#trainings">Trainings</a></li>
        <li><a class="nav-link" href="index.html#achievements">Achievements</a></li> <!-- New Achievements tab -->
        <li><a class="nav-link" href="index.html#testimonials">Testimonials</a></li>
        <li><a class="nav-link" href="index.html#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->    

    <div class="social-links">
      <a href="https://www.linkedin.com/in/zain-ul-abdin-siyal-95bb23123/" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
      <a href="https://github.com/Zain1443" class="github" target="_blank"><i class="bi bi-github"></i></a>
      <a href="https://drive.google.com/file/u/2/d/1e3SFuNC98-cJsRZcHOJ4EfBeqzvV6G4W/view?usp=drive_open&edoph=true" class="resume" target="_blank"><i class="bi bi-file-earmark-pdf"></i></a>
    </div>

  </div>
</header><!-- End Header -->



<script>
  // Define the words with special styling
  var words = [
    "I'm",
    "a",
    "passionate",
    "<span class='green-bold'>Mechanical</span>",
    "<span class='green-bold'>Engineer</span>",
    "and",
    "a",
    "<span class='green-bold'>GIS</span>",
    "<span class='green-bold'>Analyst!</span>"
  ];

  // Get the element where the text will be typed
  var typingTextElement = document.getElementById('typing-text');

  // Define the typing speed in milliseconds (adjust as needed)
  var speed = 400;

  // Initialize index
  var index = 0;

  // Start typing animation
  function type() {
    if (index < words.length) {
      typingTextElement.innerHTML += words[index] + " ";
      index++;
      setTimeout(type, speed);
    }
  }

  // Start the typing animation
  type();
</script>

<!-- End Header -->




<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>About</h2>
      <p>About Myself</p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="assets/img/me.jpg" class="img-fluid" alt="Zain ul Abdin Siyal">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0">
        <p>
          I am a dedicated and driven individual, with a bachelor’s degree in Mechanical Engineering and a master's degree in Geographic Information Science from the University of Minnesota, Twin Cities. This educational background has helped me form a rich and solid foundation, blending the precision of engineering with the spatial intelligence of geospatial technologies. Building upon this foundation, I am eager to delve deeper into the field of natural resources management, exploring complex spatial relationships and contributing to the advancement of knowledge in this dynamic and interdisciplinary domain.
          <br><br>
          My engineering experience has given me a strong foundation in problem-solving, multitasking, and project management. I have worked on several projects, from ensuring gas pipeline integrity through a rigorous maintenance, inspection, and monitoring program to implementing GIS to identify suitable right of way locations for new pipeline installation. Through that, I got the opportunity to collaborate with cross-functional teams to identify and resolve issues at hand. I also gained extensive experience in conducting technical evaluations and inspections of pressure gauges, electrodes, gaskets, and pipes sourced from various vendors, consistently upholding the highest standards of quality and reliability. Through orchestrating comprehensive training sessions on the integration of GIS in pipeline maintenance work, I've not only honed my own skills but have also empowered my team to leverage this powerful tool to its fullest potential. These experiences have honed my ability to work in a group, communicate ideas effectively, and meet deadlines. 
          <br><br>
          During my MGIS program, I developed proficiency in using GIS software, as well as some experience in programming languages such as Python and SQL. I have completed numerous projects, from Stormwater Study Area Prioritization Analysis to Visual Exploration of Spatial-Temporal Dynamics of Air Quality using Volunteered Geographic Information. One of my most notable projects was when I integrated GIS and Multi-Criteria Decision Analysis to identify optimal sites for Combined Cycle Power Plants based on predefined criteria. The project involved data wrangling, analysis, historical map analysis, image georeferencing, and creating a GIS database from various sources that includes USGS. Additionally, I implemented Python scripting to build an ETL, automating geoprocessing tasks for a faster, more efficient, and scalable analysis making it easier to repeat with updated data. Lastly, my research interests are anchored in deterministic suitability analysis, a field where I believe GIS plays an important role in systematically selecting optimal locations for projects based on certain criteria and preferences. This approach, applied in engineering contexts, addresses challenges by considering factors such as environmental considerations, infrastructure planning, and logistical efficiency.
          <br><br>
          Overall, my diverse background, strong problem-solving skills, proficiency in GIS, and passion for continuous learning position me to make meaningful contributions. I am genuinely excited about the opportunities that lie ahead and eagerly look forward to collaborating with professionals who share a similar passion for leveraging mechanical engineering knowledge and geospatial technologies to drive positive change.
        </p>
      </div>
    </div>
     

  </div>
</section><!-- End About Section -->



<!-- ======= Resume Section ======= -->
<style>
  /* Style for the timeline */
  .education-experience-item::before {
    content: "";
    position: absolute;
    top: 15; /* Adjusted for proper placement */
    left: calc(50% + 10px); /* Adjusted to start after the section title */
    width: 2px;
    height: 10%; /* Adjust the height as per your requirement */
    background-color: #008000; /* Green color */
    transform: translateX(-50%);
    transition: opacity 0.3s ease; /* Smooth transition for opacity */
  }

  /* Hide the green line on hover */
  .education-experience-item:hover::before {
    opacity: 0; /* Hide the green line on hover */
  }

  /* Hover effect */
  .education-experience-item {
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease; /* Transition for all properties */
  }

  .education-experience-item:hover {
    box-shadow: 0 6px 12px rgba(249, 248, 248, 0.2);
    background-color: #f9f9f91b; /* Change background color on hover */
    transform: translateY(-5px); /* Add a slight upward movement on hover */
  }

  /* Add a smooth transition for the background color change */
  .education-experience-item {
    transition: background-color 0.3s ease; /* Only transition for background color */
  }
</style>

<section id="education-experience" class="education-experience">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2> <!-- Renamed from "Education & Experience" to "Resume" -->
      <p>Check My Academic Background and Professional Journey</p>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <h3 class="education-experience-title">Education</h3>
        <div class="education-experience-item">
          <h4 style="color: #008000;">Master’s in Geographic Information Science</h4>
          <p><em style="font-style: italic;">University of Minnesota, Twin Cities, United States</em></p>
          <p><em style="font-style: italic;">Sept 2022 – May 2024</em></p>
          <ul>
            <li>Built a robust GIS foundation through diverse individual and group projects including geospatial visualization, flood analysis, and air quality data manipulation.</li>
            <li>Developed effective communication skills for presenting complex ideas both verbally and in writing.</li>
            <li>Enhanced project management, teamwork, and presentation skills through volunteering for student organizations.</li>
            <li>Served on boards of student organizations and worked as a Student Assistant at various GIS conferences, including the Esri User Conference in 2023.</li>
          </ul>
        </div>
        <div class="education-experience-item">
          <h4 style="color: #008000;">Bachelor’s in Mechanical Engineering</h4>
          <p><em style="font-style: italic;">Mehran University of Engineering and Technology, Jamshoro, Pakistan</em></p>
          <p><em style="font-style: italic;">Jan 2014 – Dec 2017</em></p>
          <ul>
            <li>Developed a comprehensive understanding of core subjects including Thermodynamics, Fluid Mechanics, and Heat & Mass Transfer, alongside specialized courses like Renewable Energy & Emerging Technologies and Thermal Power Plants.</li>
            <li>Gained hands-on experience through internships at mega-scale thermal power plants.</li>
            <li>Completed a Final-year thesis project on designing and fabricating a solar-powered Stirling engine using concentrating solar technology.</li>
            <li>Participated actively in extracurricular activities, including serving as the captain of the University cricket team and volunteering at conferences and workshops.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <h3 class="education-experience-title">Experience</h3>
        <div class="education-experience-item">
          <h4 style="color: #008000;">Teaching Assistant</h4>
          <p><em style="font-style: italic;">University of Minnesota, Twin Cities</em></p>
          <p><em style="font-style: italic;">Jan 2024 - May 2024</em></p>
          <ul>
            <li>Graded and provided constructive feedback to students in the BSE capstone class.</li>
            <li>Created a supportive environment through drop-in sessions for course-related questions and general check-ins.</li>
          </ul>
        </div>
        <div class="education-experience-item">
          <h4 style="color: #008000;">GIS Design and Engineering Intern</h4>
          <p><em style="font-style: italic;">City of Minneapolis</em></p>
          <p><em style="font-style: italic;">Jun 2023 - Dec 2023</em></p>
          <ul>
            <li>Applied GIS skills to real-world contexts, contributing to sustainable practices and flood mitigation projects.</li>
            <li>Collaborated with engineers to export hydraulic and hydrologic models using PCSWMM software.</li>
            <li>Employed ArcGIS Online and Pro for spatial analysis, including overlay techniques, map algebra, and tessellations for decision-making.</li>
          </ul>
        </div>
        <div class="education-experience-item">
          <h4 style="color: #008000;">Board Member</h4>
          <p><em style="font-style: italic;">GIS Student Organization (GISS)</em></p>
          <p><em style="font-style: italic;">Oct 2022 - May 2024</em></p>
          <ul>
            <li>Spearheaded grant applications and managed financial workflows.</li>
            <li>Orchestrated professional development events, including the GIS Career and Networking Fair.</li>
            <li>Fostered community through initiatives like PickleMingle with GISSO and collaborated with other student organizations.</li>
          </ul>
        </div>
        <div class="education-experience-item">
          <h4 style="color: #008000;">Assistant Engineer (Pipeline Maintenance)</h4>
          <p><em style="font-style: italic;">Sui Southern Gas Company Ltd.</em></p>
          <p><em style="font-style: italic;">Apr 2019 - Jul 2022</em></p>
          <ul>
            <li>Digitized underground gas pipeline infrastructure using ArcGIS and Topographer, managing detailed attribute databases for accurate tracking and analysis.</li>
            <li>Developed plans and ensured underground and overhead gas pipeline integrity through inspection, maintenance, and extensive surveying.</li>
            <li>Conducted technical evaluations of maintenance equipment and revamped PIDs of high-pressure natural gas transmission pipelines.</li>
            <li>Reduced Unaccounted For Gas (UFG) by 1% and achieved cost savings through optimized resource allocation and pressure profiling assignments.</li>
            <li>Improved asset inspections & surveillance via GPS/GIS training, saving 1.5 man-hours daily.</li>
            <li>Carried out risk assessment & boosted HSE culture in the vicinity of Liquid Handling Facility.</li>
            <li>Orchestrated a training session on GIS in pipeline maintenance for officers and staff.</li>
          </ul>
        </div>
        <div class="education-experience-item">
          <h4 style="color: #008000;">Project Engineer</h4>
          <p><em style="font-style: italic;">GlaxoSmithKline, Pakistan</em></p>
          <p><em style="font-style: italic;">Aug 2018 - Oct 2018</em></p>
          <ul>
            <li>Applied classroom knowledge to troubleshoot equipment breakdowns and maintain process equipment.</li>
            <li>Worked on Health, Safety, and Environment (HS&E) projects, including Lockout–Tagout switch and Zero Access initiatives.</li>
          </ul>
        </div>
      </div>
    </div>

       <!-- Skills Section -->
       <div class="row mt-5">
        <div class="col-lg-12">
          <h3 style="font-size: 30px; margin-bottom: 20px;">Skills</h3>
          <p><strong style="font-size: 22px;">MY KNOWLEDGE LEVEL IN SOFTWARE</strong></p>
          <ul class="skills-list">
            <li>
              <span>ArcGIS Desktop and Online</span>
              <div class="skill-bar">
                <div class="skill-value" style="width: 85%;"></div>
              </div>
              <span>Advanced</span>
            </li>
            <li>
              <span>QGIS, CARTO</span>
              <div class="skill-bar">
                <div class="skill-value" style="width: 70%;"></div>
              </div>
              <span>Moderate</span>
            </li>
            <li>
              <span>MS Office</span>
              <div class="skill-bar">
                <div class="skill-value" style="width: 95%;"></div>
              </div>
              <span>Advanced</span>
            </li>
            <li>
              <span>Python, Jupyter Notebooks</span>
              <div class="skill-bar">
                <div class="skill-value" style="width: 70%;"></div>
              </div>
              <span>Moderate</span>
            </li>
            <li>
              <span>Geo DA</span>
              <div class="skill-bar">
                <div class="skill-value" style="width: 85%;"></div>
              </div>
              <span>Advanced</span>
            </li>
            <li>
              <span>SolidWorks, AutoCAD, MATLAB</span>
              <div class="skill-bar">
                <div class="skill-value" style="width: 75%;"></div>
              </div>
              <span>Moderate</span>
            </li>
            <li>
              <span>SQL, RDBMS, Cloud PostgreSQL</span>
              <div class="skill-bar">
                <div class="skill-value" style="width: 80%;"></div>
              </div>
              <span>Advanced</span>
            </li>
          </ul>
  
          <div style="margin-top: 50px;"></div>
  
  
          
          <p><strong style="font-size: 22px;"><a href="https://www.gallup.com/cliftonstrengths/en/252137/home.aspx" target="_blank">WHAT CLIFTONSTRENGTH TALENT ASSESSMENT SAY ABOUT ME?</a></strong></p>
          <div class="strength-boxes">
            <div class="strength-box">
              <span class="strength-name">Self-Awareness</span>
              <div class="strength-description">
                <p>People exceptionally talented in the Self-Assurance theme feel confident in their ability to take risks and manage their own lives. They have an inner compass that gives them certainty in their decisions.</p>
              </div>
            </div>
            <div class="strength-box">
              <span class="strength-name">Learner</span>
              <div class="strength-description">
                <p>People exceptionally talented in the Learner theme have a great desire to learn and want to continuously improve. The process of learning, rather than the outcome, excites them.</p>
              </div>
            </div>
            <div class="strength-box">
              <span class="strength-name">Responsibility</span>
              <div class="strength-description">
                <p>People exceptionally talented in the Responsibility theme take psychological ownership of what they say they will do. They are committed to stable values such as honesty and loyalty.</p>
              </div>
            </div>
            <div class="strength-box">
              <span class="strength-name">Relator</span>
              <div class="strength-description">
                <p>People exceptionally talented in the Relator theme enjoy close relationships with others. They find deep satisfaction in working hard with friends to achieve a goal.</p>
              </div>
            </div>
            <div class="strength-box">
              <span class="strength-name">Analytical</span>
              <div class="strength-description">
                <p>People exceptionally talented in the Analytical theme search for reasons and causes. They have the ability to think about all of the factors that might affect a situation.</p>
              </div>
            </div>
          </div>
    </div>
  </section>
  <!-- End Resume Section -->
  

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects</title>
</head>

<body>


<!-- ======= Projects Section ======= -->
<section id="projects" class="projects">
  <div class="container">

    <div class="section-title">
      <h2>Projects</h2>
      <p>My Projects</p>
    </div>

    <ul class="nav nav-tabs" id="projectTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="year-2024-tab" data-bs-toggle="tab" data-bs-target="#year-2024" type="button" role="tab" aria-controls="year-2024" aria-selected="true">Environmental Science and<br>Management</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="year-2023-tab" data-bs-toggle="tab" data-bs-target="#year-2023" type="button" role="tab" aria-controls="year-2023" aria-selected="false">Mapping and<br>Spatial Analysis</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="year-2022-tab" data-bs-toggle="tab" data-bs-target="#year-2022" type="button" role="tab" aria-controls="year-2022" aria-selected="false">Energy<br>Engineering</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false">Published<br>Studies</button>
      </li>
    </ul>

    <div class="tab-content" id="projectTabsContent">


        <!-- Environmental Science and Management Tab Pane -->
        <div class="tab-pane fade show active" id="year-2024" role="tabpanel" aria-labelledby="year-2024-tab">
          <div class="row">
            <!-- Project 6 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="https://github.com/Zain1443/GIS-8990-Research-Problems-in-GIS" target="_blank">Visual Exploration of Spatial-Temporal Dynamics of Air Quality using Volunteered Geographic Information</a></h4>
                <p>This independent study analyzed air quality dynamics in Minneapolis using Purple Air PM 2.5 data, correlating factors like human mobility, weather events, and the social environment to inform policy decisions. It offered a scalable visual exploration workflow with volunteered geographic information. The research findings were presented at the joint symposium of The Cartography and Geographic Information Society (CaGIS) and the University Consortium for Geographic Information Science (UCGIS) held in Columbus, Ohio, on June 3-6, 2024.</p>
                <div class="icon-img">
                  <a href="https://github.com/Zain1443/GIS-8990-Research-Problems-in-GIS" target="_blank">
                    <img src="assets\img\Projects\6.png" alt="Visual Exploration of Spatial-Temporal Dynamics of Air Quality using Volunteered Geographic Information" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

            <!-- Project 13 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="https://drive.google.com/file/d/1DCTuvu13ru8q-lbe8V83x8Q-JEFRfLhJ/view?usp=sharing" target="_blank">Assessment of Carbon Storage Potential</a></h4>
                <p>The project focuses on analyzing carbon storage dynamics within a study area, utilizing datasets such as Land Use and Land Cover (LULC) and biomass carbon density maps. Geoprocessing tools are employed to extract and analyze carbon storage values across different land cover types. The project emphasizes meticulous data validation and adjustment to ensure accuracy and reliability, contributing to meaningful insights into carbon storage patterns.</p>
                <div class="icon-img">
                  <a href="https://drive.google.com/file/d/1DCTuvu13ru8q-lbe8V83x8Q-JEFRfLhJ/view?usp=sharing" target="_blank">
                    <img src="assets\img\Projects\13.png" alt="Assessment of Carbon Storage Potential" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

            <!-- Project 4 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="https://be494d35-ebbb-448b-b710-fd1338c53a5d.filesusr.com/ugd/7fd364_564504ea78464d8c89474852e3921208.pdf" target="_blank">Stormwater Study Area Prioritization Analysis</a></h4>
                <p>This project aims to conduct a vulnerability assessment focusing on flooding, water quality, and socially vulnerable communities to optimize investments and prioritize mitigation efforts in areas most susceptible to extreme flooding.</p>
                <div class="icon-img">
                  <a href="https://be494d35-ebbb-448b-b710-fd1338c53a5d.filesusr.com/ugd/7fd364_564504ea78464d8c89474852e3921208.pdf" target="_blank">
                    <img src="assets\img\Projects\4.png" alt="Stormwater Study Area Prioritization Analysis" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

            <!-- Project 9 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="https://storymaps.arcgis.com/stories/bf9a80a2b47347f4a9b5459d89f12e62" target="_blank">A Comprehensive Analysis of Flooding in the Red River Valley</a></h4>
                <p>The project aimed to evaluate and model flooding hazards in the Red River Valley of Canada, an area prone to severe flooding due to poor drainage, heavy snowmelt, and a flat topography. Utilizing Landsat 9 imagery, high-resolution digital elevation models, and a multi-criteria decision analysis (MCDA) approach, the team created a detailed flood risk model. The model identified medium to high flood risk zones, especially near riverbanks and upstream areas, and integrated socioeconomic data to highlight vulnerable communities. The findings emphasize the need for improved infrastructure and flood mitigation strategies, and the developed model is scalable and transferable for use in other regions.</p>
                <div class="icon-img">
                  <a href="https://storymaps.arcgis.com/stories/bf9a80a2b47347f4a9b5459d89f12e62" target="_blank">
                    <img src="assets\img\Projects\9.jpg" alt="A Comprehensive Analysis of Flooding in the Red River Valley" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Mapping and Spatial Analysis Tab Pane -->
        <div class="tab-pane fade" id="year-2023" role="tabpanel" aria-labelledby="year-2023-tab">
          <div class="row">
            <!-- Project 14 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="https://github.com/Zain1443/GIS5572_FinalProject" target="_blank">Tracking the Spread of Brown Marmorated Stink Bug (BMSB) Populations in Minnesota</a></h4>
                <p>The introduction of BMSB posed significant risks to Minnesota's agricultural crops, landscape plants, and residential environments. To mitigate potential impacts, it was crucial to track BMSB populations and rank cities based on prevalence. This project, which fellow MGIS student Eric Gibson and I worked on as a group, employed spatial interaction modeling techniques to simulate BMSB spread, facilitating MNDNR in informed decision-making and resource allocation for pest management efforts. Using three Huff models with varying alpha values (1.5, 1.75, 2), we simulated the flow of BMSB from a seed city and ranked cities where BMSB was prevalent. Following quality assessment, results were made accessible via an API for integration into ArcGIS Online Map Viewer.</p>
                <div class="icon-img">
                  <a href="https://github.com/Zain1443/GIS5572_FinalProject" target="_blank">
                    <img src="assets\img\Projects\14..jpg" alt="Tracking the Spread of BMSB Populations in Minnesota" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="https://be494d35-ebbb-448b-b710-fd1338c53a5d.filesusr.com/ugd/7fd364_d9d22ef3c4644b60add6d467dbdd3034.pdf" target="_blank">Exploring Socioeconomic Patterns: A County Level Analysis</a></h4>
                <p>This project examines the socioeconomic status of counties in Minnesota, California, Texas, and New York, focusing on socioeconomic indicators, utilizing data from 2010 and 2017 to analyze pre-pandemic and post-Great Recession conditions.</p>
                <div class="icon-img">
                  <a href="https://be494d35-ebbb-448b-b710-fd1338c53a5d.filesusr.com/ugd/7fd364_d9d22ef3c4644b60add6d467dbdd3034.pdf" target="_blank">
                    <img src="assets\img\Projects\2.png" alt="Exploring Socioeconomic Patterns: A County Level Analysis" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>


             <!-- Project 10 -->
             <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-arch"></i></div>
                <h4><a href="#">Mapping existing underground gas pipeline network of several cities</a></h4>
                <p>A team project that I was part of while working for Sui Southern Gas Company Ltd. It involved surveying, collecting and compiling all relevant data, digitizing, extensive data wrangling, analysis, and mapping.</p>
                <div class="icon-img">
                  <a href="#">
                    <img src="assets\img\Projects\10.jpg" alt="Mapping existing underground gas pipeline network of several cities" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

            <!-- Project 8 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="https://drive.google.com/file/d/12zTKpXI_UwVx36Of0C28AMdxkdLm5lFI/view?usp=sharing" target="_blank">Geospatial Visualization of Personal Mobility Patterns using Google Maps</a></h4>
                <p>This project involved extracting and analyzing personal mobility patterns from Google Maps Timeline data in GeoJSON format, using ArcGIS Pro to create informative visualizations.</p>
                <div class="icon-img">
                  <a href="https://drive.google.com/file/d/12zTKpXI_UwVx36Of0C28AMdxkdLm5lFI/view?usp=sharing" target="_blank">
                    <img src="assets\img\Projects\8.png" alt="Geospatial Visualization of Personal Mobility Patterns using Google Maps" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

            <!-- Project 12 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="https://storymaps.arcgis.com/stories/e385aa7fe7d44988b76a0c5ea8eedc23" target="_blank">A breakdown of poverty in Minnesota</a></h4>
                <p>A class project that I did for GIS 5511 (Principles of Cartography) course.</p>
                <div class="icon-img">
                  <a href="https://storymaps.arcgis.com/stories/e385aa7fe7d44988b76a0c5ea8eedc23" target="_blank">
                    <img src="assets\img\Projects\12.png" alt="A breakdown of poverty in Minnesota" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>


        <!-- Energy Engineering Tab Pane -->
        <div class="tab-pane fade" id="year-2022" role="tabpanel" aria-labelledby="year-2022-tab">
          <div class="row">
            <!-- Project 1 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="https://umn.maps.arcgis.com/apps/dashboards/2944dc9f8af345c99b238ceeb9083e80" target="_blank">Mapping Powerplants in the United States</a></h4>
                <p>The "EnerGeoMatrix: Analyzing the Energy Horizon Across the United States" dashboard, crafted with an integrated suite of tools for spatial data analysis, visualization, and application development—including ArcGIS Pro and Online, Map Viewer, Experience Builder, Dashboard, GitHub, and Codepen—demonstrates proficiency in leveraging diverse technologies for comprehensive geospatial projects. Offering insightful analysis of power generation within the United States, it provides valuable insights into the nation's energy landscape.</p>
                <div class="icon-img">
                  <a href="https://umn.maps.arcgis.com/apps/dashboards/2944dc9f8af345c99b238ceeb9083e80" target="_blank">
                    <img src="assets\img\Projects\1.png" alt="Mapping Powerplants in the United States" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="https://drive.google.com/file/d/16cL_Pw0m0OTeqr_LMgtJ9nfpyV3iD_cC/view?usp=sharing" target="_blank">Integration of GIS and MCDM for Evaluation of Combined Cycle Power Plant Locality</a></h4>
                <p>An individual semester project done for GIS 5571 (ArcGIS-I) course., I utilized integrated GIS and Multi-Criteria Decision Analysis to identify optimal sites for Combined Cycle Power Plants. The project involved data wrangling, historical map analysis, image georeferencing, and creating a GIS database from various sources that includes USGS. The use of the Analytic Hierarchy Process (AHP) and Exploratory Data Analysis (EDA) streamlined the site suitability process, with decision makers' preferences influencing the final map. Additionally, I implemented Python scripting to build an ETL, automating geoprocessing tasks for a faster, more efficient, and scalable analysis making it easier to repeat with updated data.</p>
                <div class="icon-img">
                  <a href="https://drive.google.com/file/d/16cL_Pw0m0OTeqr_LMgtJ9nfpyV3iD_cC/view?usp=sharing" target="_blank">
                    <img src="assets\img\Projects\3.jpg" alt="Integration of GIS and MCDM for Evaluation of Combined Cycle Power Plant Locality" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>      

            <!-- Project 11 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="https://be494d35-ebbb-448b-b710-fd1338c53a5d.filesusr.com/ugd/7fd364_44b37f3427df4ba39a900b489fc6f43c.pdf" target="_blank">Design & Fabrication Of Solar Dish Stirling Engine</a></h4>
                <p>A research project that I did while I was an undergrad Mechanical Engineering student.</p>
                <div class="icon-img">
                  <a href="https://be494d35-ebbb-448b-b710-fd1338c53a5d.filesusr.com/ugd/7fd364_44b37f3427df4ba39a900b489fc6f43c.pdf" target="_blank">
                    <img src="assets\img\Projects\11.jpg" alt="Design & Fabrication Of Solar Dish Stirling Engine" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>


    
        <!-- Published Studies Tab Pane -->
        <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab">
          <div class="row">
            <!-- Project 5 -->
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-arch"></i></div>
                <h4><a href="#">District Level Site Suitability of CCPP: EESD Conference Paper</a></h4>
                <p>A conference paper presented at Energy, Environment, and Sustainable Development 2022.</p>
                <div class="icon-img">
                  <a href="#">
                    <img src="assets\img\Projects\5.jpg" alt="District Level Site Suitability of CCPP: EESD Conference Paper" style="width: 100%; height: auto;">
                  </a>
                </div>
              </div>
            </div>
            
            
            <!-- Project 7 -->
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="https://www.sciencedirect.com/science/article/abs/pii/S2352485522001256" target="_blank">Shoreline Change Assessment of Indus Delta using GIS-DSAS and Satellite Data</a></h4>
            <p>The paper examines the significant alterations in the shoreline of the Indus River Delta in Pakistan from 1972 to 2017, highlighting higher erosion rates compared to accretion rates. Using satellite data and the Digital Shoreline Analysis System (DSAS 4.3) integrated with ArcGIS, the study quantifies these shoreline changes. Key findings include a higher erosion rate on the left bank of the river Indus compared to the right bank. The study employed statistical parameters like End Point Rate (EPR), Linear Regression Rate (LRR), and Net Shoreline Movement (NSM) to estimate shoreline change rates. The results showed a net erosion rate of 18.87 ± 2.22 m/year, with a significant landward shift of 860 ± 92 m over the study period. The study suggests that the DSAS software integrated with ArcGIS can be effectively used for similar shoreline change analyses worldwide and recommends mitigation measures to protect the Indus delta's shoreline.</p>
            <div class="icon-img">
              <a href="https://www.sciencedirect.com/science/article/abs/pii/S2352485522001256" target="_blank">
                <img src="assets\img\Projects\7.jpg" alt="Shoreline Change Assessment of Indus Delta using GIS-DSAS and Satellite Data" style="width: 100%; height: auto;">
              </a>
            </div>
          </div>
        </div>
            


      </div>
    </div>
  </section>
  <!-- End Projects Section -->




<section id="trainings" class="courses_and_trainings">
  <div class="container">

    <div class="section-title">
      <h2>Trainings</h2>
      <p>My Trainings</p>
    </div>

    <div class="row courses_and_trainings-container">

      <!-- Training item: ESRI Training -->
      <div class="col-lg-4 col-md-6 courses_and_trainings-item filter-training">
        <div class="courses_and_trainings-wrap">
          <img src="assets/img/Trainings/1.jpg" class="img-fluid" alt="">
          <div class="courses_and_trainings-info">
            <h4><a href="https://www.esri.com/training/catalog/search" target="_blank">ESRI Training</a></h4>
            <p>A course that covers fundamental concepts of coordinate systems and understand why they are essential to creating accurate maps and performing reliable analysis.</p>
            <div class="courses_and_trainings-links">
              <a href="https://www.esri.com/training/catalog/search" title="ESRI Training Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Training item: Training by USPCAS-W -->
      <div class="col-lg-4 col-md-6 courses_and_trainings-item filter-training">
        <div class="courses_and_trainings-wrap">
          <img src="assets/img/Trainings/2.jpg" class="img-fluid" alt="">
          <div class="courses_and_trainings-info">
            <h4><a href="https://water.muet.edu.pk/events/3-day-training-on-monitoring-mapping-of-forests-using-satellite-data-for-clean-green-pakistan" target="_blank">Training by USPCAS-W</a></h4>
            <p>A 3 days training on Monitoring and Mapping of Forests using Satellite Data for Clean and Green Pakistan organized by U.S.-Pakistan Center for Advanced Studies in Water (USPCAS-W) took place in 2019.</p>
            <div class="courses_and_trainings-links">
              <a href="https://water.muet.edu.pk/events/3-day-training-on-monitoring-mapping-of-forests-using-satellite-data-for-clean-green-pakistan" title="Training by USPCAS-W Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Training item: Course by Pakistan Engineering Council -->
      <div class="col-lg-4 col-md-6 courses_and_trainings-item filter-training">
        <div class="courses_and_trainings-wrap">
          <img src="assets/img/Trainings/3.jpg" class="img-fluid" alt="">
          <div class="courses_and_trainings-info">
            <h4><a href="https://cpd.pec.org.pk/CpdProfile" target="_blank">Course by Pakistan Engineering Council</a></h4>
            <p>The CPD programs include additional qualifications, professional skills, relevant management and communication skills acquired through additional training and experience. These aspects are grouped into the following several different categories of training.</p>
            <div class="courses_and_trainings-links">
              <a href="https://cpd.pec.org.pk/CpdProfile" title="Course by Pakistan Engineering Council Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Training item: Specialization TUM Course -->
      <div class="col-lg-4 col-md-6 courses_and_trainings-item filter-training">
        <div class="courses_and_trainings-wrap">
          <img src="assets/img/Trainings/4.jpg" class="img-fluid" alt="">
          <div class="courses_and_trainings-info">
            <h4><a href="https://www.edx.org/certificates/professional-certificate/tumx-six-sigma-and-lean" target="_blank">Specialization TUM Course</a></h4>
            <p>This Professional Certificate covers the fundamentals of the Six Sigma methodology and Lean Production for quality and productivity improvement and examines how the principles of Lean production improve quality and productivity and enable organizational transformation.</p>
            <div class="courses_and_trainings-links">
              <a href="https://www.edx.org/certificates/professional-certificate/tumx-six-sigma-and-lean" title="Specialization TUM Course Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Training item: Specialization Coursera Course -->
      <div class="col-lg-4 col-md-6 courses_and_trainings-item filter-training">
        <div class="courses_and_trainings-wrap">
          <img src="assets/img/Trainings/5.jpg" class="img-fluid" alt="">
          <div class="courses_and_trainings-info">
            <h4><a href="https://www.coursera.org/specializations/energy-industry" target="_blank">Specialization Coursera Course</a></h4>
            <p>This specialization provides introductory knowledge about the energy industry and associated career opportunities, whether you are interested in a utility technician or utility worker role, or emerging green energy solutions.</p>
            <div class="courses_and_trainings-links">
              <a href="https://www.coursera.org/specializations/energy-industry" title="Specialization Coursera Course Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Training item: Specialization Coursera Course -->
      <div class="col-lg-4 col-md-6 courses_and_trainings-item filter-training">
        <div class="courses_and_trainings-wrap">
          <img src="assets/img/Trainings/6.jpg" class="img-fluid" alt="">
          <div class="courses_and_trainings-info">
            <h4><a href="https://www.coursera.org/specializations/supply-chain-management" target="_blank">Specialization Coursera Course</a></h4>
            <p>The Specialization is made up of 4 basic courses in logistics, operations, planning, and sourcing, followed by a capstone course in Supply Chain Management Strategy. The course will cover transportation, warehousing and inventory, and logistics network design.</p>
            <div class="courses_and_trainings-links">
              <a href="https://www.coursera.org/specializations/supply-chain-management" title="Specialization Coursera Course Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Training item: Khalifa University Training -->
      <div class="col-lg-4 col-md-6 courses_and_trainings-item filter-training">
        <div class="courses_and_trainings-wrap">
          <img src="assets/img/Trainings/7.jpg" class="img-fluid" alt="">
          <div class="courses_and_trainings-info">
            <h4><a href="https://www.ku.ac.ae/academics/center-for-teaching-and-learning" target="_blank">Khalifa University Training</a></h4>
            <p>The Center for Teaching & Learning is collaborating with the SSD to offer a 7-week course on the foundations of leadership to enhance student knowledge about leadership as a stepping stone to a successful academic and professional career.</p>
            <div class="courses_and_trainings-links">
              <a href="https://www.ku.ac.ae/academics/center-for-teaching-and-learning" title="Khalifa University Training Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Training item: Project Management Gold Badge -->
      <div class="col-lg-4 col-md-6 courses_and_trainings-item filter-training">
        <div class="courses_and_trainings-wrap">
          <img src="assets/img/Trainings/8.jpg" class="img-fluid" alt="">
          <div class="courses_and_trainings-info">
            <h4><a href="https://www.credly.com/badges/d5847c53-0526-4d89-9b77-af7b7adb210a/linked_in_profile" target="_blank">Project Management Gold Badge</a></h4>
            <p>Issued by University of Minnesota, this badge covers basic concepts of project management through lectures and hands-on activities. Students are now able to define major characteristics of a project, be familiar with various formats of Work Breakdown Structure, understand Project Scheduling terminology, know the difference between cost estimating and cost budgeting, and expose students to estimating and budget methods.</p>
            <div class="courses_and_trainings-links">
              <a href="https://www.credly.com/badges/d5847c53-0526-4d89-9b77-af7b7adb210a/linked_in_profile" title="Project Management Gold Badge Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Training item: Geospatial Skills -->
      <div class="col-lg-4 col-md-6 courses_and_trainings-item filter-training">
        <div class="courses_and_trainings-wrap">
          <img src="assets/img/Trainings/9.jpg" class="img-fluid" alt="">
          <div class="courses_and_trainings-info">
            <h4><a href="https://www.credly.com/badges/34f6294b-d59f-437e-a15b-1ae5571075e1/linked_in_profile" target="_blank">Geospatial Skills</a></h4>
            <p>Issued by University of Minnesota, this badge is obtained through a combination of lectures and hands-on activities, introducing participants to designing and sharing online maps using Esri’s ArcGIS Online software. Topics include preparing data for use, online data sources, map design, spatial analysis, and effective storytelling.</p>
            <div class="courses_and_trainings-links">
              <a href="https://www.credly.com/badges/34f6294b-d59f-437e-a15b-1ae5571075e1/linked_in_profile" title="Geospatial Skills Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Add more training items as needed -->

    </div>

  </div>
</section><!-- End Trainings Section -->


<!-- ======= Achievements Section ======= -->
<section id="achievements" class="achievements">
  <div class="container">

    <div class="section-title">
      <h2>Achievements</h2>
      <p>My Achievements</p>
    </div>

    <div class="row achievements-container">

      <!-- Achievement 1: Fulbright Scholarship -->
      <div class="col-lg-4 col-md-6 achievements-item">
        <div class="achievements-wrap">
          <div class="achievements-collage">
            <img src="assets/img/Achievements/1/1.jpg" class="img-fluid" alt="">
            <img src="assets/img/Achievements/1/2.jpg" class="img-fluid" alt="">
            <img src="assets/img/Achievements/1/3.jpg" class="img-fluid" alt="">
            <img src="assets/img/Achievements/1/4.jpg" class="img-fluid" alt="">
            <img src="assets/img/Achievements/1/5.jpg" class="img-fluid" alt="">
            <img src="assets/img/Achievements/1/6.jpg" class="img-fluid" alt="">
          </div>
          <div class="achievements-info">
            <h4><a href="https://foreign.fulbrightonline.org/about/foreign-student-program" target="_blank">Awarded Fulbright Scholarship</a></h4>
            <p>I was awarded the prestigious Fulbright Master's Scholarship after successfully navigating a rigorous selection process. With hundreds of thousands of applicants competing each year, this scholarship is one of the most highly competitive and sought-after awards globally. Being chosen as a recipient reflects not only my academic prowess but also my potential for leadership and positive impact in my field.</p>
            <div class="achievements-links">
              <a href="https://foreign.fulbrightonline.org/about/foreign-student-program" title="Fulbright Scholarship Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Achievement 2: Queen Elizabeth Commonwealth Scholarship -->
      <div class="col-lg-4 col-md-6 achievements-item">
        <div class="achievements-wrap">
          <img src="assets/img/Achievements/2.jpg" class="img-fluid" alt="Queen Elizabeth Commonwealth Scholarship">
          <div class="achievements-info">
            <h4><a href="https://www.acu.ac.uk/funding-opportunities/for-students/scholarships/queen-elizabeth-commonwealth-scholarships/" target="_blank">Awarded Queen Elizabeth Commonwealth Scholarship</a></h4>
            <p>In early 2019, I was awarded the esteemed Queen Elizabeth Commonwealth Scholarship to pursue my master's degree. Recognizing the value of professional experience, I chose to gain a few years of practical expertise before embarking on my postgraduate studies. This decision allowed me to bring a richer, more informed perspective to my academic pursuits, enhancing my ability to contribute meaningfully to my field.</p>
            <div class="achievements-links">
              <a href="https://www.acu.ac.uk/funding-opportunities/for-students/scholarships/queen-elizabeth-commonwealth-scholarships/" title="Queen Elizabeth Commonwealth Scholarship Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Achievement 3: HEC Scholarship -->
      <div class="col-lg-4 col-md-6 achievements-item">
        <div class="achievements-wrap">
          <img src="assets/img/Achievements/3.jpg" class="img-fluid" alt="HEC Scholarship">
          <div class="achievements-info">
            <h4><a href="https://www.hec.gov.pk/english/Pages/default.aspx" target="_blank">HEC Academic Excellence Scholarship</a></h4>
            <p>During my Mechanical Engineering studies, I consistently demonstrated academic excellence, earning HEC scholarships every semester. Achieving a position in the top 10 out of 130 students in all 8 semesters is a significant accomplishment, reflecting my dedication, hard work, and commitment to excellence in a highly competitive and rigorous program.</p>
            <div class="achievements-links">
              <a href="https://www.hec.gov.pk/english/Pages/default.aspx" title="HEC Scholarship Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Achievement 4: GIS Incorporation and Instructor Recognition -->
      <div class="col-lg-4 col-md-6 achievements-item">
        <div class="achievements-wrap">
          <div class="achievements-collage">
            <img src="assets/img/Achievements/4.jpg" class="img-fluid" alt="">
            <img src="assets/img/Achievements/4-4.jpg" class="img-fluid" alt="">
          </div>
          <div class="achievements-info">
            <h4><a href="https://drive.google.com/file/d/1MA0pTbXTeSuDGYoE85diQwPPbZIyk-M5/view?usp=sharing" target="_blank">Recognition for GIS Incorporation and Instruction</a></h4>
            <p>I was recognized for my efforts in seamlessly integrating Geographic Information Systems (GIS) into pipeline maintenance operations. This integration was pivotal in various UFG (Unaccounted-for Gas) reduction projects across multiple cities in the Sindh Province. My role involved developing comprehensive plans to ensure the integrity of both underground and overhead gas pipelines through thorough inspection, maintenance, and extensive surveying. In addition to my technical contributions, I served as a GIS Instructor, orchestrating a specialized training session for officers and staff on the application of GIS in pipeline maintenance. This training enhanced the team's ability to utilize GIS technology effectively, leading to improved operational efficiency and maintenance practices.</p>
            <div class="achievements-links">
              <a href="https://drive.google.com/file/d/1MA0pTbXTeSuDGYoE85diQwPPbZIyk-M5/view?usp=sharing" title="GIS Incorporation and Instructor Recognition Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Achievement 5: GTRA Position at Khalifa University -->
      <div class="col-lg-4 col-md-6 achievements-item">
        <div class="achievements-wrap">
          <img src="assets/img/Achievements/5.jpg" class="img-fluid" alt="GTRA Position at Khalifa University">
          <div class="achievements-info">
            <h4><a href="https://www.ku.ac.ae/scholarships-postgraduate#international-students" target="_blank">Graduate Research/Teaching Assistant Scholarship by Khalifa University, UAE</a></h4>
            <p>I was awarded a GRTA position by Khalifa University of Science and Technology, which offers scholarships to support qualified international students enrolled in postgraduate programs.</p>
            <div class="achievements-links">
              <a href="https://www.ku.ac.ae/scholarships-postgraduate#international-students" title="GTRA Position at Khalifa University Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Achievement 6: Selected as Student Assistant for GIS Conference -->
      <div class="col-lg-4 col-md-6 achievements-item">
        <div class="achievements-wrap">
          <img src="assets/img/Achievements/6.jpg" class="img-fluid" alt="Student Assistant for GIS Conference">
          <div class="achievements-info">
            <h4><a href="https://www.esri.com/en-us/about/careers/student-jobs" target="_blank">Student Assistant for Esri User Conference</a></h4>
            <p>I had the honor of being selected as one of only 56 student assistants worldwide for the Esri User Conference, the largest GIS conference globally. This opportunity not only underscored my commitment and skills in GIS but also provided me with invaluable exposure to the latest advancements and networking opportunities in the industry.</p>
            <div class="achievements-links">
              <a href="https://www.esri.com/en-us/about/careers/student-jobs" title="Student Assistant for GIS Conference Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Achievements Section -->

<style>
.achievements-collage {
  display: flex;
  flex-wrap: wrap;
}
.achievements-collage img {
  width: 48%;
  margin: 1%;
}
</style>







 <!-- ======= Testimonials Section ======= -->

 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Testimonials</title>
   <style>
     .quote-box {
       border: 1.5px solid #81978a; /* Green border */
       padding: 25px;
       border-radius: 10px;
       font-size: 1.5em; /* Increase font size 2x */
     }
     .testimonial-author h3 {
       font-size: 1.5em; /* Increase font size 2x */
     }
     .testimonial-nav {
       text-align: center;
       margin-top: 30px;
     }
     
     .testimonial-nav button {
       background-color: rgb(2, 83, 103);
       border: none;
       cursor: pointer;
       font-size: 30px;
       color: #2ecc71; /* Green color */
       margin: 5px; /* Add some spacing between arrows */
     }
     .dot {
       height: 12px;
       width: 12px;
       background-color: #bbb; /* Grey color */
       border-radius: 50%;
       display: inline-block;
       margin: 5px; /* Add some spacing between dots */
     }
     .active-dot {
       background-color: #13f90b; /* Red color */
     }
   </style>
 </head>
 
 <body>
 
   <section id="testimonials" class="testimonials" style="margin-bottom: 30px;">
     <div class="container">
       <div class="section-title">
         <h2>Testimonials</h2>
         <p>What People Say About Me</p>
       </div>
       <div class="testimonial-carousel">
         <!-- Testimonial items will be dynamically added here -->
       </div>
       <div class="testimonial-nav">
         <button id="prev-btn">&lt;</button>
         <span class="dot"></span>
         <span class="dot"></span>
         <span class="dot"></span>
         <span class="dot"></span>
         <span class="dot"></span>
         <span class="dot"></span>
         <span class="dot"></span>
         <button id="next-btn">&gt;</button>
       </div>
     </div>
   </section><!-- End Testimonials Section -->
 
   <script>
     document.addEventListener("DOMContentLoaded", function () {
       // Testimonials data
       const testimonials = [
         {
           quote: "Zain's dedication to expanding his knowledge and skills in GIS, combined with his exceptional academic achievements, make him a promising candidate for the MGIS program. His resolute commitment to leveraging geospatial technology to solve real-world challenges showcases his potential to excel and make a significant impact in the field.",
           author: "<a href='https://cla.umn.edu/about/directory/profile/mcmas002' style='color: green;' target='_blank'>Dr. Susanna McMaster</a>",
           position: "Co-Director, MGIS program, <br>University of Minnesota, Twin Cities",
           image: "assets/img/testimonials/testimonial-1.jpg"
         },
         {
           quote: "I was continually impressed with Zain's ability to communicate and document complex processes, his drive to learn new things, his initiative to take a new idea or direction and move forward with it, and his thoughtfulness about the larger picture and end goal for projects. In addition to his main projects, Zain was willing to take on other tasks, including a presentation to share his experience at the esri User Conference and creating a newsletter to share helpful tools for new ArcPro users in our team. Zain's detailed documentation and thorough communication contributed towards a more thoughtful and useful end product. The work Zain performed in his short time will be built upon and used in our daily work for years to come.",
           author: "<a href='https://www.linkedin.com/in/heidi-ranschau-11640256/' style='color: green;' target='_blank'>Heidi C. Ranschau</a>",
           position: "Professional Engineer, <br>City of Minneapolis",
           image: "assets/img/testimonials/testimonial-2.jpg"
         },
         {
           quote: "I have had an academic relationship with Zain for a reasonable period and I found him to be an exceptionally knowledgeable and steadfast student driven by a pursuit of excellence. His stellar CGPA speaks itself about his academic brilliance and consistency in achievements in the field of Mechanical Engineering.",
           author: "<a href='https://scholar.google.com.pk/citations?user=ta_QxDQAAAAJ&hl=en' style='color: green;' target='_blank'>Dr. Abdul Ghafoor Memon</a>",
           position: "Mechanical Engineering Department, <br>Mehran University of Engineering and Technology, Jamshoro",
           image: "assets/img/testimonials/testimonial-3.jpg"
         },
         {
           quote: "Zain consistently demonstrated exceptional motivation, duty-bound commitment, and a knack for innovation throughout our time working together. His remarkable organizational skills, coupled with a quick learning ability, enabled him to efficiently manage tasks and absorb vast amounts of information. In his role overseeing GIS operations for natural gas pipeline maintenance, Zain's technical expertise and meticulous approach to equipment evaluation and inspection were invaluable. His professionalism and dedication to excellence set a standard for our team, leaving an indelible mark on our workplace dynamics. It was a privilege to work alongside someone of Zain's caliber, and I have no doubt he will continue to excel in any endeavor he pursues.",
           author: "<a href='https://www.linkedin.com/in/noor-ahmed-mahesar-10144969/' style='color: green;' target='_blank'>Noor Ahmed Mahesar</a>",
           position: "Senior Engineer, <br>Sui Southern Gas Company",
           image: "assets/img/testimonials/testimonial-4.jpg"
         },
         {
           quote: "Zain is a bright individual who works hard and has high standards for his work. I enjoyed working with him on a variety of school projects because of his dedication to making things work. Outside school, Zain is a reliable person who takes care of his friends and helps them to achieve great things.",
           author: "<a href='https://www.linkedin.com/in/maochuanwang/' style='color: green;' target='_blank'>Maochuan Wang</a>",
           position: "Support Analyst, <br>Environmental Systems Research Institute, Inc",
           image: "assets/img/testimonials/testimonial-5.jpg"
         },
         {
           quote: "I've been fortunate to study alongside Zain in the MGIS Program at the University of Minnesota. From collaborating on projects to working on daily assignments, he has proven to be an efficient, intelligent, and driven peer. Zain's superpower is his ability to support and help those around him and maintain a high level of academic success. He would be a valuable asset to any company!",
           author: "<a href='https://www.linkedin.com/in/mattiegisselbeck/' style='color: green;' target='_blank'>Mattie Gisselbeck</a>",
           position: "Geospatial Analyst & Developer, <br>University of Minnesota, Twin Cities",
           image: "assets/img/testimonials/testimonial-6.jpg"
         },
         {
           quote: "Zain is a gentleman and a profound learner. He had good grasp over the academics and the technical aspects of the Engineering concepts. His routine was very well-versed which led to his success. He always targeted the extraordinary results and he did his best not to only achieve for himself but also helped the classmates along the journey of our Bachelors degree. He carries a good sportsmanship nature in his personal, professional and extra-curricular modes of the life.",
           author: "<a href='https://www.linkedin.com/in/lutufullah-shaikh-07/' style='color: green;' target='_blank'>Lutufullah Shaikh</a>",
           position: "Planning & Maintenance Engineer,<br>United Energy Pakistan",
           image: "assets/img/testimonials/testimonial-7.jpg"
         }
       ];
 
       const testimonialContainer = document.querySelector(".testimonial-carousel");
       const prevBtn = document.getElementById("prev-btn");
       const nextBtn = document.getElementById("next-btn");
       const dots = document.querySelectorAll(".dot");
 
       let index = 0;
       const displayTestimonial = () => {
         const testimonial = testimonials[index];
         const testimonialItem = `
           <div class="testimonial-wrap" style="margin-bottom: 30px;">
             <div class="quote-box">
               <p>${testimonial.quote}</p>
             </div>
             <div class="testimonial-author">
               <img src="${testimonial.image}" class="testimonial-img" alt="">
               <h3>${testimonial.author}</h3>
               <span style="font-style: italic;">${testimonial.position}</span>
             </div>
           </div>
         `;
         testimonialContainer.innerHTML = testimonialItem;
 
         // Update active dot
         dots.forEach(dot => dot.classList.remove("active-dot"));
         dots[index].classList.add("active-dot");
       };
 
       const showNextTestimonial = () => {
         index = (index + 1) % testimonials.length;
         displayTestimonial();
       };
 
       const showPrevTestimonial = () => {
         index = (index - 1 + testimonials.length) % testimonials.length;
         displayTestimonial();
       };
 
       displayTestimonial();
 
       let intervalId;
 
       const startInterval = () => {
         intervalId = setInterval(showNextTestimonial, 5000); // Change interval to 5 seconds
       };
 
       const resetInterval = () => {
         clearInterval(intervalId);
         startInterval();
       };
 
       startInterval();
 
       prevBtn.addEventListener("click", () => {
         showPrevTestimonial();
         resetInterval();
       });
 
       nextBtn.addEventListener("click", () => {
         showNextTestimonial();
         resetInterval();
       });
 
     });
   </script>
 
 </body>
 
 </html>
 

</section><!-- End Testimonial -->



<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Contact Me</p>
    </div>

    <div class="row mt-2">
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-map"></i>
          <h3>My Address</h3>
          <p>Hyderabad, Pakistan</p>
        </div>
      </div>

      <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-envelope"></i>
          <h3>Email Me</h3>
          <p>zain.siyal@fulbrightmail.org / zainsiyal1443@gmail.com</p>
        </div>
      </div>

      <div class="col-md-12 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-share-alt"></i>
          <h3>LinkedIn</h3>
          <p><a href="https://www.linkedin.com/in/zain-ul-abdin-siyal/">Zain ul Abdin Siyal on LinkedIn</a></p>
        </div>
      </div>
    </div>



    <!-- Contact Form -->
    <style>
      .sent-message {
          color: rgb(246, 246, 246); /* Customize the color as needed */
          font-size: 20px; /* Adjust font size */
          line-height: 2; /* Adjust line height for better spacing */
      }
      .error-message {
          color: rgb(235, 235, 235); /* Customize the color as needed */
          font-size: 1px; /* Adjust font size */
      }
    </style>



    <form id="contact-form" action="https://formspree.io/f/xzzperrl" method="POST" role="form" class="php-email-form mt-4">
      <div class="row">
          <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
      </div>
      <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
          <div id="form-message" class="sent-message" style="display: none;">
              Your message to Zain Ul Abdin Siyal has been sent.<br>
              He will get back to you soon. Thank you!
          </div>
          <div id="loading-message" class="loading" style="display: none;">Loading...</div>
          <div id="error-message" class="error-message" style="display: none;"></div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
  </form>
  
  <!-- JavaScript to handle form submission -->
  <script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const form = event.target;
        const formData = new FormData(form);
        
        // Show loading message
        document.getElementById('loading-message').style.display = 'block';
        document.getElementById('form-message').style.display = 'none';
        document.getElementById('error-message').style.display = 'none';
        
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
                return response.json(); // Parse JSON to handle response data
            } else {
                // Throw error if response is not ok
                throw new Error('Network response was not ok.');
            }
        }).then(data => {
            // Log the response data for debugging
            console.log('Response data:', data);
  
            if (data.ok) {
                // Display success message and reset form
                document.getElementById('form-message').style.display = 'block';
                form.reset();
            } else {
                // Handle unexpected response format
                document.getElementById('error-message').textContent = 'There was a problem with your submission. Please try again.';
                document.getElementById('error-message').style.display = 'block';
            }
        }).catch(error => {
            console.error('Error:', error);
            document.getElementById('error-message').textContent = 'There was a problem with your submission. Please try again.';
            document.getElementById('error-message').style.display = 'block';
        }).finally(() => {
            document.getElementById('loading-message').style.display = 'none';
        });
    });
  </script>





  </div>
</section><!-- End Contact Section -->



  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

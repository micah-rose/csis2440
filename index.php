<?php 
    define("HOST", "localhost");
    define("USER", "id8433217_users");
    define("PASS", "stillsucks");
    define("BASE", "id8433217_insecure");
    
    $conn = mysqli_connect(HOST, USER, PASS, BASE);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CSIS 2440</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="margin: 15px">

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Welcome to Micah's site for</span>
    <span class="site-heading-lower" style="color: white">CSIS 2440 - Spring 2019</span>
  </h1>

  

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="height: 50px">
    <div class="container" style="font-size: 30px">
      <!-- <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarResponsive" >
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="#home">Home
              <!-- <span class="sr-only">(current)</span> -->
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="#about"
                >About Me</a
              >
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="#reflection"
                >Reflection</a
              >
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="#courseworks">Courseworks</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="#eportfolio">e-Portfolio & 1430 Site</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container">

    <!-- <form method= "post" class="form-inline">
    <div class="input-group">
      <input type="text" name="name" class="form-control" size="50" placeholder="Sign Your Name" required>
      <div class="input-group-btn">
        <button type="submit" name="submit" class="btn btn-danger">Register</button>
      </div>
    </div>
  </form> -->

      <div class="intro">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded" style="margin-left: 10px; padding: 20px">
          <h2 class="section-heading mb-4">
            <span class="section-heading-lower">Current Registry</span>
          </h2>
          <?php 
          $regNote = '<p>To see the current registry please sign your name.</p>';
          if(isset($_POST["submit"])){
            $name = $_POST["name"];
            $newVisitor = "INSERT INTO visitors (Visitor_Name) VALUES ('".$name."');";
            mysqli_query($conn, $newVisitor);
    
            $list = "SELECT Visitor_Name FROM visitors;";
            $result_list = mysqli_query($conn, $list);
            $storeArray = Array();
      
            while ($row = mysqli_fetch_array($result_list, MYSQLI_ASSOC)) {
                $storeArray[] =  $row["Visitor_Name"];
                foreach($storeArray as $item) {
                echo "<ul>
                        <li>".$item."</li>
                      </ul>";
                }
              }
              
            $regNote = '<p>Thank you for signing your name!!</p>';
          }

          echo $regNote;
          ?>

        <form method= "post" class="form-inline" style="display: inline-block; margin-top: 15px">
          <div class="input-group">
            <input type="text" name="name" class="form-control" size="50" placeholder="Sign Your Name" required>
            <div class="input-group-btn">
              <button type="submit" name="submit" class="btn btn-danger">Register</button>
            </div>
          </div>
        </form>

        </div>
        <canvas id = "myCanvas" style="width: 900px; height: 350px; display: inline-block" ></canvas>
      </div>
    </div>
  </section>

  <section class="page-section cta" style="display: inline-block">
    <div id="about" class="container-fluid" style="margin: 20px">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">             
              <span class="section-heading-lower">About Me</span>
            </h2>
            <p class="mb-0">
            Hello!! My name is Micah, I am a student at Salt Lake Community
            College majoring in software development and web programming. I 
            will be graduating with my Associate's degree after Summer Semester
            2019. My tech journey began during Summer Semester 2017 where I took 
            a course in SQL programming. I initially took that class to help earn
            a job opportunity within my company, but since then I have taken courses 
            in Object-Oriented programming where I learned the Java language and
            web development that involved HTML, CSS, and JavaScript. Most recently I
            have gained experience with PHP code and how to connect my web page to 
            a database.</p>
            <br>
            <p>Learning all these different programming languages has fascinated me 
            with the possibilities of developing software, website design, and really...
            all things computer nerd. I have grown an ambition to dedicate my studies in 
            learning how programming languages shape our world. In addition to my studies
            at SLCC, I look for online opportunities to learn more about JavaScript 
            frameworks and writing test cases for my code to help me become a better 
            developer. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section about-heading">
      <div id="reflection" class="container-fluid">
        <img
          class="img-fluid rounded about-heading-img mb-3 mb-lg-0"
          src="img/about.jpg"
          alt=""
        />
        <div class="about-heading-content">
          <div class="row" >
            <div class="col-xl-9 col-lg-10 mx-auto" >
              <div class="bg-faded rounded p-5" >
                <h2 class="section-heading mb-4" style="padding: 15px">
                  <span class="section-heading-lower">Reflection</span>
                </h2>
            <p class="reflection" style="padding: 15px">
                My experience with CSIS 2440 - Web Programming was quite the
                eye opener. It was the first time that I really got to get my 
                hands dirty with server side web development and gain more 
                understanding of real world scenarios of building not just a 
                functional, user-friendly website, but a secure one as well. I 
                feel like the content in this course opened up more doors and 
                added more fuel to my fire as I continue to learn and grow as an 
                aspriing developer.
            </p>
            <p style="padding: 15px"> 
                The beginning of the semester started off really strong, however,
                I was unfortunately hit with some personal matters almost halfway
                through the semester. My attendance in the classed slipped and I 
                ended up turning in a couple assignments late. Luckily, my instructor 
                recorded each lecture live and I was able to at least keep up with the 
                curriculum without falling too far behind. Most of my success in this 
                class is largely due to having the option to re-watch the lectures when 
                I was unable to make class and I will forever be grateful for that.
            </p>
            <p style="padding: 15px">
                Making the decision to pursue web development was one of the more exciting
                and wise decisions I have ever made for myself. Having changed my major 
                multiple times in my years at SLCC, this was the first time that adjusting 
                my major gave me that gut feeling of "yes, this is right". This feeling has 
                stuck with me through almost every challenge I have faced and every web 
                development course I have taken. The more I learn in this field, the more I 
                feel inspired. Although I will be ending my time at SLCC this next semester, 
                the knowledge I have gained (specifically over the last several semesters) will 
                forever be the strong foundation I'll need to keep learing and continue my 
                growth.
            </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
    <div id="courseworks" class="container-fluid" style="margin: 20px">
      <div class="row" style="text-align: center">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">   
              <span class="section-heading-lower">Courseworks</span>
            </h2>

            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="p-5 d-flex mr-auto" style="margin-bottom: 55px">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper" style="margin: 10px">Assembling Arrays</span>
                            </h2>
                        </div>
                    </div>
                    <a target="_blank" href="http://gojisaurus.herokuapp.com/music-database/">
                    <img
                        class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                        src="img/products-01.png"
                        alt=""
                        style="margin-bottom: 10px"
                    />
                    </a>
                </div>
            </div>

            <hr>

            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="p-5 d-flex mr-auto" style="margin-bottom: 55px">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Data Validation</span>
                            </h2>
                        </div>
                    </div>
                    <a target="_blank" href="http://gojisaurus.herokuapp.com/validation/">
                    <img
                        class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                        src="img/products-02.png"
                        alt=""
                        style="margin-bottom: 10px"
                    />
                    </a>
                </div>
            </div>

            <hr>

            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="p-5 d-flex mr-auto" style="margin-bottom: 55px">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Insecure Password System</span>
                            </h2>
                        </div>
                    </div>
                    <a target="_blank" href="http://gojisaurus.herokuapp.com/insecure/">
                    <img
                        class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                        src="img/products-03.png"
                        alt=""
                        style="margin-bottom: 10px"
                    />
                    </a>
                </div>
            </div>

            <hr>

            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="p-5 d-flex mr-auto" style="margin-bottom: 55px">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Not as Insecure Password System</span>
                            </h2>
                        </div>
                    </div>
                    <a target="_blank" href="http://gojisaurus.herokuapp.com/less-insecure/">
                    <img
                        class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                        src="img/products-04.png"
                        alt=""
                        style="margin-bottom: 10px"
                    />
                    </a>
                </div>
            </div>

            <hr>

            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="p-5 d-flex mr-auto" style="margin-bottom: 55px">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper">Web Poll</span>
                            </h2>
                        </div>
                    </div>
                    <a target="_blank" href="http://gojisaurus.herokuapp.com/web-poll/">
                    <img
                        class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                        src="img/products-05.png"
                        alt=""
                    />
                    </a>
                </div>
            </div>
         
          </div>
        </div>
      </div>
    </div>
    </section>

  <section class="page-section about-heading">
      <div id="eportfolio" class="container-fluid">
        <img
          class="img-fluid rounded about-heading-img mb-3 mb-lg-0"
          src="img/eportfolio.jpg"
          alt=""
        />
        <div class="about-heading-content">
          <div class="row" >
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4" style="padding: 15px">
                  <span class="section-heading-lower">e-Portfolio & 1430 Site</span>
                </h2>
                <p style="padding: 15px">
                Salt Lake Community College ePortfolios help students step ahead by providing 
                a place to archive, reflect upon, and share their best work with faculty, 
                scholarship committees or anyone else. ePortfolios can be used to showcase the 
                entirety of an academic career. In addition to building a General Education 
                ePortfolio, students may choose to create a second, career-specific ePortfolio to 
                help impress potential employers.
                </p>
                <div class="eport">
                <a target="_blank"
                href="https://slcc.digication.com/spring_semester_2017/Home/"
                class="btn btn-danger">Click Here to View My ePortfolio</a>
                </div>
                <br>
                <p style="padding: 15px">
                One of my favorite experiences at SLCC was taking CSIS 1430 - Intro to Web 
                Programming. It was where much of my inspiration was sparked and further confirmed
                my intuition that this was the career path for me. Many of the assignments and 
                projects I completed in this course helped shape the foundation for what I 
                completed in 2440. I hope you enjoy them as much as I do.
                </p>
                <div class="rose-gold" style="padding-bottom: 20px">
                <a target="_blank"
                href="https://micah-rose.github.io/rosegoldwebdesign/"
                class="btn btn-danger">Click Here to View My 1430 Site</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container-fluid" style="height: 62px; padding: 5px; color: white">
      <p style="float: left">
        Thank you for visiting my site!!
      </p>
      <p class="m-0 small" style="float: right">Copyright &copy; Gojisaurus 2019</p>    
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/js/index.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/sass.js/0.9.2/sass.min.js"
      integrity="sha512-mA5b7w9mZvGLWgjIqp9KhWNzkkZ/H3gC4Ua6GOn9m/xl1UF4ghH8GsriKvAYxLsxoKvn6NdebW7kZ6iGB3CGSg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />

    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="/css/style.css" />

    <title>NIAZI MEDICAL AND DENTAL COLLEGE | Homepage</title>
  </head>
  <body>
    <div class="home-wrapper">
      <div class="main-container position-relative">
        <div class="top-nav">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="main-wrapper">
                  <div class="left">
                    <div class="d-flex gap-3 flex-wrap">
                      <a
                        href="tel:+923011248248"
                        class="phone d-flex align-items-center gap-1"
                      >
                        <i class="ri-phone-fill"></i>
                        <span>+92-301-124-8248</span>
                      </a>
                      <span class="border"></span>
                      <a
                        href="mailto:info@nmdc.edu.pk"
                        class="email d-flex align-items-center gap-1"
                      >
                        <i class="ri-mail-fill"></i>
                        <span>info@nmdc.edu.pk</span>
                      </a>
                      <span class="border"></span>
                      <div class="email d-flex align-items-center gap-1">
                        <i class="ri-map-pin-2-fill"></i>
                        <span>10 KM Lahore Road Sargodha</span>
                      </div>
                    </div>
                  </div>
                  <div class="right d-flex align-items-center gap-3">
                    <a href="https://twitter.com/NMDC12" target="_blank"
                      ><i class="ri-twitter-fill"></i
                    ></a>
                    <a
                      href="https://www.facebook.com/nmdcsargodha"
                      target="_blank"
                      ><i class="ri-facebook-circle-fill"></i
                    ></a>
                    <a
                      href="https://www.instagram.com/niazi_medical_college_sargodha/"
                      target="_blank"
                      ><i class="ri-instagram-fill"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <header>
          <div class="container">
            <div class="row">
              <div class="col col-12 col-md-12">
                <a
                  href="/index.html"
                  class="animate__animated animate__bounceIn"
                >
                  <img src="/images/logo.webp" alt="College Logo" />
                  <span>NIAZI MEDICAL & DENTAL COLLEGE</span>
                  <span class="mbl">NMDC</span></a
                >
                <nav
                  class="nav animate__animated animate__bounceIn"
                  id="navigation"
                >
                  <ul>
                    <li class="active"><a href="/index.html">HOME</a></li>

                    <li
                      class="about-menu"
                      id="about-menu"
                      onclick="aboutList()"
                    >
                      <a class="arrow">ABOUT</a>
                      <ul class="about-submenu" id="about-submenu">
                        <li>
                          <a href="vision-and-mission.html">Vision & Mission</a>
                        </li>
                        <li>
                          <a href="message-of-chairman.html"
                            >Message of Chairman</a
                          >
                        </li>
                        <li>
                          <a href="message-of-director.html"
                            >Message of Managing Director</a
                          >
                        </li>
                        <li>
                          <a href="message-of-principal.html"
                            >Message of Principal</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li
                      class="admissions-menu"
                      onclick="admissionList()"
                      id="admissions-menu"
                    >
                      <a class="arrow">ADMISSIONS</a>
                      <ul class="admissions-submenu" id="admissions-submenu">
                        <li>
                          <a href="admissions-criteria.html"
                            >Admissions Criteria</a
                          >
                        </li>
                        <li><a href="fee-structure.html">Fee Structure</a></li>
                        <li><a href="apply-now.html">Apply Now</a></li>
                        <li><a href="merit-lists.html">Merit Lists</a></li>
                      </ul>
                    </li>
                    <li
                      class="departments-menu"
                      onclick="deptList()"
                      id="departments-menu"
                    >
                      <a class="arrow">PROGRAMS</a>
                      <ul class="departments-submenu" id="departments-submenu">
                        <li><a href="mbbs.html">MBBS</a></li>
                        <li><a href="bds.html">BDS</a></li>
                        <li><a href="dpt.html">DPT</a></li>
                        <li><a href="pharm-d.html">Pharm-D</a></li>
                        <li>
                          <a href="nursing.html">Nursing</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="downloads.html">DOWNLOADS</a></li>
                    <li><a href="contact-us.html">CONTACT</a></li>
                  </ul>
                </nav>
                <i
                  class="ri-menu-line animate__animated animate__bounceIn"
                  id="hamburger"
                  onclick="toggleMenu()"
                ></i>
              </div>
            </div>
          </div>
        </header>

        <div class="hero owl-carousel owl-theme" id="slider">
          <div class="image-wrapper">
            <div class="container">
              <div class="row">
                <div class="col col-md-12">
                  <div class="content">
                    <div
                      class="divider mb-4 animate__animated animate__bounceInLeft"
                    ></div>
                    <span class="text-uppercase"
                      ><h5 class="animate__animated animate__bounceInLeft">
                        Welcome to
                      </h5></span
                    >
                    <h1 class="mb-3 animate__animated animate__backInLeft">
                      Niazi Medical and Dental College Sargodha
                    </h1>
                    <p class="mb-4 pr-5 animate__animated animate__backInLeft">
                      Experience the perfect blend of cutting-edge education and
                      hands-on clinical training at Niazi Medical and Dental
                      College, your gateway to a fulfilling medical career.
                    </p>
                    <a
                      class="btn animate__animated animate__zoomInUp"
                      href="apply-now.html"
                      >Apply now</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <span class="bg-color"></span>
            <img src="/images/hero4.jpg" class="img-fluid" alt="" />
          </div>
          <div class="image-wrapper">
            <div class="container">
              <div class="row">
                <div class="col col-md-12">
                  <div class="content">
                    <div
                      class="divider mb-4 animate__animated animate__bounceInLeft"
                    ></div>
                    <span class="text-uppercase"
                      ><h5 class="animate__animated animate__bounceInLeft">
                        Welcome to
                      </h5></span
                    >
                    <h1 class="mb-3 animate__animated animate__backInLeft">
                      Niazi Medical and Dental College Sargodha
                    </h1>
                    <p class="mb-4 pr-5 animate__animated animate__backInLeft">
                      Experience the perfect blend of cutting-edge education and
                      hands-on clinical training at Niazi Medical and Dental
                      College, your gateway to a fulfilling medical career.
                    </p>
                    <a
                      class="btn animate__animated animate__zoomInUp"
                      href="apply-now.html"
                      >Apply now</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <span class="bg-color"></span>
            <img src="/images/gallery (11).jpg" class="img-fluid" alt="" />
          </div>
          <div class="image-wrapper">
            <div class="container">
              <div class="row">
                <div class="col col-md-12">
                  <div class="content">
                    <div
                      class="divider mb-4 animate__animated animate__bounceInLeft"
                    ></div>
                    <span class="text-uppercase"
                      ><h5 class="animate__animated animate__bounceInLeft">
                        Welcome to
                      </h5></span
                    >
                    <h1 class="mb-3 animate__animated animate__backInLeft">
                      Niazi Medical and Dental College Sargodha
                    </h1>
                    <p class="mb-4 pr-5 animate__animated animate__backInLeft">
                      Experience the perfect blend of cutting-edge education and
                      hands-on clinical training at Niazi Medical and Dental
                      College, your gateway to a fulfilling medical career.
                    </p>
                    <a
                      class="btn animate__animated animate__zoomInUp"
                      href="apply-now.html"
                      >Apply now</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <span class="bg-color"></span>
            <img src="/images/hero1.jpg" class="img-fluid" alt="" />
          </div>
          <!-- <div class="image-wrapper">
                <img src="/images/hero2.jpg" class="img-fluid" alt="" />
            </div>
            <div class="image-wrapper">
                <img src="/images/hero3.jpg" class="img-fluid" alt="" />
            </div>
            <div class="image-wrapper">
                <img src="/images/hero4.jpg" class="img-fluid" alt="" />
            </div> -->
          <div class="image-wrapper">
            <div class="container">
              <div class="row">
                <div class="col col-md-12">
                  <div class="content">
                    <div
                      class="divider mb-4 animate__animated animate__bounceInLeft"
                    ></div>
                    <span class="text-uppercase"
                      ><h5 class="animate__animated animate__bounceInLeft">
                        Welcome to
                      </h5></span
                    >
                    <h1 class="mb-3 animate__animated animate__backInLeft">
                      Niazi Medical and Dental College Sargodha
                    </h1>
                    <p class="mb-4 pr-5 animate__animated animate__backInLeft">
                      Experience the perfect blend of cutting-edge education and
                      hands-on clinical training at Niazi Medical and Dental
                      College, your gateway to a fulfilling medical career.
                    </p>
                    <a
                      class="btn animate__animated animate__zoomInUp"
                      href="apply-now.html"
                      >Apply now</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <span class="bg-color"></span>
            <img src="/images/hero5.jpg" class="img-fluid" alt="" />
          </div>
          <div class="image-wrapper">
            <div class="container">
              <div class="row">
                <div class="col col-md-12">
                  <div class="content">
                    <div
                      class="divider mb-4 animate__animated animate__bounceInLeft"
                    ></div>
                    <span class="text-uppercase"
                      ><h5 class="animate__animated animate__bounceInLeft">
                        Welcome to
                      </h5></span
                    >
                    <h1 class="mb-3 animate__animated animate__backInLeft">
                      Niazi Medical and Dental College Sargodha
                    </h1>
                    <p class="mb-4 pr-5 animate__animated animate__backInLeft">
                      Experience the perfect blend of cutting-edge education and
                      hands-on clinical training at Niazi Medical and Dental
                      College, your gateway to a fulfilling medical career.
                    </p>
                    <a
                      class="btn animate__animated animate__zoomInUp"
                      href="apply-now.html"
                      >Apply now</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <span class="bg-color"></span>
            <img src="/images/hero2.jpg" class="img-fluid" alt="" />
          </div>
          <div class="image-wrapper">
            <div class="container">
              <div class="row">
                <div class="col col-md-12">
                  <div class="content">
                    <div
                      class="divider mb-4 animate__animated animate__bounceInLeft"
                    ></div>
                    <span class="text-uppercase"
                      ><h5 class="animate__animated animate__bounceInLeft">
                        Welcome to
                      </h5></span
                    >
                    <h1 class="mb-3 animate__animated animate__backInLeft">
                      Niazi Medical and Dental College Sargodha
                    </h1>
                    <p class="mb-4 pr-5 animate__animated animate__backInLeft">
                      Experience the perfect blend of cutting-edge education and
                      hands-on clinical training at Niazi Medical and Dental
                      College, your gateway to a fulfilling medical career.
                    </p>
                    <a
                      class="btn animate__animated animate__zoomInUp"
                      href="apply-now.html"
                      >Apply now</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <span class="bg-color"></span>
            <img src="/images/hero3.jpg" class="img-fluid" alt="" />
          </div>
          <!-- <div class="image-wrapper">
            <div class="container">
              <div class="row">
                <div class="col col-md-12">
                  <div class="content">
                    <div
                      class="divider mb-4 animate__animated animate__bounceInLeft"
                    ></div>
                    <span class="text-uppercase"
                      ><h5 class="animate__animated animate__bounceInLeft">
                        Welcome to
                      </h5></span
                    >
                    <h1 class="mb-3 animate__animated animate__backInLeft">
                      Niazi Medical and Dental College Sargodha
                    </h1>
                    <p class="mb-4 pr-5 animate__animated animate__backInLeft">
                      Experience the perfect blend of cutting-edge education and
                      hands-on clinical training at Niazi Medical and Dental
                      College, your gateway to a fulfilling medical career.
                    </p>
                    <a
                      class="btn animate__animated animate__zoomInUp"
                      href="apply-now.html"
                      >Apply now</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <span class="bg-color"></span>
            <img src="/images/hero.jpg" class="img-fluid" alt="" />
          </div>
          <div class="image-wrapper">
            <div class="container">
              <div class="row">
                <div class="col col-md-12">
                  <div class="content">
                    <div
                      class="divider mb-4 animate__animated animate__bounceInLeft"
                    ></div>
                    <span class="text-uppercase"
                      ><h5 class="animate__animated animate__bounceInLeft">
                        Welcome to
                      </h5></span
                    >
                    <h1 class="mb-3 animate__animated animate__backInLeft">
                      Niazi Medical and Dental College Sargodha
                    </h1>
                    <p class="mb-4 pr-5 animate__animated animate__backInLeft">
                      Experience the perfect blend of cutting-edge education and
                      hands-on clinical training at Niazi Medical and Dental
                      College, your gateway to a fulfilling medical career.
                    </p>
                    <a
                      class="btn animate__animated animate__zoomInUp"
                      href="apply-now.html"
                      >Apply now</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <span class="bg-color"></span>
            <img src="/images/hero6.jpg" class="img-fluid" alt="" />
          </div> -->
        </div>

        <section class="about">
          <div class="container">
            <!-- <div class="row row1">
                    <div class="col col-md-12">
                        <h2>
                            Welcome to Niazi Medical & Dental College
                            <div class="divider my-2"></div>
                        </h2>
                    </div>
                </div> -->
            <div class="row row2">
              <div
                class="col col1 col-6 col-sm-6 col-md-6 col-lg-3"
                data-aos="fade-up"
              >
                <div class="main-wrapper">
                  <div class="image1">
                    <img
                      src="/images/medical-college.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="image2">
                    <img
                      src="/images/dental-college.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <div
                class="col col2 col-6 col-sm-6 col-md-6 col-lg-3"
                data-aos="fade-up"
              >
                <div class="main-wrapper">
                  <div class="image3">
                    <img src="/images/chairman.jpg" class="img-fluid" alt="" />
                  </div>
                </div>
              </div>
              <div
                class="col col3 col-12 col-sm-12 col-md-12 col-lg-6"
                data-aos="fade-up"
              >
                <div class="main-wrapper">
                  <h3>About College</h3>
                  <p>
                    Niazi Medical & Dental College, Sargodha and attached Niazi
                    Welfare Foundation Teaching Hospital are located on Lahore
                    Road, 10 km away from Sargodha city. The complex is owned by
                    M/S Niazi Medical & Dental College (Private) Ltd.
                  </p>
                  <a href="mbbs.html" class="btn">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="message-wrapper">
          <div class="bg-color">
            <div class="container">
              <div class="row row1">
                <div class="col col-md-12">
                  <h2 data-aos="fade-up">
                    Messages
                    <div class="divider my-2"></div>
                  </h2>
                </div>
              </div>
              <div class="row">
                <div class="col col-12 col-sm-12 col-md-11 col-lg-12">
                  <div class="main-wrapper" id="messageSlider">
                    <div class="message" data-aos="zoom-in">
                      <div class="image">
                        <img
                          src="/images/message1.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <p>
                          “By the grace of Allah Almighty, Niazi Medical &
                          Dental College, Sargodha is inducting first batch of
                          MBBS class after recognition by Govt. of Pakistan.
                          There was a need for an institution embarked with the
                          mission to produce quality medical professionals, free
                          of complexes, proud of their heritage, motivated with
                          spirit of islamic and professional ethics has rightly
                          been filled by NM&DC in a rural set up of Sargodha
                          division.”
                        </p>
                        <h6>
                          Dr. Abdul Ghafoor Niazi (Chairman Board of Directors)
                        </h6>
                      </div>
                    </div>
                    <div class="message" data-aos="zoom-in">
                      <div class="image">
                        <img
                          src="/images/message2.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <p>
                          “Being a doctor as well as a young entrepreneur, I
                          have always believed that education is not merely an
                          academic achievement; it is a way of merging
                          theoretical knowledge with practical exertion to serve
                          and save humanity. NMDC is an effort on our part to
                          develop an outstanding academic environment for
                          education, research, and clinical practice in the
                          field of medicine and surgery.”
                        </p>
                        <h6>Dr Muneeb Ur Rehman Niazi (Managing Director)</h6>
                      </div>
                    </div>
                    <div class="message" data-aos="zoom-in">
                      <div class="image">
                        <img
                          src="/images/message3.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <p>
                          “The establishment of Niazi Medical & Dental College,
                          Sargodha (NM&DC) is an excellent professional
                          institution in sub-urban set up of Niazi Medical &
                          Dental College (Private) Ltd. The College has been
                          recognized by PM & DC, and included in the 3rd
                          schedule of recognized medical institutions of
                          Government, of Pakistan.”
                        </p>
                        <h6>Prof. Dr Syed Hyder Raza (Principal)</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="facilities">
          <div class="bg-color">
            <div class="container">
              <div class="row1">
                <div class="col col1 col-12">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <h2>NMDC Facilities</h2>
                  </div>
                </div>
              </div>
              <!-- <div class="row2">
                <div class="col col1 col-5 col-sm-5 col-md-3">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <h2>20K<small>+</small></h2>
                    <p>Graduates</p>
                  </div>
                </div>
                <div class="col col2 col-5 col-sm-5 col-md-3">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <h2>150<small>+</small></h2>
                    <p>Professors</p>
                  </div>
                </div>
                <div class="col col3 col-5 col-sm-5 col-md-3">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <h2>40<small>+</small></h2>
                    <p>Colleges</p>
                  </div>
                </div>
                <div class="col col4 col-5 col-sm-5 col-md-3">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <h2>30<small>+</small></h2>
                    <p>Hospitals</p>
                  </div>
                </div>
              </div> -->
              <div class="row2">
                <div class="col col1 col-5 col-sm-5 col-md-2">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <span><i class="ri-hotel-line"></i></span>
                    <p>In Campus Hostel</p>
                  </div>
                </div>
                <div class="col col2 col-5 col-sm-5 col-md-2">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <span><i class="ri-hospital-line"></i></span>
                    <p>Attached Hospitals</p>
                  </div>
                </div>
                <div class="col col3 col-5 col-sm-5 col-md-2">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <span><i class="ri-building-4-line"></i></span>
                    <p>Campus Mosque</p>
                  </div>
                </div>
                <div class="col col4 col-5 col-sm-5 col-md-2">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <span><i class="ri-computer-line"></i></span>
                    <p>Digital IT Lab</p>
                  </div>
                </div>
                <div class="col col4 col-5 col-sm-5 col-md-2">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <span><i class="ri-building-2-line"></i></span>
                    <p>Library</p>
                  </div>
                </div>
                <div class="col col4 col-5 col-sm-5 col-md-2">
                  <div class="main-wrapper" data-aos="zoom-in">
                    <span><i class="ri-store-3-line"></i></span>
                    <p>Cafeteria</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section class="colleges">
          <div class="container">
            <div class="row row1">
              <div class="col col-md-12">
                <h2 data-aos="zoom-in">
                  Our Colleges
                  <div class="divider my-2"></div>
                </h2>
              </div>
            </div>
            <div class="row row2">
              <div class="col col1 col-md-6 col-lg-4">
                <a href="mbbs.html">
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/mbbs.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>MBBS College</h2>
                      <!-- <div>
                        <i class="ri-map-pin-2-fill"></i
                        ><span>10-KM Lahore Road, Sargodha</span>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>

              <div class="col col1 col-md-6 col-lg-4">
                <a href="bds.html">
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/bds.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>Dental College</h2>
                      <!-- <div>
                        <i class="ri-map-pin-2-fill"></i
                        ><span>VIP Block Niazi Square Club Road, Sargodha</span>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>

              <div class="col col1 col-md-6 col-lg-4">
                <a href="dpt.html">
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/dpt.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>College of Physical Therapy</h2>
                      <!-- <div>
                        <i class="ri-map-pin-2-fill"></i
                        ><span>139 Main Satellite Town Road, Sargodha</span>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>

              <div class="col col1 col-md-6 col-lg-4">
                <a href="pharm-d.html">
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img
                        src="/images/pharmacy.jpg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                    <div class="content">
                      <h2>College of Pharmacy</h2>
                      <!-- <div>
                        <i class="ri-map-pin-2-fill"></i
                        ><span>Near DHQ, Main Khushab Road, Sargodha</span>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>

              <div class="col col1 col-md-6 col-lg-4">
                <a href="nursing.html">
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/nursing.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>College of Nursing</h2>
                      <!-- <div>
                        <i class="ri-map-pin-2-fill"></i
                        ><span>Near DHQ, Main Khushab Road, Sargodha</span>
                      </div> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </section>

        <section class="events">
          <div class="container">
            <div class="row row1">
              <div class="col col-md-12">
                <h2 data-aos="zoom-in">
                  Latest Events
                  <div class="divider my-2"></div>
                </h2>
              </div>
            </div>
            <div class="row row2">
              <div class="col col1 col-12">
                <div id="events-slider" class="owl-carousel owl-theme">
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img
                        src="/images/events/white-coat2024.jpg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                    <div class="content">
                      <span class="date"
                        ><i class="ri-calendar-line"></i
                        ><span>Mar 04, 2024</span></span
                      >
                      <h2>White Coat Ceremony</h2>
                      <p>White Coat Ceremony 2024 held at NMDC Auditorium.</p>
                      <!-- <a href="/mbbs.html" class="btn"
                        >Read more <i class="ri-arrow-right-line"></i
                      ></a> -->
                    </div>
                  </div>
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img
                        src="/images/events/spss-workshop.jpg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                    <div class="content">
                      <span class="date"
                        ><i class="ri-calendar-line"></i
                        ><span>Feb 27, 2024</span></span
                      >
                      <h2>SPSS Workshop</h2>
                      <p>
                        SPSS Workshop at Niazi Medical and Dental College
                        Sargodha
                      </p>
                      <!-- <a href="/mbbs.html" class="btn"
                        >Read more <i class="ri-arrow-right-line"></i
                      ></a> -->
                    </div>
                  </div>
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img
                        src="/images/events/img_sm_3.webp"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                    <div class="content">
                      <span class="date"
                        ><i class="ri-calendar-line"></i
                        ><span>Aug 09, 2019</span></span
                      >
                      <h2>Plantation Ceremony</h2>
                      <p>
                        Plantation at Niazi Medical and Dental College Sargodha
                      </p>
                      <!-- <a href="/mbbs.html" class="btn"
                        >Read more <i class="ri-arrow-right-line"></i
                      ></a> -->
                    </div>
                  </div>
                  <!-- <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img
                        src="/images/events/img_sm_3.webp"
                        class="img-fluid"
                        alt=""
                      />
                    </div>
                    <div class="content">
                      <span class="date"
                        ><i class="ri-calendar-line"></i
                        ><span>Aug 09, 2019</span></span
                      >
                      <h2>Plantation Ceremony</h2>
                      <p>
                        Plantation at Niazi Medical and Dental College Sargodha
                      </p>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="hospitals">
          <div class="container">
            <div class="row row1">
              <div class="col col-md-12">
                <h2 data-aos="zoom-in">
                  Our Hospitals
                  <div class="divider my-2"></div>
                </h2>
              </div>
            </div>
            <div class="row row2">
              <div class="col col1 col-md-6 col-lg-4">
                <div class="main-wrapper" data-aos="fade-up">
                  <div class="image">
                    <img
                      src="/images/niazi-teaching-hospital.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="content">
                    <h2>
                      Niazi Welfare Foundation Teaching Hospital, Sargodha
                    </h2>
                    <div>
                      <i class="ri-map-pin-2-fill"></i
                      ><span>10-KM Lahore Road, Sargodha</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col col1 col-md-6 col-lg-4">
                <div class="main-wrapper" data-aos="fade-up">
                  <div class="image">
                    <img
                      src="/images/niazi-vip-hospital.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="content">
                    <h2>Niazi Medical Complex Teaching Hospital, Sargodha</h2>
                    <div>
                      <i class="ri-map-pin-2-fill"></i
                      ><span>VIP Block Niazi Square Club Road, Sargodha</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col col1 col-md-6 col-lg-4">
                <div class="main-wrapper" data-aos="fade-up">
                  <div class="image">
                    <img
                      src="/images/faiz-memorial-hospital.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="content">
                    <h2>Faiz Memorial Medical Complex, Sargodha</h2>
                    <div>
                      <i class="ri-map-pin-2-fill"></i
                      ><span>139 Main Satellite Town Road, Sargodha</span>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="col col1 col-md-12 col-lg-6">
                <div class="main-wrapper" data-aos="fade-up">
                  <div class="image">
                    <img
                      src="/images/niazi-medical-tower.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="content">
                    <h2>Niazi Medical Tower Hospital</h2>
                    <div>
                      <i class="ri-map-pin-2-fill"></i
                      ><span>Near DHQ, Main Khushab Road, Sargodha</span>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </section>

        <!-- <div class="featured-banner">
          <div class="container">
            <div class="row">
              <div class="col col1 col-5 col-sm-5 col-md-3">
                <div class="main-wrapper" data-aos="zoom-in">
                  <h2>10K<small>+</small></h2>
                  <p>Students</p>
                </div>
              </div>
              <div class="col col2 col-5 col-sm-5 col-md-3">
                <div class="main-wrapper" data-aos="zoom-in">
                  <h2>100<small>+</small></h2>
                  <p>Professors</p>
                </div>
              </div>
              <div class="col col3 col-5 col-sm-5 col-md-3">
                <div class="main-wrapper" data-aos="zoom-in">
                  <h2>5<small>+</small></h2>
                  <p>Colleges</p>
                </div>
              </div>
              <div class="col col4 col-5 col-sm-5 col-md-3">
                <div class="main-wrapper" data-aos="zoom-in">
                  <h2>4<small>+</small></h2>
                  <p>Hospitals</p>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <!-- <section class="news">
          <div class="container">
            <div class="row row1">
              <div class="col col-md-12">
                <h2 data-aos="fade-up">
                  Featured News
                  <div class="divider my-2"></div>
                </h2>
              </div>
            </div>
            <div class="row row2">
              <div class="col col1 col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-wrapper" data-aos="zoom-in">
                  <div class="image">
                    <img src="/images/hero1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="content">
                    <span class="date"
                      ><i class="ri-calendar-line"></i
                      ><span>Jan 19, 2023</span></span
                    >
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Optio, culpa!
                    </p>
                    <a href="/mbbs.html" class="btn"
                      >Read more <i class="ri-arrow-right-line"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col col1 col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-wrapper" data-aos="zoom-in">
                  <div class="image">
                    <img src="/images/hero1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="content">
                    <span class="date"
                      ><i class="ri-calendar-line"></i
                      ><span>Jan 19, 2023</span></span
                    >
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Optio, culpa!
                    </p>
                    <a href="/mbbs.html" class="btn"
                      >Read more <i class="ri-arrow-right-line"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col col1 col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-wrapper" data-aos="zoom-in">
                  <div class="image">
                    <img src="/images/hero1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="content">
                    <span class="date"
                      ><i class="ri-calendar-line"></i
                      ><span>Jan 19, 2023</span></span
                    >
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Optio, culpa!
                    </p>
                    <a href="/mbbs.html" class="btn"
                      >Read more <i class="ri-arrow-right-line"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col col1 col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-wrapper" data-aos="zoom-in">
                  <div class="image">
                    <img src="/images/hero1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="content">
                    <span class="date"
                      ><i class="ri-calendar-line"></i
                      ><span>Jan 19, 2023</span></span
                    >
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Optio, culpa!
                    </p>
                    <a href="/mbbs.html" class="btn"
                      >Read more <i class="ri-arrow-right-line"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <section class="news">
          <div class="container">
            <div class="row row1">
              <div class="col col-md-12">
                <h2 data-aos="fade-up">
                  Latest Advertisement
                  <div class="divider my-2"></div>
                </h2>
              </div>
            </div>
            <div class="row row2">
              <div class="col col1 col-12">
                <div id="news-slider" class="owl-carousel owl-theme">
                  <a href="images/news/nursing-seats.png" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/nursing-seats.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>Feb 01, 2024</span></span
                        >
                        <h2>Admissions Open</h2>
                        <p>Admissions Open for 2023-24 in Nursing.</p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                  <a href="images/news/mbbs.png" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/mbbs.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>Dec 15, 2023</span></span
                        >
                        <h2>Admissions Open</h2>
                        <p>Admissions Open for 2023-24 in MBBS.</p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                  <a href="images/news/1.webp" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/1.webp"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>SEP 15, 2023</span></span
                        >
                        <h2>Admissions Open</h2>
                        <p>
                          Admissions Open for 2023-24 in MBBS, BDS, DPT &
                          Pharm-D.
                        </p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                  <a href="images/news/2.png" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/2.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>Sep 15, 2023</span></span
                        >
                        <h2>DPT Admissions</h2>
                        <p>Admissions Open for 2023-24 in DPT.</p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                  <a href="images/news/3.png" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/3.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>Sep 15, 2023</span></span
                        >
                        <h2>Pharm-D Admissions</h2>
                        <p>Admissions Open for 2023-24 in Pharm-D.</p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                  <a href="images/news/4.jpg" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/4.jpg"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>Sep 15, 2023</span></span
                        >
                        <h2>MBBS Admissions</h2>
                        <p>Admissions Open for 2023-24 in MBBS.</p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                  <a href="images/news/5.jpg" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/5.jpg"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>Sep 15, 2023</span></span
                        >
                        <h2>BDS Admissions</h2>
                        <p>Admissions Open for 2023-24 in BDS.</p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                  <a href="images/news/6.jpg" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/6.jpg"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>Sep 15, 2023</span></span
                        >
                        <h2>DPT Admissions</h2>
                        <p>Admissions Open for 2023-24 in DPT.</p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                  <a href="images/news/7.jpg" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/7.jpg"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>Sep 15, 2023</span></span
                        >
                        <h2>Pharm-D Admissions</h2>
                        <p>Admissions Open for 2023-24 in Pharm-D.</p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                  <a href="images/news/8.jpg" target="_blank">
                    <div class="main-wrapper" data-aos="fade-up">
                      <div class="image">
                        <img
                          src="/images/news/8.jpg"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <span class="date"
                          ><i class="ri-calendar-line"></i
                          ><span>Sep 15, 2023</span></span
                        >
                        <h2>Nursing Admissions</h2>
                        <p>Nursing Admissions Open for 2023-24</p>
                        <!-- <a href="/mbbs.html" class="btn"
                          >Read more <i class="ri-arrow-right-line"></i
                        ></a> -->
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="row row3">
              <div class="col col-md-12">
                <a href="nmdc-advertisement.html" target="_self">
                  <button data-aos="fade-up" class="">View more</button>
                </a>
              </div>
            </div>
          </div>
        </section>

        <!-- <section class="events">
          <div class="container">
            <div class="row row1">
              <div class="col col-md-12">
                <h2 data-aos="zoom-in">
                  Latest Events
                  <div class="divider my-2"></div>
                </h2>
              </div>
            </div>
            <div class="row row2">
              <div class="col col1 col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-wrapper" data-aos="fade-up">
                  <div class="image">
                    <img src="/images/hero1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="content">
                    <span class="date"
                      ><i class="ri-calendar-line"></i
                      ><span>Jan 19, 2023</span></span
                    >
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Optio, culpa!
                    </p>
                    <a href="/mbbs.html" class="btn"
                      >Read more <i class="ri-arrow-right-line"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col col1 col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-wrapper" data-aos="fade-up">
                  <div class="image">
                    <img src="/images/hero1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="content">
                    <span class="date"
                      ><i class="ri-calendar-line"></i
                      ><span>Jan 19, 2023</span></span
                    >
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Optio, culpa!
                    </p>
                    <a href="/mbbs.html" class="btn"
                      >Read more <i class="ri-arrow-right-line"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col col1 col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-wrapper" data-aos="fade-up">
                  <div class="image">
                    <img src="/images/hero1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="content">
                    <span class="date"
                      ><i class="ri-calendar-line"></i
                      ><span>Jan 19, 2023</span></span
                    >
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Optio, culpa!
                    </p>
                    <a href="/mbbs.html" class="btn"
                      >Read more <i class="ri-arrow-right-line"></i
                    ></a>
                  </div>
                </div>
              </div>

              <div class="col col1 col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="main-wrapper" data-aos="fade-up">
                  <div class="image">
                    <img src="/images/hero1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="content">
                    <span class="date"
                      ><i class="ri-calendar-line"></i
                      ><span>Jan 19, 2023</span></span
                    >
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Optio, culpa!
                    </p>
                    <a href="/mbbs.html" class="btn"
                      >Read more <i class="ri-arrow-right-line"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- <section class="message-wrapper">
          <div class="bg-color">
            <div class="container">
              <div class="row row1">
                <div class="col col-md-12">
                  <h2 data-aos="fade-up">
                    Messages
                    <div class="divider my-2"></div>
                  </h2>
                </div>
              </div>
              <div class="row">
                <div class="col col-12 col-sm-12 col-md-11 col-lg-8">
                  <div
                    class="main-wrapper owl-carousel owl-theme"
                    id="messageSlider"
                  >
                    <div class="message" data-aos="zoom-in">
                      <div class="image">
                        <img
                          src="/images/message1.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <p>
                          “By the grace of Allah Almighty, Niazi Medical &
                          Dental College, Sargodha is inducting first batch of
                          MBBS class after recognition by Govt. of Pakistan.
                          There was a need for an institution embarked with the
                          mission to produce quality medical professionals, free
                          of complexes, proud of their heritage, motivated with
                          spirit of islamic and professional ethics has rightly
                          been filled by NM&DC in a rural set up of Sargodha
                          division.”
                        </p>
                        <h6>
                          DR. ABDUL GHAFOOR NIAZI (CHAIRMAN BOARD OF DIRECTORS)
                        </h6>
                      </div>
                    </div>
                    <div class="message" data-aos="zoom-in">
                      <div class="image">
                        <img
                          src="/images/message2.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <p>
                          “Being a doctor as well as a young entrepreneur, I
                          have always believed that education is not merely an
                          academic achievement; it is a way of merging
                          theoretical knowledge with practical exertion to serve
                          and save humanity. NMDC is an effort on our part to
                          develop an outstanding academic environment for
                          education, research, and clinical practice in the
                          field of medicine and surgery.”
                        </p>
                        <h6>Dr Muneeb Ur Rehman Niazi (Managing Director)</h6>
                      </div>
                    </div>
                    <div class="message" data-aos="zoom-in">
                      <div class="image">
                        <img
                          src="/images/message2.png"
                          class="img-fluid"
                          alt=""
                        />
                      </div>
                      <div class="content">
                        <p>
                          “The establishment of Niazi Medical & Dental College,
                          Sargodha (NM&DC) is an excellent professional
                          institution in sub-urban set up of Niazi Medical &
                          Dental College (Private) Ltd. The College has been
                          recognized by PM & DC, and included in the 3rd
                          schedule of recognized medical institutions of
                          Government, of Pakistan.”
                        </p>
                        <h6>Prof. Dr Syed Hyder Raza (PRINCIPAL)</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <section class="gallery">
          <div class="container">
            <div class="row row1">
              <div class="col col-md-12">
                <h2 data-aos="fade-up">
                  Image Gallery
                  <div class="divider my-2"></div>
                </h2>
              </div>
            </div>
            <div class="row row2">
              <div class="main-wrapper">
                <div class="image1" data-aos="zoom-in">
                  <img src="/images/gallery (9).jpg" class="img-fluid" alt="" />
                </div>

                <div class="image2" data-aos="zoom-in">
                  <img src="/images/gallery (5).jpg" class="img-fluid" alt="" />
                </div>

                <div class="image3" data-aos="zoom-in">
                  <img
                    src="/images/gallery (3).jpeg"
                    class="img-fluid"
                    alt=""
                  />
                </div>

                <div class="image4" data-aos="zoom-in">
                  <img
                    src="/images/gallery (7).jpeg"
                    class="img-fluid"
                    alt=""
                  />
                </div>

                <div class="image5" data-aos="zoom-in">
                  <img src="/images/gallery (4).jpg" class="img-fluid" alt="" />
                </div>

                <div class="image6" data-aos="zoom-in">
                  <img
                    src="/images/gallery (10).jpg"
                    class="img-fluid"
                    alt=""
                  />
                </div>

                <div class="image7" data-aos="zoom-in">
                  <img
                    src="/images/gallery (6).jpeg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="row row3">
              <div class="col col-md-12">
                <a href="nmdc-gallery.html" target="_self">
                  <button data-aos="fade-up" class="btn">View more</button>
                </a>
              </div>
            </div>
          </div>
        </section>

        <section class="affiliation">
          <div class="container">
            <div class="row row1">
              <div class="col col-md-12">
                <h2 data-aos="fade-up">
                  Affiliation & Recognition
                  <div class="divider my-2"></div>
                </h2>
              </div>
            </div>
            <div class="row row2">
              <div class="col col1 col-12">
                <div id="affiliation-slider" class="owl-carousel owl-theme">
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/pmdc.png" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>Recognized by PMDC</h2>
                    </div>
                  </div>
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/uhs.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>Affiliated with UHS</h2>
                    </div>
                  </div>
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/uos.png" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>Affiliated with UOS</h2>
                    </div>
                  </div>
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/neb.png" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>Affiliated with NEBP</h2>
                    </div>
                  </div>
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/pcp.png" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>Recognized by PCP</h2>
                    </div>
                  </div>
                  <div class="main-wrapper" data-aos="fade-up">
                    <div class="image">
                      <img src="/images/pnmc.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="content">
                      <h2>Recognized by PNMC</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="main-wrapper">
                <!-- <div class="main-wrapper" data-aos="fade-up"> -->
                <div class="col col1 col-md-4 col-lg-4">
                  <div class="wrapper">
                    <h4>About NMDC</h4>
                    <p>
                      Niazi Medical & Dental College, Sargodha and attached
                      Niazi Welfare Foundation Teaching Hospital are located on
                      Lahore Road, 10 km away from Sargodha city. The complex is
                      owned by M/S Niazi Medical & Dental College (Private) Ltd.
                    </p>
                    <div>
                      <a href="https://twitter.com/NMDC12"
                        ><i class="ri-twitter-line"></i
                      ></a>
                      <a href="https://www.facebook.com/nmdcsargodha"
                        ><i class="ri-facebook-box-fill"></i
                      ></a>
                      <a
                        href="https://www.instagram.com/niazi_medical_college_sargodha/"
                        ><i class="ri-instagram-line"></i
                      ></a>
                      <a href="https://www.youtube.com/watch?v=E-RvUE-co3c"
                        ><i class="ri-youtube-fill"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col col2 col-md-2 col-lg-1">
                  <div class="wrapper">
                    <!-- <div class="wrapper" data-aos="fade-up"> -->
                    <h4>Links</h4>
                    <ul>
                      <li><a href="index.html">Home</a></li>
                      <li>
                        <a href="admissions-criteria.html"
                          >Admission Criteria</a
                        >
                      </li>
                      <li><a href="apply-now.html">Apply Now</a></li>
                      <li><a href="merit-lists.html">Merit Lists</a></li>
                      <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col col3 col-md-5 col-lg-5">
                  <div class="wrapper">
                    <!-- <div class="wrapper" data-aos="fade-up"> -->
                    <h4>Contact Info</h4>
                    <ul>
                      <li>
                        <div>
                          <i class="ri-map-pin-2-fill"></i
                          ><span>10,km Lahore Road Sargodha</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="ri-mail-open-fill"></i
                          ><span>info@nmdc.edu.pk, bilal@nmdc.edu.pk</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="ri-phone-fill"></i
                          ><span>For MBBS: 0311-1248248, 0301-1248248</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="ri-phone-fill"></i
                          ><span>For DPT: 0306-8248248</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="ri-phone-fill"></i
                          ><span>For Doctor of Pharmacy: 0307-1248248</span>
                        </div>
                      </li>
                      <li>
                        <div>
                          <i class="ri-phone-fill"></i
                          ><span>For Nursing: 0301-1248248</span>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="copyright">
            <div class="container">
              <div class="row">
                <div class="col col-12">
                  <div class="wrapper">
                    <p>
                      © 2018-2024 <a href="/index.html">NMDC</a>. All Rights
                      Reserved.
                      <!-- <em> -->
                      <a
                        href="https://www.linkedin.com/in/iamyasirniazi/"
                        target="_blank"
                        >Developed by Yasir Niazi, IT Manager NMDC (Ph#
                        0305-7388480)</a
                      >
                      <!-- </em> -->
                    </p>
                    <!-- <p>
                      <em
                        ><a href="https://www.linkedin.com/in/iamyasirniazi/" target="_blank">Developed by IT Manager NMDC Yasir Khan (Ph# 0305-7388480)</a></em
                      >
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <script src="/javascript.js" defer></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Jquery Owl-Carousel Sliders Start -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
      integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- <script>
      const about_menu = document.getElementById("about-menu");
      const about_submenu = document.getElementById("about-submenu");

      const admissions_menu = document.getElementById("admissions-menu");
      const admissions_submenu = document.getElementById("admissions-submenu");

      const departments_menu = document.getElementById("departments-menu");
      const departments_submenu = document.getElementById(
        "departments-submenu"
      );

      function aboutList() {
        about_submenu.classList.toggle("submenu-active");
      }

      function deptList() {
        departments_submenu.classList.toggle("submenu-active");
      }

      function admissionList() {
        admissions_submenu.classList.toggle("submenu-active");
      }
    </script> -->
  </body>
</html>

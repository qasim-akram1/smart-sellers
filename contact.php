<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/favicon.png" />
    <title>Contact - Smart Seller</title>
    <link rel="stylesheet" href="assets/css/style.css?v1.5.0" />
  </head>

  <body class="nk-body" data-menu-collapse="lg">
    <div class="nk-app-root">
      <?php require('_header.php') ?>
      <!-- .nk-header -->
      <main class="nk-pages">
        <section class="section section-bottom-0 has-shape has-mask">
          <div
            class="nk-shape bg-shape-blur-m mt-8 start-50 top-0 translate-middle-x"
          ></div>
          <div
            class="nk-mask bg-pattern-dot bg-blend-around mt-n5 mb-10p mh-50vh"
          ></div>
          <div class="container">
            <div class="section-head">
              <div class="row justify-content-center text-center">
                <div class="col-lg-11 col-xl-10 col-xxl-9">
                  <h6 class="overline-title text-primary">Contact us</h6>
                  <h1 class="title">
                    We love getting feedback, Questions, and hearing what you
                    have to say!
                  </h1>
                </div>
              </div>
            </div>
            <!-- .section-head -->
            <div class="section-content">
              <div
                class="row g-gs justify-content-center justify-content-lg-between"
              >
                <div
                  class="col-xl-5 col-lg-6 col-md-8 text-lg-start text-center"
                >
                  <div class="block-text pt-lg-4">
                    <h3 class="title h2">Let's talk</h3>
                    <p>Get in touch with our expert sales team today!</p>
                    <ul class="row gy-4 pt-4">
                      <li class="col-12">
                        <h5>Contact</h5>
                        <div
                          class="d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start"
                        >
                          <em
                            class="icon text-base fs-5 mb-2 mb-lg-0 me-lg-2 ni ni-call-alt-fill"
                          ></em>
                          <span>+996 342 762 44</span>
                        </div>
                      </li>
                      <li class="col-12">
                        <h5>Email</h5>
                        <div
                          class="d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start"
                        >
                          <em
                            class="icon text-base fs-5 mb-2 mb-lg-0 me-lg-2 ni ni-mail-fill"
                          ></em>
                          <span>omar@smart-sellers.com</span>
                        </div>
                      </li>
                      <li class="col-12">
                        <h5>Office</h5>
                        <div
                          class="d-flex flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-start"
                        >
                          <em
                            class="icon text-base fs-5 mb-2 mb-lg-0 me-lg-2 ni ni-map-pin-fill"
                          ></em>
                          <span
                            >442 Belle Terre St Floor 7, San Francisco, AV
                            4206</span
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body">
                      <h3 class="title fw-medium mb-4">
                        Please feel free to contact us using form below
                      </h3>
                      <form
                        data-action="form/message-form.php"
                        method="post"
                        class="form-submit-init"
                      >
                        <div class="row g-4">
                          <div class="col-12">
                            <div class="form-group">
                              <div class="form-control-wrap">
                                <input
                                  type="text"
                                  name="user-name"
                                  class="form-control form-control-lg"
                                  placeholder="Your Name"
                                  required
                                />
                              </div>
                            </div>
                          </div>
                          <!-- .col -->
                          <div class="col-12">
                            <div class="form-group">
                              <div class="form-control-wrap">
                                <input
                                  type="email"
                                  name="user-email"
                                  class="form-control form-control-lg"
                                  placeholder="Your Email Address"
                                  required
                                />
                              </div>
                            </div>
                          </div>
                          <!-- .col -->
                          <div class="col-12">
                            <div class="form-group">
                              <div class="form-control-wrap">
                                <input
                                  type="text"
                                  name="user-subject"
                                  class="form-control form-control-lg"
                                  placeholder="Subject"
                                  required
                                />
                              </div>
                            </div>
                          </div>
                          <!-- .col -->
                          <div class="col-12">
                            <div class="form-group">
                              <div class="form-control-wrap">
                                <textarea
                                  name="user-message"
                                  class="form-control form-control-lg"
                                  placeholder="Enter your message"
                                  required
                                ></textarea>
                              </div>
                            </div>
                          </div>
                          <!-- .col -->
                          <div class="col-12">
                            <div class="form-group">
                              <button
                                class="btn btn-primary"
                                type="submit"
                                id="submit-btn"
                              >
                                Send Message
                              </button>
                            </div>
                            <div class="form-result mt-4"></div>
                          </div>
                        </div>
                        <!-- .row -->
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- .section-content -->
          </div>
          <!-- .container -->
        </section>
        <!-- .section -->
        <section class="section section-bottom-0">
          <div class="container">
            <div class="section-content">
              <div class="row g-gs justify-content-center">
                <div class="col-md-6 col-xl-4">
                  <div class="card h-100 rounded-4 border-0 shadow-sm">
                    <div class="card-body">
                      <div class="feature">
                        <div class="feature-text">
                          <h3 class="title">Get 1:1 Demo</h3>
                          <p>
                            Finding it difficult to navigate our suite of
                            products? Get on a call with our product experts for
                            personalized demo
                          </p>
                          <a class="link link-primary" href="#"
                            ><span class="fw-bold">Schedule a call</span
                            ><em class="icon fs-5 ni ni-arrow-long-right"></em
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .col -->
                <div class="col-md-6 col-xl-4">
                  <div class="card h-100 rounded-4 border-0 shadow-sm">
                    <div class="card-body">
                      <div class="feature">
                        <div class="feature-text">
                          <h3 class="title">24X7 Chat Support</h3>
                          <p>
                            Get on a call with our excellent customer support
                            team by using our 24X7 live chat support. We are
                            here to help!
                          </p>
                          <a class="link link-primary" href="#"
                            ><span class="fw-bold">Talk to Support</span
                            ><em class="icon fs-5 ni ni-arrow-long-right"></em
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .col -->
                <div class="col-md-6 col-xl-4">
                  <div class="card h-100 rounded-4 border-0 shadow-sm">
                    <div class="card-body">
                      <div class="feature">
                        <div class="feature-text">
                          <h3 class="title">Request Feature</h3>
                          <p>
                            Have an out of the box idea for a new AI feature to
                            add. We are all ears.
                          </p>
                          <a class="link link-primary" href="#"
                            ><span class="fw-bold">Request a feature</span
                            ><em class="icon fs-5 ni ni-arrow-long-right"></em
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .col -->
              </div>
              <!-- .row -->
            </div>
            <!-- .section-content -->
          </div>
          <!-- .container -->
        </section>
        <!-- .section -->
      </main>
      <?php require('_footer.php') ?>
    </div>
    <script src="assets/js/bundle.js?v1.5.0"></script>
    <script src="assets/js/scripts.js?v1.5.0"></script>
  </body>
</html>

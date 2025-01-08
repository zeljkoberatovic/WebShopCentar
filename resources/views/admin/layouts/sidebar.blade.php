<!-- Sidebar -->


<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"        aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
              <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>

      <div class="navbar-nav flex-row d-lg-none">
        <div class="d-none d-lg-flex">
              <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
                data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
              </a>
              <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
                data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="./static/logo.svg." class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
              </a>
              <div class="nav-item dropdown d-none d-md-flex me-3">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                  <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                  <span class="badge bg-red"></span>
                </a>
          </div>
       </div>

        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url(./static/avatars/admin.jpeg)"></span>
            <div class="d-none d-xl-block ps-2">
              <div>Paweł Kuna</div>
              <div class="mt-1 small text-secondary">UI Designer</div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="#" class="dropdown-item">Status</a>
            <a href="./profile.html" class="dropdown-item">Profile</a>
            <a href="#" class="dropdown-item">Feedback</a>
            <div class="dropdown-divider"></div>
            <a href="./settings.html" class="dropdown-item">Settings</a>
            <a href="./sign-in.html" class="dropdown-item">Logout</a>
          </div>
        </div>
      </div>


      
      <div class="collapse navbar-collapse" id="sidebar-menu">
        <ul class="navbar-nav pt-lg-3">
          <li class="nav-item">
            <a class="nav-link" href="./" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
              </span>
              <span class="nav-link-title">
                Home
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /><path d="M16 5.25l-8 4.5" /></svg>
              </span>
              <span class="nav-link-title">
                Interface
              </span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-columns">
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="./alerts.html">
                    Alertssss
                  </a>
                  <a class="dropdown-item" href="./accordion.html">
                    Accordion
                  </a>
                  <div class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                      Authentication
                    </a>
                    <div class="dropdown-menu">
                      <a href="./sign-in.html" class="dropdown-item">
                        Sign in
                      </a>
                      <a href="./sign-in-link.html" class="dropdown-item">
                        Sign in link
                      </a>
                      <a href="./sign-in-illustration.html" class="dropdown-item">
                        Sign in with illustration
                      </a>
                      <a href="./sign-in-cover.html" class="dropdown-item">
                        Sign in with cover
                      </a>
                      <a href="./sign-up.html" class="dropdown-item">
                        Sign up
                      </a>
                      <a href="./forgot-password.html" class="dropdown-item">
                        Forgot password
                      </a>
                      <a href="./terms-of-service.html" class="dropdown-item">
                        Terms of service
                      </a>
                      <a href="./auth-lock.html" class="dropdown-item">
                        Lock screen
                      </a>
                      <a href="./2-step-verification.html" class="dropdown-item">
                        2 step verification
                      </a>
                      <a href="./2-step-verification-code.html" class="dropdown-item">
                        2 step verification code
                      </a>
                    </div>
                  </div>
                  <a class="dropdown-item" href="./blank.html">
                    Blank page
                  </a>
                  <a class="dropdown-item" href="./badges.html">
                    Badges
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./buttons.html">
                    Buttons
                  </a>
                  <div class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                      Cards
                      <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                    </a>
                    <div class="dropdown-menu">
                      <a href="./cards.html" class="dropdown-item">
                        Sample cards
                      </a>
                      <a href="./card-actions.html" class="dropdown-item">
                        Card actions
                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <a href="./cards-masonry.html" class="dropdown-item">
                        Cards Masonry
                      </a>
                    </div>
                  </div>
                  <a class="dropdown-item" href="./carousel.html">
                    Carousel
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./charts.html">
                    Charts
                  </a>
                  <a class="dropdown-item" href="./colors.html">
                    Colors
                  </a>
                  <a class="dropdown-item" href="./colorpicker.html">
                    Color picker
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./datagrid.html">
                    Data grid
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./datatables.html">
                    Datatables
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./dropdowns.html">
                    Dropdowns
                  </a>
                  <a class="dropdown-item" href="./dropzone.html">
                    Dropzone
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <div class="dropend">
                    <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                      Error pages
                    </a>
                    <div class="dropdown-menu">
                      <a href="./error-404.html" class="dropdown-item">
                        404 page
                      </a>
                      <a href="./error-500.html" class="dropdown-item">
                        500 page
                      </a>
                      <a href="./error-maintenance.html" class="dropdown-item">
                        Maintenance page
                      </a>
                    </div>
                  </div>
                  <a class="dropdown-item" href="./flags.html">
                    Flags
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./inline-player.html">
                    Inline player
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                </div>
                <div class="dropdown-menu-column">
                  <a class="dropdown-item" href="./lightbox.html">
                    Lightbox
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./lists.html">
                    Lists
                  </a>
                  <a class="dropdown-item" href="./modals.html">
                    Modal
                  </a>
                  <a class="dropdown-item" href="./maps.html">
                    Map
                  </a>
                  <a class="dropdown-item" href="./map-fullsize.html">
                    Map fullsize
                  </a>
                  <a class="dropdown-item" href="./maps-vector.html">
                    Map vector
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./markdown.html">
                    Markdown
                  </a>
                  <a class="dropdown-item" href="./navigation.html">
                    Navigation
                  </a>
                  <a class="dropdown-item" href="./offcanvas.html">
                    Offcanvas
                  </a>
                  <a class="dropdown-item" href="./pagination.html">
                    <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                    Pagination
                  </a>
                  <a class="dropdown-item" href="./placeholder.html">
                    Placeholder
                  </a>
                  <a class="dropdown-item" href="./steps.html">
                    Steps
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./stars-rating.html">
                    Stars rating
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <a class="dropdown-item" href="./tabs.html">
                    Tabs
                  </a>
                  <a class="dropdown-item" href="./tags.html">
                    Tags
                  </a>
                  <a class="dropdown-item" href="./tables.html">
                    Tables
                  </a>
                  <a class="dropdown-item" href="./typography.html">
                    Typography
                  </a>
                  <a class="dropdown-item" href="./tinymce.html">
                    TinyMCE
                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./form-elements.html" >
              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l3 3l8 -8" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
              </span>
              <span class="nav-link-title">
                Forms
              </span>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
  </aside>
  


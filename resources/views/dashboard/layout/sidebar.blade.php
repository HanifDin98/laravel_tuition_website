<nav id="navbar" class="nav-menu navbar">
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          <h6 style="color: bisque">Management</h6>
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="/dashHome" class="nav-link scrollto  {{ Request:: is('dashHome') ? 'active' : '' }}"><i class="bx bx-package"></i> <span>Package</span></a></li>
            <li><a href="/dashSubject" class="nav-link scrollto {{ Request:: is('dashSubject') ? 'active' : '' }}"><i class="bx bx-book-open"></i> <span>Subject</span></a></li>
            <li><a href="/dashForm" class="nav-link scrollto {{ Request:: is('dashForm') ? 'active' : '' }}"><i class="bx bx-file-blank"></i> <span>Student</span></a></li>
            <li><a href="/dashProfile" class="nav-link scrollto {{ Request:: is('dashProfile') ? 'active' : '' }}"><i class="bx bx-user"></i> <span>Profile</span></a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">
          <h6 style="color: bisque">User Interface</h6>
        </button>
        <div class="collapse show" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="/dashAbout" class="nav-link scrollto {{ Request:: is('dashAbout') ? 'active' : '' }}"><i class="bx bx-comment-detail"></i> <span>About</span></a></li>
            <li><a href="/dashQuestion" class="nav-link scrollto {{ Request:: is('dashQuestion') ? 'active' : '' }}"><i class="bx bx-question-mark"></i> <span>Question</span></a></li>
            <li><a href="/dashTeacher" class="nav-link scrollto {{ Request:: is('dashTeacher') ? 'active' : '' }}"><i class="bx bx-book-reader"></i> <span>Teacher</span></a></li>
            <li><a href="/dashHero" class="nav-link scrollto {{ Request:: is('dashHero') ? 'active' : '' }}"><i class="bx bx-comment"></i> <span>Hero</span></a></li>
            <li><a href="/dashChoose" class="nav-link scrollto {{ Request:: is('dashChoose') ? 'active' : '' }}"><i class="bx bx-user-check"></i> <span>Why Choose Us</span></a></li>
            <li><a href="/dashPortfolio" class="nav-link scrollto {{ Request:: is('dashPortfolio') ? 'active' : '' }}"><i class="bx bx-image-add"></i> <span>Porfolio</span></a></li>
            <li><a href="/" class="nav-link scrollto {{ Request:: is('/') ? 'active' : '' }}"><i class="bx bx-home"></i> <span>Main Page</span></a></li>
          </ul>
        </div>
      </li>
      
    
      <li>

        </li>
    </ul>
  </nav><!-- .nav-menu -->
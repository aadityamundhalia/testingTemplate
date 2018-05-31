<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Web Development</span>
        <a class="d-flex align-items-center text-muted" href="#">
        </a>
      </h6>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('webdata') }}">
          <span data-feather="list"></span>
          Main
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('webdata/create') }}">
          <span data-feather="plus"></span>
          Create New
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>EDM Testing</span>
      <a class="d-flex align-items-center text-muted" href="#">
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="list"></span>
          Main
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="plus"></span>
          Create New
        </a>
      </li>
    </ul>
  </div>
</nav>

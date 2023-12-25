<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-dark">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <img src="https://cdn-icons-png.flaticon.com/512/747/747589.png" width="30" height="30" class="img-fluid rounded" alt="Meet Our Doctors Image">
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/addclient" class="nav-link active" aria-current="page">Add Client</a></li>
        <li class="nav-item"><a href="/clientlist" class="nav-link">Client list</a></li>
        <li class="nav-item"><a href="/doctorlist" class="nav-link">Doctors List</a></li>
    </ul>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</header>

<body class="bg-dark text-white">
    <div class="container">@yield('main_info')</div>
</body>

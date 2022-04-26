<nav class="navbar navbar-expand-md navbar-dark bg-info px-md-5 ">
    <div class="container-fluid ps-md-0">
        <div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="d-flex justify-content-start">
                <a class="btn btn-light me-3" href="{{ route('livres') }}">Get list of Books</a>
                <a class="btn btn-light" href="{{ route('createBook') }}">Create a Books</a>
            </div>
        </div>
    </div>
</nav>
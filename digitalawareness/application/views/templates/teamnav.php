<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Game Day Participant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>team">Team Score <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>gameday">Team Score <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/auth/logout" tabindex="-1" aria-disabled="false">Logout</a>
            </li>
        </ul>
    </div>
</nav>
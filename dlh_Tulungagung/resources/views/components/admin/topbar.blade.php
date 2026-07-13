<header class="admin-topbar">
    <div class="d-flex align-items-center justify-content-between gap-3 h-100">
        <div class="d-flex align-items-center gap-3">
            <button type="button" class="btn btn-icon d-lg-none" data-admin-toggle-sidebar aria-label="Toggle navigation">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="icon-menu" aria-hidden="true"></span>
            </button>

            <div class="topbar-brand d-flex align-items-center gap-2">
                <span class="topbar-brand-mark" aria-hidden="true"></span>
                <div>
                    <div class="fw-semibold mb-0">DLH Tulungagung</div>
                    <small class="text-muted">CMS dashboard</small>
                </div>
            </div>
        </div>

        <form class="topbar-search d-none d-md-flex align-items-center flex-grow-1" role="search" action="#" method="get">
            <label for="topbar-search" class="visually-hidden">Search</label>
            <div class="input-group input-group-sm">
                <span class="input-group-text bg-white border-end-0 text-muted" aria-hidden="true"><span class="icon-search"></span></span>
                <input id="topbar-search" type="search" name="q" class="form-control form-control-sm border-start-0" placeholder="Search dashboard..." aria-label="Search dashboard">
            </div>
        </form>

        <div class="d-flex align-items-center gap-2">
            <button type="button" class="btn btn-icon btn-light" aria-label="Notifications" title="Notifications">
                <span class="icon-bell" aria-hidden="true"></span>
                <span class="badge rounded-pill bg-danger position-absolute translate-middle badge-notification">3</span>
            </button>

            <details class="profile-dropdown">
                <summary class="profile-toggle d-flex align-items-center gap-2" aria-haspopup="true" aria-expanded="false">
                    <span class="avatar-sm bg-primary text-white d-inline-flex align-items-center justify-content-center">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                    <div class="d-none d-sm-flex flex-column align-items-start">
                        <span class="fw-semibold">{{ auth()->user()->name }}</span>
                        <small class="text-muted">Administrator</small>
                    </div>
                    <span class="icon-chevron-down" aria-hidden="true"></span>
                </summary>
                <div class="profile-menu">
                    <div class="profile-menu-group">
                        <a href="#" class="dropdown-item">My account</a>
                        <a href="#" class="dropdown-item">Preferences</a>
                    </div>
                    <div class="profile-menu-group border-top mt-2 pt-2">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </details>
        </div>
    </div>
</header>

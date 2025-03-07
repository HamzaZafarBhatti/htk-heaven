<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <div class="user-dropdown-menu">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                <h2><i class="fas fa-sign-out-alt"></i> Logout</h2>
            </a>

            <form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

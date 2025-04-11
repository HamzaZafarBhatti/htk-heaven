<div class="contact-page__left">
    <div class="sidebar">
        <ul>
            <a href="{{ route('profile.edit') }}">
                <li class="@if (Route::is('profile.edit')) active @endif">Profile
                </li>
            </a>
            <a href="{{ route('profile.security') }}">
                <li class="@if (Route::is('profile.security')) active @endif">Security</li>
            </a>
            <a href="{{ route('claims.index') }}">
                <li class="@if (Route::is(['claims.index', 'claims.show'])) active @endif">My Accident Claims</li>
            </a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                    document.getElementById('logout-form2').submit();">
                <li>Logout
                    <form method="POST" action="{{ route('logout') }}" id="logout-form2" style="display: none;">
                        @csrf
                    </form>
                </li>
            </a>
        </ul>
    </div>
</div>

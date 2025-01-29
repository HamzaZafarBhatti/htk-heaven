{{-- header navbar html --}}
{{-- 
FRONTEND HREF LIST:
1. Home: {{ route('home.index') }}
2. How it works: {{ route('home.index') }}
3. How is it free: {{ route('home.how-is-it-free') }}
4. Replacement Vehicle: {{ route('home.replacement-vehicle') }}
5. Accident Repairs: {{ route('home.accident-repairs') }}
--}}
<nav>
    <ul>
        <li>
            <a href="{{ route('home.index') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('home.index') }}">How it works</a>
        </li>
        <li>
            <a href="{{ route('home.how-is-it-free') }}">How is it free</a>
        </li>
        <li>
            <a href="{{ route('home.replacement-vehicle') }}">Replacement Vehicle</a>
        </li>
        <li>
            <a href="{{ route('home.accident-repairs') }}">Accident Repairs</a>
        </li>
    </ul>
</nav>

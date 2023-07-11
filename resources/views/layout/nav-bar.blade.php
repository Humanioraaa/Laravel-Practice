<div class="overlay-navigation">
    <nav role="navigation">
      <ul>
        <li>
          <a
            href="/"
            data-content="Nothing Here, Just Credit For The Artist For Making Beautiful 3D Render"
            >Home</a
          >
        </li>
        <li><a href="/table" data-content="Ready?">Table</a></li>
        <li><a href="/form" data-content="Want To Adding Some Data?">Adding Data</a></li>
        <li>
            @if (Auth::check())
           <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-content="Already Bored :/ ??">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
             @else
           <a href="#" data-content="Login First, To Checkout The Awesome Features">Login</a>
             @endif
        <li><a href="/animation" data-content="Checkout Awesome Animation By Me XD">Animation</a></li>
      </ul>
    </nav>
  </div>




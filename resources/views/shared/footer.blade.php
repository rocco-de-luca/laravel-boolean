<footer class="main-footer">
    <nav class="nav-footer">
        <div class="footer-brand">
            <a href="{{route('static-page.home')}}" class="navbar-brand">Boolean</a>
        </div>
        <ul>
            <li><a href="{{route('static-page.home')}}">Home</a></li>
            <li><a href="{{route('static-page.faq')}}">Domande frequenti</a></li>
            <li><a href="{{route('static-page.privacy')}}">privacy</a></li>
        </ul>
    </nav>
</footer>
{{--JS--}}
@yield('scripts')
</body>
</html>
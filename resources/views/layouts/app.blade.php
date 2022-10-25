<html>
    <head>
        <title>@yield('title')</title>
        <style>
            footer {
  text-align: center;
  padding: 3px;
  background-color: rgb(184, 184, 208);
  color: white;
}
        </style>
    </head>
    <body>
        <x-alert/>
        <div class="container">
            @yield('content')
        </div>
 {{-- added footer with links for the search and legal pages --}}
        <footer>
            <a href="{{ url('/search') }}">Search Page</a> <a href="{{ url('/legal/tos') }}">Terms of Use</a> <a href="{{ url('/legal/privacy') }}">Privacy Policy</a> <span>Copyright &copy; 2011 - <?php echo date('Y')?> </span>
        </footer>
    </body>
</html>
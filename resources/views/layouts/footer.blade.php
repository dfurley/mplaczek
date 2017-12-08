<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col">
        @if (Auth::guest())
          <h6 class="footer-2">
            <a href="/login">Admin Login</a>
          </h6>
        @endif
      </div>
      <div class="col text-right">
        <h6 class="footer-1">
          <a href="#">Website created by David Furley</a>
        </h6>
      </div>
    </div>
  </div>
</footer> 
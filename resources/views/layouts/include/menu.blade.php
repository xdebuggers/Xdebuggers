<div class="menu">
    <div>
      <div>
        <ul class="top-ul">
          <li class="top-li">
          <a href="{{route('home')}}" class="top-link {{request::is('/') ? 'current' : ''}}">Home</a>
          </li>
          <li class="top-li">
          <a href="{{route('projects')}}" class="top-link {{request::is('projects') ? 'current' : ''}}"
              >Projects <i class="fas fa-angle-down"></i
            ></a>
            <ul class="in-ul">
              <li class="in-li">
                <a href="#">proj #1</a>
              </li>
              <li class="in-li">
                <a href="#">proj #2</a>
              </li>
              <li class="in-li">
                <a href="#">proj #3</a>
              </li>
            </ul>
          </li>
          <li class="top-li">
            <a href="{{route('experiences')}}" class="top-link"
              >Experiences
            </a>
          </li>
          <li class="top-li">
            <a href="{{route('about')}}" class="top-link {{request::is('about') ? 'current' : ''}}">About</a>
          </li>
          <li class="top-li">
            <a href="{{route('contact')}}" class="top-link {{request::is('contact') ? 'current' : ''}}">Contact</a>
          </li>
          <li class="top-li">
          <a href="{{route('login')}}" class="top-link {{request::is('login') ? 'current' : ''}}">{{auth()->user() ? 'Dashboard' : 'Login'}}</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

<div class="nav-container nav-container--sidebar">
    <div class="nav-sidebar-column bg--dark">
        <div class="text-center text-block">
            <a href="{{ route('welcome') }}">
                <img alt="avatar" src="{{ asset('img/logo-light.png') }}" class="image--md" />
            </a>

            
        </div>
        <div class="text-block">
            <h4>
                <a href="{{ route('me.show') }}">{{ auth()->user()->name }}</a>
            </h4>
            <span>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </span>
        </div>
        <div class="text-block">
            <ul class="menu-vertical">
                <li>
                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>

                {{-- Stories option --}}
                @if (!auth()->user()->hasRole('photographer'))
                    <li class="dropdown">
                        <span class="dropdown__trigger">
                            Story
                        </span>
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <ul class="menu-vertical">
                                    <li>
                                        <a href="{{ route('stories.create') }}">
                                            New Story
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('stories.index')}}">
                                            Your Stories
                                        </a>
                                    </li>

                                    {{-- Publish Story --}}
                                    @if (auth()->user()->can('publish-story'))
                                    <li>
                                        <a href="{{ route('council.stories.index')}}" >
                                            Pending Stories
                                        </a>
                                    </li> 
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </li>
                    {{-- Category option --}}
                    <li class="dropdown">
                        <span class="dropdown__trigger">
                            Category
                        </span>
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <ul class="menu-vertical">
                                    <li>
                                        <a href="{{ route('categories.index') }}">
                                            All Categories
                                        </a>
                                    </li>
                                    @if (auth()->user()->can('create-category'))
                                    <li>
                                        <a href="{{ route('categories.create') }}">
                                            Create Category
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </li>
                @endif

                @if (!auth()->user()->hasRole('columnist'))
                    <li class="dropdown">
                        <span class="dropdown__trigger">
                            Album
                        </span>
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <ul class="menu-vertical">
                                    <li>
                                        <a href="{{ route('albums.index')}}">
                                            All Albums
                                        </a>
                                    </li>

                                    @if (auth()->user()->can('create-album'))
                                    <li>
                                        <a href="{{ route('albums.create') }}">
                                            Create Album
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </li>
                @endif

                

                @if (auth()->user()->hasRole('superuser'))
                <hr>
                <li class="dropdown">
                    <span class="dropdown__trigger">
                        Superuser
                    </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('superuser.dashboard') }}">
                                        Admin Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.index') }}">
                                        All users
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.create') }}">
                                        Create User
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('permissions.index') }}">
                                        Permissions
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('roles.index') }}">
                                        Roles
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                @endif

                @if (auth()->user()->hasRole(['council', 'superuser'])) 
                    <li class="dropdown">
                        <span>
                            Campaigns
                        </span>
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <ul class="menu-vertical">
                                    <li>
                                        <a href="{{ route('campaigns.index')}}">All</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('campaigns.create') }}">
                                            Create
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('subscribers.index')}}">Subscribers</a>
                    </li>
                @endif
                
            </ul>

            
        </div>


        <hr>
        <footer class="footer-3 text-center space--xs ">
            <ul class="social-list list-inline list--hover">
                <li>
                    <a href="#">
                        <i class="socicon socicon-mail icon icon--xs"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="socicon socicon-twitter icon icon--xs"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="socicon socicon-facebook icon icon--xs"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="socicon socicon-instagram icon icon--xs"></i>
                    </a>
                </li>
            </ul>
            <div>
                <span class="type--fine-print type--fade">
                    DTUtimes
                    <span class="update-year"></span>
                </span>
            </div>
        </footer>
    </div>
    <div class="nav-sidebar-column-toggle visible-xs visible-sm" data-toggle-class=".nav-sidebar-column;active">
        <i class="stack-menu"></i>
    </div>
</div>
<div class="nav-container nav-container--sidebar">
    <div class="nav-sidebar-column" style="background-color: #3A015C; color:white !important;">
        <div class="text-center text-block">
            <a href="{{ route('welcome') }}">
                <img alt="avatar" src="{{ asset('img/logo-light.png') }}" class="image--md" />
            </a>
            <div class="text-center space--xs mt-1">
                <div>
                    <span class="type--fine-print type--fade">
                        DTU Times
                        <span class="update-year"></span>
                    </span>
                </div>
                <ul class="social-list list-inline list--hover ml-auto mt-3 mb-1 mr-auto">
                    <li>
                        <a class="text-white" href="mailto:dtutimes@dtu.ac.in">
                            <i class="socicon socicon-mail icon icon--xs"></i>
                        </a>
                    </li>
                    <li>
                        <a class="text-white" href="https://twitter.com/dtutimes">
                            <i class="socicon socicon-twitter icon icon--xs"></i>
                        </a>
                    </li>
                    <li>
                        <a class="text-white" href="https://www.facebook.com/dtutimes/">
                            <i class="socicon socicon-facebook icon icon--xs"></i>
                        </a>
                    </li>
                    <li>
                        <a class="text-white" href="https://www.instagram.com/dtu_times/?hl=en">
                            <i class="socicon socicon-instagram icon icon--xs"></i>
                        </a>
                    </li>
                </ul>
                <div class="text-center">
                    <span class="type--fade">
                        <small>
                            Got any issues? Contact the
                            <a href="{{ route('dev.index') }}" style="color: #2BAC76;"> Developers.</a>
                        </small>
                    </span>
                </div>
            </div>
        </div>

        <div class="text-block">
            <h4 class="mb-0">
                <!-- <a href="{{ route('me.show') }}">{{ auth()->user()->name }}</a> -->
                <span data-tooltip="View or Edit your details."><a class="text-white" href="{{ route('me.show') }}">{{ auth()->user()->name }}</a></span>
            </h4>
            <small>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </small>
        </div>
        <div class="text-block">
            <ul class="menu-vertical">
                <li>
                    <a class="text-white" href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>


                <!--
                |
                |
                | Society Head Section
                |
                |
                 -->
                @if (auth()->user()->hasRole('society_head'))
                    @if(auth()->user()->society()->get()->count() != 0)
                        @php
                            $society = auth()->user()->society()->first();
                        @endphp
                        <li>
                            <a href="{{ route('society.head.show', $society->slug) }}">
                                About {{ str_limit($society->name, $limit = 17, $end = '...') }}
                            </a>
                        </li>

                        <li class="dropdown">
                            <span class="dropdown__trigger">
                                    Image
                                </span>
                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <ul class="menu-vertical">
                                        <li>
                                            <a href="{{ route('society.head.image.index', $society->slug) }}">
                                                All Images
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('society.head.image.create', $society->slug) }}">
                                                Upload New
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <span class="dropdown__trigger">
                                    News
                                </span>
                            <div class="dropdown__container">
                                <div class="dropdown__content">
                                    <ul class="menu-vertical">
                                        <li>
                                            <a href="{{ route('society.head.news.index', $society->slug) }}">
                                                All News
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('society.head.news.create', $society->slug) }}">
                                                Create New
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('society.head.create')}}">
                                Create Your Society
                            </a>
                        </li>
                    @endif
                @endif

                <!--
                |
                |
                | Columnist Section
                |
                |
                 -->
                {{-- Stories option --}}
                @if (!auth()->user()->hasRole('photographer') && !auth()->user()->hasRole('society_head'))
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

                                {{-- Publish Story --}} @if (auth()->user()->can('publish-story'))
                                <li>
                                    <a href="{{ route('council.stories.index')}}">
                                            Pending Stories
                                        </a>
                                </li>
                                <li>
                                    <a href="{{ route('council.stories.published')}}">
                                            Published Stories
                                        </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </li>

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
                                            New Category
                                        </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <span class="dropdown__trigger">
                            Leaderboard
                        </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('stories.leaderboard') }}">
                                        Columnists
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>



                <!--
                |
                |
                | Photographers Section
                |
                |
                 -->
                @endif @if (!auth()->user()->hasRole('columnist') && !auth()->user()->hasRole('society_head'))
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
                                            New Album
                                        </a>
                                </li>
                                @endif

                                <li>
                                    <a href="{{ route('images.me')}}">
                                        All Images
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <!--
                |
                |
                | Superuser Section
                |
                |
                 -->
                @endif @if (auth()->user()->hasRole('superuser'))
                <li class="dropdown">
                    <span class="dropdown__trigger">
                        Member
                    </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('users.index') }}">
                                        All Members
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.create') }}">
                                        New Member
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.blocked') }}">
                                        Blocked Members
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('users.unactive') }}">
                                        Unactive Members
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <span class="dropdown__trigger">
                        Role
                    </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('roles.index') }}">
                                        All Roles
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('roles.create') }}">
                                        New Role
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <span class="dropdown__trigger">
                        Permission
                    </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('permissions.index') }}">
                                        All Permissions
                                    </a>
                                <!-- </li>
                                <li>
                                    <a href="{{ route('roles.create') }}">
                                        New Role
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </li>



                <!--
                |
                |
                | Council Section
                |
                |
                 -->
                @endif @if (auth()->user()->hasRole(['council', 'superuser']))
                <li class="dropdown">
                    <span>
                        Society
                    </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('council.societies.index')}}">
                                        All Societies
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('council.societies.pending') }}">
                                        Pending
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <span>
                        News
                    </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('council.societies.news.index')}}">
                                        All News
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('council.societies.news.pending')}}">
                                        Pending News
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('council.societies.news.published')}}">
                                        Published News
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <span>
                        Analytics
                    </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('ga.index') }}">
                                        Dashboard
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <span>
                        Insights
                    </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('superuser.dashboard') }}">
                                        Stats
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('stats.stories')}}">
                                        Story
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('stats.albums') }}">
                                        Album
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <span>
                            Campaigns
                        </span>
                    <div class="dropdown__container">
                        <div class="dropdown__content">
                            <ul class="menu-vertical">
                                <li>
                                    <a href="{{ route('campaigns.index')}}">
                                            All Campaign
                                        </a>
                                </li>
                                <li>
                                    <a href="{{ route('campaigns.create') }}">
                                            New Campaign
                                        </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="text-white" href="{{ route('subscribers.index')}}">Subscribers</a>
                </li>
                @endif

            </ul>
        </div>
    </div>
    <div class="nav-sidebar-column-toggle visible-xs visible-sm" data-toggle-class=".nav-sidebar-column;active">
        <i class="stack-menu"></i>
    </div>
</div>

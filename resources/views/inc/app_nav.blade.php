<nav class="bar bar--sm hidden-xs hidden-sm pb-4" id="menu5" data-scroll-class="100px:pos-fixed">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <div class="bar__module">
                    <ul class="menu-horizontal">
                        <li class="dropdown">
                            <span class="dropdown__trigger">
                                Notifications
                            </span>
                            <div class="dropdown__container" id="notification__container">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @php
                $user = auth()->user();
            @endphp
            <!--end columns-->
            <div class="col-lg-6 text-right text-left-xs ">
                <div class="bar__module">
                    <ul class="menu-horizontal">
                        <li class="dropdown">
                            <span class="dropdown__trigger">
                                {{ $user->name }}
                            </span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        {{-- <div class="col-lg-3">
                                            {{ $user->getFirstMediaUrl('avatars', 'thumb')}}
                                        </div> --}}
                                        <div class="col-md-2 dropdown__content" style="margin-right: -5.2rem;">
                                            <ul class="menu-vertical text-left">
                                                <li>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end columns-->
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</nav>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">ACCEUIL</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-bullseye"></i> Dashboard</a>
            </li>

            <li><a href="{{ route('admin.indexannonces') }}"><i class="fa fa-tasks"></i> Annonces</a></li>
            <li><a href="{{ route('admin.blog') }}"><i class="fa fa-globe"></i> Blog</a></li>
            <li><a href="{{ route('admin.dashboard') }}"<i class="fa fa-list-ol"></i> categories</a></li>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-user">

            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <div> <i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <x-dropdown-link :href="route('profile.edit')">
                            <i class="fa fa-user"></i>  {{ __('Profile') }}
                       </x-dropdown-link>
                   </li>
                    <li class="divider"></li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Déconnexion
                        </button>

                    </li>
                </ul>

            </li>
        </ul>
    </div>
</nav>
<style>
    /* Style du bouton de déconnexion */
    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .dropdown-item:hover {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa;
    }

    .dropdown-item i {
        margin-right: 0.5rem;
    }
</style>

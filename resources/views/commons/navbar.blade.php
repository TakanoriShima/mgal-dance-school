<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Mgal Dance School</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if (Auth::check())
                    @if (Auth::user()->is_admin == 1)
                        <li class="nav-item">{!! link_to_route('lesson-schedules.index', 'Schedule', [],  ['class' => 'nav-link']) !!}</li>
                        <li class="nav-item">{!! link_to_route('lessons.index', 'Lesson', [],  ['class' => 'nav-link']) !!}</li>
                        <li class="nav-item">{!! link_to_route('instructors.index', 'Instructor', [],  ['class' => 'nav-link']) !!}</li>
                        <li class="nav-item">{!! link_to_route('studios.index', 'Studio', [],  ['class' => 'nav-link']) !!}</li>
                    @endif
                    {{-- ログアウトへのリンク --}}
                    <li class="nav-item">{!! link_to_route('logout.get', 'Logout', [],  ['class' => 'nav-link']) !!}</li>
                @else
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>

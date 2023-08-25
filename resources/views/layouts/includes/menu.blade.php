<div class="sidebar-wrapper">
    <div class="logo">
        <a href="{{url('home')}}" class="simple-text">
            {{auth()->user()->first_name .' '. auth()->user()->last_name}}
        </a>
    </div>
    <ul class="nav">
        <li>
            <a class="nav-link" href="{{url('home')}}">
                <i class="nc-icon nc-chart-pie-35"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{url('tasks')}}">
                <i class="nc-icon nc-circle-09"></i>
                <p>Tasks</p>
            </a>
        </li>

    </ul>
</div>

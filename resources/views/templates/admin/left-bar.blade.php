<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
            <a href="#"><i class="fa fa-lock fa-fw"></i> Administrator<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.admin.index') }}">List Administrator</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.admin.add') }}">Add Administrator</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-plane fa-fw"></i> Dating Places<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.datingplaces.index') }}">List Dating Places</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.datingplaces.add') }}">Add Dating Places</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-trophy fa-fw"></i> Flirting Methods<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.flirtingmethods.index') }}">List Flirting Methods</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.flirtingmethods.add') }}">Add Flirting Methods</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> User-Properties<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.user-properties.city.index')}}">City</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.hair-color.index')}}">Hair color</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.hair-length.index')}}">Hair length</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.hair-style.index')}}">Hair style</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.eye-color.index')}}">Eye color</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.body.index')}}">Body</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.drinking.index')}}">Drinking</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.smoking.index')}}">Smoking</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.job-status.index')}}">Job status</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.house-type.index')}}">House type</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.live-with.index')}}">Live with</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.have-children.index')}}">Have children</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.national.index')}}">National</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.educational-level.index')}}">Educational level</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.language.index')}}">Language</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.religion.index')}}">Religion</a>
                    </li>
                    <li>
                        <a href="{{route('admin.user-properties.constellation.index')}}">Constellation</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>
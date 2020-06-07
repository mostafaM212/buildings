<nav class="s-sidebar__nav">


    <ul>
        <li>
            <a class="s-sidebar__nav-link" href="/">
                <i class="fa fa-home"></i><em>الرئيسيه</em>
            </a>
        </li>
        <li>
            <a class="s-sidebar__nav-link" href="{{route('AdvancedSearch')}}">
                <i class="fa fa-search"></i><em>بحث متقدم</em>
            </a>
        </li>
        <li>
            <a class="s-sidebar__nav-link" href="{{route('user.add')}}">
                <i class="fa fa-plus"></i><em>أضافه عقار</em>
            </a>
        </li>
        @if(bu_count()>0)
            <li class="current">
                <a class="s-sidebar__nav-link active" href="{{route('myBu.index')}}">
                    <i class="fa fa-user"></i><em>عقاراتى</em>
                </a>
            </li>
        @endif
        <li>
            <a class="s-sidebar__nav-link active" href="{{route('forSel')}}">
                <i class="fa fa-building"></i><em>عقارات للبيع
                    ({{getNumberOfBu('bu_type',1,false)}})
                </em>
            </a>
        </li>
        <li class="active">
            <a class="s-sidebar__nav-link " href="{{route('forRent')}}">
                <i class="fa fa-calendar"></i><em>عقارات للإيجار
                    ({{getNumberOfBu('bu_rent',2,false)}})
                </em>
            </a>
        </li>
        <li>
            <a class="s-sidebar__nav-link" href="{{route('type',1)}}">
                <i class="fa fa-door-closed"></i><em>شقق
                    ({{getNumberOfBu('bu_type',1,false)}})
                </em>
            </a>
        </li>
        <li>
            <a class="s-sidebar__nav-link" href="{{route('type',2)}}">
                <i class="fa fa-building"></i><em>فيلا
                    ({{getNumberOfBu('bu_type',2,false)}})
                </em>
            </a>
        </li>
        <li>
            <a class="s-sidebar__nav-link" href="{{route('type',3)}}">
                <i class="fa fa-building"></i><em>شاليه
                    ({{getNumberOfBu('bu_type',3,false)}})
                </em>
            </a>
        </li>
        @if(Auth::check())
            <li>
                <a class="s-sidebar__nav-link" href="{{route('index2')}}">
                    <i class="fa fa-align-right"></i><em>عقارات غير مفعله
                    ({{getNumberOfBu('bu_status',0)}})
                    </em>
                </a>
            </li>
        @endif
    </ul>
</nav>

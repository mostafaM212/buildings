<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            أعدادات الموقع
            <i class="right fas fa-angle-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('siteSetting.index')}}" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>الرئيسيه</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('contact.show',1)}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> الرسائل </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
            </a>
        </li>
    </ul>
</li>

{{--users--}}

<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            التحكم فى الاعضاء
            <i class="right fas fa-angle-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item" style="background-color: blue">
            <a href="{{route('users.create')}}" class="nav-link active">

                <p>أضافه عضو</p>
            </a>
        </li>
        <li class="nav-item text-primary" style="background-color: blue">
            <a href="{{route('users.index')}}" class="nav-link">
                <p>كل الاعضاء</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="./index3.html" class="nav-link" style="background-color: blue">

                <p>Dashboard v3</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            التحكم فى العقارات
            <i class="right fas fa-angle-right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item" >
            <a href="{{route('bu.create')}}" class="nav-link active">

                <p>أضافه عقار</p>
            </a>
        </li>
        <li class="nav-item text-primary" >
            <a href="{{route('bu.index')}}" class="nav-link">
                <p>كل العقارات</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="./index3.html" class="nav-link" >

                <p>Dashboard v3</p>
            </a>
        </li>
    </ul>
</li>

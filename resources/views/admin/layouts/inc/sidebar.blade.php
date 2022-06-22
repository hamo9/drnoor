<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Medical system</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item text-right {{ Request::is('/')? 'active' : ''; }}" >
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>الرئيسيه</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo0"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">اقسام الخدمات</span>
        </a>
        <div id="collapseTwo0" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('servicesCategories.index') }}">كل الاقسام الرئيسية</a>
                <a class="collapse-item" href="{{ route('servicesCategories.softDelete') }}">الاقسام الرئيسية المحزوفة</a>
            </div>
        </div>


    </li>



    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">المقالات</span>
        </a>
        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('posts.index') }}">كل المقالات </a>
                <a class="collapse-item" href="{{ route('posts.softDelete') }}">المقالات المحزوفة</a>
            </div>
        </div>
    </li>


    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo3"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">الصور قبل و بعد</span>
        </a>
        <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('beforeAfter.index') }}">كل الصور </a>
            </div>
        </div>
    </li>


    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo5"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">الدكاترة</span>
        </a>
        <div id="collapseTwo5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('doctors.index') }}">كل الدكاترة </a>
                <a class="collapse-item" href="{{ route('doctors.softDelete') }}">الدكاترة المحزوفة</a>
            </div>
        </div>
    </li>


    <li class="nav-item" dir="rtl">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo7"
            aria-expanded="true" aria-controls="collapseTwo">
            {{-- <i class="fas fa-fw fa-cog"></i> --}}
            <span class="pr-1">الفيديوهات</span>
        </a>
        <div id="collapseTwo7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('videos.index') }}">كل الفيديوهات </a>
            </div>
        </div>
    </li>




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>

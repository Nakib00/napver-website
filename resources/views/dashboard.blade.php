{{--  Include head  --}}
@include('admin.include.head')

{{--  Include TopBar  --}}
@include('admin.include.topbar')

{{--  Include sideber  --}}
@include('admin.include.sideber')


<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            {{--  Add contain here  --}}
            @yield('content')


        </div> <!-- container -->
    </div> <!-- content -->
</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

@include('admin.include.footer')

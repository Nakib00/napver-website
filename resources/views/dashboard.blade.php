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
            @yield('')


        </div> <!-- container -->
    </div> <!-- content -->
</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link py-2 active" data-toggle="tab" href="#settings-tab" role="tab">
                    <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                </a>
            </li>
        </ul>
        <div class="tab-pane active" id="settings-tab" role="tabpanel">
            <h6 class="font-weight-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                <span class="d-block py-1">Theme Settings</span>
            </h6>
            <div class="p-3">
                <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light"
                        id="light-mode-check" checked />
                    <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="custom-control custom-switch mb-1">
                    <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark"
                        id="dark-mode-check" />
                    <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                </div>
            </div>
        </div>
    </div>

</div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>


@include('admin.include.footer')

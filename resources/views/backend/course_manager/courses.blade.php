@extends('backend.course_manager.layout.app')
@section('contents')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        {{-- <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Home</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Index
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="content-body">
            <!-- Kick start -->
            <div id="course-management">
                <course-management></course-management>
            </div>

            <script src="/js/vue/course_management.js"></script>
        </div>
    </div>
</div>
<script>
    var courses = {
        course_details: {
            
        }
    }
</script>
@endsection

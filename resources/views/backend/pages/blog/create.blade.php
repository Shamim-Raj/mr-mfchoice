@extends('backend.layouts.app')
@section('title','Announcements - ')
@section('content')
    <div class="content-body">
        <div class="container">
            <div class="main-content default-manu">
            @include('backend.pages.blog.nav')
            <!-- Tab Content Start -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="add-category" role="tabpanel"
                         aria-labelledby="add-category-tab">
                        <div class="container content-title">
                            <h4>{{__('Blog Category')}}</h4>
                        </div>
                        <div class="mybazar-backend-announcements mt-3">
                            <div class="container">
                                <form id="announcementsForm" method="post"
                                      action="{{route('backend.blog.store')}}"
                                      enctype="multipart/form-data" class="add-brand-form">
                                    @csrf()
                                    @include('backend.pages.blog.form')
                                    <div class="col-lg-7 offset-3">
                                        <div class="from-submit-btn">
                                            <button class="submit-btn" type="submit">{{__('Save')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab Content End -->
    </div>
@endsection

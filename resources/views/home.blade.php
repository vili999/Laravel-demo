@extends('layouts.app') 

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<!-- Fonts -->


<div>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container justify-content-center">
                <div class="d-flex flex-row justify-content-between align-items-center col-9">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/ig-logo.png" alt="" loading="lazy">
                    </a>
                    <div>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <div class="d-flex flex-row">
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <a href="#" class="link-menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2">
                                <a href="#" class="link-menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" fill="currentColor" class="bi bi-cursor" viewBox="0 0 16 16">
                                        <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2">
                                <a href="#" class="link-menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16">
                                        <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                        <path d="M6.94 7.44l4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2">
                                <a href="#" class="link-menu">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="list-inline-item ml-2 align-middle">
                                <a href="#" class="link-menu">
                                    <div
                                        class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border topbar-profile-photo">
                                        <img src="assets/images/profiles/profile-6.jpg" alt="..."
                                            style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="mt-4">
        <div class="container d-flex justify-content-center">
            <div class="col-9">
                <div class="row">
                    <div class="col-8">
                        <!-- START OF STORIES -->
                        <div class="card">
                            <div class="card-body d-flex justify-content-start">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-inline-item">
                                        <button class="btn p-0 m-0">
                                            <div class="d-flex flex-column align-items-center">
                                                <div class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger border-purple danger story-profile-photo">
                                                    <img src="assets/images/profiles/profile-1.jpg" alt="..."
                                                        style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                                    </div>
                                                <small>lanzola</small>
                                            </div>
                                        </button>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="btn p-0 m-0">
                                            <div class="d-flex flex-column align-items-center">
                                                <div
                                                    class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger story-profile-photo border-3 ">
                                                    <img src="assets/images/profiles/profile-2.jpg" alt="..."
                                                        style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                                </div>
                                                <small>leonardo</small>
                                            </div>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END OF STORIES -->
                        <!-- START OF POSTS -->
                        <div class="d-flex flex-column mt-4 mb-4">

                            <div class="card">
                                <div class="card-header p-3">
                                    <div class="d-flex flex-row justify-content-between pl-3 pr-3 pt-3 pb-1">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border border-danger post-profile-photo mr-3">
                                                <img src="assets/images/profiles/profile-1.jpg" alt="..."
                                                    style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                            </div>
                                            <span class="font-weight-bold">lanzola</span>
                                        </div>
                                        <div>
                                            <button class="btn p-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" fill="currentColor" 
                                                    class="bi bi-three-dots" viewBox="0 -6 16 16">
                                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="embed-responsive embed-responsive-1by1">
                                        <img class="embed-responsive-item" src="assets/images/posts/post-1.jpg" />
                                    </div>

                                    <div class="d-flex flex-row justify-content-between pl-3 pr-3 pt-3 pb-1">
                                        <ul class="list-inline d-flex flex-row align-items-center m-0">
                                            <li class="list-inline-item">
                                                <button class="btn p-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" fill="currentColor" 
                                                        class="bi bi-heart" viewBox="0 0 16 16">
                                                        <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="list-inline-item ml-2">
                                                <button class="btn p-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" fill="currentColor"
                                                        class="bi bi-chat" viewBox="0 0 16 16">
                                                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="list-inline-item ml-2">
                                                <button class="btn p-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" fill="currentColor" 
                                                        class="bi bi-share" viewBox="0 0 16 16">
                                                        <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                        <div>
                                            <button class="btn p-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.6em" height="1.6em" fill="currentColor" 
                                                    class="bi bi-three-dots" viewBox="0 0 16 16">
                                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="pl-3 pr-3 pb-2">
                                        <strong class="d-block">365.354 likes</strong>
                                        <strong class="d-block">lanzola</strong>
                                        <p class="d-block mb-1">Life doesn't get easier or more forgiving, we get stronger and more resilient.</p>
                                        <button class="btn p-0">
                                            <span class="text-muted">View all 4,654 comments</span>
                                        </button>

                                        <div>
                                            <div>
                                                <strong class="d-block">rmontagnini</strong>
                                                <span> 💗 💗 💗 💗👏👏👏</span>
                                            </div>
                                            <div>
                                                <strong class="d-block">peter_pet56</strong>
                                                <span>...more</span>
                                            </div>
                                        </div>

                                        <small class="text-muted">9 HOURS AGO</small>
                                    </div>

                                    <div class="position-relative comment-box">
                                        <form>
                                            <input class="w-100 border-0 p-3 input-post" placeholder="Add a comment...">
                                            <button class="btn btn-primary position-absolute btn-ig">Post</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- END OF POSTS -->
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-row align-items-center">
                            <div class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sidenav-profile-photo">
                                <img src="assets/images/profiles/profile-6.jpg" alt="..."
                                    style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                            </div>
                            <div class="profile-info ml-3">
                                <span class="profile-info-username">vili999v</span>
                                <span class="profile-info-name">VelyanaPetrova</span>
                            </div>
                            <div class="profile-info ml-5">
                                <button class="btn btn-primary btn-sm p-0 btn-ig">Switch</button>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex flex-row justify-content-between">
                                <strong class="text-muted font-weight-bold">Suggestions For You</strong>
                                <small  class="font-weight-bold">See All</small>
                            </div>
                            <div>
                                <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <div
                                            class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                                            <img src="assets/images/profiles/profile-3.png" alt="..."
                                                style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                        </div>
                                        <strong class="ml-3 sugest-username">instagram</strong>
                                    </div>
                                    <button class="btn btn-primary btn-sm p-0 btn-ig ">Follow</button>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <div
                                            class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                                            <img src="assets/images/profiles/profile-4.png" alt="..."
                                                style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                        </div>
                                        <strong class="ml-3 sugest-username">lalida</strong>
                                    </div>
                                    <button class="btn btn-primary btn-sm p-0 btn-ig ">Follow</button>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center mt-3 mb-3">
                                    <div class="d-flex flex-row align-items-center">
                                        <div
                                            class="rounded-circle overflow-hidden d-flex justify-content-center align-items-center border sugest-profile-photo">
                                            <img src="assets/images/profiles/profile-5.png" alt="..."
                                                style="transform: scale(1.5); width: 100%; position: absolute; left: 0;">
                                        </div>
                                        <strong class="ml-3 sugest-username">risottiama</strong>
                                    </div>
                                    <button class="btn btn-primary btn-sm p-0 btn-ig">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

@endsection
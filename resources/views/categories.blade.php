@extends('layouts.main')




<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url({{ asset('../img/breadcrumbs-bg.jpg') }});">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Category</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Category</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
        <div class="container">

            <div class="row gy-4">

                {{-- <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div> --}}
                <!-- End Stats Item -->


                @foreach ($Categories as $category)
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p><a href="/posts?category={{ $category->slug }}">{{ $category->name }}</a></p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->
                @endforeach

                {{-- <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                </div> --}}
                <!-- End Stats Item -->

                {{-- <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-people color-pink flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div> --}}
                <!-- End Stats Item -->

            </div>

        </div>
    </section>
    <!-- End Stats Counter Section -->

    <!-- ======= Blog Section ======= -->
    {{-- <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 posts-list">



                @foreach ($posts as $post)
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('../img/blog/blog-1.jpg') }}" class="img-fluid" alt="">
                                <span class="post-date">December 12</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">{{ $post['title'] }}</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2"><a
                                                href="/categories/{{ $post->Categories->slug }}">{{ $post->category->name }}</a></span>
                                    </div>
                                </div>

                                <p>
                                    {{ $post['excerpt'] }}
                                </p>

                                <hr>

                                <a href="/posts/{{ $post['slug'] }}"><span>Read
                                        More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post list item -->
                @endforeach

            </div><!-- End blog posts list -->

            <div class="blog-pagination">
                <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div><!-- End blog pagination -->

        </div>
    </section> --}}
    <!-- End Blog Section -->

</main><!-- End #main -->

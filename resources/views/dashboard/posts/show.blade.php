@extends('dashboard.layouts.main')

@section('container')
    <main id="main">


        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="{{ asset('../img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">{{ $post['title'] }}
                            </h2>

                            <a href="/dashboard/posts" class="badge bg-success border-0"><span data-feather="arrow-left">Back To All My Post</span></a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning border-0"><span data-feather="edit">Edit</span></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure')"><span data data-feather="x-circle"></span></button>
                            </form>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-details.html"><time
                                                datetime="2020-01-01">{{ $post['created_at']->diffForHumans() }}</time></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-details.html">12
                                            Comments</a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <p>
                                    {!! $post['body'] !!}
                                </p>
                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a
                                            href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                                    </li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->
                </div>

            </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->

@endsection

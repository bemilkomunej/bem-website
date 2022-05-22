@extends('pages.landing2.main')
@section('content')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <ul class="background">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
  <div class="container">

    <ol>
      <li><a href="/">Home</a></li>
      <li>Blog</li>
    </ol>
    <h2>Blog</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row">

      <div class="col-lg-8 entries">
        @foreach($blogs as $blog)
        <article class="entry">

          <div class="entry-img">
            <img src={{ $blog->thumbnail != NULL ? asset("storage/img/blog/".$blog->thumbnail) : asset("landing2/assets/img/blog/blog-1.jpg") }} alt="{{ $blog->title }}" class="img-fluid">
          </div>

          <h2 class="entry-title">
            <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
          </h2>

          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/blog?author={{ $blog->user->name }}">{{ $blog->user->name }}</a></li>
              <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="/blog/{{ $blog->slug }}"><time datetime="{{ $blog->created_at->format('Y-m-d') }}">{{ $blog->created_at->format('M d, Y') }}</time></a></li>
              <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="/blog/{{ $blog->slug }}#disqus_thread">0 Comment</a></li>
            </ul>
          </div>

          <div class="entry-content">
            <p>
              {{ Str::limit(strip_tags($blog->contents),200) }}
              <!-- Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
              Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore. -->
            </p>
            <div class="read-more">
              <a href="/blog/{{ $blog->slug }}">Read More</a>
            </div>
          </div>

        </article><!-- End blog entry -->
        @endforeach

        <div class="blog-pagination">
          {{ $blogs->links() }}
          <!-- <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul> -->
        </div>

      </div><!-- End blog entries list -->

      <div class="col-lg-4">

        <div class="sidebar">

          <h3 class="sidebar-title">Search</h3>
          <div class="sidebar-item search-form">
            <form action="/blog">
              @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
              @endif
              <input type="text" name="search" value="{{ request('search') }}">
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div><!-- End sidebar search formn-->

          <h3 class="sidebar-title">Categories</h3>
          <div class="sidebar-item categories">
            <ul>
              @foreach($categories as $category)
              <li><a href="/blog?category={{$category->title}}">{{$category->title}} <span>({{ $category->blogs->where('status','Published')->count() }})</span></a></li>
              @endforeach
            </ul>
          </div><!-- End sidebar categories-->

          <h3 class="sidebar-title">Recent Posts</h3>
          <div class="sidebar-item recent-posts">
              @foreach( $recents as $blog)
            <div class="post-item clearfix">
              <div class="item__img">
                <img src={{ $blog->thumbnail != NULL ? asset("storage/img/blog/".$blog->thumbnail) : asset("landing2/assets/img/blog/blog-1.jpg") }} alt="{{ $blog->title }}">
              </div>
              <h4><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h4>
              <time datetime="{{ $blog->created_at->format('yyyy-mm-dd') }}">{{ $blog->created_at->format('M d, Y') }}</time>
            </div>
            @endforeach

            <!-- <div class="post-item clearfix">
              <img src={{ asset("landing2/assets/img/blog/blog-recent-2.jpg") }} alt="">
              <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>

            <div class="post-item clearfix">
              <img src={{ asset("landing2/assets/img/blog/blog-recent-3.jpg") }} alt="">
              <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>

            <div class="post-item clearfix">
              <img src={{ asset("landing2/assets/img/blog/blog-recent-4.jpg") }} alt="">
              <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>

            <div class="post-item clearfix">
              <img src={{ asset("landing2/assets/img/blog/blog-recent-5.jpg") }} alt="">
              <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div> -->

          </div><!-- End sidebar recent posts-->

          <!-- <h3 class="sidebar-title">Tags</h3>
          <div class="sidebar-item tags">
            <ul>
              <li><a href="#">App</a></li>
              <li><a href="#">IT</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Mac</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Office</a></li>
              <li><a href="#">Creative</a></li>
              <li><a href="#">Studio</a></li>
              <li><a href="#">Smart</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul>
          </div> -->
          <!-- End sidebar tags-->

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->

@endsection
@section('customscript')
<script id="dsq-count-scr" src="//bemilkomunej.disqus.com/count.js" async></script>
@endsection
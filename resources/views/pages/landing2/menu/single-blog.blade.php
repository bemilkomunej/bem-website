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
                <li><a href="index.html">Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li>{{ $blog->title }}</li>
            </ol>
            <h2>{{ $blog->title }}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src={{ $blog->thumbnail != NULL ? asset("storage/img/blog/".$blog->thumbnail) : asset("landing2/assets/img/blog/blog-1.jpg") }} alt="{{ $blog->title }}" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="#">{{ $blog->title }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/blog?author={{ $blog->user->name }}">{{ $blog->user->name }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="/blog/{{ $blog->created_at->format('Y-m-d') }}"><time datetime="{{ $blog->created_at->format('Y-m-d') }}">{{ $blog->created_at->format('M d, Y') }}</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="/blog/{{ $blog->slug }}#disqus_thread">0 Comment</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            {!! $blog->contents !!}
                            <!-- <p>
              Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
              Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
            </p>

            <p>
              Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
            </p>

            <blockquote>
              <p>
                Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
              </p>
            </blockquote>

            <p>
              Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
              Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
              Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
            </p>

            <h3>Et quae iure vel ut odit alias.</h3>
            <p>
              Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
              Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
              Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
            </p>
            <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

            <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
            <p>
              Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
              Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
            </p>
            <p>
              Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
            </p> -->

                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="/blog?category={{ $blog->tag->title }}">{{ $blog->tag->title }}</a></li>
                            </ul>

                            <!-- <i class="bi bi-tags"></i>
            <ul class="tags">
              <li><a href="#">Creative</a></li>
              <li><a href="#">Tips</a></li>
              <li><a href="#">Marketing</a></li>
            </ul> -->
                        </div>

                    </article><!-- End blog entry -->

                    <div class="blog-author d-flex align-items-center">
                        <img src={{ empty($blog->user->profile_photo_path) ? asset("template-assets/img/logo/apple-icon.png") : asset("storage/" . $blog->user->profile_photo_path) }} class="rounded-circle float-left" alt="">
                        <div>
                            <h4>{{ $blog->user->name }}</h4>
                            <div class="social-links">
                                <a href="https://linkedin.com/company/bemilkom"><i class="bi bi-linkedin"></i></a>
                                <a href="https://facebook.com/bemilkomunej"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/bemilkomunej"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                <!-- Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
             -->
                                {{ $blog->user->quotes }}
                            </p>
                        </div>
                    </div><!-- End blog author bio -->

                    <div id="disqus_thread"></div>
                    <!-- End blog comments -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="/blog">
                                <input type="text" name="search">
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
                            @foreach( $blogs as $b )
                            <div class="post-item clearfix">
                                <div class="item__img">
                                    <img src={{ $b->thumbnail != NULL ? asset("storage/img/blog/".$b->thumbnail) : asset("landing2/assets/img/blog/blog-1.jpg") }} alt="{{ $b->title }}" class="img-fluid">
                                </div>
                                <h4><a href="/blog/{{ $b->slug }}">{{ $b->title }}</a></h4>
                                <time datetime="{{ $b->created_at->format('yyyy-mm-dd') }}">{{ $b->created_at->format('M d, Y') }}</time>
                            </div>
                            @endforeach

                            <!-- <div class="post-item clearfix">
              <img src="assets/img/blog/blog-recent-2.jpg" alt="">
              <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/blog/blog-recent-3.jpg" alt="">
              <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/blog/blog-recent-4.jpg" alt="">
              <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>

            <div class="post-item clearfix">
              <img src="assets/img/blog/blog-recent-5.jpg" alt="">
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
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->

@endsection
@section('customscript')
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
     */
    var disqus_config = function() {
        this.page.url = window.location.href; // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = this.page.url; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://bemilkomunej.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<script id="dsq-count-scr" src="//bemilkomunej.disqus.com/count.js" async></script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection

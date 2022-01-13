 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <h1>Pierre Emad</h1>
        <p>I'm 
            <span class="typed" data-typed-items="@foreach($jobs as $job) {{$job->name}}, @endforeach"></span>
        </p>
        <div class="social-links">
            @foreach ($socialLinks as $socialLink)
            <a href="{{$socialLink->link}}" class="{{$socialLink->name}}" target="_blank" title="{{$socialLink->name}}">
                {!! $socialLink->icon !!}
            </a>
            @endforeach

        </div>
    </div>
</section><!-- End Hero -->
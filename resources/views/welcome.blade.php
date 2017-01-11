<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
  @include('partials._head')
</head>

<body data-offset="100" data-spy="scroll" data-target=".my-nav">

  @include('partials._loader')

  <header id="top">

    @include('partials._navbar')

    <div class="bkg-overlay"></div>

    @include('partials._slides-intro')

  </header>

  @include('partials._schedule')


  <!--about start-->
  <section id="about">
    @include('partials._about')
  </section> <!--about end-->

  <!--quote start DISABLED-->
  <section id="quote-1">
    @include('partials._quotes')
  </section>
  <!--quote end-->

  <!--services start-->
  <section id="services">
    @include('partials._services')
  </section>
  <!--services end-->

  <!--fun-facts start-->
  <section id="fun-facts" class="bkg-repeat">
    @include('partials._fun-facts')
  </section>
  <!--fun-facts end-->


  <!--team start-->
  <section id="team">
    @include('partials._team')
  </section>
  <!--team end-->

  <!--team-alt start DISABLED-->
  <section id="team-alt" class="parallax">
    @include('partials._team-alt')
  </section>
  <!--team-alt end-->

  <!--gallery start-->
  <section id="gallery">
    @include('partials._gallery')
  </section> <!--gallery end-->

  <!--pricing start DISABLED-->
  <section id="pricing">
    @include('partials._pricing')
  </section>
  <!--pricing end-->

  <!--testimonials start-->
  <section id="testimonials" class="bkg-repeat">
    @include('partials._testimonials')
  </section>
  <!--testimonials end-->

  <!--contact start-->
  <section id="contact">
    @include('partials._contact')
  </section>
  <!--contact end-->

  <!--footer start-->
  <footer class="bkg-repeat">
    @include('partials._footer')
  </footer>
  <!--footer end-->

<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content container">

      </div> /.modal-content -->
    <!--</div> /.modal-dialog -->

  <!--</div> /.modal -->

  @include('partials._scripts')
</body>
</html>

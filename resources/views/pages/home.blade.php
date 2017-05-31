@extends('layout.default')
@section('content')
<div id="homepage-banner" class="hidden-xs">

<div id="slider-wrapper" class="owl-carousel owl-theme owl-loaded"><!-- /.slider-item --><!-- /.slider-item --><!-- /.slider-item --><div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-4047px, 0px, 0px); transition: 0s; width: 9443px;"><div class="owl-item cloned imgLiquid_bgSize imgLiquid_ready" style="width: 1349px; margin-right: 0px; background-image: url({!! asset("assets/img/pessoas-sorrindo.jpg") !!}); background-size: cover; background-position: center center; background-repeat: no-repeat;"><div class="slider-item"><img class="homepage-slider-image" src="{!! asset("assets/img/pessoas-sorrindo.jpg") !!}" alt="" title="sl3" style="display: none;"></div></div><div class="owl-item cloned imgLiquid_bgSize imgLiquid_ready" style="width: 1349px; margin-right: 0px; background-image: url(&quot;http://demo.puriwp.com/jobboard/wp-content/uploads/2014/11/sl2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><div class="slider-item"><img class="homepage-slider-image" src="{!! asset("assets/img/pessoas-sorrindo.jpg") !!}" alt="" title="sl2" style="display: none;"></div></div><div class="owl-item imgLiquid_bgSize imgLiquid_ready" style="width: 1349px; margin-right: 0px; background-image: url(&quot;http://demo.puriwp.com/jobboard/wp-content/uploads/2014/09/dummy-slide-1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><div class="slider-item"><img class="homepage-slider-image" src="{!! asset("assets/img/pessoas-sorrindo.jpg") !!}" alt="" title="dummy-slide-1" style="display: none;"></div></div><div class="owl-item imgLiquid_bgSize imgLiquid_ready active" style="width: 1349px; margin-right: 0px; background-image: url(&quot;http://demo.puriwp.com/jobboard/wp-content/uploads/2014/11/sl3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><div class="slider-item"><img class="homepage-slider-image" src="{!! asset("assets/img/pessoas-sorrindo.jpg") !!}" alt="" title="sl3" style="display: none;"></div></div><div class="owl-item imgLiquid_bgSize imgLiquid_ready" style="width: 1349px; margin-right: 0px; background-image: url(&quot;http://demo.puriwp.com/jobboard/wp-content/uploads/2014/11/sl2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><div class="slider-item"><img class="homepage-slider-image" src="{!! asset("assets/img/pessoas-sorrindo.jpg") !!}" alt="" title="sl2" style="display: none;"></div></div><div class="owl-item cloned imgLiquid_bgSize imgLiquid_ready" style="width: 1349px; margin-right: 0px; background-image: url(&quot;http://demo.puriwp.com/jobboard/wp-content/uploads/2014/09/dummy-slide-1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><div class="slider-item"><img class="homepage-slider-image" src="{!! asset("assets/img/pessoas-sorrindo.jpg") !!}" alt="" title="dummy-slide-1" style="display: none;"></div></div><div class="owl-item cloned imgLiquid_bgSize imgLiquid_ready" style="width: 1349px; margin-right: 0px; background-image: url(&quot;http://demo.puriwp.com/jobboard/wp-content/uploads/2014/11/sl3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;"><div class="slider-item"><img class="homepage-slider-image" src="{!! asset("assets/img/pessoas-sorrindo.jpg") !!}" alt="" title="sl3" style="display: none;"></div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div><!-- #slider-wrapper -->
	<div class="banner-wrapper hidden-sm">
	<div class="container">
		<div class="banner-caption">
			<div class="row">
				<div class="col-md-6">
					<div class="banner-left">
						<h1>Um site. Vários empregos.</h1>
						<p>Com o Mjobs, você consegue procurar emprego em um local só, ao invés de acessar diversos sites para buscar uma vaga de emprego.</p>
						<a href="{!! URL::to('/empregos'); !!}" class="btn btn-default btn-find-job">Econtre um emprego</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="banner-right">
						<h1>Conheça nosso projeto</h1>
						<p>Nosso projeto tem como principal objetivo ajudar as pessoas a encontrar um emprego de maneira mais rápida e concentrada.</p>
						<a href="{!! URL::to('/sobre'); !!}" class="btn btn-default btn-post-job">Conheça</a>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.banner-caption -->
	</div><!-- /.container -->
</div><!-- /.banner-wrapper -->
</div>

<!- teeeeeeeeeeeeeeeeeeeeesteeee lala        dd ------ -->

<div id="job-stats">
	<div class="container">
		<h1 class="job-stats-title">Nossos números</h1>
		<p class="job-stats-desc">
					</p>
		<div class="job-stats-wrapper row">
			<div class="col-lg-2 col-lg-offset-2 col-sm-3">
				<div class="count-box">
				350			</div><!-- /.count-box -->
				<div class="count-text">
				Vagas encontradas				</div><!-- /.count-text -->
			</div> <!-- /.col-lg-2 col-lg-offset-2 col-md-3" -->
			<div class="col-lg-2 col-sm-3">
				<div class="count-box">
				5				</div><!-- /.count-box -->
				<div class="count-text">
				Grandes sites de vagas				</div><!-- /.count-text -->
			</div><!-- /.col-lg-2 col-sm-3 -->
			<div class="col-lg-2 col-sm-3">
				<div class="count-box">
				100			</div><!-- /.count-box -->
				<div class="count-text">
				Empregos conretizados				</div><!-- /.count-text -->
			</div><!-- /.col-lg-2 col-sm-3 -->
			<div class="col-lg-2 col-sm-3">
				<div class="count-box">
				500			</div><!-- /.count-box -->
				<div class="count-text">
				Apoiadores do projeto				</div><!-- /.count-text -->
			</div><!-- /.col-lg-2 col-sm-3 -->
		</div><!-- /.job-stats-wrapper -->
	</div><!-- /.container -->
</div>

<div id="job-step">
	<div class="container">
		<h1 class="job-step-title">
		Entenda o processo		</h1>
		<p class="job-step-desc">
					</p>
		<div class="job-step-wrapper row">
			<div class="col-sm-3">
				<div class="step-number">Primeiro passo</div>
				<div class="step-image"><img src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/10/step-icon-1.png" alt="First Step" title="Register with Us"></div><!-- /.step-image -->
				<h3 class="step-title">Buscamos as vagas de vários sites</h3>
			</div><!-- /.col-sm-3 -->

			<div class="col-sm-3">
				<div class="step-number">Segundo passo</div>
				<div class="step-image"><img src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/10/step-icon-2.png" alt="Second Step" title="Create Your Profile"></div><!-- /.step-image -->
				<h3 class="step-title">Você encontra uma vaga</h3>
			</div><!-- /.col-sm-3 -->

			<div class="col-sm-3">
				<div class="step-number">Terceiro passo</div>
				<div class="step-image"><img src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/10/step-icon-3.png" alt="First Step" title="Upload your resume"></div><!-- /.step-image -->
				<h3 class="step-title">Se cadidata a vaga no site que á publicou</h3>
			</div><!-- /.col-sm-3 -->

			<div class="col-sm-3">
				<div class="step-number">Parabéns</div>
				<div class="step-image step-last"><img src="http://demo.puriwp.com/jobboard/wp-content/uploads/2014/10/step-icon-4.png" alt="First Step" title="Now take a rest"></div><!-- /.step-image -->
				<h3 class="step-title">Pronto! É só torcer e esperar o contato da empresa.</h3>
			</div><!-- /.col-sm-3 -->
		</div><!-- /.job-step-wrapper -->
	</div><!-- /.container -->
</div>
@stop

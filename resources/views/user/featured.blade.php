<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
	</div>
	<div class="feturedimage">
        @foreach ($data['features'] as $feature)


		<div class="row firstrow">
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="{{asset($feature->image)}}" alt="porsche">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>{{ $feature->heading }}</h1>
							<p>{{ $feature->description }}</p>
			 				<h2>{{ $feature->price }}</h2>
			 				<button id="btnRM" onclick="rmtxt()">READ MORE</button>
			 				<div id="readmore">
			 						<h1>{{ $feature->heading1 }}</h1>
			 						<p>{{ $feature->description1 }}</p>
			 						<button id="btnRL">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
						<img src="{{asset($feature->image2)}}" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>{{ $feature->heading2 }}/h1>
							<p>{{ $feature->description2 }}</p>
			 				<h2>{{ $feature->price2 }}</h2>
			 				<button id="btnRM2" onclick="rmtxt()">READ MORE</button>
			 				<div id="readmore2">
			 						<h1>{{ $feature->heading3 }}</h1>
			 						<p>{{ $feature->description3 }}</p>
			 						<button id="btnRL2">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        @endforeach
    </div>
</div>

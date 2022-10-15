<div class="grid">
    <div class="row">
        @foreach ($data['latests'] as $latest)


        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="txthover">
                <img src="{{asset($latest->image)}}" alt="car1">
                    <div class="txtcontent">
                        <div class="stars">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                        <div class="simpletxt">
                            <h3 class="name">{{ $latest->car }}</h3>
                            <p>{{ $latest->description }} </p>
                             <h4 class="price"> {{ $latest->price }}</h4>
                             <button>READ MORE</button><br>
                             <div class="wishtxt">
                                 <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                 <p class="paragraph2">Compare <span class="icon"><img src="{{asset('garage/image/compicon.png')}}" alt="compicon"></span></p>
                             </div>
                        </div>
                        <div class="stars2">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
            <div class="txthover">
                <img src="{{asset($latest->image1)}}" alt="car2">
                    <div class="txtcontent">
                        <div class="stars">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                        <div class="simpletxt">
                            <h3 class="name">{{ $latest->car1 }}</h3>
                            <p>{{ $latest->description1 }}</p>
                             <h4 class="price">{{ $latest->price1 }}</h4>
                             <button>READ MORE</button><br>
                             <div class="wishtxt">
                                 <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                 <p class="paragraph2">Compare <span class="icon"><img src="{{asset('garage/image/compicon.png')}}" alt="compicon"></span></p>
                             </div>
                        </div>
                        <div class="stars2">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="txthover">
                <img src="{{asset($latest->image2)}}" alt="car3">
                    <div class="txtcontent">
                        <div class="stars">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                        <div class="simpletxt">
                            <h3 class="name">{{ $latest->car2}}</h3>
                            <p>{{ $latest->description2 }}</p>
                             <h4 class="price">{{ $latest->price2 }}</h4>
                             <button>READ MORE</button><br>
                             <div class="wishtxt">
                                 <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                 <p class="paragraph2">Compare <span class="icon"><img src="{{asset('garage/image/compicon.png')}}" alt="compicon"></span></p>
                             </div>
                        </div>
                        <div class="stars2">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="txthover">
                <img src="{{asset($latest->image3)}}" alt="car4">
                    <div class="txtcontent">
                        <div class="stars">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                        <div class="simpletxt">
                            <h3 class="name">{{ $latest->car3 }}</h3>
                            <p>{{ $latest->description3 }}</p>
                             <h4 class="price">{{ $latest->price3 }}</h4>
                             <button>READ MORE</button><br>
                             <div class="wishtxt">
                                 <p class="paragraph1"> Add to Wishlist <span class="glyphicon glyphicon-heart"></span> </p>
                                 <p class="paragraph2">Compare <span class="icon"><img src="{{asset('garage/image/compicon.png')}}" alt="compicon"></span></p>
                             </div>
                        </div>
                        <div class="stars2">
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                            <div class="glyphicon glyphicon-star"></div>
                        </div>
                    </div>
            </div>
        </div>

    @endforeach
    </div>
</div>
<!-- _______________________________News Letter ____________________-->
<div class="newslettercontent">
    <div class="leftside">
        <img src="{{asset('garage/image/border.png')}}" alt="border">
        <h1>NEWSLETTER</h1>
        <p>Subscribe to the COLLECTIONCARS mailing list to <br>
            receive updates on new arrivals, special offers <br>
            and other discount information.</p>
    </div>
    <div class="rightside">
        <img class="newsimage" src="{{asset('garage/image/newsletter.jpg')}}" alt="newsletter">
        <input type="text" class="form-control" id="subemail" placeholder="EMAIL">
        <button>SUBSCRIBE</button>
    </div>
</div>

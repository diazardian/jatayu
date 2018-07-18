@extends('layout.parent')

@section('title', 'Jatayu')

@section('welcome')
    <div id="gtco-features">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Our Culture</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-vector"></i>
						</span>
                        <h3>Smart</h3>
                        <p>We must think twice do once, work smart efficiently. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-tablet"></i>
						</span>
                        <h3>Humble</h3>
                        <p>Cheerful and humble with the others. Caring and take care. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
                        <h3>Speed</h3>
                        <p>Fast response in any situational circumstances, service above all. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="ti-ruler-pencil"></i>
						</span>
                        <h3>Passion</h3>
                        <p>We all passions in our work, passion made perfect. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="gtco-products">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Products</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident.
                        Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <img src="images/img_1.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
                    </div>
                    <div class="item">
                        <img src="images/img_2.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
                    </div>
                    <div class="item">
                        <img src="images/img_3.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
                    </div>
                    <div class="item">
                        <img src="images/img_4.jpg" alt="Free HTML5 Bootstrap Template by GetTemplates.co">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@extends('layout.frontend.master.master')
@section('content')
	<style type="text/css">
		

		.cd-container-before::before{
			display: none;
		}

		.display-none{
			display: none;
		}


	</style>
	<section id="cd-timeline" class="cd-container">

		@include('frontend.home.scripts.index_script')
	</section>

	<!-- sementara -->
	
     <!-- <div class="product-gallery" style="display:none;">

	 			
				
				  
                <div class="gallery-img">
                    <a>
                        <img src="{{ asset('assets/plugins/Facebook-Like-jQuery-Image-Gallery-Lightbox-Plugin-AM2-Simple-Slider/Images/img1.jpg') }}" alt="img01">
                    </a>
                    <div data-desc="Image1 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.">
                    </div>
                </div>
                <div class="gallery-img">
                    <a>
                        <img src="{{ asset('assets/plugins/Facebook-Like-jQuery-Image-Gallery-Lightbox-Plugin-AM2-Simple-Slider/Images/img2.jpg') }}" alt="img02">
                    </a>
                    <div data-desc="Image2. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry">
                    </div>
                </div>
                <div class="gallery-img">
                    <a>
                        <img src="{{ asset('assets/plugins/Facebook-Like-jQuery-Image-Gallery-Lightbox-Plugin-AM2-Simple-Slider/Images/img3.jpg') }}" alt="img03">
                    </a>
                    <div data-desc="Image3. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry">
                    </div>
                </div>
                <div class="gallery-img">
                    <a>
                        <img src="{{ asset('assets/plugins/Facebook-Like-jQuery-Image-Gallery-Lightbox-Plugin-AM2-Simple-Slider/Images/img4.jpg') }}" alt="img04">
                    </a>
                    <div data-desc="Image4. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry">
                    </div>
                </div>
                <div class="gallery-img">
                    <a>
                        <img src="{{ asset('assets/plugins/Facebook-Like-jQuery-Image-Gallery-Lightbox-Plugin-AM2-Simple-Slider/Images/img5.jpg') }}" alt="img05">
                    </a>
                    <div data-desc="Image5. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry">
                    </div>
                </div>
                <div class="gallery-img">
                    <a>
                        <img src="{{ asset('assets/plugins/Facebook-Like-jQuery-Image-Gallery-Lightbox-Plugin-AM2-Simple-Slider/Images/img6.jpg') }}" alt="img06">
                    </a>
                    <div data-desc="Image6.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry">
                    </div>
                </div>
            </div>
           

     <script type="text/javascript">
         $('.gallery-img').Am2_SimpleSlider();
       </script> -->

	<!-- sementara -->




	<section class="cd-container article-content display-none">
		
	</section>

@endsection

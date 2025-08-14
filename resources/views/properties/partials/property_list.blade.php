<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="col-lg-12">
        <div class="row">        
            @foreach ($properties as $property)
            @php $carouselId = 'carousel-' . $property->id; @endphp
            <div class="col-lg-12">
                <div class="feat_property list">
                <div class="thumb">
                    <div id="{{ $carouselId }}" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        @foreach($property->images as $index => $image)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img class="d-block w-100" src="{{ asset('storage/' . $image->image_url) }}" alt="Property image {{ $index + 1 }}">
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#{{ $carouselId }}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#{{ $carouselId }}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>

                <div class="details">
                    <div class="tc_content">
                    <div class="dtls_headr">
                    <!-- Mobile layout (price left, tags right) -->
                    <div class="d-flex d-md-none justify-content-between align-items-start mb-2 dtls_headr-mobile">
                        <ul> 
                        <a class="fp_price tag" href="#">
                            {{ number_format($property->price, 0, '.', ',') }} AED
                        </a>
                        </ul>
                        

                        <ul class="tag mb-0">
                            <li><a href="#">{{ $property->property_status }}</a></li>
                            <!-- <li><a href="#">Featured</a></li> -->
                        </ul>
                    </div>

                    <!-- Desktop layout (price first, then tags) -->
                    <a class="fp_price d-none d-md-inline-block" href="#">{{ number_format($property->price, 0, '.', ',') }} AED</a>
                    <ul class="tag d-none d-md-inline-block">
                        <li class="list-inline-item"><a href="#">{{ $property->property_status }}</a></li>
                        <li class="list-inline-item"><a href="#">Featured</a></li>
                    </ul>
                </div>

                    <p class="text-thm">{{ $property->property_type }}</p>
                    <h4><a href="{{ route('properties.show_details_home', ['id' => $property->id]) }}">{{ $property->property_name }}</a></h4>
                    <p style="color: black"><span class="flaticon-placeholder"></span> {{ $property->address }}</p>
                    <ul class="prop_details mb0">
                      <li class="list-inline-item" style="color: black">
                        <span class="icon-bed me-1" aria-hidden="true"></span> Beds: {{ $property->bedrooms }}
                    </li>
                    <li class="list-inline-item" style="color: black">
                        <span class="icon-bath me-1" aria-hidden="true"></span> Baths: {{ $property->bathrooms }}
                    </li>
                      <li class="list-inline-item" style="color: black"><span class="icon-surface me-1" aria-hidden="true"></span> SqFt: {{ $property->property_built_up_area }}</li>
                    </ul>
                    @if($property->property_status == 'off-plan')
                        <ul class="prop_details mb0">
                            <li class="list-inline-item" style="color: black">
                                Handover Date: {{ $property->handover_date }}
                            </li>
                        </ul>
                    @elseif($property->property_status == 'Buy')
                        <ul class="prop_details mb0">
                            <li class="list-inline-item" style="color: black">
                                Year of Built: {{ $property->year_built }}
                            </li>
                        </ul>
                    @endif
                    <ul class="contact-icons prop_details mb0">
                      <li class="list-inline-item">
                        <a href="#" class="icon-rect"><img src="{{ asset('icon_mail.png') }}" alt="mail Icon" class="icon"></a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="icon-rect call-icon" data-toggle="modal" data-target="#contactModal" data-property-id="{{$property->property_id}}">
                          <img src="{{ asset('icon_call.png') }}" alt="call Icon" class="icon me-1">
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="icon-rect"><img src="{{ asset('whatsapp.png') }}" alt="whatsup Icon" class="icon"></a>
                      </li>
                    </ul>
                    </div>

                    <div class="fp_footer">
                    <ul class="fp_meta float-left mb0">
                        <li class="list-inline-item">
                        <img src="{{ asset('storage/property/' . $property->poster_image) }}" alt="{{ $property->poster_image }}" />
                        </li>
                        <li class="list-inline-item">{{ $property->user->name }}</li>
                    </ul>
                    <div class="fp_pdate float-right">{{ $property->created_at->diffForHumans() }}</div>
                    </div>
                </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content p-4 text-center">
            <div class="modal-header border-0">
              <h5 class="modal-title w-100" id="contactModalLabel">Contact Us</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none; background: none;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><strong>HOMEAGENCY</strong></p>
              <hr>
              <p><strong>Mobile:</strong> <a href="tel:+971501234562" class="text-primary">+971-50-1234562</a></p>
              <p><strong>Phone:</strong> <a href="tel:+97147777778" class="text-primary">+971-4-7777778</a></p>
              <hr>
              <p>Please quote property reference<br>
                <strong id="propertyReference"></strong>

                when calling us.
             </p>
            </div>
          </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.call-icon').click(function() {
                const propertyId = $(this).data('property-id');
                $('#propertyReference').text(propertyId);
            });
        });
        </script> 
 

</body>

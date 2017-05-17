@extends('base.layout-wsidebar')

@section('title')
	Detail Kamar
@endsection

@section('content')
		<section class="content-header">
			<h1>
				Detail Kamar
			</h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i>Detail Kamar</a></li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="box box-primary" style="padding: 10px">
						<div class="box-header">
							<div class="box-header with-border">
								<h5>Kost 
								@if ($kamar->gender_kamar==1)
									Laki-laki
								@elseif($kamar->gender_kamar==2)
									Perempuan
								@else
									Campur
								@endif</h5>
								<h3>Kost {{$kamar->owner->nama_pengguna}}</h3>
							</div>
							<div class="col-md-8">
								<div class="col-md-6 pull-right">
	                    	    	@if($kamar->medias->count())
	                                	<embed id="gambar-large" src="{{ url($kamar->medias[0]->path_media.$kamar->medias[0]->nama_media) }}" class="img-responsive img-thumbnail" alt="">
	                                @else
	                                <img src="{{ url('/img/boxed-bg.jpg') }}" class="img-responsive img-thumbnail" alt="">
	                                @endif
	                    	    </div>
							</div>
							@if($kamar->medias->count()>1)
							<div class="col-md-10 pull-right">
	                        	<div class="row">
	                        		@foreach ( $kamar->medias as $value)
	                        			<div class="col-md-2">
		                                	<img src="{{ url($value->path_media.$value->nama_media) }}" class="img-responsive img-thumbnail list-gambar" alt="">
		                            	</div>
	                        		@endforeach
	                        	</div>
	                    	</div>
	                    	@endif
	                    	<div class="col-md-12 box-header with-border">
	                    	<div class="col-md-6">
	                            <h3 style="margin-top: 0">Kamar Kost {{$kamar->nama_kamar}}</h3>
	                            <h4 style="margin-top: 0"><u>Fasilitas</u></h4>
	                           <div class="row">
					                                @php
													$fasilitas = [];
														if($kamar->tv==1)
														{
															$fasilitas['TV'] = 1;
														}

														if($kamar->ac==1){
															$fasilitas['AC'] = 1;
														}

														if($kamar->km==1){
															$fasilitas['Kamar Mandi Dalam']=1;
														}

														if($kamar->wf==1){
															$fasilitas['Wifi']=1;
														}

														if($kamar->mj==1){
															$fasilitas['Meja']=1;
														}

														if($kamar->kr==1){
															$fasilitas['Kursi']=1;
														}

														if($kamar->kk==1){
															$fasilitas['Kulkas']=1;
														}
														$counter = 0;
														@endphp
														
															<div class="col-md-4">
														@foreach ($fasilitas as $key => $element)
															<div class="form-group">              
					                                           <p>- {{$key}}</p>
					                                        </div>
					                                        @php
					                                        	$counter++;
					                                        @endphp
					                                        @if ($counter>2)
					                                        	 </div>
					                                    		<div class="col-md-4">
						                                    	@php
						                                        	$counter=0;
						                                        @endphp
					                                        @endif
														@endforeach
					                                    </div>
					                                </div>
	                        </div>
	                        <div class="col-md-4">
	                        	<div class="col-md-12">
		                            <h4 @if ($kamar->jumlah_kamar==0)
		                            	style="color: orange" 
		                            @endif>Sisa : {{$kamar->jumlah_kamar}}</h4>
		                            @if ($kamar->jumlah_kamar==0)
		                            	<div style="padding: 10px;" class="btn-warning btn-fill text-center">
		                                <p>Kamar Tidak Tersedia</p>
		                            </div>
		                            @else
										<div style="padding: 10px;" class="btn-success btn-fill text-center">
		                                <p>Rp. {{$kamar->harga_kamar}}/@if($kamar->sewa_kamar==1)
		                                	Bulan
		                                @elseif($kamar->sewa_kamar==2)
		                                	Tahun
		                                @endif</p>
		                            </div>
		                            @endif
		                        </div>
	                    	</div>
	                		<div class="clearfix"></div>
	                    </div>
	                    <div class="col-md-12 box-header with-border">
	                    	<div class="col-md-6">
	                            <h3 style="margin-top: 0">Deskripsi Kamar Kost</h3>
	                            <div class="row">
	                                <div class="col-md-4">
	                                    <div class="form-group">                              
	                            	        <p>Alamat  : {{$kamar->alamat_kamar}}</p>
	                            	        <p>No Telepon : {{$kamar->owner->no_tlp_pengguna}}</p>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group col-md-4 pull-right">
                            	<label class="control-label">Lokasi Kost</label>
                            	<div id="location-picker" style="height: 200px; overflow: hidden;"></div>
								<br>
                            	<button type="button" class="btn btn-primary pull-right" onclick="route()">Buka Di Google Maps</button>
                        	</div>
                        	<div class="form-group">
                        		<input hidden id="location-lat" value="{{$kamar->lat}}" name="latitude">
                        	</div>
                        	<div class="form-group">
                            	<input hidden id="location-lon" value="{{$kamar->lon}}" name="longitude"> 
                        	</div>
	                		<div class="clearfix"></div>
	                    </div>
	                    </div>
	                    
					</div>
					<!-- /.box -->
				</div>
			</div>
		</section>
@endsection
@section('moreJs')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js??sensor=false&libraries=places&key=AIzaSyA2HYBg5HU17qWpTDKGM7nsrxclhcvN5Go"></script>
<script src="{{URL::asset('/js/locationpicker.jquery.min.js')}}"></script>
<script>
        $('#location-picker').locationpicker({
            location: {
                latitude: '{{$kamar->lat}}',
                longitude: '{{$kamar->lon}}'
            },
            radius: 0,
        });

        function route()
        {
            var long_current = $('#location-lon').val();
            var lat_current = $('#location-lat').val();
            var uri = 'https://maps.google.com?saddr=Current+Location&daddr='+lat_current+','+long_current;
            window.open(uri, '_blank');
        }

        $(document).on('click', '.list-gambar', function(e){
        	document.getElementById('gambar-large').src=$(this).attr('src');
        });
</script>

@endsection
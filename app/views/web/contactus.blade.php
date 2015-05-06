@section('content')
	<div class="row margin-top5 typography text-left content-title custom-padding">
		<h3>Contact Us</h3>
	</div>
	<div class="row">
		<div class="columns large-8 medium-8 typography contact-details">
		{{Form::open(array('action' => array('ContactUsController@sendEmail')))}}
			<div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Fullname:</label>
						{{Form::text('fullname',Input::old('fullname'),array('class'=>($errors->first('fullname')) ? 'i-ierror' : ' '))}}
			           	{{$errors->first('fullname', '<i class="f-ierror">:message</i>');}}
					</p>
				</div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Company:</label>
						{{Form::text('company',Input::old('company'),array('class'=>($errors->first('company')) ? 'i-ierror' : ' '))}}
			           	{{$errors->first('company', '<i class="f-ierror">:message</i>');}}
					</p>
				</div>
			</div>

			<div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Address:</label>
						{{Form::text('address',Input::old('address'),array('class'=>($errors->first('address')) ? 'i-ierror' : ' '))}}
			           	{{$errors->first('address', '<i class="f-ierror">:message</i>');}}
					</p>
				</div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Country:</label>
						{{Form::select('country',Config::get('appconstants.regionCountries'),Input::old('country'),array('data-placeholder'=>'Choose Country'))}}
			           	{{$errors->first('country', '<i class="f-ierror">:message</i>');}}
					</p>
				</div>
			</div>

			<div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Telephone Number:</label>
						{{Form::text('telno',Input::old('telno'),array('class'=>($errors->first('telno')) ? 'i-ierror' : ' '))}}
			           	{{$errors->first('telno', '<i class="f-ierror">:message</i>');}}
					</p>
				</div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Fax Number:</label>
						{{Form::text('faxno',Input::old('faxno'),array('class'=>($errors->first('faxno')) ? 'i-ierror' : ' '))}}
			           	{{$errors->first('faxno', '<i class="f-ierror">:message</i>');}}
			        </p>
				</div>
			</div>

			<div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Cellphone Number:</label>
						{{Form::text('cellphoneno',Input::old('cellphoneno'),array('class'=>($errors->first('cellphoneno')) ? 'i-ierror' : ' '))}}
			           	{{$errors->first('cellphoneno', '<i class="f-ierror">:message</i>');}}
					</p>
				</div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Email:</label>
						{{Form::text('email',Input::old('email'),array('class'=>($errors->first('email')) ? 'i-ierror' : ' '))}}
			           	{{$errors->first('email', '<i class="f-ierror">:message</i>');}}
					</p>
				</div>
			</div>

			<div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Website:</label>
						{{Form::text('website',Input::old('website'),array('class'=>($errors->first('website')) ? 'i-ierror' : ' '))}}
			           	{{$errors->first('website', '<i class="f-ierror">:message</i>');}}
					</p>
				</div>
				<div class="contact-details columns large-6 medium-6">
					<p>
						<label>Business Sector:</label>
						{{Form::text('businesssector',Input::old('businesssector'),array('class'=>($errors->first('businesssector')) ? 'i-ierror' : ' '))}}
			           	{{$errors->first('businesssector', '<i class="f-ierror">:message</i>');}}
					</p>
				</div>
			</div>

			<div class="contact-details columns">
				<p>
					<label>Reason for Request:</label>
					{{Form::textarea('reason',Input::old('reason'),array('class'=>($errors->first('reason')) ? 'i-ierror' : ' '))}}
				    {{$errors->first('reason', '<i class="f-ierror">:message</i>');}}
				</p>
				<p>
					{{Form::submit('Send', array('class'=>'btn-submit'))}}
				</p>
			</div>

		{{Form::close()}}
		</div>
		
		<div class="columns large-4 medium-4 typography">
			<p>
				<span>IMMIGRA PUBLISHING<br/>
				Registered Address:</span><br/>
				Suite 302, Ferros Tower 30 Polaris Street, Bel-Air 2
				Makati City,
				Philippines 1209<br/>
				Tel/Fax: +00632-812-0838<br/>
				Cell: +0063927-8817049<br/>
				theimmigrantnewspaper@gmail.com
			</p>

			<p>
				<span>Mailing Address:</span><br/>
				PO Box 4230 Makati, Philippines
			</p>
		</div>
	</div>
@endsection
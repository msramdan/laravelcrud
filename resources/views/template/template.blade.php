
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>@yield('title')</title>
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		{{-- headlink --}}
        @include('includes.v_headlink')
	</head>
	<body class="no-skin">
		{{-- navbar --}}
        @include('includes.v_navbar')

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
			{{-- sidebar --}}
            @include('includes.v_sidebar')
			<div class="main-content">
				<div class="main-content-inner">
					{{-- breadcrumbs --}}
                    @include('includes.v_breadcrumbs')
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                @yield('content')
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- footer --}}
            @include('includes.v_footer')
            {{-- footer script --}}
            @include('includes.v_footerscript')
	</body>
</html>

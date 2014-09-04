<link rel="stylesheet" href="/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="/assets/css/font-icons/entypo/css/entypo.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
<link rel="stylesheet" href="/assets/css/bootstrap.css">
<link rel="stylesheet" href="/assets/css/neon-core.css">
<link rel="stylesheet" href="/assets/css/neon-theme.css">
<link rel="stylesheet" href="/assets/css/neon-forms.css">
<link rel="stylesheet" href="/assets/css/neon-rtl.css">
<link rel="stylesheet" href="/assets/css/custom.css">
@unless(Auth::user()->theme_color == 'default')
<link rel="stylesheet" href="/assets/css/skins/{{Auth::user()->theme_color}}.css">
@endunless
<link rel="stylesheet" href="/assets/css/font-icons/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/parsian/css/parsian.css">

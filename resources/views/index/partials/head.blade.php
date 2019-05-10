
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="{{ config('index.keywords') }}" />
<meta name="description" content="{{ config('index.description') }}" />
<link href="{{ asset('static/home/css/') }}/style.css" rel="stylesheet" type="text/css" />
<script src="{{ asset('static/home/js/') }}/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('static/home/js/') }}/jquery.form-validator.js"></script>
<script type="text/javascript" src="{{ asset('static/home/js/') }}/jquery.form.js"></script>
<link rel="stylesheet" href="{{ asset('static/home/css/') }}/jquery-ui/jquery-ui.css">
<script type="text/javascript" src="{{ asset('static/home/js/') }}/jquery-ui.js"></script>
<script type="text/javascript">$(document).ready(function() {$.validate("#form1");$("#form1").ajaxForm({dataType :"json",success :function(json) {if (json.state) {var $dialog =$("#dialog").html(json.message).dialog({modal :true,buttons :{"确认" :function() {window.location.reload();$(this).dialog("close");}
}
});} else {$.formUtils.showMsg("error",json.message);}
}
});});</script>


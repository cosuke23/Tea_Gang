<!-- load jquery ui css-->
<link href="jquery-ui.min.css" rel="stylesheet" type="text/css" />
<!-- load jquery library -->
<script src="jquery-1.11.3.min.js"></script>
<!-- load jquery ui js file -->
<script src="jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {
    var availableTags = <?php include('autocomplete.php'); ?>;
    $("#department_name").autocomplete({
        source: availableTags,
        autoFocus:true
    });
});
</script>

<label>Department Name</label></br>
<input id="department_name" type="text" size="50" />
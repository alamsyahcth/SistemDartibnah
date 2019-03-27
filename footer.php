<footer>
	<div class="container">
		&copy; copyright Pokmasdartibnah-2017
	</div>
</footer>
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/DataTables/jquery.dataTables.js"></script>
	<script src="bootstrap/DataTables/dataTables.bootstrap.js"></script>
	<script src="bootstrap/select2/dist/js/select2.min.js"></script>
	<script src="bootstrap/datepicker/js/bootstrap-datepicker.min.js"></script>
	<script>
	//MODAL
	$(function () { $('#myModal').modal({
		keyboard: true
		});
	});

	//PANGGIL ISI MODAL
	$(document).ready(function() {
		$('a#lihat_data').click(function(){
			var url = $(this).attr('href');
			$.ajax({
				url : url,
				success:function(response){
					$('#myModal').html(response);
				}
			})
		});
	});

	//DATATABLES
	$(document).ready(function () {
        $('#dataTables').dataTable();
    });

	//SELECT2
	$(document).ready(function () {
	    $('pemohon').select2({
	        placeholder: "Pilih Pemohon";
	    });
	});

	//DATEPICKER
	$(document).ready(function () {
        $('#tgllahir').datepicker({
            format: "yyyy-mm-dd",
            autoclose:true
        });
    });
</script>
</body>
</html>
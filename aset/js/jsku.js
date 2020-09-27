$(function () {
	// FUNGSI DATEPICKER
	$(function () {
		$("#tgl").datepicker({
			format: "dd-mm-yyy",
			autoclose: true,
			todayHighlight: true,
		});
	});

	// DETAIL DATA GURU
	$("#modaldetailguru").on("show.bs.modal", function (event) {
		let gnip = $(event.relatedTarget).data("nip");
		let gnama = $(event.relatedTarget).data("nama");
		let galamat = $(event.relatedTarget).data("alamat");
		let gjenkel = $(event.relatedTarget).data("jenkel");
		let gemail = $(event.relatedTarget).data("email");
		let gnohp = $(event.relatedTarget).data("nohp");
		let gagama = $(event.relatedTarget).data("agama");
		let gtempat = $(event.relatedTarget).data("tempat");
		let gtgl = $(event.relatedTarget).data("tanggal");
		let gjabatan = $(event.relatedTarget).data("jabatan");

		// $(this).find('.modal-body input').val(namaku)
		$(this).find(".nipguru").text(gnip);
		$(this).find(".namaguru").text(gnama);
		$(this).find(".alamatguru").text(galamat);
		$(this).find(".genderguru").text(gjenkel);
		$(this).find(".emailguru").text(gemail);
		$(this).find(".nohpguru").text(gnohp);
		$(this).find(".agamaguru").text(gagama);
		$(this)
			.find(".ttlguru")
			.text(gtempat + ", " + gtgl);
		$(this).find(".jabatanguru").text(gjabatan);
	});

	// UBAH DATA GURU
	$("#modalubahguru").on("show.bs.modal", function (event) {
		var id_guru = $(event.relatedTarget).data("idguru");
		var gnip = $(event.relatedTarget).data("nip");
		var gnama = $(event.relatedTarget).data("nama");
		var galamat = $(event.relatedTarget).data("alamat");
		var gjenkel = $(event.relatedTarget).data("jenkel");
		var gemail = $(event.relatedTarget).data("email");
		var gnohp = $(event.relatedTarget).data("nohp");
		var gagama = $(event.relatedTarget).data("agama");
		var gtempat = $(event.relatedTarget).data("tempat");
		var gtgl = $(event.relatedTarget).data("tanggal");
		var gjabatan = $(event.relatedTarget).data("jabatan");

		// $(this).find('.modal-body input').val(namaku)
		$(this).find("#id_guru").val(id_guru);
		$(this).find("#nip").val(gnip);
		$(this).find("#nama").val(gnama);
		$(this).find("#alamat").val(galamat);
		$(this).find("#jenkel").val(gjenkel);
		$(this).find("#email").val(gemail);
		$(this).find("#nohp").val(gnohp);
		$(this).find("#agama").val(gagama);
		$(this).find("#tempat").val(gtempat);
		$(this).find("#tgl").val(gtgl);
		$(this).find("#jabatan").val(gjabatan);
	});
});

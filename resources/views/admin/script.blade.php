<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Simplebar -->
<script src="{{ asset('admin/plugins/simplebar/simplebar.min.js') }}"></script>

<!-- Hotkeys -->
<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>

<!-- ApexCharts -->
<script src="{{ asset('admin/plugins/apexcharts/apexcharts.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('admin/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>

<!-- jVectorMap -->
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('admin/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>

<!-- Daterangepicker -->
<script src="{{ asset('admin/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script>
  jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
      autoUpdateInput: false,
      singleDatePicker: true,
      locale: {
        cancelLabel: 'Clear'
      }
    });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
      jQuery(this).val('');
    });
  });
</script>

<!-- Quill -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Toastr -->
<script src="{{ asset('admin/plugins/toaster/toastr.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('admin/js/mono.js') }}"></script>
<script src="{{ asset('admin/js/chart.js') }}"></script>
<script src="{{ asset('admin/js/map.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>

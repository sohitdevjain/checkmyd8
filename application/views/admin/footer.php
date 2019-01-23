</div>
  <!--   Core JS Files   -->
  <script src="<?php echo site_url('assets/assets/js/core/jquery.min.js');?>"></script>
  <script src="<?php echo site_url('assets/assets/js/core/popper.min.js');?>"></script>
  <script src="<?php echo site_url('assets/assets/js/core/bootstrap.min.js');?>"></script>
  <script src="<?php echo site_url('assets/assets/js/plugins/perfect-scrollbar.jquery.min.js');?>"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo site_url('assets/assets/js/plugins/chartjs.min.js');?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo site_url('assets/assets/js/plugins/bootstrap-notify.js');?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo site_url('assets/assets/js/now-ui-dashboard.min.js?v=1.1.0');?>" type="text/javascript"></script>
  <script src="<?php echo site_url('assets/assets/js/custom.js')?>"></script>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


 <script type="text/javascript">
   var baseurl = "<?php echo  base_url(); ?>";
 </script>
</body>

</html>
<script>
      CKEDITOR.replace( 'description' );
      

    </script>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
 <script>
	  $(document).ready(function() {
			$('#datatable').DataTable();
		} );
	  </script>
<style type="text/css">
.dropdown-container {
    display: none;
    background-color: #f96332;
    padding-left: 8px;
}
 .dropdown-container a p {
   font-size: 15px;
} 
/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}
/* Style the sidenav links and the dropdown button */
.nav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #ffffff;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}

/* On mouse-over */
.nav a:hover, .dropdown-btn:hover {
    color: #f1f1f1;
}
</style>

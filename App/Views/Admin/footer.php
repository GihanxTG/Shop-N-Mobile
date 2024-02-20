</div>
  </div>
  <script src="<?=BASEPATH?>Public/template1/src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?=BASEPATH?>Public/template1/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=BASEPATH?>Public/template1/src/assets/js/sidebarmenu.js"></script>
  <script src="<?=BASEPATH?>Public/template1/src/assets/js/app.min.js"></script>
  <script src="<?=BASEPATH?>Public/template1/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?=BASEPATH?>Public/template1/src/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="<?=BASEPATH?>Public/template1/src/assets/js/dashboard.js"></script>
  <script>
    document.getElementById('showFormBtn').addEventListener('click', function() {
    document.getElementById('formContainer').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
});

document.getElementById('closeForm').addEventListener('click', function() {
    document.getElementById('formContainer').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
});

document.getElementById('overlay').addEventListener('click', function() {
    document.getElementById('formContainer').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
});
  
  </script>
</body>

</html>
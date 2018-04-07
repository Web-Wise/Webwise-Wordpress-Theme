  <footer>            
       <div style="max-height:50px" class="text-center"><img src="https://webwise.wales/wp-content/uploads/2017/05/webwise-tagline-white.svg" height="39.72px" width="250px"/></div>
  </footer>
</div>
  
			   
  <?php wp_footer(); ?>
  <!--<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">-->
  
</body>
<script>
// First we detect the click event
document.getElementById('menu-button').addEventListener('click', function () {
  var menu = document.getElementById('offscreen');
  menu.classList.add('active');
});

document.getElementById('close-menu-button').addEventListener('click', function () {
  var menu = document.getElementById('offscreen');
  menu.classList.remove('active');
});

</script>
</html>
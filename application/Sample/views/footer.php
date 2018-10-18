	<footer>
        <hr>
		<p class="text-center">Powered by ClearWater <?php print $data['version']; ?></p>
	</footer>
        <!--/.fluid-container-->
        <!-- Le javascript==================================================-
        ->
        <!-- Placed at the end of the document so the pages load faster -->
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
     <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
     <?php
     	foreach($data['scripts'] as $script) {
     		print '<script src="'.$script.'"></script>';
     	}
     ?>
</body>
</html>
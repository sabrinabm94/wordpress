	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
    <footer>
    	<navbar class="footer">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    	</navbar>
    </footer>
</body>
</html>
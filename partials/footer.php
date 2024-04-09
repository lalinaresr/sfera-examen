			</div>
		</div>

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
		<?php if (isset($_SESSION['is_logged_in'])) : ?>
			<script type="module" src="public/js/dashboard.js"></script>
		<?php endif; ?>
		<script type="module" src="public/js/auth.js"></script>
	</body>

</html>
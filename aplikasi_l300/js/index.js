var $ham = document.querySelector('.hamburger'),
		$pageBody = document.querySelector('.page-body');
	$ham.onclick = function () {
		if ($ham.classList.contains('open')) {
			$pageBody.classList.remove('open');
			$ham.classList.remove('open');
		} else {
			$pageBody.classList.add('open');
			$ham.classList.add('open');
		}
	};
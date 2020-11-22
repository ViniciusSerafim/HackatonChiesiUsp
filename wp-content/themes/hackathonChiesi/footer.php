<footer>



</footer>


<script>
	if(JSON.parse(sessionStorage.getItem('profiles')) == null){
	let profiles = [];

	profiles.push({
		nome: 'Usuario Teste',
		img: `<?php bloginfo('template_url'); ?>/assets/img/perfil.jpg`,
		usuario: 'UsuarioTeste',
		senha: '123456'
	});

	sessionStorage.setItem('profiles', JSON.stringify(profiles));
	}


	let estaLogado = sessionStorage.getItem('estaLogado');
	let display;
	
	if (estaLogado == 'true') {
		display = 'block';
		setDisplay('#slidePropaganda', 'none')

	} else {
		display = 'none'
		document.querySelector('.perfil').href = `<?php echo get_bloginfo('url')?>/Login`;
		setDisplay('#slidePropaganda', 'block');
	}
	setDisplay('#liAgenda', display);
	setDisplay('#liHistorico', display);
	var perfilLogado = JSON.parse(sessionStorage.getItem('perfilLogado'));

	if (perfilLogado != null) {
		document.querySelector('#imgPerfil').src = perfilLogado.img;
		document.querySelector('#nomePerfil').innerHTML = perfilLogado.nome;
	} else {
		document.querySelector('#imgPerfil').src = `<?php bloginfo('template_url'); ?>/assets/img/default.png`;
		document.querySelector('#nomePerfil').innerHTML = `Fazer login ou Registrar-se`;
	}


	function setDisplay(selector, display) {
		let element = document.querySelector(selector);

		if(element != null){
		element.style.display = display;
		}
	}




	function checkLogin(){
		let profiles = JSON.parse(sessionStorage.getItem('profiles'));

		for(let i = 0; i < profiles.length; i++){
			// console.log(profiles[i]);
			// console.log(document.querySelector('#usuarioLogin'));
			// console.log(document.querySelector('#senhaLogin'));
			if(profiles[i].usuario == document.querySelector('#usuarioLogin').value &&
				profiles[i].senha == document.querySelector('#senhaLogin').value){
				sessionStorage.setItem('perfilLogado', JSON.stringify(profiles[i]));
				sessionStorage.setItem('estaLogado', true);
				window.location.reload();

			}
		}
	}
</script>

</body>

</html>
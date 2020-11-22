<footer>



</footer>


<script>

	var remedios = [];
	var remedio1 = {
		nomeRemedio: 'Aerolin',
		medicoPRescricao: 'John Doe',
		dataPrescricao: '01/11/2020',
		disponivelRedePublica: 1,
		estoqueAtual: 2,
		idLembrete: 1234
	}
	var remedio2 = {
		nomeRemedio: 'Clenil',
		medicoPRescricao: 'John Doe',
		dataPrescricao: '01/11/2020',
		disponivelRedePublica: 0,
		estoqueAtual: 1,
		idLembrete: 5678
	}
	remedios.push(remedio1, remedio2)

	var doencas = [];
	var doenca1 = {
		nomeDoenca: 'Asma',
		remedios: []
	}
	doenca1.remedios = remedios;
	doencas.push(doenca1)

	var consultas = [];
	// aparece no historico
	var consulta1 = {
		medicoConsulta: 'John Doe',
		dataConsulta: '01/11/2020',
		enderecoConsulta: 'Rua dos Alecrins 210'
	}
	// aparece na agenda
	var consulta2 = {
		medicoConsulta: 'John Doe',
		dataConsulta: '05/12/2020',
		enderecoConsulta: 'Rua dos Alecrins 210'
	}
	consultas.push(consulta1, consulta2)

	var lembretes = [];
	var lembrete1 = {
		nomeLembrete: 'Consulta Clinico Geral',
		tipoLembrete: 'consulta',
		hora: '17:00',
		dataLembrete: '04/12/2020',
		repeticao: '',
		idRemedio: -1,
		idConsulta: 1234
	}
	var lembrete2 = {
		nomeLembrete: 'Tomar Insulina',	
		tipoLembrete: 'remedio',
		dataLembrete: '01/11/2020',
		hora: '18:00',
		repeticao: 'semanal',
		idRemedio: 1234,
		idConsulta: -1
	}
	lembretes.push(lembrete1, lembrete2)



	if (JSON.parse(sessionStorage.getItem('profiles')) == null) {
		let profiles = [];

		var usuario = {
			cpf: '12345678912',
			usuario: 'UsuarioTeste',
			nome: 'Lucimara dos Santos',
			cns: '12345',
			sexo: 'F',
			tipoSanguineo: 'O',
			RH: '+',
			dataNascimento: '17/05/1968',
			email: 'lucimarasantos@mail.com',
			senha: '123456',
			img: `<?php bloginfo('template_url'); ?>/assets/img/perfil.jpg`,
			consultas: [],
			doencas: [],
			lembretes: []
		}
		usuario.doencas = doencas;
		usuario.consultas = consultas;
		usuario.lembretes = lembretes;
		profiles.push(usuario);

		sessionStorage.setItem('profiles', JSON.stringify(profiles));
	}


	let estaLogado = sessionStorage.getItem('estaLogado');
	let display;

	if (estaLogado == 'true') {
		display = 'block';
		setDisplay('#slidePropaganda', 'none');
		setDisplay('.agenda', 'block');


	} else {
		display = 'none'
		document.querySelector('.perfil').href = `<?php echo get_bloginfo('url')?>/Login`;
		setDisplay('#slidePropaganda', 'block');
		setDisplay('.agenda', 'none');

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

		if (element != null) {
			element.style.display = display;
		}
	}




	function checkLogin() {
		let profiles = JSON.parse(sessionStorage.getItem('profiles'));

		for (let i = 0; i < profiles.length; i++) {
			// console.log(profiles[i]);
			// console.log(document.querySelector('#usuarioLogin'));
			// console.log(document.querySelector('#senhaLogin'));
			if (profiles[i].usuario == document.querySelector('#usuarioLogin').value &&
				profiles[i].senha == document.querySelector('#senhaLogin').value) {
				sessionStorage.setItem('perfilLogado', JSON.stringify(profiles[i]));
				sessionStorage.setItem('estaLogado', true);
				window.location.reload();

			}
		}
	}
</script>

</body>

</html>
<?php
$title = "Home";
get_header();
?>

<div class="swiper-container" id="slidePropaganda">
	<div class="swiper-wrapper">
		<div class="swiper-slide">Slide 1</div>
		<div class="swiper-slide">Slide 2</div>
		<div class="swiper-slide">Slide 3</div>
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>
</div>

<div class="container agenda">
	<div class="row">
		<div class="agenda-item col-12" style="background-color: #fff;padding:30px">
			<div class="d-flex justify-content-between">
				<h2> Proximos Lembretes</h2>
				<button class="button-default" style="width:300px; margin:0;" onclick="popupToggler('abrir')">
					Adicionar lembrete
				</button>
			</div>

			<div class="card-container">



			</div>
		</div>
	</div>

</div>
</div>


<div class="popup-container">
	<div class="popup">
		<div class="close-btn" onclick="popupToggler('fechar')">
			X
		</div>
		<label for="nomeLembrete">Nome</label>
		<input id="nomeLembrete" type="text">

		<label for="tipoLembrete">Tipo do Lembrete</label>
		<input id="tipoLembrete" type="text">

		<label for="dataLembrete">Data</label>
		<input id="dataLembrete" type="text">

		<label for="horaLembrete">Hora</label>
		<input id="horaLembrete" type="text">
		<label for="repeticaoLembrete">Repeticao</label>
		<div id="repeticao">

			<input id="semRepeticao" type="checkbox">
			<label for="">Sem repeticao</label>

			<input id="diario" type="checkbox">
			<label for="">Diario</label>
			
			<input id="semanal" type="checkbox">
			<label for="">Semanal</label>
			
			<input id="mensal" type="checkbox">
			<label for="">Mensal</label>
			
			<input id="anual" type="checkbox">
			<label for="">Anual</label>
		</div>
		<div class="d-flex justify-content-center">

			<button class="button-default" style="background-color: #fff; color:#2c0876" onclick= "cadastrarLembrete()">
				Cadastrar
			</button>
		</div>
	</div>
</div>

<script>
	var swiper = new Swiper('.swiper-container', {
		pagination: {
			el: '.swiper-pagination',
		},
		loop: true,
	});


	let user = JSON.parse(sessionStorage.getItem('perfilLogado'));
	let cardContainer = document.querySelector('.card-container');
	for (let i = 0; i < user.lembretes.length; i++) {
		let card = document.createElement('div');
		card.classList.add('card');
		card.innerHTML = `<span> Dia ` + user.lembretes[i].dataLembrete + '</span>   <span> Hora: ' + user.lembretes[i].hora + `</span>  <span>`
			+ user.lembretes[i].nomeLembrete + `</span> `;
		cardContainer.appendChild(card);
	}


	function popupToggler(value) {
		if (value == 'abrir') {
			document.querySelector('.popup-container').style.display = 'flex';
		} else {
			document.querySelector('.popup-container').style.display = 'none';

		}
	}


	function cadastrarLembrete(){
		var lembrete = {
		nomeLembrete: '',
		tipoLembrete: '',
		hora: '',
		dataLembrete: '',
		repeticao: ''
	}
		lembrete.nomeLembrete  = document.querySelector('#nomeLembrete').value;
		lembrete.tipoLembrete  = document.querySelector('#tipoLembrete').value;
		lembrete.dataLembrete  = document.querySelector('#dataLembrete').value;
		lembrete.hora  = document.querySelector('#horaLembrete').value;


		let repeticaoLembrete  = document.querySelector('#repeticao');

		let checkbox = repeticaoLembrete.querySelector('input');

		for(let i = 0; i < checkbox.length; i++){
			if(checkbox[i].value == true){
				lembrete.repeticao = checkbox[i].id;
			}
		}
		let userAux = JSON.parse(sessionStorage.getItem('perfilLogado'));

		userAux.lembretes.push(lembrete);

		sessionStorage.setItem('perfilLogado', JSON.stringify(userAux));

		window.location.reload();
	}
</script>


<?php
get_footer();
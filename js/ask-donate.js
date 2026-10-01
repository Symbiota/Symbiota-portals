const portal_domain = window.location.hostname.toUpperCase();

const languages = {
	en: {
		header: 'Hello Portal User!',
		main: `<p style="font-size:17px; font-weight:600;">Do you use and love ${portal_domain} and its collections?</p>
			<p>This portal, and others like it, relies on a <strong>small, dedicated group of people</strong>, the Symbiota Support Hub (SSH) for website support.</p>
			<p><strong style="color:red;">Federal funding for the SSH has ended</strong>, and this small team is now maintaining <mark>52+ portals</mark> and <mark>90 million occurrence records</mark> of life on earth... and still growing!</p>
			<p><a href="https://tinyurl.com/supportsymbiota" target="_blank" onclick="setDonateCookie(60*60*24*31);">Please support this portal through a donation to the SSH.</a> Doing so helps each collection that shares data here.</p>
			<p>Thank you very much.<br>-${portal_domain}, Nico, Ed, Jenn, Katie, Greg</p>`,
		close: 'Close',
		donate: 'Donate',
		more_ways: 'More Ways to Support the Portal',
	},
	es: {
		header: '¡Hola, Usuario del Portal!',
		main: `<p style="font-size:17px; font-weight:600;">¿Utilizas y te encanta ${portal_domain} y sus colecciones?</p>
			<p>Este portal, al igual que otros similares, cuenta con el apoyo de un <strong>pequeño grupo de personas muy comprometidas</strong>, el Symbiota Support Hub (SSH), que se encarga del mantenimiento del sitio web.</p>
			<p><strong style="color:red;">La financiación federal para el SSH ha finalizado</strong>, y este pequeño equipo se encarga ahora del mantenimiento de <mark>más de 52 portales</mark> y <mark>90 millones de registros de presencia</mark> de vida en la Tierra... ¡y la cifra sigue creciendo!</p>
			<p><a href="https://tinyurl.com/supportsymbiota" target="_blank" onclick="setDonateCookie(60*60*24*31);">Por favor, apoya este portal mediante una donación al SSH.</a> Tu contribución ayuda a cada colección que comparte datos aquí.</p>
			<p>Muchas gracias.<br>-${portal_domain}, Nico, Ed, Jenn, Katie, Greg</p>`,
		close: 'Cerrar',
		donate: 'Donar',
		more_ways: 'Más Formas de Apoyar el Portal',
	},
	fr: {
		header: 'Bonjour, Utilisateur de Portal !',
		main: `<p style="font-size:17px; font-weight:600;">Utilisez-vous et appréciez-vous ${portal_domain} et ses collections ?</p>
			<p>Ce portail, ainsi que d'autres similaires, s'appuie sur un <strong>petit groupe de personnes dévouées</strong>, le Symbiota Support Hub (SSH), pour l'assistance technique du site web.</p>
			<p><strong style="color:red;">Le financement fédéral du SSH a pris fin</strong>, et cette petite équipe assure désormais la maintenance de <mark>plus de 52 portails</mark> et de <mark>90 millions d'enregistrements d'occurrences</mark> de la vie sur Terre… et ce chiffre ne cesse d'augmenter !</p>
			<p><a href="https://tinyurl.com/supportsymbiota" target="_blank" onclick="setDonateCookie(60*60*24*31);">Merci de soutenir ce portail en faisant un don au SSH.</a> Cela aide chacune des collections qui partagent leurs données ici.</p>
			<p>Merci beaucoup.<br>-${portal_domain}, Nico, Ed, Jenn, Katie, Greg</p>`,
		close: 'Fermer',
		donate: 'Doar',
		more_ways: ' D\'autres Façons de Soutenir le Portail',
	}
};

const donate_lang = languages[document.documentElement.lang] || languages.en;

const banner_style = document.createElement('style');

banner_style.textContent = `
	.ask {
		position: fixed;
		bottom: 10px;
		right: 10px;
		max-width: 50%;
		max-height: 60%;
		border: none;
		border-radius: 8px;
		overflow: hidden;
		box-shadow: 0 8px 30px rgba(0, 0, 0, 0.16);
		z-index: 9999;
		animation: slideUp 0.6s ease-out forwards;
		display: flex;
    	flex-direction: column;	
	}

	.ask-header {
	    flex-shrink: 0;
		height: 70px;
		padding: 10px 28px;
		background: var(--menu-top-bg-color);
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	.ask-content {
		padding: 4px 26px;
		background: #fff;
		font-size: 16px;
		line-height: 1.6;
		overflow-y: auto;
		min-height: 0;
	}

	.ask-content mark {
		background-color: #eff8d9;
		color: #186536;
	}

	.ask-footer {
		min-height: 50px;
		padding: 12px 28px;
		border-top: 1px solid #ddd;
		background: #fff;
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	@keyframes slideUp {
		0% { opacity: 0; transform: translateY(75%); }
		100% { opacity: 1; transform: translateY(0); }
	}

	@media (max-width: 600px) {
		.ask {
			left: 10px;
			max-width: none;
			max-height: 50%;
  		}
	}
`;

const banner_div = document.createElement('div');

banner_div.innerHTML = `
	<div id="ask" class="ask">

		<div class="ask-header">
			<h2 style="color:#fff; font-size:23px;">${donate_lang.header}</h2>

			<button type="button" class="button" onclick="setDonateCookie(60*60*24*7); hideDonation();">
				${donate_lang.close}
			</button>
		</div>

		<div class="ask-content">
			${donate_lang.main}
		</div>

		<div class="ask-footer">
			<a href="https://tinyurl.com/supportsymbiota" target="_blank" class="button" style="background-color:var(--darkest-color); color:#fff; text-decoration:none;" onclick="setDonateCookie(60*60*24*31);">
				${donate_lang.donate}
			</a>

			<a href="https://symbiota.org/donate" target="_blank" style="color:var(--link-color); text-decoration:underline;" onclick="setDonateCookie(60*60*24*31);">
				${donate_lang.more_ways}
			</a>
		</div>
	</div>
`;

if (!(document.cookie.match(/^(.*;)?\s*hide_donate\s*=\s*[^;]+(.*)?$/))) {
	document.head.appendChild(banner_style);
    document.body.appendChild(banner_div);
}

function setDonateCookie(time){
    document.cookie = "hide_donate=true; max-age=" + time + "; path=/; Secure; SameSite=Strict";
};

function hideDonation(){
	document.getElementById('ask').style.display = 'none';
}
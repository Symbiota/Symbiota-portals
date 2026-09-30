const banner_style = document.createElement('style');

banner_style.textContent = `
	.ask {
		position: fixed;
		bottom: 10px;
		right: 10px;
		max-width: 50%;
		border: none;
		border-radius: 8px;
		overflow: auto;
		box-shadow: 0 8px 30px rgba(0, 0, 0, 0.16);
		z-index: 9999;
		animation: slideUp 0.6s ease-out forwards;
	}

	.ask-header {
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

	@media (max-width: 768px) {
		.ask {
			top: 50%;
			left: 10px;
			max-width: none;
  		}
	}
`;

const banner_div = document.createElement('div');
const portal_domain = window.location.hostname.toUpperCase();

banner_div.innerHTML = `
	<div id="ask" class="ask">

		<div class="ask-header">
			<h2 style="color:#fff; font-size:23px;">Hello Portal User!</h2>

			<button type="button" class="button" onclick="setDonateCookie(60*60*24*7); hideDonation();">
				Close
			</button>
		</div>

		<div class="ask-content">
			<p>
				Do you use and love ${portal_domain} and its collections?
			</p>
			<p>
				This portal, and others like it, relies on a <strong>small, dedicated group of people</strong>, the Symbiota Support Hub (SSH) for website support.
			</p>
			<p>
				<strong style="color:red;">Federal funding for the SSH has ended</strong>, and this small team is now maintaining <mark>52+ portals</mark> and <mark>90 million occurrence records</mark> of life on earth... and still growing!
			</p>
			<p>
				<a href="https://tinyurl.com/supportsymbiota">Please support this portal through a donation to the SSH.</a> Doing so helps each collection that shares data here.
			</p>
			<p>
				Thank you very much. <br>
				-${portal_domain}, Nico, Ed, Jenn, Katie, Greg
			</p>
		</div>

		<div class="ask-footer">
			<a href="https://tinyurl.com/supportsymbiota" target="_blank" class="button" style="background-color:var(--darkest-color); color:#fff; text-decoration:none;" onclick="setDonateCookie(60*60*24*31);">
				Donate
			</a>

			<a href="https://symbiota.org/donate" target="_blank" style="color:var(--link-color); text-decoration:underline;" onclick="setDonateCookie(60*60*24*31);">
				More Ways to Support the Portal
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
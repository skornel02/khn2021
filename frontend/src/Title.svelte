<script>
	import { _ } from "svelte-i18n";
	import marked from "marked";

	let html = $_("title.motto");
</script>

<div class="wrapper">
	<div class="title">
		<h1>{$_("title.longname")}</h1>
		<p>
			{@html marked(html)}
		</p>
		<div id="buttons">
		</div>
	</div>
	<div class="w-full h-screen flex items-center justify-center">
		<div>
			<a
				class="text-5xl md:text-7xl bg-blue rounded-3xl px-10 py-1 no-underline hover:bg-darkblue text-darkerblue"
				href="/login">{$_("header.login")}</a
			>
		</div>
	</div>
</div>

<style>
	.wrapper {
		display: flex;
		flex-direction: column;
		width: 100%;
		height: 100vh;
		background-image: url("/background.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		background-position-x: right;
		background-attachment: fixed;
	}

	.title {
		display: flex;
		height: 100%;
		padding: 45px 10px 0 10px;
		flex-direction: column;
		justify-content: center;
		cursor: default;
	}

	.title h1 {
		font-size: 3rem;
		color: #ffffff;
		font-family: "Work Sans", Courier, monospace;
		margin: 0;
		font-weight: bold;
	}

	.title p {
		font-family: "Work Sans", Courier, monospace;
		margin: 30px 0;
		color: whitesmoke;
	}

	.title p :global(span) {
		font-weight: bold;
	}

	.title div {
		display: flex;
		justify-content: center;
	}

	.title div :global(a) {
		padding: 0 25px;
	}

	.title div :global(a span) {
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 1.1em;
		padding: 3px 10px;
	}

	@media only screen and (min-width: 768px) {
		.title {
			margin-left: 120px;
			padding: unset;
		}

		.title h1 {
			font-size: 4rem;
		}

		.title p {
			width: 400px;
			font-size: 1.4rem;
			margin: unset;
		}

		.title div {
			width: 400px;
			margin-top: 10px;
		}
	}

	@media only screen and (min-width: 1024px) {
		.wrapper {
			flex-direction: row;
		}
	}
</style>

<script>
	import { _ } from "svelte-i18n";
	import Door from "svelte-material-icons/Door.svelte";
	import AccountGroupOutline from "svelte-material-icons/AccountGroupOutline.svelte";
	import EyeOutline from "svelte-material-icons/EyeOutline.svelte";
	import NoteMultipleOutline from "svelte-material-icons/NoteMultipleOutline.svelte";
	import Forum from "svelte-material-icons/Forum.svelte";
	import HelpCircleOutline from "svelte-material-icons/HelpCircleOutline.svelte";

	let size = "2rem";
	const phptext = "<?php $k->getProps() ?>."
</script>

<div class="discover">
	<h1 class="mainTitle">{$_("discover.title")}</h1>

	<div class="container max-w-5xl">
		<div class="grid md:grid-cols-3 sm:grid-cols-2 md:gap-8 gap-4">
			<div class="card">
				<div class="card-icon"><Door {size} /></div>
				<div class="card-title">
					{$_("discover.openTitle")}
				</div>
				<div class="card-body">
					{$_("discover.openText")}
				</div>
			</div>
			<div class="card">
				<div class="card-icon"><AccountGroupOutline {size} /></div>
				<div class="card-title">
					{$_("discover.socialTitle")}
				</div>
				<div class="card-body">
					{$_("discover.socialText1")} <code>{phptext}</code> {$_("discover.socialText2")}
				</div>
			</div>
			<div class="card">
				<div class="card-icon"><EyeOutline {size} /></div>
				<div class="card-title">
					{$_("discover.accessibleTitle")}
				</div>
				<div class="card-body">
					{$_("discover.accessibleText")}
				</div>
			</div>
			<div class="card">
				<div class="card-icon"><NoteMultipleOutline {size} /></div>
				<div class="card-title">
					{$_("discover.blogTitle")}
				</div>
				<div class="card-body">
					{$_("discover.blogText")}
				</div>
			</div>
			<div class="card">
				<div class="card-icon"><Forum {size} /></div>
				<div class="card-title">
					{$_("discover.forumTitle")}
				</div>
				<div class="card-body">
					{$_("discover.forumText")}
				</div>
			</div>
			<div class="card">
				<div class="card-icon"><HelpCircleOutline {size} /></div>
				<div class="card-title">
					{$_("discover.knowledgeBaseTitle")}
				</div>
				<div class="card-body">
					{$_("discover.knowledgeBaseText")}
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	.discover {
		display: flex;
		justify-content: center;
		flex-wrap: wrap;
		padding-bottom: 40px;
	}

	.mainTitle {
		display: block;
		text-align: center;
		width: 100%;
		margin: 0;
		padding: 40px 0;
		font-size: 2rem;
	}

	.card {
		display: flex;
		flex-direction: column;
		padding: 10px;
		background-color: whitesmoke;
		@apply shadow-lg;
		@apply rounded-md;
	}

	.card-icon {
		@apply text-darkblue;
	}

	.card-title {
		font-size: 1.3rem;
	}

	.card-body code {
		white-space: nowrap;
	}

	@media only screen and (min-width: 768px) {
		.mainTitle {
			font-size: 3rem;
		}
	}
</style>

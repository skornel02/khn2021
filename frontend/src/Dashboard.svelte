<script lang="ts">
	import { _ } from "svelte-i18n";
	import Lock from "svelte-material-icons/Lock.svelte";
	export let isWorker: boolean = false;
	export let isGuest: boolean = false;
	export let userId: number = 2;

	const size = "2rem";
	const color = "gold";

	function redirectToSite(site: string): undefined {
		location.href = site;
		return;
	}
</script>

<div
	class:min-h-screen={!isGuest}
	class="flex justify-items-center items-center pt-24 md:pt-16 flex-col w-full bg-splash bg-cover bg-no-repeat bg-right bg-fixed"
>
	<h1 class="text-3xl text-center text-white">
		{$_("dashboard.choose")}
	</h1>

	<div class="container max-w-5xl pt-7">
		<div class="flex flex-row">
			<div
				class="card"
				on:click={() =>
					redirectToSite(
						"https://csapat08-versenydonto.nisz.hu/course/index.php?categoryid=5"
					)}
			>
				<div class="card-img">
					<img
						src="/content/forum.png"
						alt={$_("dashboard.forumTitle")}
					/>
				</div>
				<div class="card-title">
					{$_("dashboard.forumTitle")}
				</div>
				<div class="card-body">
					{$_("dashboard.forumText")}
				</div>
			</div>
			<div
				class="card"
				on:click={() =>
					redirectToSite(
						"https://csapat08-versenydonto.nisz.hu/course/view.php?id=6"
					)}
			>
				<div class="card-img">
					<img
						src="/content/newspaper.png"
						alt={$_("dashboard.newsTitle")}
					/>
				</div>
				<div class="card-title">
					{$_("dashboard.newsTitle")}
				</div>
				<div class="card-body">
					{$_("dashboard.newsText")}
				</div>
			</div>
			<div
				class="card"
				on:click={() =>
					redirectToSite(
						"https://csapat08-versenydonto.nisz.hu/course/index.php?categoryid=4"
					)}
			>
				<div class="card-img">
					<img
						src="/content/knowledge.png"
						alt={$_("dashboard.knowledgeBaseTitle")}
					/>
				</div>
				<div class="card-title">
					{$_("dashboard.knowledgeBaseTitle")}
				</div>
				<div class="card-body">
					{$_("dashboard.knowledgeBaseText")}
				</div>
			</div>
		</div>
		<div class="flex flex-row justify-evenly">
			{#if !isGuest}
				<div
					class="card"
					on:click={() =>
						redirectToSite(
							`https://csapat08-versenydonto.nisz.hu/blog/index.php?userid=${userId}`
						)}
				>
					<div class="card-img">
						<Lock {size} />
						<img
							src="/content/blog.png"
							alt={$_("dashboard.blogTitle")}
						/>
					</div>
					<div class="card-title">
						{$_("dashboard.blogTitle")}
					</div>
					<div class="card-body">
						{$_("dashboard.blogText")}
					</div>
				</div>
				<div
					class="card"
					on:click={() =>
						redirectToSite(
							`https://csapat08-versenydonto.nisz.hu/mod/jitsi/viewpriv.php?user=${userId}`
						)}
				>
					<div class="card-img">
						<Lock {size} />
						<img
							src="/content/jitsi_meet.png"
							alt={$_("dashboard.jitsiTitle")}
						/>
					</div>
					<div class="card-title">
						{$_("dashboard.jitsiTitle")}
					</div>
					<div class="card-body">
						{$_("dashboard.jitsiText")}
					</div>
				</div>
			{/if}
			{#if isWorker}
				<div
					class="card"
					on:click={() =>
						redirectToSite(
							"https://csapat08-versenydonto.nisz.hu/course/index.php?categoryid=3"
						)}
				>
					<div class="card-img">
						<Lock {size} {color} />
						<img
							src="/content/worker.jpg"
							alt={$_("dashboard.workerTitle")}
						/>
					</div>
					<div class="card-title">
						{$_("dashboard.workerTitle")}
					</div>
					<div class="card-body">
						{$_("dashboard.workerText")}
					</div>
				</div>
			{/if}
		</div>
	</div>
</div>

<style>
	h1 {
		border-bottom: whitesmoke 3px dotted;
		width: 30%;
		padding-bottom: 15px;
	}

	.card {
		display: flex;
		flex-direction: column;
		padding: 10px;
		background-color: whitesmoke;
		margin: 15px;
		width: 33%;
		@apply shadow-lg;
		@apply rounded-md;
		transition: 0.5s background-color;
		cursor: pointer;
	}

	.card:hover {
		background-color: #7ac7fb;
	}

	.card-img {
		@apply h-36;
		@apply pb-2;
	}

	.card-img :global(svg) {
		position: absolute;
	}

	img {
		@apply max-h-full;
		@apply block;
		@apply m-auto;
	}

	.card-title {
		@apply border-darkblue;
		border-top: 3px dotted;
		font-size: 1.3rem;
	}
</style>

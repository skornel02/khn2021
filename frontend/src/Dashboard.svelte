<script lang="ts">
	import { _ } from "svelte-i18n";
	import Lock from "svelte-material-icons/Lock.svelte";
	export let isWorker: boolean = false;

	console.log(isWorker);
	
	const size = "2rem";
	const color = "gold";
</script>

<div class="flex justify-items-center items-center pt-24 md:pt-16 flex-col w-full min-h-screen bg-splash bg-cover bg-no-repeat bg-right bg-fixed">
	<h1 class="text-3xl text-center text-white">
		{$_("dashboard.choose")}
	</h1>

	<div class="container max-w-5xl pt-7">
		<div class="flex flex-row">
			<div class="card">
				<div class="card-img">
					<img src="/content/forum.png" alt={$_("dashboard.forumTitle")}>	
				</div>
				<div class="card-title">
					{$_("dashboard.forumTitle")}
				</div>
				<div class="card-body">
					{$_("dashboard.forumText")}
				</div>
			</div>
			<div class="card">
				<div class="card-img">
					<img src="/content/newspaper.png" alt={$_("dashboard.newsTitle")}>	
				</div>
				<div class="card-title">
					{$_("dashboard.newsTitle")}
				</div>
				<div class="card-body">
					{$_("dashboard.newsText")}
				</div>
			</div>
			<div class="card">
				<div class="card-img">
					<img src="/content/knowledge.png" alt={$_("dashboard.knowledgeBaseTitle")}>	
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
			<div class="card">
				<div class="card-img">
					<Lock {size} />
					<img src="/content/blog.png" alt={$_("dashboard.blogTitle")}>	
				</div>
				<div class="card-title">
					{$_("dashboard.blogTitle")}
				</div>
				<div class="card-body">
					{$_("dashboard.blogText")}
				</div>
			</div>
			<div class="card">
				<div class="card-img">
					<Lock {size} />
					<img src="/content/jitsi_meet.png" alt={$_("dashboard.jitsiTitle")}>	
				</div>
				<div class="card-title">
					{$_("dashboard.jitsiTitle")}
				</div>
				<div class="card-body">
					{$_("dashboard.jitsiText")}
				</div>
			</div>
			{#if isWorker}
			<div class="card">
				<div class="card-img">
					<Lock {size} {color} />
					<img src="/content/worker.jpg" alt={$_("dashboard.workerTitle")}>	
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
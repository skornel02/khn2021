<script lang="ts">
	import NavBar from "./NavBar.svelte";
	import Dashboard from "./Dashboard.svelte";

	export let isWorker: boolean = false;
</script>

<div class="w-full">
	<NavBar forceShow={true} logout={true} />
	<div class="w-full">
		<Dashboard {isWorker} />
	</div>
</div>

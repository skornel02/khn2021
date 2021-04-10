<script>
	import Dashboard from "./Dashboard.svelte";
import Discover from "./Discover.svelte";
	import NavBar from "./NavBar.svelte";
	import Title from "./Title.svelte";
</script>

<div class="w-full">
	<NavBar />
	<div class="w-full">
		<Title />
		<Discover />
		<Dashboard isWorker={false} isGuest={true}/>
	</div>
</div>

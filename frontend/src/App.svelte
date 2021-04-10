<script lang="ts">
	import { start } from "./i18n";
	import GlobalStyle from "./GlobalStyle.svelte";
	import Home from "./Home.svelte";
	import LoggedIn from "./LoggedIn.svelte";

	export let isLoggedIn: boolean = false;
	export let isWorker: boolean = false;

	start();
</script>

<GlobalStyle />
{#if isLoggedIn}
	<LoggedIn {isWorker} />
{:else}
	<Home />
{/if}

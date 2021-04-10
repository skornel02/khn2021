<script lang="ts">
	import { _ } from "svelte-i18n";
	import InformationOutline from "svelte-material-icons/InformationOutline.svelte"
	export let forceShow: boolean = false;
	export let logout: boolean = false;

	let currentHeight = 0;
	let show = false;
	let size = "2.3rem"
	
	$: show = (currentHeight < 350) || forceShow;
</script>

<svelte:window bind:scrollY={currentHeight} />
<header
	class:bg-darkerblue={(!show || forceShow)}
	class="fixed flex left-0 top-0 w-full p-0 z-50 transition-all md:h-14"
>
	<div class:opacity-0={show && !forceShow} class="flex text-2xl w-full h-full py-2 px-8 text-white">
		{$_("header.shortname")}
	</div>
	<div
		class:opacity-0={show && !forceShow}
		class:pointer-events-none={show && !forceShow}
		class="h-14 transition-opacity items-center flex px-8"
	>
		<div class="text-white">
			<a href="https://youtu.be/IPGLbv4qgkg?t=38" target="_blank">
				<InformationOutline {size} />
			</a>
		</div>
		<a
			class="bg-blue rounded-xl px-5 py-1 no-underline hover:bg-darkblue"
			href={logout ? "/login/logout.php" : "/login"}>{logout ? $_("header.logout") : $_("header.login")}</a
		>
	</div>
</header>
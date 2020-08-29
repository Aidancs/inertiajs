<template>
	<div>
		<p>This is Dashboard, {{fname}} {{lname}}</p>
	</div>
</template>

<script>
	export default {
		props: [ 'fname', 'lname']
	}
</script>

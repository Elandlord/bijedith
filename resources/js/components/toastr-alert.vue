<template></template>
<script>
    export default {
        props: [
            'title',
            'message',
            'type'
        ],

        mounted() {
            if(this.type === 'success') {
                window.toastr.success(this.message, this.title);
            }

            if(this.type === 'error') {
                window.toastr.error(this.message, this.title);
            }
        }
    }
</script>
